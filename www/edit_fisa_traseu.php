<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit fisa traseu');
$template = 'edit_fisa_traseu.tpl';

$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);
$client_id = getRequestParameter('client_id', 0);
$smarty->assign('client_id', $client_id);

$nume = getRequestParameter('nume', 0);
$stare_id = getRequestParameter('stare_id', 1);
$stare_masina = getRequestParameter('stare_masina', 0);
$stare_client = getRequestParameter('stare_client', 1);
$masina_id = getRequestParameter('masina_id', '');
$cantitate = getRequestParameter('cantitate', '');
$adauga_cantitate_masina = getRequestParameter('adauga_cantitate_masina', '');
$modifica = getRequestParameter('modifica', 0);
$consuma_stoc = getRequestParameter('consuma_stoc', 0);
$sterge_fisa = getRequestParameter('sterge_fisa', 0);
$adauga = getRequestParameter('adauga', '');
$salveaza = getRequestParameter('salveaza', '');
$smarty->assign('adaugat', 0);

$data_start = getRequestParameter('data_start', '');
$data_fisa = getRequestParameter('data_fisa', '');

$fisa_id = Stocuri::getFisaGenerataById($id);
$smarty->assign('fisa_id', $fisa_id);

$traseu_id_by_fisa_generata = Trasee::getTraseuByFisaGenerataId($id);
$smarty->assign('traseu_id_by_fisa_generata', $traseu_id_by_fisa_generata);

$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$smarty->assign('tip_produs_id', $tip_produs_id);

$stare_produs = getRequestParameter('stare_produs', 1);
$smarty->assign('stare_produs', $stare_produs);

$cantitate = getRequestParameter('cantitate', '');
$smarty->assign('cantitate', $cantitate);

$adaugat = getRequestParameter('adaugat', '');
$smarty->assign('adaugat', 0);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

$plecare_marfa_by_traseu_id = Stocuri::getIncarcaturaMasinaPlecareByFisaId($id);
$smarty->assign('plecare_marfa_by_traseu_id', $plecare_marfa_by_traseu_id);

$lista_clienti = Clienti::getClientiPentruAsignat(array(
    'stari' => array(1, 2, 3)
));
$smarty->assign('lista_clienti', $lista_clienti);

$lista_asignari_clienti_trasee = Clienti::getClientiByTraseuId($traseu_id_by_fisa_generata['traseu_id']);
$smarty->assign('lista_asignari_clienti_trasee', $lista_asignari_clienti_trasee);

//$lista_clienti_asignati_la_fisa = Clienti::getAsignariClientiByFisaGenerataId($id);
//$smarty->assign('lista_clienti_asignati_la_fisa', $lista_clienti_asignati_la_fisa);

$lista_clienti_asignati_la_fisa = Asignari::getAsignariClientiByFisaGenerataId($id);
$smarty->assign('lista_clienti_asignati_la_fisa', $lista_clienti_asignati_la_fisa);


$lista_masini = ParcAuto::getMasini(array(
    'stare_id' => $stare_masina
));
$smarty->assign('lista_masini', $lista_masini);

$lista_soferi = ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

//Modificare date fisa: traseu, depozit, sofer, masina
if (isset($_POST['modifica'])) {
    $id = getRequestParameter('id', 0);
    $depozit_id = getRequestParameter('depozit_id', 0);
    $traseu_id = getRequestParameter('traseu_id', 0);
    $sofer_id = getRequestParameter('sofer_id', 0);

    $masina_id = getRequestParameter('masina_id', 0);

    $data_start = getRequestParameter('data_start', '');

    $query = "UPDATE fise_generate
                    SET traseu_id = '" . $traseu_id . "',
                    sofer_id = '" . $sofer_id . "',
                    masina_id = '" . $masina_id . "',
                    data_intrare = '".$data_start."'
                    WHERE id = '" . $id . "'";

    myExec($query);
    $update_data_fisa_total_plecare = "UPDATE fisa_total_plecare
                    SET data_intrare = '" . $data_start . "'
                    WHERE fisa_id = '" . $id . "'";

    myExec($update_data_fisa_total_plecare);
    $update_clienti_asignati_la_fisa = "UPDATE clienti_asignati_fise_generate
                    SET data_intrare = '" . $data_start . "'
                    WHERE fisa_generata_id = '" . $id . "'";

    myExec($update_clienti_asignati_la_fisa);

    $update_clienti_asignati_la_fisa = "UPDATE miscari_fise
                    SET data_intrare = '" . $data_start . "'
                    WHERE fisa_id = '" . $id . "'";

    myExec($update_clienti_asignati_la_fisa);
    $update_cantitati_sosire = "UPDATE fisa_total_intoarcere
                    SET data_intrare = '" . $data_start . "'
                    WHERE fisa_id = '" . $id . "'";

    myExec($update_cantitati_sosire);

    $update_cantitati_produse_clienti = "UPDATE detalii_fisa_intoarcere_produse
                    SET data_intrare = '" . $data_start . "'
                    WHERE fisa_id = '" . $id . "'";

    myExec($update_cantitati_produse_clienti);

    header('Location: /edit_fisa_traseu.php?id=' . $id);
}

