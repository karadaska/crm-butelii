<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$masina_id = getRequestParameter('masina_id', 0);
$traseu_id = getRequestParameter('traseu_id', 0);
if ($masina_id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE asignari_masini_trasee 
                  SET sters= 1,
                  data_stop = '" . $data_stop . "' 
                  where masina_id='" . $masina_id . "'
                  and traseu_id = '" . $traseu_id . "'
                  ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);