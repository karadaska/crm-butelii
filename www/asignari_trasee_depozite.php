<?php
$menu_curent = 6;

require_once 'etc/config.php';

$smarty->assign('name', 'Asignare traseu la depozit');
$template_page = "asignari_trasee_depozite.tpl";

$id = getRequestParameter('id', 0);

$adauga = getRequestParameter('adauga', '');

$depozit = Depozite::getDepozitById($id);
$smarty->assign('depozit', $depozit);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_asignari_trasee_la_depozite = Asignari::getAsignariTraseeByDepozitId($id);
$smarty->assign('lista_asignari_trasee_la_depozite', $lista_asignari_trasee_la_depozite);

if ($adauga) {
    $depozit_id = getRequestParameter('depozit_id', '');
    $traseu_id = getRequestParameter('traseu_id', '');

    $data_start = date("y-m-d");
    if ($traseu_id > 0) {
        $query = "INSERT INTO asignari_trasee_depozite(depozit_id, traseu_id, data_start) 
        values 
        ('" . $id . "','" . $traseu_id . "','" . $data_start . "')";

        myExec($query);
        header('Location: /asignari_trasee_depozite.php?id=' . $id);
    }
}

$smarty->display($template_page);


