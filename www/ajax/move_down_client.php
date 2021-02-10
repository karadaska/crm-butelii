<?php
require_once '../etc/config.php';

if (!Utilizatori::hasRights(1)) {
    exit();
}

$ret = array('error' => 1);

$id = getRequestParameter('id', 0);
$x = getRequestParameter('x', 0);
if ($id) {
    $ret = array();

    $select_id_asignare = "SELECT id from asignari_clienti_trasee where traseu_id = '" . $id . "'";

    $result = myQuery($select_id_asignare);
    if ($result) {
        $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($tmp as $client) {
            array_push($ret, $client['id']);
        }
    }

    if (count($ret) - 1 > $x) {
        $b = array_slice($ret, 0, $x, true);
        $b[] = $ret[$x + 1];
        $b[] = $ret[$x];
        $b += array_slice($ret, $x + 2, count($ret), true);
        return ($b);
    } else {
        return $ret;
    }
}

echo json_encode($ret);