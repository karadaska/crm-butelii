<?php
$menu_curent = 10;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Completare fisa traseu');
$template = 'completare_fisa_traseu.tpl';

$id = getRequestParameter('id', 0);
$adauga = getRequestParameter('adauga', '');
$casa_marcat = getRequestParameter('casa_marcat', '');
$id_fisa_adauga_produse = getRequestParameter('id_fisa_adauga_produse', '');
$raport_z = getRequestParameter('raport_z', '');
$km_parcursi = getRequestParameter('km_parcursi', 0);
$valoare_z = getRequestParameter('valoare_z', '');
$plata = getRequestParameter('plata', '');
$tip_alimentare = getRequestParameter('tip_alimentare', '');
$nr_bg = getRequestParameter('nr_bg', '');
$nr_ar_8 = getRequestParameter('nr_ar_8', '');
$nr_ar_9 = getRequestParameter('nr_ar_9', '');
$valoare_bg = getRequestParameter('valoare_bg', '');
$valoare_ar_8 = getRequestParameter('valoare_ar_8', '');
$valoare_ar_9 = getRequestParameter('valoare_ar_9', '');
$nota_explicativa = getRequestParameter('nota_explicativa', '');
$valoare_alimentare = getRequestParameter('valoare_alimentare', '');
$adauga_miscari_fisa = getRequestParameter('adauga_miscari_fisa', '');

$adauga_extra_contract = getRequestParameter('adauga_cantitate_extra', '');
$cantitate_extra = getRequestParameter('cantitate_extra', '');
$pret_extra = getRequestParameter('pret_extra', '');

$observatii_clienti = getRequestParameter('observatii_clienti', '');
$smarty->assign('observatii_clienti', $observatii_clienti);

$tip_produs_id = getRequestParameter('tip_produs_id', 0);
$smarty->assign('tip_produs_id', $tip_produs_id);

$stare_produs = getRequestParameter('stare_produs', '');
$smarty->assign('stare_produs', $stare_produs);

$lista_produse = Produse::getTipProdus();
$smarty->assign('lista_produse', $lista_produse);

$lista_stari_produse = Produse::getStareProdus();
$smarty->assign('lista_stari_produse', $lista_stari_produse);

//$plecare_marfa_by_fisa_id = Stocuri::getPlecareMarfaByFisaId($id);
//$smarty->assign('plecare_marfa_by_fisa_id', $plecare_marfa_by_fisa_id);

$cantitati_plecare = Fise::getPlecareMarfaByFisaIdMiscariFise($id);
$smarty->assign('cantitati_plecare', $cantitati_plecare);

$miscari_fisa = Fise::getMiscariByFisaId($id);
$smarty->assign('miscari_fisa', $miscari_fisa);

$cantitate_sosire_by_fisa_id = Stocuri::getIncarcaturaMasinaSosireByFisaIdCompleteazaFisa($id);
$smarty->assign('cantitate_sosire_by_fisa_id', $cantitate_sosire_by_fisa_id);

$lista_asignari_clienti_by_fisa_generata = Clienti::getAsignariClientiByFisaGenerataId($id);
$smarty->assign('lista_asignari_clienti_by_fisa_generata', $lista_asignari_clienti_by_fisa_generata);

$depozit_by_fisa_generata_id = Depozite::getDepozitByFisaGenerataId($id);
$smarty->assign('depozit_by_fisa_generata_id', $depozit_by_fisa_generata_id);

$sofer_by_fisa_generata_id = ParcAuto::getSoferByFisaGenerataId($id);
$smarty->assign('sofer_by_fisa_generata_id', $sofer_by_fisa_generata_id);

$masina_by_fisa_generata_id = ParcAuto::getMasinaByFisaGenerataId($id);
$smarty->assign('masina_by_fisa_generata_id', $masina_by_fisa_generata_id);

$traseu_by_fisa_generata_id = Trasee::getTraseuByFisaGenerataId($id);
$smarty->assign('traseu_by_fisa_generata_id', $traseu_by_fisa_generata_id);

$fisa = Stocuri::getFisaGenerataById($id);
$smarty->assign('fisa', $fisa);

