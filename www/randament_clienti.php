<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Randament clienti');
$template_page = "randament_clienti.tpl";

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$id_traseu = getRequestParameter('id_traseu', '');

//debug($id_traseu);
$perioada_id = getRequestParameter('perioada_id', date('n'));
$smarty->assign('perioada_id', $perioada_id);

$an = getRequestParameter('an', 2);
$smarty->assign('an', $an);

$lista_trasee = Trasee::getTraseeNew(array(
    'cu_asignari' => false
));
$smarty->assign('lista_trasee', $lista_trasee);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$lista_perioade = Calendar::getPerioada();
$smarty->assign('lista_perioade', $lista_perioade);

$lista_ani = Calendar::getAni();
$smarty->assign('lista_ani', $lista_ani);

if (isset($_POST['update'])) {
    Clienti::seteazaRandamentClienti($id_traseu);
}



//$to_add = array();
//if (isset($_POST['update'])) {
//    foreach ($_POST as $key => $value) {
//        if (preg_match('/^randament/', $key)) {
//            $splits = explode("_", $key);
//            $client_id = $splits[1];
//            $traseu = $splits[2];
//
//            if (!isset($to_add[$client_id])) {
//                $to_add[$client_id] = array();
//            }
//
//            if (!isset($to_add[$client_id][$traseu])) {
//                $to_add[$client_id][$traseu] = array(
//                    'randament' => 0
//                );
//            }
//            $to_add[$client_id][$traseu][$splits[0]] = $value;
//        }
//    }
//
//    $id_traseu = getRequestParameter('id_traseu', '');
//    $id_perioada = getRequestParameter('id_perioada', '');
//    $id_an = getRequestParameter('id_an', '');
//
//    foreach ($lista_clienti as $client) {
//        if (isset($to_add[$client['client_id']][$client['traseu_id']])) {
//            $a = $to_add[$client['client_id']][$client['traseu_id']];
//            $select_randament_clienti = "SELECT id from randament_clienti
//                                          WHERE client_id = '" . $client['client_id'] . "'
//                                          AND traseu_id = '" . $client['traseu_id'] . "'
//                                          AND an = '" . $id_an  . "'
//                                          AND perioada_id = '" . $id_perioada . "'
//                                          LIMIT 1 ";
//
//            $select_id_randament_clienti = myQuery($select_randament_clienti);
//            $ret = $select_id_randament_clienti->fetch(PDO::FETCH_ASSOC);
//
//            if ($select_id_randament_clienti->rowCount() == 1) {
//                $query = "UPDATE randament_clienti SET
//                            randament  = '" . $a['randament'] . "'
//                            WHERE client_id = '" . $client['client_id'] . "'
//                            AND traseu_id = '" . $client['traseu_id'] . "'
//                            AND perioada_id = '" .$id_perioada . "'
//                            AND an = '" . $id_an . "'
//                            ";
//                myExec($query);
//            } else {
//
//                $insert = "INSERT INTO randament_clienti (client_id, traseu_id, an, perioada_id, randament)
//                          VALUES ('" . $client['client_id'] . "', '" . $client['traseu_id'] . "','" . $id_an . "','" . $id_perioada . "','" . $a['randament'] . "')";
//                myExec($insert);
//            }
//
//            header('Location: /randament_clienti.php?traseu_id=' . $id_traseu.'&an='.$id_an .'&perioada_id='.$id_perioada);
//        }
//    }
//}

$smarty->display($template_page);

