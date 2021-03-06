<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Clienti Activi');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti stersi');
$template_page = "clienti_stersi.tpl";

$depozit_id= getRequestParameter('depozit_id', '');
$an= getRequestParameter('an', '');

$lista_clienti = Clienti::getClientiStersiByDepozitidAndAn($depozit_id, $an);
$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
