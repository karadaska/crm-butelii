<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Actualizeaza tip afis clienti');
$template_page = "actualizeaza_tip_afis.tpl";

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$lista_tip_afis = Produse::getTipAfis();
$smarty->assign('lista_tip_afis', $lista_tip_afis);

$to_add = array();
if (isset($_POST['update'])) {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^afis/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];
            $traseu = $splits[2];

            if (!isset($to_add[$client_id])) {
                $to_add[$client_id] = array();
            }

            if (!isset($to_add[$client_id][$traseu])) {
                $to_add[$client_id][$traseu] = array(
                    'afis' => 0
                );
            }
            $to_add[$client_id][$traseu][$splits[0]] = $value;
        }
    }
    $id_traseu = getRequestParameter('id_traseu', '');

    foreach ($lista_clienti as $client) {
        if (isset($to_add[$client['client_id']][$client['traseu_id']])) {
            $a = $to_add[$client['client_id']][$client['traseu_id']];
            $query = "UPDATE clienti set
                            tip_afis  = '" . $a['afis'] . "'
                            where id = '" . $client['client_id'] . "'                            
                            and sters = 0
                            ";
            myExec($query);
            $data_start = date('Y-m-d');

            $select_afis_clienti = "SELECT tip_afis_id from tip_afis_clienti
                                    WHERE client_id = '" . $client['client_id'] . "'
                                    AND data_stop = '0000-00-00' 
                                    AND sters = 0 LIMIT 1 ";

            $select_id_afis_clienti = myQuery($select_afis_clienti);
            $ret = $select_id_afis_clienti->fetch(PDO::FETCH_ASSOC);
            $id_afis= $ret['id'];

            if ($select_id_afis_clienti->rowCount() == 1) {
                $update = "UPDATE tip_afis_clienti set sters = 1,
                           data_stop = '".$data_start."' 
                           WHERE client_id = '" . $client['client_id'] . "'                          
                           ";

                myExec($update);

                $insert = "INSERT INTO tip_afis_clienti (client_id, tip_afis_id, data_start) 
                          VALUES ('" . $client['client_id'] . "', '" . $a['afis'] . "', '" . $data_start . "')";
                myExec($insert);
//                $update = "UPDATE tip_afis_clienti set
//                            tip_afis_id  = '" . $a['afis'] . "',
//                            data_start = $data_start
//                            WHERE client_id = '" . $client['client_id'] . "'
//                            AND sters = 0
//                            ";
//                myExec($update);
            } else {
                if($a['afis'] > 0){
                    $insert = "INSERT INTO tip_afis_clienti (client_id, tip_afis_id, data_start) 
                          VALUES ('" . $client['client_id'] . "', '" . $a['afis'] . "', '" . $data_start . "')";
                    myExec($insert);
                }
            }

            header('Location: /actualizeaza_tip_afis.php?traseu_id=' . $traseu_id);
        }
    }
}

$smarty->display($template_page);

