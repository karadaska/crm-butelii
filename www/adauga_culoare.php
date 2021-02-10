<?php
$menu_curent = 8;
require_once 'etc/config.php';

$smarty->assign('name', 'Culori');
$template_page = "adauga_culoare.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

if ($adauga) {
    $nume= getRequestParameter('nume', '');

    $sql = "SELECT id FROM culori_butelii WHERE `nume`='" . $nume . "' LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $culoare_noua = $ret['id'];

    if ($culoare_noua == 0 and $nume != '' and Utilizatori::hasRights(1)) {
        $query = "insert into culori_butelii(nume)
        values ('" . $nume . "');";
        myExec($query);
    }
    header('Location: /culori_butelii.php');

}
$smarty->display($template_page);