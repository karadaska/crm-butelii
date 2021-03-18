<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);


$smarty->assign('name', 'Print livrari trasee');
$template_page = "print_livrari_trasee.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$traseu_id = Trasee::getTraseuById($id);
$smarty->assign('traseu_id',$traseu_id);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$livrari_trasee = ParcAuto::getRaportLivrariTrasee($id,
    array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_trasee', $livrari_trasee);

$smarty->display($template_page);
?>



