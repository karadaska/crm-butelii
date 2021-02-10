<?php
$menu_curent = 8;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit localitate');
$template = 'edit_localitate.tpl';

$id = getRequestParameter('id', 0);
$modifica = getRequestParameter('modifica', 0);
$nume = getRequestParameter('nume', 0);

$zona_id= getRequestParameter('zona_id', 0);

$zone = Zone::getZone();
$smarty->assign('zone',$zone);

$localitate_id = Zone::getLocalitateById($id);
$smarty->assign('localitate_id', $localitate_id);

$get_zona_by_localitate_id = Zone::getZonaByLocalitateId($id);
$smarty->assign('get_zona_by_localitate_id',$get_zona_by_localitate_id);

if ($modifica and $nume != '') {

    $query = "UPDATE localitati set nume = '" . $nume . "',judet_id = '".$zona_id."' where id = '" . $id . "'";

    $rows = myQuery($query);
    header('Location: /edit_localitate.php?id='.$id);
}


$smarty->display($template);


