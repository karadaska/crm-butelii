<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport lunar masini');
$template_page = "livrari_masini.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$masina_id = getRequestParameter('masina_id', 0);
$smarty->assign('masina_id', $masina_id);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$lista_masini = ParcAuto::getListaMasini();
$smarty->assign('lista_masini', $lista_masini);

$livrari_masini = ParcAuto::getRaportLivrariMasini($masina_id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_masini', $livrari_masini);

$smarty->display($template_page);

