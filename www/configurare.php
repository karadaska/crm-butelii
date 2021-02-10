<?php
$menu_curent = 6;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina configurare');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Configurare');
$template_page = "configurare.tpl";


$smarty->display($template_page);
