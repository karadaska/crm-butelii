<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$client_id = getRequestParameter('client_id', 0);
$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$target = getRequestParameter('target', 0);

if ($client_id) {
    $query = "UPDATE clienti_target 
                  SET target = '" . $target . "'
                  where client_id='" . $client_id . "'
                  and tip_produs_id = '" . $tip_produs_id . "'
                  ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);