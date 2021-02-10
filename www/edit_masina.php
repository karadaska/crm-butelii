<?php
$menu_curent = 8;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit masina');
$template = 'edit_masina.tpl';

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$modifica = getRequestParameter('modifica', 0);
$numar = getRequestParameter('numar', 0);
$stare_id = getRequestParameter('stare_id', 0);
$model = getRequestParameter('model', 0);
$adauga = getRequestParameter('adauga', 0);

$masina_id = ParcAuto::getMasinaById($id);
$smarty->assign('masina_id', $masina_id);

$lista_masini = ParcAuto::getMasini(array(
    'stare_id' => $stare_id
));
$smarty->assign('lista_masini', $lista_masini);

$stari_masini = ParcAuto::getStariMasini();
$smarty->assign('stari_masini', $stari_masini);

$stare_by_masina_id = ParcAuto::getStareByMasinaId($id);
$smarty->assign('stare_by_masina_id', $stare_by_masina_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_asignari_masini_trasee = Asignari::getAsignareTraseuIdByMasinaId($id);
$smarty->assign('lista_asignari_masini_trasee', $lista_asignari_masini_trasee);


//foreach ($lista_asignari_masini_trasee as $x){
//    debug($x['traseu_id'], '' . $x['nume_traseu']);
//}
if ($modifica and $numar != '') {

    $query = "UPDATE masini set numar = '" . $numar . "', model = '" . $model . "', stare_id = '" . $stare_id . "' 
    where id = '" . $id . "'";

    $rows = myQuery($query);
    header('Location: /edit_masina.php?id=' . $id);
}

if ($adauga) {
    $traseu_id = getRequestParameter('traseu_id', '');
    $id = getRequestParameter('id', '');

    $data_start = date('Y-m-d');
    if ($traseu_id > 0) {
        $query = "INSERT INTO asignari_masini_trasee(masina_id, traseu_id, data_start)
        values
        ('" . $id . "','" . $traseu_id . "','" . $data_start . "')";

        myExec($query);
    }
    header('Location: /edit_masina.php?id=' . $id);
}


$smarty->display($template);


