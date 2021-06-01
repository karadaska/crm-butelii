<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Raport complet fisa traseu');
$template_page = "livrari_clienti.tpl";

$aplica = getRequestParameter('aplica', 0);

$data_start = getRequestParameter('data_start', date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$depozit_by_traseu = Depozite::getDepozitByTraseuId($traseu_id);
$smarty->assign('depozit_by_traseu', $depozit_by_traseu);


$lista_clienti = Clienti::getRaportLivrariClienti($traseu_id, array(
    'data_start' => $data_start,
    'data_stop' => $data_stop

));
$smarty->assign('lista_clienti', $lista_clienti);


//foreach ($lista_clienti['livrare_clienti'] as $item){
//    echo $item['nume_localitate'];
//}

//pre($lista_clienti);

//
//$preturi_by_bg_11 = Clienti::getPreturiByProdusId(1, $traseu_id,
//     array(
//        'data_start' => $data_start,
//        'data_stop' => $data_stop
//    ));
//$smarty->assign('preturi_by_bg_11', $preturi_by_bg_11);
//
//$preturi_by_ar_8 = Clienti::getPreturiByProdusId(3, $traseu_id, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//)
//);
//$smarty->assign('preturi_by_ar_8', $preturi_by_ar_8);
//
//$preturi_by_ar_9 = Clienti::getPreturiByProdusId(4, $traseu_id, array(
//    'data_start' => $data_start,
//    'data_stop' => $data_stop
//));
//$smarty->assign('preturi_by_ar_9', $preturi_by_ar_9);

$smarty->display($template_page);

