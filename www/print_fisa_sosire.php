<?php
$menu_curent = 6;
require_once('etc/config.php');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Print fisa sosire');
$template_page = "print_fisa_sosire.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id',$id);

$print_fisa = Printare::PrintFisaSosire($id);
$smarty->assign('print_fisa',$print_fisa);

$cantitati_produse_clienti_by_fisa_id = Stocuri::getCantitatiProduseClientiByFisaId($id);
$smarty->assign('cantitati_produse_clienti_by_fisa_id', $cantitati_produse_clienti_by_fisa_id);

$smarty->display($template_page);
?>



