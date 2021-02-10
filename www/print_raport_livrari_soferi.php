<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);


$smarty->assign('name', 'Print raport livrari soferi');
$template_page = "print_raport_livrari_soferi.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id',$id);

$nume_sofer = ParcAuto::getSoferById($id);
$smarty->assign('nume_sofer',$nume_sofer);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$livrari_soferi = ParcAuto::getRaportLivrariSoferi($id,
    $opts = array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_soferi', $livrari_soferi);

$smarty->display($template_page);
?>



