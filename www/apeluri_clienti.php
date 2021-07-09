<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Actualizeaza produse la client');
$template_page = "apeluri_clienti.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$valoare_client_id = getRequestParameter('valoare_client_id', 0);

$data_start = getRequestParameter('data_start', date('Y-m-d'));
$smarty->assign('data_start', $data_start);

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$stare_id = getRequestParameter('stare_id', 1);
$smarty->assign('stare_id', $stare_id);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

$apel_traseu = Clienti::getApelTraseuNew(array(
    'traseu_id' => $traseu_id,
    'stare_id' => $stare_id
));

$lista_clienti = $apel_traseu['list'];
$smarty->assign('lista_clienti', $lista_clienti);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$total_obs = Trasee::getNumarObservatiiApelClientiByTraseuId(array(
    'traseu_id' => $traseu_id,
    'data_start' => $data_start
));
$smarty->assign('total_obs', $total_obs);

$total_urgente = Trasee::getNumarUrgenteApelClientiByTraseuId(array(
    'traseu_id' => $traseu_id,
    'data_start' => $data_start
));
$smarty->assign('total_urgente', $total_urgente);

$total_obs_pe_categorii = Clienti::getTipObservatiiDinApeluri($traseu_id, array(
    'data_start' => $data_start
));
$smarty->assign('total_obs_pe_categorii', $total_obs_pe_categorii);

$clienti_cu_observatii = Clienti::getClientiCuNumarGresitSauNumarLipsaApelClientiByTraseuId($traseu_id, array(
    'data_start' => $data_start
));
$smarty->assign('clienti_cu_observatii', $clienti_cu_observatii);

$clienti_cu_urgente = Clienti::getClientiCuUrgenteApelClientiByTraseuId($traseu_id, array(
    'data_start' => $data_start
));
$smarty->assign('clienti_cu_urgente', $clienti_cu_urgente);

$culori_traseu = Produse::getCuloriApeluriClientiByTraseuId($traseu_id, array(
    'data_start' => $data_start
));
$smarty->assign('culori_traseu', $culori_traseu);

