<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Clienti Asignati Culoare');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti fara culoare asignata');
$template_page = "clienti_fara_culoare.tpl";

$clienti_fara_culori = Clienti::getClientiFaraCuloare();
$smarty->assign('clienti_fara_culori', $clienti_fara_culori);

$smarty->display($template_page);
