<?php

$menu_curent = 4;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit depozite');
$template = 'edit_depozit.tpl';

$id = getRequestParameter('id', 0);
$modifica = getRequestParameter('modifica', 0);
$nume = getRequestParameter('nume', 0);

$depozit_id = Depozite::getDepozitById($id);
$smarty->assign('depozit_id', $depozit_id);

if ($modifica and $nume != '') {
    $nume = getRequestParameter('nume', 0);

    $query = "UPDATE depozite set nume = '" . $nume . "' where id = '" . $id . "'";

    $rows = myQuery($query);
    if ($rows == 1) {
        $smarty->assign('adaugat', 1);
    } else {
        $smarty->assign('adaugat', 2);
    }
    header('Location: /depozite.php');
}


$smarty->display($template);


