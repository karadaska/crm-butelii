<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Numar Clienti By Pret');
$template_page = "numar_clienti.tpl";

$depozit_id= getRequestParameter('depozit_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$to_add = array();
if (isset($_POST['update'])) {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^ordine/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];
            $traseu = $splits[2];

            if (!isset($to_add[$client_id])) {
                $to_add[$client_id] = array();
            }

            if (!isset($to_add[$client_id][$traseu])) {
                $to_add[$client_id][$traseu] = array(
                    'ordine' => 0
                );
            }
            $to_add[$client_id][$traseu][$splits[0]] = $value;
        }
    }
    $id_traseu = getRequestParameter('id_traseu', '');

    foreach ($lista_clienti as $client) {
        if (isset($to_add[$client['client_id']][$client['traseu_id']])) {
            $a = $to_add[$client['client_id']][$client['traseu_id']];
            $query = "UPDATE asignari_clienti_trasee set
                            ordine  = '" . $a['ordine'] . "'
                            where client_id = '" . $client['client_id'] . "'
                            and traseu_id = '" . $client['traseu_id'] . "'
                            and sters = 0
                            ";
            myExec($query);

            $select_ordine_clienti = "SELECT ordine from ordine_clienti
                                      where client_id = '" . $client['client_id'] . "' 
                                      and traseu_id = '" . $client['traseu_id'] . "'
                                      and sters = 0 LIMIT 1 ";

            $select_id_ordine_clienti = myQuery($select_ordine_clienti);
            $ret = $select_id_ordine_clienti->fetch(PDO::FETCH_ASSOC);
            $id_ordine = $ret['id'];

            if ($select_id_ordine_clienti->rowCount() == 1) {
                $update = "UPDATE ordine_clienti set
                            ordine  = '" . $a['ordine'] . "'
                            where client_id = '" . $client['client_id'] . "'
                            and traseu_id = '" . $client['traseu_id'] . "'
                            and sters = 0
                            ";
                myExec($update);
            } else {

                $insert = "INSERT INTO ordine_clienti (client_id, traseu_id, ordine) 
                          VALUES ('" . $client['client_id'] . "', '" . $client['traseu_id'] . "','" . $a['ordine'] . "')";
                myExec($insert);
            }

            header('Location: /ordine_clienti.php?traseu_id=' . $traseu_id);
        }
    }
}

$smarty->display($template_page);

