<?php
$menu_curent = 6;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina trasee');


if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Trasee');
$template_page = "clienti_by_pret.tpl";
$pret = getRequestParameter('pret', 0);

$depozit_id = getRequestParameter('depozit_id', 0);

$tip_produs_id = getRequestParameter('tip_produs_id', 0);




//$lista_clienti= Clienti::getListaClientiByPret($pret, $depozit_id,$tip_produs_id);
$lista_clienti= Clienti::getListaClientiByPret($pret, $depozit_id,$tip_produs_id);
$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
