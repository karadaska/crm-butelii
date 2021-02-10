<?php

$menu_curent = 9;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}


$smarty->assign('name', 'Edit sofer');
$template = 'edit_sofer.tpl';

$id = getRequestParameter('id', 0);
$modifica = getRequestParameter('modifica', 0);
$lista_asignari_soferi_masini = Asignari::getAsignareMasinaBySoferId($id);
$smarty->assign('lista_asignari_soferi_masini', $lista_asignari_soferi_masini);

$nume = getRequestParameter('nume', 0);
$adauga_asignare = getRequestParameter('adauga_asignare', 0);
$masina_id = getRequestParameter('masina_id', 0);

$sofer = ParcAuto::getSoferById($id);
$smarty->assign('sofer', $sofer);

$lista_masini = ParcAuto::getMasini();
$smarty->assign('lista_masini', $lista_masini);



if ($modifica and $nume != '') {
    $nume = getRequestParameter('nume', 0);

    $query = "UPDATE soferi set nume = '" . $nume . "' where id = '" . $id . "'";

    myQuery($query);

    header('Location: /soferi.php');
}

if ($adauga_asignare) {
    $data_start = date('Y-m-d');
    if ($masina_id > 0) {
        $query = "INSERT INTO asignari_soferi_masini(sofer_id, masina_id, data_start)
        values
        ('" . $id . "','" . $masina_id . "','" . $data_start . "')";

        myExec($query);
    }
    header('Location: /edit_sofer.php?id=' . $id);
}

$smarty->display($template);


