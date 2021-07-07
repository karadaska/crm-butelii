<?php
$menu_curent = 4;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina butelii');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Butelii');
$template_page = "culori_butelii.tpl";

$culori_butelii = Produse::getCuloriButelii();
$smarty->assign('culori_butelii', $culori_butelii);

$clienti_fara_culori = Clienti::getClientiFaraCuloare();
$smarty->assign('clienti_fara_culori', $clienti_fara_culori);

$smarty->display($template_page);