$get_tip_alimentare = ParcAuto::getTipALimentare();
$smarty->assign('get_tip_alimentare', $get_tip_alimentare);

$cantitate = getRequestParameter('cantitate', '');
$smarty->assign('cantitate', $cantitate);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$data_intrare = $fisa['data_intrare'];

$cantitati_produse_clienti_by_fisa_id = Stocuri::getCantitatiProduseClientiByFisaId($id);
$smarty->assign('cantitati_produse_clienti_by_fisa_id', $cantitati_produse_clienti_by_fisa_id);

$extract_data_fisa = date("n", strtotime($data_intrare));
$smarty->assign('extract_data_fisa', $extract_data_fisa);

$luna_curenta = date('n');
$smarty->assign('luna_curenta', $luna_curenta);


$to_add = array();
$to_add_obs = array();
$to_add_obssecond = array();
if (isset($_POST['adauga'])) {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^cantitate_/', $key) || preg_match('/^defecte_/', $key) || preg_match('/^pret_/', $key) || preg_match('/^comision_/', $key) || preg_match('/^pretcontract_/', $key)) {
            $splits = explode("_", $key);
            $depozit_id = $splits[1];
            $client_id = $splits[2];
            $tip_produs_id = $splits[3];

            if (!isset($to_add[$client_id])) {
                $to_add[$client_id] = array();
            }

            if (!isset($to_add[$client_id][$depozit_id])) {
                $to_add[$client_id][$depozit_id] = array();
            }
            if (!isset($to_add[$client_id][$depozit_id][$tip_produs_id])) {
                $to_add[$client_id][$depozit_id][$tip_produs_id] = array(
                    'cantitate' => 0,
                    'defecte' => 0,
                    'pret' => 0,
                    'pretcontract' => 0,
                    'comision' => 0
                );
            }
            $to_add[$client_id][$depozit_id][$tip_produs_id][$splits[0]] = $value;
        }

        if (preg_match('/^obs_/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];

            if (!isset($to_add_obs[$client_id])) {
                $to_add_obs[$client_id] = $value;
            }
        }

        if (preg_match('/^obssecond_/', $key)) {
            $splits = explode("_", $key);
            $client_id = $splits[1];

            if (!isset($to_add_obssecond[$client_id])) {
                $to_add_obssecond[$client_id] = $value;
            }
        }
    }

    $data_intrare = $fisa['data_intrare'];


    foreach ($lista_asignari_clienti_by_fisa_generata as $asignare) {
        foreach ($to_add[$asignare['client_id']] as $depozit_id => $item_depozit) {
            foreach ($item_depozit as $tip_produs_id => $item_client) {
                $id_detalii_fisa_intoarcere_produs = "SELECT id from detalii_fisa_intoarcere_produse 
                                                      WHERE fisa_id = '" . $id . "'
                                                      AND client_id = '" . $asignare['client_id'] . "'
                                                      AND tip_produs_id = '" . $tip_produs_id . "'                                                          
                                         ";

                $id_gasit_fisa_intoarcere_produse = myQuery($id_detalii_fisa_intoarcere_produs);
                $ret2 = $id_gasit_fisa_intoarcere_produse->fetch(PDO::FETCH_ASSOC);
                $id_produs = $ret2['id'];


                if ($id_gasit_fisa_intoarcere_produse->rowCount() == 1) {
//                    debug('am gasit valoare in tabela produse');
                    $update_detalii_fisa_intoarcere_produse_ = "UPDATE detalii_fisa_intoarcere_produse 
                                                                SET cantitate = '" . $item_client['cantitate'] . "',
                                                                defecte = '" . $item_client['defecte'] . "',
                                                                pret = '" . $item_client['pret'] . "',                                                            
                                                                pret_contract = '" . ($item_client['pretcontract']) . "',                                                            
                                                                comision = '" . $item_client['comision'] . "'                                                           
                                                                WHERE fisa_id = '" . $id . "'
                                                                AND client_id = '" . $asignare['client_id'] . "'
                                                                AND tip_produs_id = '" . $tip_produs_id . "'
                                                                ";
//                    pretul contract este adaugat cu tot cu comision
                    myExec($update_detalii_fisa_intoarcere_produse_);
                } else {

                    if ($item_client['cantitate'] > 0 || $item_client['defecte']) {
                        $insert_raport_fisa_iesire = "INSERT INTO detalii_fisa_intoarcere_produse 
                (fisa_id, client_id,tip_produs_id,cantitate,defecte, pret, comision, pret_contract, data_intrare) 
               values ('" . $id . "','" . $asignare['client_id'] . "','" . $tip_produs_id . "',
               '" . $item_client['cantitate'] . "','" . $item_client['defecte'] . "','" . $item_client['pret'] . "','" . $item_client['comision'] . "','" . $item_client['pretcontract'] . "','" . $data_intrare . "')";
                        myExec($insert_raport_fisa_iesire);
                    }
                }

                $query_obs_clienti = "SELECT observatie_id from observatii_clienti_fisa_traseu
                                          where fisa_id = '" . $id . "'
                                          and client_id = '" . $asignare['client_id'] . "'";

                $id_gasit_obs = myQuery($query_obs_clienti);
                $ret = $id_gasit_obs->fetch(PDO::FETCH_ASSOC);
                $id_gasit_obs_clienti = $ret['observatie_id'];

                if ($id_gasit_obs->rowCount() == 0) {
                    if (isset($to_add_obs[$asignare['client_id']]) && $to_add_obs[$asignare['client_id']] > 0) {
                        $insert_observatii_clienti = "INSERT INTO observatii_clienti_fisa_traseu
               (traseu_id, client_id, fisa_id, observatie_id, second_obs, `data`)
               values ('" . $traseu_by_fisa_generata_id['traseu_id'] . "','" . $asignare['client_id'] . "','" . $id . "',
               '" . $to_add_obs[$asignare['client_id']] . "', '" . $to_add_obssecond[$asignare['client_id']] . "','" . $data_intrare . "')";
                        myExec($insert_observatii_clienti);
                    }
                } else {
                    $update_obs_clienti = "UPDATE observatii_clienti_fisa_traseu set
                                  observatie_id = '" . $to_add_obs[$asignare['client_id']] . "',
                                  second_obs = '" . $to_add_obssecond[$asignare['client_id']] . "'
                                  where fisa_id = '" . $id . "'
                                  and client_id = '" . $asignare['client_id'] . "'";
                    myExec($update_obs_clienti);
                }


            }
        }
    }

    header('Location: /completare_fisa_traseu.php?id=' . $id);
}

