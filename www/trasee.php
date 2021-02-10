<?php
$menu_curent = 6;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina trasee');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Trasee');
$template_page = "trasee.tpl";

$lista_trasee= Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$smarty->display($template_page);
