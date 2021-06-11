<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);


$smarty->assign('name', 'Print livrari depozite');
$template_page = "print_livrari_depozite.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$depozit_id = Depozite::getDepozitById($id);
$smarty->assign('depozit_id',$depozit_id);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$livrari_depozite = ParcAuto::getRaportLivrariDepozite($id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_depozite', $livrari_depozite);

$smarty->display($template_page);
?>



