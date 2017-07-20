<?php
include '../includes/library.php';
include '../includes/phplib/template.php';

$invoices = new \phpCollab\Invoices\Invoices();
$projects = new \phpCollab\Projects\Projects();
$organizations = new \phpCollab\Organizations\Organizations();

$id = $_GET["id"];
$strings = $GLOBALS["strings"];

$detailInvoice = $invoices->getInvoiceById($id);
$projectDetail = $projects->getProjectById($detailInvoice["inv_project"]);
$clientDetail = $organizations->getOrganizationById($projectDetail["pro_organization"]);
$myCompanyDetail = $organizations->getOrganizationById(1);
$listInvoicesItems = $invoices->getActiveInvoiceItemsByInvoiceId($id);

$template = new Template();

$template->set_file('invoice', 'tpl_invoice.html');

$template->set_var(array(
    'val_CLIENTNAME' => $clientDetail["org_name"],
    'val_CLIENTADDRESS' => nl2br($clientDetail["org_address1"]),

    'val_COMPANYNAME' => $myCompanyDetail["org_name"],
    'val_COMPANYADDRESS' => nl2br($myCompanyDetail["org_address1"]),

    'str_INVOICE' => $strings["invoice"],
    'val_HEADER' => $detailInvoice["inv_header_note"],
    'val_FOOTER' => $detailInvoice["inv_footer_note"],

    'val_TOTALINCTAX' => $detailInvoice["inv_total_inc_tax"],
    'val_TOTALEXTAX' => $detailInvoice["inv_total_ex_tax"],
    'val_TAXRATE' => $detailInvoice["inv_tax_rate"],
    'val_TAXAMOUNT' => $detailInvoice["inv_tax_amount"],

    'str_TOTALINCTAX' => $strings["total_inc_tax"],
    'str_TOTALEXTAX' => $strings["total_ex_tax"],
    'str_TAXRATE' => $strings["tax_rate"],
    'str_TAXAMOUNT' => $strings["tax_amount"],

    'str_TITLE' => $strings["title"],
    'str_AMOUNTEXTAX' => $strings["amount_ex_tax"],

));

$template->set_block('invoice', 'items', 'block');

foreach ($listInvoicesItems as $invoiceItem) {
    $template->set_var(array(
        'val_TITLE' => $invoiceItem["invitem_title"],
        'val_AMOUNTEXTAX' => $invoiceItem["invitem_amount_ex_tax"],
    ));
    $template->Parse('block', 'items', true);

}

$dump_buffer = $template->finish($template->parse('invoice', 'invoice'));

$filename = $strings["invoice"] . $detailInvoice["inv_id"];

$ext = 'html';
$mime_type = 'text/html';

// Send headers
header('Content-Type: ' . $mime_type);
// lem9: we need "inline" instead of "attachment" for IE 5.5
$content_disp = (USR_BROWSER_AGENT == 'IE') ? 'inline' : 'attachment';
header('Content-Disposition:  ' . $content_disp . '; filename="' . $filename . '.' . $ext . '"');
header('Pragma: no-cache');
header('Expires: 0');


echo $dump_buffer;
