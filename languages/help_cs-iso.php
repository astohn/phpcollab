<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../languages/help_cs-iso.php

//translator(s):
$help["setup_mkdirMethod"] = "Pokud je safe-mode On, musíte použít Ftp účet pro možnost vytvářet adresáře při práci se soubory v PHP Collab.";
$help["setup_notifications"] = "E-mailové oznámení uživatelům (přiřazení úkolu, nový příspěvek, změny úkolu...)<br/>Je potřeba správně nastavit smtp/sendmail.";
$help["setup_forcedlogin"] = "Pokud není aktivní, nejsou povoleny externí odkazy s login/heslo v url";
$help["setup_langdefault"] = "Vyberte jazyk, který bude defaultně vybrán při přihlašování nebo nechte prázdné pro autodetekci jazyka v prohlížeči.";
$help["setup_myprefix"] = "Natavte tuto hodnotu, pokud máte v databázi tabulku se shodným názvem.<br/><br/>assignments<br/>bookmarks<br/>bookmarks_categories<br/>calendar<br/>files<br/>logs<br/>members<br/>notes<br/>notifications<br/>organizations<br/>phases<br/>posts<br/>projects<br/>reports<br/>sorting<br/>subtasks<br/>support_posts<br/>support_requests<br/>tasks<br/>teams<br/>topics<br/>updates<br/><br/>Nechte prázdné, pokud nechcete použít prefix tabulek.";
$help["setup_loginmethod"] = "Způsob uložení hesla v databázi.<br/>Set to &quot;Crypt&quot; in order CVS authentication and htaccess authentification to work (if CVS support and/or htaccess authentification are enabled).";
$help["admin_update"] = "Respect strictly the order indicated to update your version<br/>1. Upravte nastavení (doplňte nové parametry)<br/>2. Upravte databázi (aktualizace v souladu s vaší předchozí verzí)";
$help["task_scope_creep"] = "Rozdíl v dnech mezi termínem dokončení a datem dokončení (tučně jestliže je kladný)";
$help["max_file_size"] = "Maximální velikost souboru pro upload";
$help["project_disk_space"] = "Celková velikost suoborů pro projekt";
$help["project_scope_creep"] = "Rozdíl v dnech mezi termínem dokončení a datem dokončení (tučně jestliže je kladný). Celkem pro všechny úkoly.";
$help["mycompany_logo"] = "Nahrej logo vaší společnosti. Objeví se v záhlaví místo nadpisu.";
$help["calendar_shortname"] = "Popisek pro zobrazení v měsíčním kalendáři. povinné";
$help["user_autologout"] = "Čas v sekundách pro automatické odpojení při nečinnosti. 0 pro deaktivaci";
$help["user_timezone"] = "Nastavte Vaše časové pásmo (GMT)";
//2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
//2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";
