<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
if ($id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE masini 
                  SET sters= 1 
                  where id='" . $id . "';";
    $nr_update = myExec($query);

    $query = "UPDATE asignari_masini_trasee 
                  SET sters= 1, data_stop = '".$data_stop."' 
                  where masina_id='" . $id . "';";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);