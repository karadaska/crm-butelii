<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);


$smarty->assign('name', 'Print raport livrari clienti');
$template_page = "print_raport_livrari_clienti.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id',$id);

$nume_traseu = Trasee::getTraseuById($id);
$smarty->assign('nume_traseu',$nume_traseu);

$depozit_by_traseu = Depozite::getDepozitByTraseuId($id);
$smarty->assign('depozit_by_traseu',$depozit_by_traseu);

$data_start = getRequestParameter('data_start',date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_clienti = Clienti::getRaportLivrariClienti($id,
    $opts = array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('lista_clienti', $lista_clienti);

$preturi_by_bg_11 = Clienti::getPreturiByProdusId(1, $id,
    $opts = array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('preturi_by_bg_11', $preturi_by_bg_11);

$preturi_by_ar_8 = Clienti::getPreturiByProdusId(3, $id, $opts = array(
    'data_start' => $data_start,
    'data_stop' => $data_stop
)
);
$smarty->assign('preturi_by_ar_8', $preturi_by_ar_8);

$preturi_by_ar_9 = Clienti::getPreturiByProdusId(4, $id, $opts = array(
    'data_start' => $data_start,
    'data_stop' => $data_stop
));
$smarty->assign('preturi_by_ar_9', $preturi_by_ar_9);

$smarty->display($template_page);
?>



