<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$modifica = getRequestParameter('modifica', '');
$adauga = getRequestParameter('adauga', '');
$id = getRequestParameter('id', 0);
$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$target_produs = getRequestParameter('target_produs', 0);
$pret_produs = getRequestParameter('pret_produs', 0);
$comision_produs = getRequestParameter('comision_produs', 0);

$target_by_client_id = Target::getTargetClient($id);
$smarty->assign('target_by_client_id', $target_by_client_id);

$client = Clienti::getClientById($id);
$smarty->assign('client', $client);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_judete = Zone::getZone();
$smarty->assign('lista_judete', $lista_judete);

$lista_localitati = Zone::getLocalitati();
$smarty->assign('lista_localitati', $lista_localitati);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$culori_butelii = Produse::getCuloriButelii();
$smarty->assign('culori_butelii', $culori_butelii);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$smarty->assign('name', 'Edit clienti');
$template = 'edit_client.tpl';

$observatii_by_client_id = Clienti::getObservatiiByClientById($id);
$smarty->assign('observatii_by_client_id', $observatii_by_client_id);


if ($modifica) {
    $nume = getRequestParameter0('nume', '');
    $traseu_id = getRequestParameter('traseu_id', '');
    $judet_id = getRequestParameter('judet_id', '');
    $localitate_id = getRequestParameter('localitate_id', '');
    $adresa = getRequestParameter('adresa', '');
    $stare_id = getRequestParameter('stare_id', '');
    $telefon = getRequestParameter('telefon', '');
    $telefon_2 = getRequestParameter('telefon_2', '');
    $cnp = getRequestParameter('cnp', '');
    $ci = getRequestParameter('ci', '');
    $contract = getRequestParameter('contract', '');
    $titular = getRequestParameter('titular', '');
    $rastel = getRequestParameter('rastel', '');
    $culoare_id = getRequestParameter('culoare_id', 0);
    $data_start = getRequestParameter('data_start', '');
    $data_stop = getRequestParameter('data_stop', '');
    $latitudine = getRequestParameter('latitudine', '');
    $longitudine = getRequestParameter('longitudine', '');

    if ($modifica and $nume != '') {
        $data_intrare = date('Y-m-d');
        $query = "UPDATE clienti SET nume = '" . $nume . "', judet_id = '" . $judet_id . "',
        localitate_id = '" . $localitate_id . "',adresa = '" . $adresa . "', stare_id ='" . $stare_id . "',
        telefon = '" . $telefon . "',telefon_2 = '" . $telefon_2 . "',cnp = '" . $cnp . "',ci='" . $ci . "',contract = '" . $contract . "',
        titular = '" . $titular . "',rastel = '" . $rastel . "', culoare_id = '" . $culoare_id . "', 
        data_start = '" . $data_start . "',data_stop = '" . $data_stop . "', latitudine = '" . $latitudine . "', longitudine = '" . $longitudine . "'
        where id='" . $id . "'";

        myExec($query);

        header('Location: /edit_client.php?id=' . $id);
    }

//    TREBUIE FACUTA STERGERE LA CLIENT

}

$smarty->display($template);

