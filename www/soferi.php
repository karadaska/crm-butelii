<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Soferi');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Soferi');
$template_page = "soferi.tpl";

$lista_soferi = ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$smarty->display($template_page);
