<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$masina_id = getRequestParameter('masina_id', 0);
$sofer_id = getRequestParameter('sofer_id', 0);
if ($masina_id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE asignari_soferi_masini 
                  SET sters= 1,
                  data_stop = '" . $data_stop . "' 
                  where masina_id='" . $masina_id . "'
                  and sofer_id = '" . $sofer_id . "'
                  ";
    $nr_update = myExec($query);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);