if (isset($_POST['adauga_cantitate_intoarcere_traseu'])) {
    $data_intrare = $fisa['data_intrare'];

    if ($tip_produs_id > 0) {
        $select_id_produs_fisa_intoarcere = "SELECT id from fisa_total_intoarcere 
                                             WHERE fisa_id = '" . $id . "'
                                             AND stare_produs = '" . $stare_produs . "'
                                             AND tip_produs_id = '" . $tip_produs_id . "'
                                             ";

        $id_fisa_gasit_fisa_intoarcere = myQuery($select_id_produs_fisa_intoarcere);
        $ret_fisa_intoarcere = $id_fisa_gasit_fisa_intoarcere->fetch(PDO::FETCH_ASSOC);
        $id_fisa_intoarcere = $ret_fisa_intoarcere['id'];

        if ($id_fisa_gasit_fisa_intoarcere->rowCount() == 1) {

            $query = "UPDATE fisa_total_intoarcere 
                                              SET cantitate = '" . $cantitate . "'
                                              WHERE fisa_id = '" . $id . "'
                                              AND stare_produs = '" . $stare_produs . "'
                                              AND tip_produs_id = '" . $tip_produs_id . "'
                                                ";
            myExec($query);

            $intoarcere_marfa_by_fisa_id = Stocuri::getIntoarcereMarfaByFisaIdAndprodusId($id, $tip_produs_id);

        } else {
            $insert_fisa_total_intoarcere = "INSERT INTO fisa_total_intoarcere(fisa_id, traseu_id, tip_produs_id, cantitate, stare_produs, data_intrare)
                     values
                    ('" . $id . "','" . $traseu_by_fisa_generata_id['traseu_id'] . "',
                    '" . $tip_produs_id . "','" . $cantitate . "','" . $stare_produs . "','" . $data_intrare . "')";
            myExec($insert_fisa_total_intoarcere);

        }
    }
    header('Location: /completare_fisa_traseu.php?id=' . $id);
}

