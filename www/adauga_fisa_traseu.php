<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Clienti');
$template_page = "adauga_fisa_traseu.tpl";
$adauga = getRequestParameter('adauga', '');

$depozit_id = getRequestParameter('depozit_id', '');
$traseu_id = getRequestParameter('traseu_id', '');
$masina_id = getRequestParameter('masina_id', '');
$sofer_id = getRequestParameter('sofer_id', '');
$data_intrare = getRequestParameter('data_intrare', '');

$lista_soferi = ParcAuto::getSoferi();
$smarty->assign('lista_soferi', $lista_soferi);

$lista_masini = ParcAuto::getMasini();
$smarty->assign('lista_masini', $lista_masini);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);


if ($data_intrare == '' || $data_intrare == 0) {
    $data_intrare = date('Y-m-d');
}

$conditie = $depozit_id > 0 and $traseu_id > 0 and $masina_id > 0 and $sofer_id > 0;
if (isset($_POST['genereaza_fisa_traseu']) and $conditie) {

    $select_last_fisa_id = "SELECT id from fise_generate
                            where depozit_id = '" . $depozit_id . "'
                            and traseu_id = '" . $traseu_id . "'
                            and masina_id = '" . $masina_id . "'
                            and sofer_id = '" . $sofer_id . "'
                            and data_intrare = '" . $data_intrare . "'
                            ORDER BY id DESC LIMIT 1";
    $id_gasit = myQuery($select_last_fisa_id);
    $ret = $id_gasit->fetch(PDO::FETCH_ASSOC);
    $id_fisa = $ret['id'];

//    if ($id_gasit->rowCount() == 0) {
        $insert_fise_generate = 'INSERT INTO fise_generate(depozit_id, traseu_id, sofer_id, masina_id, data_intrare)
        values
        ("' . $depozit_id . '","' . $traseu_id . '","' . $sofer_id . '","' . $masina_id . '", "' . $data_intrare . '")';
        myExec($insert_fise_generate);
        header('Location: /fisa_traseu.php');

        $select_last_fisa_id = "SELECT * from fise_generate ORDER BY id DESC LIMIT 1";
        $id_gasit = myQuery($select_last_fisa_id);
        $ret = $id_gasit->fetch(PDO::FETCH_ASSOC);
        $id_fisa = $ret['id'];
        $id_traseu = $ret['traseu_id'];

        if (isset($_POST['import_clienti_trasee'])) {
//            $lista_asignari_clienti_trasee = Asignari::getAsignariClientiByTraseuId($id_traseu);
            $lista_asignari_clienti_trasee = Clienti::getClientiByTraseuId($id_traseu);
             pre($lista_asignari_clienti_trasee);
            foreach ($lista_asignari_clienti_trasee as $clienti_asignati) {
                $query = "INSERT INTO clienti_asignati_fise_generate(fisa_generata_id, client_id, data_intrare, ordine_client)
        values
        ('" . $id_fisa . "','" . $clienti_asignati['client_id'] . "','" . $data_intrare . "','" . $clienti_asignati['ordine'] . "')";
                myExec($query);
            }
        };

//    fac redirect sa duca in pagina de edit fisa
    $select_id_fisa_desc = "SELECT id from fise_generate ORDER BY ID DESC LIMIT 1";
    $id_fisa_desc = myQuery($select_id_fisa_desc);
    $ret = $id_fisa_desc->fetch(PDO::FETCH_ASSOC);
    $ultimul_id_fisa = $ret['id'];

    header('Location: /edit_fisa_traseu.php?id=' .$ultimul_id_fisa);

}


$smarty->display($template_page);