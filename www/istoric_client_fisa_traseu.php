<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Istoric client produse fisa traseu');
$template = 'istoric_client_fisa_traseu.tpl';

$id = getRequestParameter('id', 0);

$client = Clienti::getClientById($id);
$smarty->assign('client', $client);

$cantitati_produse_fisa_intoarcere = Clienti::getFiseByClientId($id);
$smarty->assign('cantitati_produse_fisa_intoarcere', $cantitati_produse_fisa_intoarcere);

$smarty->display($template);
