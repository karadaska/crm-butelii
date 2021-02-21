<?php
$menu_curent = 3;
require_once('etc/config.php');

if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Filtreaza observatii');
$template_page = "filtreaza_observatii.tpl";

$adauga_observatie = getRequestParameter('adauga_observatie', 0);

//$observatie_id = getRequestParameter('observatie_id', '');
//$smarty->assign('observatie_id', $observatie_id);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii', $lista_observatii);

$lista_observatii_filtrate = Clienti::getListaObservatiiPentruFiltrare();
$smarty->assign('lista_observatii_filtrate', $lista_observatii_filtrate);



if ($adauga_observatie) {
    debug('test');
    $observatie_id = getRequestParameter('observatie_id', '');


    $sql = "SELECT id FROM observatii_filtrate WHERE `obs_id`='" . $observatie_id . "' and sters = 0 LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $obs_noua = $ret['id'];

    if ($obs_noua == 0 and Utilizatori::hasRights(1)) {
        $query = "INSERT INTO observatii_filtrate (obs_id)
        values ('" . $observatie_id . "');";
        myExec($query);
    }
    header('Location: /filtreaza_observatii.php');

}

$smarty->display($template_page);
