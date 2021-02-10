<?php
require_once 'etc/config.php';
$smarty->assign('name', 'Clienti');
$template_page = "adauga_client.tpl";
$adauga = getRequestParameter('adauga', '');
$smarty->assign('adaugat', 0);
if ($adauga) {
    $nume = getRequestParameter0('nume', '');
    $traseu_id = getRequestParameter('traseu_id', '');
    $judet_id = getRequestParameter('judet_id', '');
    $localitate_id = getRequestParameter('localitate_id', '');
    $adresa = getRequestParameter('adresa', '');
    $stare_id = getRequestParameter('stare_id', 1);
    $culoare_id = getRequestParameter('culoare_id', 1);
    $telefon = getRequestParameter('telefon', '');
    $telefon_2 = getRequestParameter('telefon_2', '');
    $cnp = getRequestParameter('cnp', '');
    $ci = getRequestParameter('ci', '');
    $contract = getRequestParameter('contract', '');
    $titular = getRequestParameter('titular', '');
    $rastel = getRequestParameter('rastel', '');
    $culoare = getRequestParameter('culoare', '');
    $data_start = getRequestParameter('data_start', '');

    $latitudine = getRequestParameter('latitudine', '');
    $longitudine = getRequestParameter('longitudine', '');

    if ($nume !='' and Utilizatori::hasRights(1, 4)) {
        $query = 'insert into clienti(nume,judet_id,localitate_id, adresa, stare_id, telefon,telefon_2, cnp, ci, contract,
                  titular, rastel, culoare_id, data_start, latitudine, longitudine)
        values
                ("' . $nume . '","' . $judet_id . '","' . $localitate_id . '","' . $adresa . '",
                "' . $stare_id . '","' . $telefon . '","' . $telefon_2 . '","' . $cnp . '","' . $ci . '",
                "' . $contract . '","' . $titular . '","' . $rastel . '","' . $culoare_id . '",
                "' . $data_start . '","' . $latitudine . '","' . $longitudine . '");';

        $rows = myExec($query);
        if ($rows == 1) {
            $smarty->assign('adaugat', 1);
            $query = 'SELECT id from clienti order by id desc limit 1';
            $result = myQuery($query);
            $ret = $result->fetch(PDO::FETCH_ASSOC);
            $client_nou = $ret['id'];

            if (Utilizatori::hasRights(1, 5) and strlen($nume) > 2 and $traseu_id > 0) {
                $query = 'insert into asignari_clienti_trasee (client_id,traseu_id,data_start)
                                values ("' . $client_nou . '","' . $traseu_id . '","' . $data_start . '");';
                myExec($query);
            }
        } else {
            $smarty->assign('adaugat', 2);
        }
    }
    web_redirect('clienti.php');
}
$lista_judete = Zone::getZone();
$smarty->assign('lista_judete', $lista_judete);

$lista_localitati = Zone::getLocalitati();
$smarty->assign('lista_localitati', $lista_localitati);

$lista_stari = Clienti::getStariClienti();
$smarty->assign('lista_stari', $lista_stari);

$lista_trasee = Trasee::getTrasee();
$smarty->assign('lista_trasee', $lista_trasee);

$lista_depozite = Depozite::getDepozite();
$smarty->assign('lista_depozite', $lista_depozite);

$culori_butelii = Produse::getCuloriButelii();
$smarty->assign('culori_butelii', $culori_butelii);
$smarty->display($template_page);