<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Clienti Asignati Culoare');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti asignati dupa culoare');
$template_page = "clienti_asignati_culoare.tpl";

$id = getRequestParameter('id', '');

$clienti_asignati_culoare = Clienti::getClientiByCuloareId($id);
$smarty->assign('clienti_asignati_culoare', $clienti_asignati_culoare);

$smarty->display($template_page);
