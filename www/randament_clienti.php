<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$data_start = date('Y-m-d');

$smarty->assign('name', 'Randament clienti');
$template_page = "randament_clienti.tpl";

$traseu_id = getRequestParameter('traseu_id', 1);
$smarty->assign('traseu_id', $traseu_id);

$id_traseu = getRequestParameter('id_traseu', '');
$id_perioada = getRequestParameter('id_perioada', '');
$perioada_select = getRequestParameter('perioada_select', '');

$perioada_id = getRequestParameter('perioada_id', date('n'));
$smarty->assign('perioada_id', $perioada_id);

$an = getRequestParameter('an', date('Y'));
$smarty->assign('an', $an);

$id_an = getRequestParameter('id_an', '');

$lista_trasee = Trasee::getTraseeNew(array(
    'cu_asignari' => false
));
$smarty->assign('lista_trasee', $lista_trasee);

$lista_clienti = Trasee::getAsignareClientiTraseuByClientid($traseu_id);
$smarty->assign('lista_clienti', $lista_clienti);

$lista_perioade = Calendar::getPerioada();
$smarty->assign('lista_perioade', $lista_perioade);

$lista_ani = Calendar::getAni();
$smarty->assign('lista_ani', $lista_ani);

$conditie_update = '';
if (($an >= 2021 || ($an == 2020 && $perioada_id >=11))) {
    $conditie_update = "readonly";
    $smarty->assign('conditie_update', $conditie_update);
}

if (isset($_POST['update'])) {
    Clienti::seteazaRandamentClienti($id_traseu);
}

foreach ($lista_clienti as $client) {
    $randamentclientdinfisa = Clienti::getRandamentByClientIdDinFise($client['client_id'], array(
        'an' => $an,
        'perioada_id' => $perioada_id
    ));
    $smarty->assign('randamentclientdinfisa_' . $client['client_id'], $randamentclientdinfisa);
}

foreach ($lista_clienti as $client) {
    $randament = Clienti::getRandamentByClientIdDinFiseNew($client['client_id'], array(
        'an' => $an,
        'perioada_id' => $perioada_id
    ));
    $smarty->assign('randament_' . $client['client_id'], $randament);
}

$smarty->display($template_page);

