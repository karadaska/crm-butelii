<?php
$menu_curent = 6;

require_once 'etc/config.php';

$smarty->assign('name', 'Asigneaza produse la client');
$template_page = "asigneaza_produse_client.tpl";

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$adauga = getRequestParameter('adauga', '');
$update = getRequestParameter('update', '');
$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$target_produs = getRequestParameter('target_produs', 0);
$pret_produs = getRequestParameter('pret_produs', 0);
$comision_produs = getRequestParameter('comision_produs', 0);

$nume_client = Clienti::getInfoClientByClientId($id);
$smarty->assign('nume_client', $nume_client);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$target_by_client_id = Target::getTargetClient($id);
$smarty->assign('target_by_client_id', $target_by_client_id);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

if ($adauga) {
    if ($id > 0 and $tip_produs_id > 0 and $target_produs > 0) {
        $data_start = date('Y-m-d');

        $query = "INSERT INTO clienti_target (client_id, tip_produs_id, target, pret, comision, data_start)
        VALUES ('" . $id . "','" . $tip_produs_id . "','" . $target_produs . "','" . $pret_produs . "','" . $comision_produs . "','" . $data_start . "')";
        myExec($query);

        $query = "INSERT INTO istoric_preturi_clienti (client_id, tip_produs_id, pret, comision, data_start)
        VALUES ('" . $id . "','" . $tip_produs_id . "','" . $pret_produs . "','" . $comision_produs . "','" . $data_start . "')";
        myExec($query);

        header('Location: /asigneaza_produse_client.php?id=' . $id);

    }
}

$to_add = array();
if (isset($_POST['update'])) {
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            if (preg_match('/^target/', $key) || preg_match('/^pret/', $key) || preg_match('/^comision/', $key)) {
                $splits = explode("_", $key);
                $produs_id = $splits[1];

                if (!isset($to_add[$produs_id])) {
                    $to_add[$produs_id] = array(
                        'target' => 0,
                        'pret' => 0,
                        'comision' => 0
                    );
                }

                $to_add[$produs_id][$splits[0]] = $value;
            }
        }
    }

    foreach ($to_add as $produs_id => $item_produs) {
        $data_start = date('Y-m-d');
        $query = "UPDATE clienti_target SET
                                          target = '" . $item_produs['target'] . "',
                                          pret = '" . $item_produs['pret'] . "',
                                          comision = '" . $item_produs['comision'] . "'
                                          where client_id = '" . $id . "'
                                          and tip_produs_id = '" . $produs_id . "'
                                          ";
        myExec($query);

        $query = "SELECT id FROM istoric_preturi_clienti
                  WHERE client_id = '" . $item_produs['client'] . "' 
                  AND tip_produs_id = '" . $produs_id . "' 
                  AND pret = '" . $item_produs['pret'] . "' 
                  AND comision = '" . $item_produs['comision'] . "' 
                  AND sters = 0
                  AND data_stop = '0000-00-00'
                  LIMIT 1 ";

        $id_istoric = myQuery($query);
        $ret_id = $id_istoric->fetch(PDO::FETCH_ASSOC);
        $id_gasit = $ret_id['id'];

        if ($id_istoric->rowCount() == 1) {

            $query = "UPDATE istoric_preturi_clienti SET
                                          pret = '" . $item_produs['pret'] . "',
                                          comision = '" . $item_produs['comision'] . "',
                                          data_stop = '" . $data_start . "'
                                          WHERE client_id = '" . $id . "'
                                          AND tip_produs_id = '" . $produs_id . "'
                                          AND data_stop = '0000-00-00'
                                          and sters = 0 
                                          ";
            myExec($query);

//            if ($id > 0 and $produs_id > 0) {
//                $query = "INSERT INTO istoric_preturi_clienti (client_id, tip_produs_id, pret, comision, data_start)
//        VALUES ('" . $id . "','" . $produs_id . "','" . $item_produs['pret'] . "','" . $item_produs['comision'] . "','" . $data_start . "')";
//                myExec($query);
//
//            }
        }

    }
    header('Location: /asigneaza_produse_client.php?id=' . $id);

}

$smarty->display($template_page);


