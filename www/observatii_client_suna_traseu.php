<?php
//$menu_curent = 2;
//
//require_once('etc/config.php');
//if (!Utilizatori::hasRights(1, 6)) {
//    web_redirect('/eroare_faradrept.php');
//}
//
//$smarty->assign('name', 'Observatii client suna traseu');
//$template = 'observatii_client_suna_traseu.tpl';
//
//$id = getRequestParameter('id', 0);
//
////$observatie_by_client_id = Clienti::getObservatiiSunaTraseuByClientId($id);
////$smarty->assign('observatie_by_client_id', $observatie_by_client_id);
//
//$target_by_client_id = Target::getTargetClient($id);
//$smarty->assign('target_by_client_id', $target_by_client_id);
//
//$client = Clienti::getClientById($id);
//$smarty->assign('client', $client);
//
//$lista_produse = Produse::getTipProdus();
//$smarty->assign('lista_produse', $lista_produse);
//
//$cantitati_produse_fisa_intoarcere = Clienti::getCantitatiProduseFisaSosireByClientId(array(
//    'client_id' => $id
//));
//$smarty->assign('cantitati_produse_fisa_intoarcere', $cantitati_produse_fisa_intoarcere);
//
//$smarty->display($template);
