<?php
$menu_curent = 3;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina localitati');
$smarty->assign('nume', 'Localitati');
$template_page = "localitati.tpl";

if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$form_submit = getRequestParameter('form_submit', 0);

$lista_localitati = Zone::getLocalitati();
$smarty->assign('lista_localitati', $lista_localitati);

$smarty->display($template_page);
