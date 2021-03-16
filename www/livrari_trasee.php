<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport lunar trasee');
$template_page = "livrari_trasee.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$traseu_id = getRequestParameter('traseu_id', 0);
$smarty->assign('traseu_id', $traseu_id);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$livrari_trasee = ParcAuto::getRaportLivrariTrasee($traseu_id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_trasee', $livrari_trasee);

$smarty->display($template_page);