if (isset($_POST['adauga_miscari_fisa'])) {
    $data_intrare = $fisa['data_intrare'];
    $query = "SELECT id FROM miscari_fise WHERE fisa_id = '" . $id . "'                 
                    and data_intrare = '" . $data_intrare . "'
                  ";

    $id_gasit = myQuery($query);

    if ($id_gasit->rowCount() == 1) {

        $update_miscari = "UPDATE miscari_fise SET 
                                  casa_marcat = '" . $casa_marcat . "',
                                  raport_z = '" . $raport_z . "',
                                  valoare_z = '" . $valoare_z . "',
                                  tip_alimentare = '" . $tip_alimentare . "',
                                  valoare_alimentare = '" . $valoare_alimentare . "',
                                  km_parcursi = '" . $km_parcursi . "',                                 
                                  nr_bg = '" . $nr_bg . "',
                                  nr_ar_8 = '" . $nr_ar_8 . "',
                                  nr_ar_9 = '" . $nr_ar_9 . "',
                                  valoare_bg = '" . $valoare_bg . "',
                                  valoare_ar_8 = '" . $valoare_ar_8 . "',
                                  valoare_ar_9 = '" . $valoare_ar_9 . "',
                                  nota_explicativa = '" . $nota_explicativa . "'
                                  where fisa_id = '" . $id . "'
                                                ";
        myExec($update_miscari);
    } else {

        $insert_miscari_fisa = "INSERT INTO miscari_fise(fisa_id, casa_marcat, raport_z, valoare_z, tip_alimentare, valoare_alimentare, 
                                km_parcursi, data_intrare, nr_bg, nr_ar_8, nr_ar_9, valoare_bg, valoare_ar_8, valoare_ar_9, nota_explicativa)
                     values
                    ('" . $id . "','" . $casa_marcat . "','" . $raport_z . "','" . $valoare_z . "','" . $tip_alimentare . "',
                    '" . $valoare_alimentare . "','" . $km_parcursi . "','" . $data_intrare . "',
                    '" . $nr_bg . "','" . $nr_ar_8 . "','" . $nr_ar_9 . "','" . $valoare_bg . "','" . $valoare_ar_8 . "','" . $valoare_ar_9 . "','" . $nota_explicativa . "')";

        myExec($insert_miscari_fisa);

    }
    header('Location: /completare_fisa_traseu.php?id=' . $id);
}

if (isset($_POST['consuma_stoc'])) {
    Stocuri::consumaFisaSosire($id);
    header('Location: /completare_fisa_traseu.php?id=' . $id);
}

$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totaltime = ($tend - $tstart);

$smarty->assign('mtime', $mtime);
$smarty->assign('totaltime', $totaltime);
$smarty->display($template);



//if (isset($_POST['adauga_cantitate_extra'])) {
//    $data_intrare = $fisa['data_intrare'];
//
//    if ($cantitate_extra > 0) {
//        debug('cantitate');
//    }
//
//    header('Location: /completare_fisa_traseu.php?id=' . $id);
//}

//                $query_second_obs_clienti = "SELECT second_obs from observatii_secundare_fisa
//                                                 WHERE fisa_id = '" . $id . "'
//                                                 AND client_id = '" . $asignare['client_id'] . "'";
//
//                $obs_second_gasit = myQuery($query_second_obs_clienti);
//                $ret = $obs_second_gasit->fetch(PDO::FETCH_ASSOC);
//                $id_gasit_second_obs_clienti = $ret['second_obs'];

