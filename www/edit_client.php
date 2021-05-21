<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit clienti');
$template = 'edit_client.tpl';

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

$lista_tip_rastel = Produse::getRastel();
$smarty->assign('lista_tip_rastel', $lista_tip_rastel);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$culori_butelii = Produse::getCuloriButelii();
$smarty->assign('culori_butelii', $culori_butelii);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);


$observatii_by_client_id = Clienti::getObservatiiByClientById($id);
$smarty->assign('observatii_by_client_id', $observatii_by_client_id);


if ($modifica) {
    $nume = getRequestParameter0('nume', '');
    $exclus = getRequestParameter0('exclus', '');
    $traseu_id = getRequestParameter('traseu_id', '');
    $judet_id = getRequestParameter('judet_id', '');
    $localitate_id = getRequestParameter('localitate_id', '');
    $adresa = getRequestParameter('adresa', '');
    $stare_id = getRequestParameter('stare_id', '');
    $rastel_id = getRequestParameter('rastel_id', '');
    $tip_rastel = getRequestParameter('tip_rastel', '');
    $telefon = getRequestParameter('telefon', '');
    $telefon_2 = getRequestParameter('telefon_2', '');
    $cnp = getRequestParameter('cnp', '');
    $ci = getRequestParameter('ci', '');
    $contract = getRequestParameter('contract', '');
    $titular = getRequestParameter('titular', '');
    $culoare_id = getRequestParameter('culoare_id', 0);
    $data_start = getRequestParameter('data_start', '');
    $data_stop = getRequestParameter('data_stop', '');
    $latitudine = getRequestParameter('latitudine', '');
    $longitudine = getRequestParameter('longitudine', '');

    if ($modifica and $nume != '') {

        $data_intrare = date('Y-m-d');
        $query = "UPDATE clienti SET nume = '" . $nume . "', judet_id = '" . $judet_id . "',
        localitate_id = '" . $localitate_id . "',adresa = '" . $adresa . "', stare_id ='" . $stare_id . "',
        telefon = '" . $telefon . "', telefon_2 = '" . $telefon_2 . "',cnp = '" . $cnp . "', ci='" . $ci . "',contract = '" . $contract . "',
        titular = '" . $titular . "',rastel = '" . $rastel_id . "', culoare_id = '" . $culoare_id . "', 
        data_start = '" . $data_start . "', data_stop = '" . $data_stop . "', latitudine = '" . $latitudine . "', longitudine = '" . $longitudine . "', exclus= '" . $exclus . "'
        where id='" . $id . "'";

        myExec($query);

        $sql = "SELECT id FROM tip_rastel_clienti 
                WHERE `client_id`='" . $id . "' 
                and `tip_rastel_id`='" . $tip_rastel . "'                
                and sters = 0 
                LIMIT 1";
        $result = myQuery($sql);

        if ($result->rowCount() == 1) {
            $update_tip_rastel_clienti = "UPDATE tip_rastel_clienti SET                                      
                                          nr_rastel = '" . $rastel_id . "'
                                          WHERE client_id = '" . $id . "'
                                          AND tip_rastel_id = '" . $tip_rastel . "'                                                                           
                                        ";
            myExec($update_tip_rastel_clienti);

        } else {
            $update_tip_rastel_clienti = "UPDATE tip_rastel_clienti SET
                                          sters = 1,                                        
                                          data_stop = '" . $data_intrare . "'
                                          WHERE client_id = '" . $id . "'
                                          and sters = 0                                          
                                        ";
            myExec($update_tip_rastel_clienti);

            $insert_tip_rastel = "insert into tip_rastel_clienti (client_id, tip_rastel_id, nr_rastel, data_start)
        values ('" . $id . "','" . $tip_rastel . "','" . $rastel_id . "','" . $data_intrare . "');";
            myExec($insert_tip_rastel);

        }

        header('Location: /edit_client.php?id=' . $id);
    }

//    TREBUIE FACUTA STERGERE LA CLIENT

}

$smarty->display($template);

