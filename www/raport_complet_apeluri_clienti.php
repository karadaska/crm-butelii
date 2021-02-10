<?php
$menu_curent = 3;
require_once('etc/config.php');
if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Raport complet suna traseu');
$template_page = "raport_complet_apeluri_clienti.tpl";

$form_submit = getRequestParameter('form_submit', 0);
$valoare_client_id = getRequestParameter('valoare_client_id', 0);
$aplica = getRequestParameter('aplica', 0);

$observatie_id = getRequestParameter('observatie_id', 0);
$smarty->assign('observatie_id', $observatie_id);

$urgent = getRequestParameter('urgent', -1);
$smarty->assign('urgent', $urgent);

$data_start = getRequestParameter('data_start',date('Y-m-d'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-d'));
$smarty->assign('data_stop', $data_stop);

$traseu_id = getRequestParameter('traseu_id', 0);
$smarty->assign('traseu_id', $traseu_id);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$stare_id = getRequestParameter('stare_id', 1);
$smarty->assign('stare_id', $stare_id);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$x = date('Y-m-d');
$smarty->assign('x', $x);

$lista_clienti = Clienti::getApeluri(array(
        'traseu_id' => $traseu_id,
        'stare_id' => $stare_id,
        'observatie_id' => $observatie_id,
        'urgent' => $urgent,
        'data_start' => $data_start,
        'data_stop' => $data_stop

    )
);
$smarty->assign('lista_clienti', $lista_clienti);


$smarty->display($template_page);
