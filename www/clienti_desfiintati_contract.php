<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Clienti Desfiintati');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti desfiintati');
$template_page = "clienti_desfiintati_contract.tpl";

$depozit_id= getRequestParameter('depozit_id', '');
$an= getRequestParameter('an', '');

$lista_clienti = Clienti::getClientiDesfiintatiByDepozitidAndAn($depozit_id, $an);
$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
