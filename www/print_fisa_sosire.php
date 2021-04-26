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

$produs_extra_bg = Fise::GetProdusExtraByProdusIdAndFisa(1,$id);
$smarty->assign('produs_extra_bg', $produs_extra_bg);

$produs_extra_ar_9 = Fise::GetProdusExtraByProdusIdAndFisa(4,$id);
$smarty->assign('produs_extra_ar_9', $produs_extra_ar_9);

$produs_extra_ar_8 = Fise::GetProdusExtraByProdusIdAndFisa(3,$id);
$smarty->assign('produs_extra_ar_8', $produs_extra_ar_8);

$print_fisa = Stocuri::getFisaGenerataById($id);
$smarty->assign('print_fisa',$print_fisa);

$cantitati_produse_clienti_by_fisa_id = Stocuri::getCantitatiProduseClientiByFisaId($id);
$smarty->assign('cantitati_produse_clienti_by_fisa_id', $cantitati_produse_clienti_by_fisa_id);

$smarty->display($template_page);
?>



