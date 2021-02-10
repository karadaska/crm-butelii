<?php
$menu_curent = 8;
require_once 'etc/config.php';

$smarty->assign('name', 'Masini');
$template_page = "adauga_masina.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

if ($adauga) {
    $numar = getRequestParameter('numar', '');
    $model = getRequestParameter('model', '');

    $sql = "SELECT id FROM masini WHERE `numar`='" . $numar . "' LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $masina_noua = $ret['id'];

    if ($masina_noua == 0 and $numar != '' and Utilizatori::hasRights(1)) {
        $query = "insert into masini(numar, model)
        values ('" . $numar . "', '" . $model . "');";
        myExec($query);
    }
    header('Location: /masini.php');

}
$smarty->display($template_page);