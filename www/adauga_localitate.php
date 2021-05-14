<?php
$menu_curent = 4;
require_once 'etc/config.php';

$smarty->assign('name', 'Localitati');
$template_page = "adauga_localitate.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

$zona_id = getRequestParameter('zona_id', '');
$smarty->assign('zona_id', $zona_id);


if ($adauga) {
    $nume = getRequestParameter('nume', '');

    $sql = "SELECT id FROM localitati WHERE `nume`='" . $nume . "' and sters = 0 LIMIT 1";
    $result        = myQuery($sql);

    $ret           = $result->fetch(PDO::FETCH_ASSOC);
    $localitate_noua = $ret['id'];

    if ($localitate_noua == 0 and $nume != '' and Utilizatori::hasRights(1)) {
        $query = 'insert into localitati(judet_id, nume)
        values ("' . $zona_id. '","' . $nume . '");';

        $rows = myExec($query);
        if ($rows == 1) {
            $smarty->assign('adaugat', 1);
        } else {
            $smarty->assign('adaugat', 2);
        }
    }
    header('Location: /localitati.php');

}

$lista_judete = Zone::getZone();
$smarty->assign('lista_judete', $lista_judete);

$smarty->display($template_page);