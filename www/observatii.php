<?php
$menu_curent = 3;
require_once('etc/config.php');

$smarty->assign('name', 'Pagina observatii');
$smarty->assign('nume', 'Observatii');
$template_page = "observatii.tpl";

if (!Utilizatori::hasRights(1, 4)) {
    web_redirect('/eroare_faradrept.php');
}
$form_submit = getRequestParameter('form_submit', 0);
$tip_observatie = getRequestParameter('tip_observatie', 0);
$adauga = getRequestParameter('adauga', '');
$observatie= getRequestParameter('observatie', '');


$lista_tip_observatii = Clienti::getTipObservatiiClienti();
$smarty->assign('lista_tip_observatii',$lista_tip_observatii);

$lista_observatii = Clienti::getObservatiiClienti();
$smarty->assign('lista_observatii',$lista_observatii);


if ($adauga) {

    $sql = "SELECT id FROM observatii 
            WHERE `nume`='" . $observatie . "' 
            and  tip_observatie = '" . $tip_observatie . "'
            LIMIT 1";
    $result = myQuery($sql);

    $ret = $result->fetch(PDO::FETCH_ASSOC);
    $observatie_noua = $ret['id'];

    if ($observatie_noua == 0 and $observatie != '' and Utilizatori::hasRights(1)) {
        $query = "insert into observatii(nume, tip_observatie)
        values ('" . $observatie . "', '" . $tip_observatie . "');";
        myExec($query);
    }
    header('Location: /observatii.php');

}


$smarty->display($template_page);
