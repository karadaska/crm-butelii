<?php
require_once 'etc/config.php';
if (!Utilizatori::hasRights(1, 32)) {
    web_redirect('/eroare_faradrept.php');
}
$smarty->assign('name', 'Clienti');
$template_page = "import_clienti.tpl";

$adauga = getRequestParameter('adauga', '');
$data_start = date('Y-m-d');
$nr_adaugate    = 0;

if ($adauga) {
    if (isset($_FILES['fisier'])) {
        if (file_exists($_FILES['fisier']['tmp_name'])) {
            $handle = fopen($_FILES['fisier']['tmp_name'], "r");
            while (!feof($handle)) {
                $error = 0;
                $buffer = fgets($handle);
                $pieces = explode(';', $buffer);
                $nume = trim($pieces[0]);
                $judet_id = trim($pieces[1]);
                $nume_localitate = trim($pieces[2]);
                $stare_id = trim($pieces[3]);
                $telefon = trim($pieces[4]);
                $cnp = trim($pieces[5]);
                $ci = trim($pieces[6]);
                $contract = trim($pieces[7]);
                $titular = trim($pieces[8]);
                $rastel = trim($pieces[9]);
                $culoare = trim($pieces[10]);
                $data_start = (trim($pieces[11]));


                $query = 'select id from clienti_test where nume="' . $nume . '"';
                $result = myQuery($query);
                if ($result->rowCount() > 0) {
                    $error = 1;
                }

                if ($error == 0) {
                    $select_id_localitati = 'SELECT id FROM localitati WHERE nume ="' . $nume_localitate . '" and judet_id = "' . $judet_id . '" LIMIT 1';
                    $id_gasit = myQuery($select_id_localitati);
                    $ret = $id_gasit->fetch(PDO::FETCH_ASSOC);
                    $id_localitati = $ret['id'];
                    debug($id_localitati = $ret['id']);

                    $query = 'insert into clienti_test (nume, judet_id, localitate_id, stare_id, telefon, cnp, ci, contract, titular, rastel, culoare_id, data_start)
                            values ("' . $nume . '","' . $judet_id . '","' . $id_localitati . '",
                            "' . $stare_id . '","' . $telefon . '","' . $cnp . '","' . $ci . '",
                            "' . $contract . '","' . $titular . '","' . $rastel . '",
                            "' . $culoare . '","' . $data_start . '")';
                    $rows = myExec($query);
                    $nr_adaugate ++;
                }else{
                    debug($id_localitati = $ret['nume']);
                }
            }
            fclose($handle);
            debug('clienti adaugati: ' . $nr_adaugate);

        }
    }
}

$smarty->display($template_page);