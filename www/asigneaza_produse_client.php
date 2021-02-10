<?php
$menu_curent = 6;

require_once 'etc/config.php';

$smarty->assign('name', 'Asigneaza produse la client');
$template_page = "asigneaza_produse_client.tpl";

$id = getRequestParameter('id',0);
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
$smarty->assign('lista_trasee',$lista_trasee);

$target_by_client_id = Target::getTargetClient($id);
$smarty->assign('target_by_client_id', $target_by_client_id);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

if ($adauga) {
    if ($id > 0 and $tip_produs_id > 0 and $target_produs > 0) {
        $data_start = date('Y-m-d');
        $insert_clienti_target = "INSERT INTO clienti_target (client_id, tip_produs_id, target, pret, comision, data_start)
        VALUES ('" . $id . "','" . $tip_produs_id . "','" . $target_produs . "','" . $pret_produs . "','" . $comision_produs . "','" . $data_start . "')";
        myExec($insert_clienti_target);
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
        $update_clienti_target = "UPDATE clienti_target set
                                          target = '" . $item_produs['target'] . "',
                                          pret = '" . $item_produs['pret'] . "',
                                          comision = '" . $item_produs['comision'] . "'
                                         where client_id = '" . $id . "'
                                         and tip_produs_id = '" . $produs_id . "'
                                          ";
        myExec($update_clienti_target);
    }
    header('Location: /asigneaza_produse_client.php?id=' . $id);

}

$smarty->display($template_page);


