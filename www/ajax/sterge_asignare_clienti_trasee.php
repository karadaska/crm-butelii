<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$client_id = getRequestParameter('client_id', 0);
$traseu_id = getRequestParameter('traseu_id', 0);

if ($client_id) {
    $data_stop = date('Y-m-d');
    $query = "UPDATE asignari_clienti_trasee 
                  SET  sters= 1,
                  data_stop = '" . $data_stop . "' 
                  where client_id='" . $client_id . "'
                  and traseu_id = '" . $traseu_id . "'
                  ";
    $nr_update = myExec($query);

    $update_ordine_clienti = "UPDATE ordine_clienti 
                  SET  sters= 1                
                  where client_id='" . $client_id . "'
                  and traseu_id = '" . $traseu_id . "'
                  ";
    myExec($update_ordine_clienti);

    $ret['error'] = $nr_update == 1 ? 0 : 1;
}

echo json_encode($ret);