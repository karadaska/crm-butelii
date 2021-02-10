<?php
$menu_curent = 4;
require_once 'etc/config.php';

$smarty->assign('name', 'Depozite');
$template_page = "adauga_depozit.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

if ($adauga) {
    $nume = getRequestParameter('nume', '');

    $sql = "SELECT id FROM depozite WHERE `nume`='" . $nume . "' LIMIT 1";
    $result        = myQuery($sql);

    $ret           = $result->fetch(PDO::FETCH_ASSOC);
    $depozit_nou = $ret['id'];

    if ($depozit_nou == 0 and $nume != '' and Utilizatori::hasRights(1)) {
        $query = 'insert into depozite(nume)
        values ("' . $nume . '");';

        $rows = myExec($query);
        if ($rows == 1) {
            $smarty->assign('adaugat', 1);
        } else {
            $smarty->assign('adaugat', 2);
        }
    }
    header('Location: /depozite.php');

}
$smarty->display($template_page);