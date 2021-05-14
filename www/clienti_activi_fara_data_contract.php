<?php
$menu_curent = 9;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina Clienti Activi');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('nume', 'Clienti activi fara data contract');
$template_page = "clienti_activi_fara_data_contract.tpl";

$depozit_id= getRequestParameter('depozit_id', '');
$an= getRequestParameter('an', '');

$lista_clienti = Clienti::getClientiActiviFaraDataContractByDepozitidAndAn($depozit_id);
$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
