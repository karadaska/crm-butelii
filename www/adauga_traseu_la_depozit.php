<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Clienti');
$template_page = "adauga_traseu_la_depozit.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);
if ($adauga) {
    $traseu_id = getRequestParameter0('traseu_id', '');
    $depozit_id = getRequestParameter('depozit_id', '');

    if ($traseu_id > 0 and  $depozit_id > 0 and Utilizatori::hasRights(1)) {
        $query = 'insert into asignari_trasee_depozite(depozit_id,traseu_id)
        values
                ("' . $depozit_id . '","' . $traseu_id . '");';

        $rows = myExec($query);
        if ($rows == 1) {
            $smarty->assign('adaugat', 1);
        } else {
            $smarty->assign('adaugat', 2);
        }
    }
}

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$smarty->display($template_page);