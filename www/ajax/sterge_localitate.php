<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
if ($id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE localitati 
                  SET sters= 1 
                  where id='" . $id . "';";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);