debug($data_start);
$to_add = array();
if (isset($_POST['update'])) {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^goale/', $key) || preg_match('/^obs/', $key) || preg_match('/^urgent/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];
            $tip_produs_id = $splits[2];

            if (!isset($to_add[$client_id])) {
                $to_add[$client_id] = array();
            }

            if (!isset($to_add[$client_id][$tip_produs_id])) {
                $to_add[$client_id][$tip_produs_id] = array(
                    'goale' => 0,
                    'obs' => 0,
                    'urgent' => 0
                );
            }
            $to_add[$client_id][$tip_produs_id][$splits[0]] = $value;
        }
    }

    $data_intrare = date('Y-m-d');



    foreach ($lista_clienti as $client) {
        foreach ($client['target'] as $item_target) {
            if (isset($to_add[$client['id']][$item_target['tip_produs_id']])) {
                $a = $to_add[$client['id']][$item_target['tip_produs_id']];

                $t_start_update_clienti_target = microtime(true);

                $update_target_clienti = "UPDATE clienti_target set
                            goale_la_client  = '" . $a['goale'] . "'
                            where client_id = '" . $client['id'] . "'
                            and tip_produs_id = '" . $item_target['tip_produs_id'] . "'
                            ";

                myExec($update_target_clienti);

//                debug('1.update clienti target: ' . (microtime(true)- $t_start_update_clienti_target));

//                Select id din apeluri_clienti
                $t_start_select_id_apeluri = microtime(true);

                $select_id_apeluri_clienti = "SELECT id from apeluri_clienti
                                                      where traseu_id = '" . $client['traseu_id'] . "'
                                                      and client_id = '" . $client['id'] . "'
                                                      and data_start = '" . $data_intrare . "' LIMIT 1";

                $select_id_apeluri_clienti = myQuery($select_id_apeluri_clienti);
                $ret = $select_id_apeluri_clienti->fetch(PDO::FETCH_ASSOC);
                $id_apeluri_clienti = $ret['id'];

//                debug('2.verific daca am date in apeluri: ' . (microtime(true)- $t_start_select_id_apeluri));

                $t_start_insert = microtime(true);

                if ($select_id_apeluri_clienti->rowCount() == 0) {

                    $t_start_insert_cantitati_apeluri = microtime(true);

                    $insert_apeluri_clienti = "INSERT INTO apeluri_clienti
                (traseu_id, client_id, observatie_id, urgent, data_start)
               values ('" . $traseu_id . "','" . $client['id'] . "','" . $a['obs'] . "','" . $a['urgent'] . "','" . $data_intrare . "')";
                    myExec($insert_apeluri_clienti);

//                    debug('3. daca nu am date fac insert: ' . (microtime(true)- $t_start_insert_cantitati_apeluri));

//                    $select_id_apeluri_clienti = "SELECT id from apeluri_clienti
//                                                      where traseu_id = '" . $client['traseu']['id'] . "'
//                                                      and client_id = '" . $client['id'] . "'
//                                                      and data_start = '" . $data_intrare . "' LIMIT 1";
//
//                    $select_id_apeluri_clienti = myQuery($select_id_apeluri_clienti);
//                    $ret = $select_id_apeluri_clienti->fetch(PDO::FETCH_ASSOC);
//                    $id_apeluri_clienti = $ret['id'];


                } else {
                    $t_start_update_obs_apeluri = microtime(true);

                    $update_apeluri_clienti = "UPDATE apeluri_clienti set
                            observatie_id = '" . $a['obs'] . "',
                            urgent = '" . $a['urgent'] . "'                           
                            where client_id = '" . $client['id'] . "'
                            and data_start = '" . $data_intrare . "'
                            and traseu_id = '" . $traseu_id . "'
                           ";
                    myExec($update_apeluri_clienti);
//                    debug('4. daca am date fac update: ' . (microtime(true)- $t_start_update_obs_apeluri));

                }

//Daca am id bagat in apel_clienti

                $t_start_verific_id_apel = microtime(true);

                $select_apel_id_clienti_produse = "SELECT a.apel_id
                                      FROM apeluri_clienti_produse AS a
                                       LEFT JOIN apeluri_clienti AS b ON a.apel_id = b.id
                                        WHERE b.client_id = '" . $client['id'] . "'
                                        AND a.tip_produs_id = '" . $item_target['tip_produs_id'] . "'
                                        AND b.traseu_id = '" . $traseu_id . "'
                                        AND b.data_start ='" . $data_start . "' ";

                $apel_id = myQuery($select_apel_id_clienti_produse);

                $ret = $apel_id->fetch(PDO::FETCH_ASSOC);
                $gasit_apel_id = $ret['apel_id'];

//                debug('5. verific apel id: ' . (microtime(true)- $t_start_verific_id_apel));


                if ($apel_id->rowCount() == 0) {
                    $t_start_id_apeluri_pentru_produse = microtime(true);

                    $select_id_apeluri_clienti = "SELECT id from apeluri_clienti
                                                      where traseu_id = '" . $client['traseu_id'] . "'
                                                      and client_id = '" . $client['id'] . "'
                                                      and data_start = '" . $data_intrare . "' LIMIT 1";

                    $select_id_apeluri_clienti = myQuery($select_id_apeluri_clienti);
                    $ret = $select_id_apeluri_clienti->fetch(PDO::FETCH_ASSOC);
                    $id_apeluri_clienti = $ret['id'];

//                    debug('6. verific id in apeluri pentru produse: ' . (microtime(true)- $t_start_id_apeluri_pentru_produse));

                    $t_start_id_insert_produse = microtime(true);

                    if ($a['goale'] > 0) {
                        $insert_apeluri_clienti_produse = "INSERT INTO apeluri_clienti_produse
                       (apel_id, tip_produs_id, goale)
                       values ('" . $id_apeluri_clienti . "', '" . $item_target['tip_produs_id'] . "','" . $a['goale'] . "')";
                        myExec($insert_apeluri_clienti_produse);
//                        debug('6. insert in produse: ' . (microtime(true)- $t_start_id_insert_produse) .'_________________________________');

                    }
                } else {
                    $t_start_id_update_produse = microtime(true);

                    $update_goale_apeluri_clienti_produse = "UPDATE apeluri_clienti_produse set
                               goale = '" . $a['goale'] . "'
                              where apel_id = '" . $gasit_apel_id . "'
                              and tip_produs_id = '" . $item_target['tip_produs_id'] . "'
                         ";
                    myExec($update_goale_apeluri_clienti_produse);
//                    debug('7. update in produse: ' . (microtime(true)- $t_start_id_update_produse) .'_________________________________');

                }


                header('Location: /apeluri_clienti.php?traseu_id=' . $traseu_id . '&stare_id=' . $stare_id);
            }
        }
    }
}

$totaltime = (microtime(true) - $tstart);

$smarty->assign('totaltime', $totaltime);

$smarty->display($template_page);



