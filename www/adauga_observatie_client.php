<?php
$menu_curent = 8;
require_once 'etc/config.php';

$smarty->assign('name', 'Observatie');
$template_page = "adauga_observatie_client.tpl";
$adauga = getRequestParameter('adauga', '');
$id = getRequestParameter('id', '');

$client = Clienti::getClientById($id);
$smarty->assign('client', $client);
$user_id = $_SESSION['user']->id;


if ($adauga) {
    $nume = getRequestParameter('nume', '');
    $data_intrare = date('Y-m-d');
    $sql = "SELECT id FROM observatii_client
            WHERE `nume`='" . $nume . "' 
            and client_id = '" . $id . "' 
            and user_id = '" . $user_id . "'
            LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $observatie_noua = $ret['id'];

    if ($observatie_noua == 0 and $nume != '' and Utilizatori::hasRights(1)) {
        $query = "insert into observatii_client(nume,client_id, user_id, data_intrare)
        values ('" . $nume . "','" . $id . "','" . $user_id . "','" . $data_intrare . "');";
        myExec($query);
    }
    header('Location: /edit_client.php?id=' . $id);
}
$smarty->display($template_page);