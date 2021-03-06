<?php
#Application name: PhpCollab
#Status page: 0
#Path by root: ../topics/viewtopic.php

$checkSession = "true";
include_once '../includes/library.php';

$topics = new \phpCollab\Topics\Topics();
$projects = new \phpCollab\Projects\Projects();
$teams = new \phpCollab\Teams\Teams();

$id = $_GET["id"];

if ($_GET['action'] == "closeTopic") {
    $num = "1";
    phpCollab\Util::newConnectSql("UPDATE {$tableCollab["topics"]} SET status='0' WHERE id = :topic_id", ["topic_id" => $_GET['id']]);
    $msg = "closeTopic";
}

if ($_GET['action'] == "addToSite") {
    phpCollab\Util::newConnectSql("UPDATE {$tableCollab["topics"]} SET published='0' WHERE id = :topic_id", ["topic_id" => $_GET['id']]);
    $msg = "addToSite";
}

if ($_GET['action'] == "removeToSite") {
    phpCollab\Util::newConnectSql("UPDATE {$tableCollab["topics"]} SET published='1' WHERE id = :topic_id", ["topic_id" => $_GET['id']]);
    $msg = "removeToSite";
}

$detailTopic = $topics->getTopicByTopicId($id);

$listPosts = $topics->getPostsByTopicId($detailTopic["top_id"]);

$detailProject = $projects->getProjectById($detailTopic["top_project"]);

$teamMember = "false";

$teamMember = $teams->isTeamMember($detailTopic["top_project"], $idSession);

if ($teamMember == "false" && $projectsFilter == "true") {
    header("Location:../general/permissiondenied.php");
}

if ($detailProject["pro_org_id"] == "1") {
    $detailProject["pro_org_name"] = $strings["none"];
}

$idStatus = $detailTopic["top_status"];
$idPublish = $detailTopic["top_published"];

include APP_ROOT . '/themes/' . THEME . '/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $detailProject["pro_id"], $detailProject["pro_name"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../topics/listtopics.php?project=" . $detailProject["pro_id"], $strings["discussions"], "in"));
$blockPage->itemBreadcrumbs($detailTopic["top_subject"]);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();

$block1->form = "tdP";
$block1->openForm("");

if ($error != "") {
    $block1->headingError($strings["errors"]);
    $block1->contentError($error);
}

$block1->heading($strings["discussion"] . " : " . $detailTopic["top_subject"]);

if ($idSession == $detailTopic["top_owner"]) {
    $block1->openPaletteIcon();
    $block1->paletteIcon(0, "remove", $strings["remove"]);
    $block1->paletteIcon(1, "lock", $strings["close"]);
    $block1->paletteIcon(2, "add_projectsite", $strings["add_project_site"]);
    $block1->paletteIcon(3, "remove_projectsite", $strings["remove_project_site"]);
    $block1->closePaletteIcon();
}

$block1->openContent();
$block1->contentTitle($strings["info"]);

$block1->contentRow($strings["project"], $blockPage->buildLink("../projects/viewproject.php?id=" . $detailProject["pro_id"], $detailProject["pro_name"] . " (#" . $detailProject["pro_id"] . ")", "in"));
$block1->contentRow($strings["organization"], $detailProject["pro_org_name"]);
$block1->contentRow($strings["owner"], $blockPage->buildLink("../users/viewuser.php?id=" . $detailProject["pro_mem_id"], $detailProject["pro_mem_name"], "in") . " (" . $blockPage->buildLink($detailProject["pro_mem_email_work"], $detailProject["pro_mem_login"], "mail") . ")");

if ($sitePublish == "true") {
    $block1->contentRow($strings["published"], $statusPublish[$idPublish]);
}

$block1->contentRow($strings["retired"], $statusTopicBis[$idStatus]);
$block1->contentRow($strings["posts"], $detailTopic["top_posts"]);
$block1->contentRow($strings["last_post"], phpCollab\Util::createDate($detailTopic["top_last_post"], $timezoneSession));

$block1->contentTitle($strings["posts"]);

if ($detailTopic["top_status"] == "1" && $teamMember == "true") {
    $block1->contentRow("", $blockPage->buildLink("../topics/addpost.php?id=" . $detailTopic["top_id"], $strings["post_reply"], "in"));
}

foreach ($listPosts as $post) {
    $block1->contentRow($strings["posted_by"], $blockPage->buildLink($post["pos_mem_email_work"], $post["pos_mem_name"], "mail"));

    if ($post["pos_created"] > $lastvisiteSession) {
        $block1->contentRow($strings["when"], "<b>" . phpCollab\Util::createDate($post["pos_created"], $timezoneSession) . "</b>");
    } else {
        $block1->contentRow($strings["when"], phpCollab\Util::createDate($post["pos_created"], $timezoneSession));
    }
    $post_message = (strlen($post["pos_message"]) > 0) ? nl2br($post["pos_message"]) : "<em>no message</em>";
    if ($detailProject["pro_owner"] == $idSession || $profilSession == "0" || $post["pos_member"] == $idSession) {
        $block1->contentRow($blockPage->buildLink("../topics/deletepost.php?topic=" . $detailTopic["top_id"] . "&id=" . $post["pos_id"], $strings["delete_message"], "in"), $post_message);
    } else {
        $block1->contentRow("", $post_message);
    }
    $block1->contentRow("", "", "true");
}

$block1->closeContent();
$block1->closeForm();

if ($idSession == $detailTopic["top_owner"]) {
    $block1->openPaletteScript();
    $block1->paletteScript(0, "remove", "../topics/deletetopics.php?project=" . $detailTopic["top_project"] . "&id=" . $detailTopic["top_id"] . "", "true,true,false", $strings["remove"]);
    $block1->paletteScript(1, "lock", "../topics/viewtopic.php?id=" . $detailTopic["top_id"] . "&action=closeTopic", "true,true,false", $strings["close"]);
    $block1->paletteScript(2, "add_projectsite", "../topics/viewtopic.php?id=" . $detailTopic["top_id"] . "&action=addToSite", "true,true,false", $strings["add_project_site"]);
    $block1->paletteScript(3, "remove_projectsite", "../topics/viewtopic.php?id=" . $detailTopic["top_id"] . "&action=removeToSite", "true,true,false", $strings["remove_project_site"]);
    $block1->closePaletteScript("", "");
}

include APP_ROOT . '/themes/' . THEME . '/footer.php';