//Asigneaza clienti la fisa traseu
if ($adauga) {
    $client_id = getRequestParameter('client_id', '');
    $data_start = getRequestParameter('data_fisa', '');

    if ($client_id > 0) {
        $query = "INSERT INTO clienti_asignati_fise_generate(fisa_generata_id, client_id, data_intrare)
        values
        ('" . $id . "','" . $client_id . "','" . $data_start . "')";

        myExec($query);
        header('Location: /edit_fisa_traseu.php?id=' . $id);
    }
}

//Adauga cantitate pleacare masina
if (isset($_POST['adauga_cantitate_masina'])) {
    $data_start = getRequestParameter('data_fisa', '');

    if ($tip_produs_id > 0 and $cantitate != 0) {

        $query = "INSERT INTO fisa_total_plecare(fisa_id,traseu_id, tip_produs_id,cantitate, stare_produs, data_intrare)
       values
       ('" . $id . "','" . $traseu_id_by_fisa_generata['traseu_id'] . "','" . $tip_produs_id . "','" . $cantitate . "','" . $stare_produs . "','" . $data_start . "')";
        myExec($query);

        header('Location: /edit_fisa_traseu.php?id=' . $id);
    }
}

if (isset($_POST['sterge_fisa'])) {
    $sterge_fisa_generata = "UPDATE fise_generate set sters = 1 where id='" . $id . "'";
    myExec($sterge_fisa_generata);

    $sterge_fisa_total_plecare = "UPDATE fisa_total_plecare set sters = 1 where fisa_id='" . $id . "'";
    myExec($sterge_fisa_total_plecare);

    $sterge_clienti_asignati_fisa_generata = "UPDATE clienti_asignati_fise_generate set sters = 1 where fisa_generata_id='" . $id . "'";
    myExec($sterge_clienti_asignati_fisa_generata);

    $sterge_fisa_total_intoarcere = "UPDATE fisa_total_intoarcere set sters = 1 where fisa_id='" . $id . "'";
    myExec($sterge_fisa_total_intoarcere);

    $sterge_detalii_fisa_intoarcere_produse = "UPDATE detalii_fisa_intoarcere_produse set sters = 1 where fisa_id='" . $id . "'";
    myExec($sterge_detalii_fisa_intoarcere_produse);

    header('Location: /fisa_traseu.php');
}

if (isset($_POST['import_clienti_fisa_generata'])) {
    $data_start = getRequestParameter('data_fisa', '');
    foreach ($lista_asignari_clienti_trasee as $clienti_asignati) {
        $select_clienti_asignati_la_fisa = "SELECT * from clienti_asignati_fise_generate
                                        WHERE fisa_generata_id = '" . $id . "'
                                        and client_id = '" . $clienti_asignati['id'] . "'
                                        and sters = 0
                                        ORDER BY id DESC";
        $id_gasit = myQuery($select_clienti_asignati_la_fisa);

        $ret = $id_gasit->fetchAll(PDO::FETCH_ASSOC);
        $id_client_gasit = $ret['id'];

        if ($id_gasit->rowCount() == 0) {

            $query = "INSERT INTO clienti_asignati_fise_generate(fisa_generata_id, client_id, data_intrare)
        values
        ('" . $id . "','" . $clienti_asignati['client_id'] . "','" . $data_start . "')";
            myExec($query);
        }
    }
    header('Location: /edit_fisa_traseu.php?id=' . $id);
}

if (isset($_POST['consuma_stoc'])) {
    Stocuri::consumaFisaPlecare($id);
    header('Location: /edit_fisa_traseu.php?id=' . $id);

}


$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime',$mtime);
$smarty->assign('totaltime',$totaltime);
$smarty->display($template);

