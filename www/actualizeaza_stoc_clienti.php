<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Actualizeaza stoc clienti');
$template_page = "actualizeaza_stoc_clienti.tpl";
$form_submit = getRequestParameter('form_submit', 0);

$valoare_client_id = getRequestParameter('valoare_client_id', 0);

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$stare_id = getRequestParameter('stare_id', 1);
$smarty->assign('stare_id', $stare_id);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

//$lista_clienti = Clienti::getClienti(array(
//    'traseu_id' => $traseu_id,
//    'stare_id' => $stare_id
//));
//
//$smarty->assign('lista_clienti', $lista_clienti);

$lista_clienti = Clienti::actualieazaStocClientiByTraseuId($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

//pre($getclienti);

$to_add = array();

if (isset($_POST['update'])) {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^target/', $key) || preg_match('/^pret/', $key) || preg_match('/^comision/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];
            $tip_produs_id = $splits[2];

            if (!isset($to_add[$client_id])) {
                $to_add[$client_id] = array();
            }

            if (!isset($to_add[$client_id][$tip_produs_id])) {
                $to_add[$client_id][$tip_produs_id] = array(
                    'target' => 0,
                    'pret' => 0,
                    'comision' => 0
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
                $update_target_clienti = "UPDATE clienti_target set 
                            target  = '" . $a['target'] . "',
                            pret = '" . $a['pret'] . "',
                            comision = '" . $a['comision'] . "'
                            where client_id = '" . $client['id'] . "'
                            and tip_produs_id = '" . $item_target['tip_produs_id'] . "'
                                                       
                            ";
                myExec($update_target_clienti);
            }
        }
    }
    header('Location: /actualizeaza_stoc_clienti.php?traseu_id=' . $traseu_id . '&stare_id=' . $stare_id);
}
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime',$mtime);
$smarty->assign('totaltime',$totaltime);
$smarty->display($template_page);