//                if ($obs_second_gasit->rowCount() == 0 && $to_add_obs[$asignare['client_id']] > 0 && $to_add_obssecond[$asignare['client_id']] > 0) {
//                    $insert_second_observatii_clienti = "INSERT INTO observatii_secundare_fisa
//               (fisa_id, client_id, parent_obs, second_obs)
//               values ('" . $id . "','" . $asignare['client_id'] . "','" . $to_add_obs[$asignare['client_id']] . "', '" . $to_add_obssecond[$asignare['client_id']] . "')";
//                    myExec($insert_second_observatii_clienti);
//                } else {
//                    if (($to_add_obs[$asignare['client_id']] == 0
//                            && $to_add_obssecond[$asignare['client_id']] == 0)
//                        || ($to_add_obs[$asignare['client_id']] > 0
//                            && $to_add_obssecond[$asignare['client_id']] > 0)
//                        || ($to_add_obs[$asignare['client_id']] > 0 && $to_add_obssecond[$asignare['client_id']] == 0)
//                    ) {
//                        $update_obs_clienti = "UPDATE observatii_secundare_fisa set
//                                  parent_obs ='" . $to_add_obs[$asignare['client_id']] . "',
//                                  second_obs = '" . $to_add_obssecond[$asignare['client_id']] . "'
//                                  where fisa_id = '" . $id . "'
//                                  and client_id = '" . $asignare['client_id'] . "'";
//                        myExec($update_obs_clienti);
//                    }
//                }

