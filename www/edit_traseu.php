<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$id = getRequestParameter('id', 0);
$nume = getRequestParameter('nume', 0);

$modifica = getRequestParameter('modifica', 0);
$move_down = getRequestParameter('move_down', 0);
$move_up = getRequestParameter('move_up', 0);
$adauga = getRequestParameter('adauga', '');

if ($move_down > 0) {
    Clienti::moveDown($id, $move_down);
    web_redirect('/edit_traseu.php?id=' . $id);

}

if ($move_up > 0) {
    Clienti::moveUp($id, $move_up);
    web_redirect('/edit_traseu.php?id=' . $id);

}

$smarty->assign('name', 'Edit traseu');
$template = 'edit_traseu.tpl';

$traseu_id = Trasee::getTraseuById($id);
$smarty->assign('traseu_id', $traseu_id);

$lista_clienti = Clienti::getClientiPentruAsignat(array(
    'stari' => array(1,2,3)
));
$smarty->assign('lista_clienti', $lista_clienti);

$lista_asignari_clienti_trasee = Asignari::getAsignariClientiByTraseuId($id, array(
    'stari' => array(1,3)
));
$smarty->assign('lista_asignari_clienti_trasee', $lista_asignari_clienti_trasee);

$depozit_by_traseu_id = Depozite::getDepozitByTraseuId($id);
$smarty->assign('depozit_by_traseu_id', $depozit_by_traseu_id);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

//$smarty->assign('lista_masini', $lista_masini);

//debug('dsadsa');

$smarty->assign('adaugat', 0);

if ($modifica and $nume != '') {
    $nume = getRequestParameter('nume', 0);
    $depozit_id = getRequestParameter('depozit_id', 0);
    $sofer_id = getRequestParameter('sofer_id', 0);
    $masina_id = getRequestParameter('masina_id', 0);
    $data_start = date('Y-m-d');
    $data_stop = date('Y-m-d');

    $query = "UPDATE trasee set nume = '" . $nume . "' where id = '" . $id . "'";
    myExec($query);

    $query = "SELECT id from asignari_trasee_depozite where depozit_id = '" . $depozit_id . "' and traseu_id='" . $id . "' and sters = 0 LIMIT 1";
    $depozit_gasit = myQuery($query);

    if ($depozit_gasit->rowCount() == 1) {
        $query = "UPDATE asignari_trasee_depozite SET depozit_id = '" . $depozit_id . "', where  traseu_id = '" . $id . "'";
        myExec($query);
    } else {
        $query = "UPDATE asignari_trasee_depozite SET sters = 1, data_stop = '" . $data_stop . "' where traseu_id = '" . $id . "'";
        myExec($query);

        $query = 'INSERT INTO asignari_trasee_depozite (depozit_id,traseu_id,data_start) VALUES ("' . $depozit_id . '","' . $id . '","' . $data_start . '");';
        myExec($query);

    }


    header('Location: /edit_traseu.php?id=' . $id);

}

if ($adauga) {
    $client_id = getRequestParameter('client_id', '');

    $data_start = date('Y-m-d');
    if ($client_id > 0) {
        $query = "INSERT INTO asignari_clienti_trasee(traseu_id, client_id, data_start)
        values
        ('" . $id . "','" . $client_id . "','" . $data_start . "')";

        myExec($query);
        header('Location: /edit_traseu.php?id=' . $id);

    }
}

$smarty->display($template);

//Am scos

//$stare_id = getRequestParameter('stare_id', 1);
//$stare_masina = getRequestParameter('stare_masina', 0);
//$stare_client = getRequestParameter('stare_client', 1);
//$masina_id = getRequestParameter('masina_id', '');
//$cantitate = getRequestParameter('cantitate', '');
//$adauga_cantitate_masina = getRequestParameter('adauga_cantitate_masina', '');
//$data_plecare_marfa = getRequestParameter('data_plecare_marfa', '');

//$adaugat = getRequestParameter('adaugat', '');
//$smarty->assign('adaugat', 0);

//$lista_masini = ParcAuto::getMasini(array(
//    'stare_id' => $stare_masina
//));

//$cantitate = getRequestParameter('cantitate', '');
//$smarty->assign('cantitate', $cantitate);

//$tip_produs_id = getRequestParameter('tip_produs_id', 0);
//$smarty->assign('tip_produs_id', $tip_produs_id);

//$lista_stari_produse = Produse::getStareProdus();
//$smarty->assign('lista_stari_produse', $lista_stari_produse);
//
//$lista_produse = Produse::getTipProdus();
//$smarty->assign('lista_produse', $lista_produse);

//$plecare_marfa_by_traseu_id = Stocuri::getPlecareMarfaByTraseuId($id, $data_plecare_marfa);
//$smarty->assign('plecare_marfa_by_traseu_id', $plecare_marfa_by_traseu_id);

//$lista_soferi = ParcAuto::getSoferi();
//$smarty->assign('lista_soferi', $lista_soferi);

//$stare_produs = getRequestParameter('stare_produs', 1);
//$smarty->assign('stare_produs', $stare_produs);

//$get_fisa_by_traseu_id = Stocuri::getFisaByTraseuId($id);
//$smarty->assign('get_fisa_by_traseu_id', $get_fisa_by_traseu_id);
