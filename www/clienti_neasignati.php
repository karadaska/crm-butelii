<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Clienti Activi');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti stersi');
$template_page = "clienti_neasignati.tpl";

$depozit_id= getRequestParameter('depozit_id', '');
$an= getRequestParameter('an', '');

$clienti_neasignati = Clienti::getClientiNeasignati();
$smarty->assign('clienti_neasignati', $clienti_neasignati);

$smarty->display($template_page);
