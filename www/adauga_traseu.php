<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Clienti');
$template_page = "adauga_traseu.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);

$depozit_id = getRequestParameter('depozit_id', '');
$smarty->assign('depozit_id', $depozit_id);



if ($adauga) {
    $nume = getRequestParameter('nume', '');

    $sql = "SELECT id FROM trasee WHERE `nume`='" . $nume . "' LIMIT 1";
    $result        = myQuery($sql);

    $ret           = $result->fetch(PDO::FETCH_ASSOC);
    $traseu_nou = $ret['id'];

    if ($traseu_nou == 0 and $nume !='') {
        $query = "INSERT INTO trasee(nume) values ('" . $nume . "')";
        $rows = myExec($query);

        if ($rows == 1) {
            $smarty->assign('adaugat', 1);
        } else {
            $smarty->assign('adaugat', 2);
        }

    }
    header('Location: /trasee.php');
}

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$smarty->display($template_page);