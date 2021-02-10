<?php
$menu_curent = 7;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina masini');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Masini');
$template_page = "masini.tpl";

$lista_masini = ParcAuto::getMasini();
$smarty->assign('lista_masini', $lista_masini);

$smarty->display($template_page);
