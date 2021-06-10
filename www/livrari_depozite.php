<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport lunar depozite');
$template_page = "livrari_depozite.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$depozit_id = getRequestParameter('depozit_id', 0);
$smarty->assign('depozit_id', $depozit_id);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$livrari_depozite = ParcAuto::getRaportLivrariDepozite($depozit_id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_depozite', $livrari_depozite);

$smarty->display($template_page);

