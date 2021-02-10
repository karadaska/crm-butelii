<?php
$menu_curent = 8;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit observatie client');
$template = 'edit_observatie_client.tpl';

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$modifica = getRequestParameter('modifica', 0);
$observatie = getRequestParameter('observatie', 0);
//
$observatie_id = Clienti::getObservatieLaClientById($id);
$smarty->assign('observatie_id', $observatie_id);

if ($modifica and $observatie != '') {

    $query = "UPDATE observatii_client set nume = '" . $observatie . "' 
    where id = '" . $id . "'";

    $rows = myQuery($query);
    header('Location: /edit_observatie_client.php?id=' . $id);
}

$smarty->display($template);


