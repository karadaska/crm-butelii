<?php
$menu_curent = 8;
require_once 'etc/config.php';

$smarty->assign('name', 'Observatie');
$template_page = "adauga_observatie.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);


if ($adauga) {
    $nume = getRequestParameter('nume', '');

    $sql = "SELECT id FROM observatii WHERE `nume`='" . $nume . "' LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $observatie_noua = $ret['id'];

    if ($observatie_noua == 0 and $nume != '' and Utilizatori::hasRights(1)) {
        $query = "insert into observatii(nume)
        values ('" . $nume . "');";
        myExec($query);
    }
    header('Location: /culori_butelii.php');

}
$smarty->display($template_page);