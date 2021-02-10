<?php
$menu_curent = 8;

require_once('etc/config.php');
if (!Utilizatori::hasRights(1)) {
    web_redirect('/eroare_faradrept.php');
}

$smarty->assign('name', 'Edit culoare');
$template = 'edit_culoare.tpl';

$id = getRequestParameter('id', 0);
$modifica = getRequestParameter('modifica', 0);
$nume = getRequestParameter('nume', 0);

$culoare_id = Produse::getCuloareById($id);
$smarty->assign('culoare_id', $culoare_id);

if ($modifica and $nume != '') {

    $query = "UPDATE culori_butelii set nume = '" . $nume . "' where id = '" . $id . "'";

    $rows = myQuery($query);
    header('Location: /culori_butelii.php');
}


$smarty->display($template);


