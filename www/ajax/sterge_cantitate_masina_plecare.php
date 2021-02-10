<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$fisa_id = getRequestParameter('fisa_id', 0);
$tip_produs_id = getRequestParameter('tip_produs_id', 0);

if ($fisa_id) {
    $query = "UPDATE fisa_total_plecare 
                  SET  sters= 1
                  where fisa_id='" . $fisa_id . "'
                  and tip_produs_id = '" . $tip_produs_id . "'
                  ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);