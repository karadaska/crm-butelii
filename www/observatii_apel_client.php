<?php
$menu_curent = 2;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 6)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Observatii apeluri');
$template = 'observatii_apel_client.tpl';

$id = getRequestParameter('id', 0);

$observatii_by_client_id = Clienti::getObservatiiApeluriByClientId($id);
$smarty->assign('observatie_by_client_id', $observatii_by_client_id);

$smarty->display($template);
