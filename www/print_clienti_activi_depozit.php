<?php
$menu_curent = 6;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}
$nr = 1;
$smarty->assign('nr',$nr);


$smarty->assign('name', 'Print clienti activi pe depozit');
$template_page = "print_clienti_activi_depozit.tpl";

$depozit_id = getRequestParameter('depozit_id', '');
$smarty->assign('depozit_id', $depozit_id);

$lista_clienti = Clienti::getListaClientiDepozitActivi(array(
    'depozit_id' => $depozit_id
));

$smarty->assign('lista_clienti', $lista_clienti);

$smarty->display($template_page);
?>