//if ($tip_produs_id > 0) {
////        Select daca am produs introdus
////        and traseu_id = '" . $traseu_by_fisa_generata_id['traseu_id'] . "'
////        and data_intrare = '" . $data_intrare . "'
//
//    $select_id_produs_fisa_intoarcere = "SELECT id from fisa_total_intoarcere
//                                             WHERE fisa_id = '" . $id . "'
//                                             AND stare_produs = '" . $stare_produs . "'
//                                             AND tip_produs_id = '" . $tip_produs_id . "'
//                                             ";
//
//    $id_fisa_gasit_fisa_intoarcere = myQuery($select_id_produs_fisa_intoarcere);
//    $ret_fisa_intoarcere = $id_fisa_gasit_fisa_intoarcere->fetch(PDO::FETCH_ASSOC);
//    $id_fisa_intoarcere = $ret_fisa_intoarcere['id'];
//// select daca am produs adaugat cu cantitati pline sau defecte
//
//    if ($id_fisa_gasit_fisa_intoarcere->rowCount() == 1) {
////            and id = '" . $id_fisa_intoarcere . "'
//        $update_raport_fisa_intoarcere = "UPDATE fisa_total_intoarcere
//                                              SET cantitate = '" . $cantitate . "'
//                                              WHERE fisa_id = '" . $id . "'
//                                              AND stare_produs = '" . $stare_produs . "'
//                                              AND tip_produs_id = '" . $tip_produs_id . "'
//                                                ";
//        myExec($update_raport_fisa_intoarcere);
//
////select produse goale
////            AND traseu_id = '" . $traseu_by_fisa_generata_id['traseu_id'] . "'
////            AND data_intrare = '" . $data_intrare . "'
//
//        $select_goale = "SELECT id from fisa_total_intoarcere
//                              WHERE fisa_id = '" . $id . "'
//                              AND stare_produs = '" . $stare_goale . "'
//                              AND tip_produs_id = '" . $tip_produs_id . "'";
//
//        $id_gasit_goale = myQuery($select_goale);
//        $ret_goale = $id_gasit_goale->fetch(PDO::FETCH_ASSOC);
//        $id_goale = $ret_goale['id'];
//
////            daca am gasit o inregistrare de goale
//        if ($id_gasit_goale->rowCount() == 1) {
////                $intoarcere_marfa_by_fisa_id = Stocuri::getIntoarcereMarfaByFisaIdAndprodusId($id, $tip_produs_id);
////                $smarty->assign('intoarcere_marfa_by_fisa_id', $intoarcere_marfa_by_fisa_id);
//
////                $cantitate_goale = $intoarcere_marfa_by_fisa_id['pline_plecare'] - ($intoarcere_marfa_by_fisa_id['pline_intoarcere'] + $intoarcere_marfa_by_fisa_id['defecte_intoarcere']);
//
////                AND id = '" . $id_goale . "'
////                $update_goale = "UPDATE fisa_total_intoarcere
////                                              SET cantitate = '" . $intoarcere_marfa_by_fisa_id['totaluri']['total_goale'] . "'
////                                              WHERE fisa_id = '" . $id . "'
////                                              AND stare_produs = '" . $stare_goale . "'
////                                              AND tip_produs_id = '" . $tip_produs_id . "'
////                                                ";
//            $update_goale = "UPDATE fisa_total_intoarcere
//                                 SET cantitate = '" . $cantitate . "'
//                                 WHERE fisa_id = '" . $id . "'
//                                 AND stare_produs = '" . $stare_goale . "'
//                                 AND tip_produs_id = '" . $tip_produs_id . "'
//                                                ";
//            myExec($update_goale);
//        }
//
//    } else {
////                aici fac insert daca nu am produs adaugat cu cantitati pline sau defecte
//
//        $insert_fisa_total_intoarcere = "INSERT INTO fisa_total_intoarcere(fisa_id, traseu_id, tip_produs_id, cantitate, stare_produs, data_intrare)
//                     values
//                    ('" . $id . "','" . $traseu_by_fisa_generata_id['traseu_id'] . "',
//                    '" . $tip_produs_id . "','" . $cantitate . "','" . $stare_produs . "','" . $data_intrare . "')";
//        myExec($insert_fisa_total_intoarcere);
//
//
//        //select produse cu stare produs goale
//        $select_goale = "SELECT id from fisa_total_intoarcere where fisa_id = '" . $id . "'
//                                                and traseu_id = '" . $traseu_by_fisa_generata_id['traseu_id'] . "'
//                                                and stare_produs = 2
//                                                and data_intrare = '" . $data_intrare . "'
//                                                and tip_produs_id = '" . $tip_produs_id . "'
//                                                ";
//
//        $id_gasit_goale = myQuery($select_goale);
//        $ret_goale = $id_gasit_goale->fetch(PDO::FETCH_ASSOC);
//        $id_goale = $ret_goale['id'];
//
////            verific dupa insert daca am gasit o inregistrare cu produse goale
//        if ($id_gasit_goale->rowCount() == 1) {
////                daca am gasit fac update la produse goale
//
//            $intoarcere_marfa_by_fisa_id = Stocuri::getIntoarcereMarfaByFisaIdAndprodusId($id, $tip_produs_id);
////                $smarty->assign('intoarcere_marfa_by_fisa_id', $intoarcere_marfa_by_fisa_id);
//
////                $cantitate_goale = $intoarcere_marfa_by_fisa_id['pline_plecare'] - ($intoarcere_marfa_by_fisa_id['pline_intoarcere'] + $intoarcere_marfa_by_fisa_id['defecte_intoarcere']);
////                and id = '" . $id_goale . "'
//
//            $am_gasit_goale = "UPDATE fisa_total_intoarcere
//                                    SET cantitate = '" . $intoarcere_marfa_by_fisa_id['totaluri']['total_goale'] . "'
//                                    WHERE fisa_id = '" . $id . "'
//                                    AND stare_produs = '" . $stare_goale . "'
//                                    AND tip_produs_id = '" . $tip_produs_id . "'
//                                                ";
//            myExec($am_gasit_goale);
//
////                daca nu am gasit goale fac insert cu cantitati goale prin diferenta
//        } else {
//
//            $intoarcere_marfa_by_fisa_id = Stocuri::getIntoarcereMarfaByFisaIdAndprodusId($id, $tip_produs_id);
////                $cantitate_goale = $intoarcere_marfa_by_fisa_id['pline_plecare'] - ($intoarcere_marfa_by_fisa_id['pline_intoarcere'] + $intoarcere_marfa_by_fisa_id['defecte_intoarcere']);
//            $insert_goale = "INSERT INTO fisa_total_intoarcere(fisa_id, traseu_id, tip_produs_id, cantitate, stare_produs, data_intrare)
//                     values
//                    ('" . $id . "','" . $traseu_by_fisa_generata_id['traseu_id'] . "',
//                    '" . $tip_produs_id . "','" . $intoarcere_marfa_by_fisa_id['totaluri']['total_goale'] . "','" . $stare_goale . "','" . $data_intrare . "')";
//
//            myExec($insert_goale);
//        }
//    }
//}
//header('Location: /completare_fisa_traseu.php?id=' . $id);