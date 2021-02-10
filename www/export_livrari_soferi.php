<?php
require_once 'etc/config.php';
if (!Utilizatori::hasRights(1, 1)) {
    web_redirect('/eroare_faradrept.php');
}
$id = getRequestParameter('id', 0);
$smarty->assign('id', $id);

$nume_sofer = ParcAuto::getSoferById($id);
$smarty->assign('nume_sofer',$nume_sofer);

$data_start = getRequestParameter('data_start', date('Y-m-01'));
$smarty->assign('data_start', $data_start);

$data_stop = getRequestParameter('data_stop', date('Y-m-t'));
$smarty->assign('data_stop', $data_stop);

$livrari_soferi = ParcAuto::getRaportLivrariSoferi($id,
    $opts = array(
        'data_start' => $data_start,
        'data_stop' => $data_stop
    ));
$smarty->assign('livrari_soferi', $livrari_soferi);

$html = '
<table border="1" style ="border: 1px solid black;">
<tr>
<th colspan="4">RAPORT LIVRARE SOFER: '.$nume_sofer['nume'].'</th>
<th colspan="8">Perioada: '.$data_start.' / '.$data_stop.'</th>
</tr>
<tr>
<th  rowspan="2">NUME SI PRENUME</th>
<th  rowspan="2">INDICATOR AUTO</th>
<th  rowspan="2">TRASEU</th>
<th  colspan="3">TOTAL BUTELII VANDUTE</th>
<th colspan="3">TOTAL VALOARE INCASATA</th>
<th colspan="3">TOTAL COMISION</th>
</tr>
<tr>
<td style="text-align: center">BG 11</td>
<td style="text-align: center">AR 8</td>
<td style="text-align: center">AR 9</td>
<td style="text-align: center">BG 11</td>
<td style="text-align: center">AR 8</td>
<td style="text-align: center">AR 9</td>
<td style="text-align: center">BG 11</td>
<td style="text-align: center">AR 8</td>
<td style="text-align: center">AR 9</td>
</tr>
';
$total_bg_11 = 0;
$total_valoare_incasata_bg_11 = 0;
$total_valoare_comision_bg_11 = 0;

$total_ar_8 = 0;
$total_valoare_incasata_ar_8 = 0;
$total_valoare_comision_ar_8 = 0;

$total_ar_9 = 0;
$total_valoare_incasata_ar_9 = 0;
$total_valoare_comision_ar_9 = 0;

//
//($sofer['total_produse']['bg_11']['total_bg_11'] !='') ? $sofer['total_produse']['bg_11']['total_bg_11'] : '-';
//($sofer['total_produse']['ar_8']['total_ar_8'] !='') ? $sofer['total_produse']['ar_8']['total_ar_8'] : '-';
//($sofer['total_produse']['ar_9']['total_ar_9'] !='') ? $sofer['total_produse']['ar_9']['total_ar_9'] : '-';
//
//($sofer['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? $sofer['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-';
//($sofer['total_produse']['ar_8']['total_ar_8_cu_pret'] !='') ? $sofer['total_produse']['ar_8']['total_ar_8_cu_pret'] : '-';
//($sofer['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? $sofer['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-';
//
//($sofer['total_produse']['bg_11']['comision'] !='') ? $sofer['total_produse']['bg_11']['comision'] : '-';
//($sofer['total_produse']['ar_8']['comision'] !='') ? $sofer['total_produse']['ar_8']['comision'] : '-';
//($sofer['total_produse']['ar_9']['comision'] !='') ? $sofer['total_produse']['ar_9']['comision'] : '-';


foreach ($livrari_soferi as $sofer) {
    $html .= '<tr>
          <td style="text-align: left">' . $sofer['nume_sofer'] . '</td>
          <td style="text-align: center">' . $sofer['numar'] . '</td>
          <td style="text-align: center">' . $sofer['nume_traseu'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['bg_11']['total_bg_11'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['ar_8']['total_ar_8'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['ar_9']['total_ar_9'] . '</td>
          <td style="text-align: center;">' . $sofer['total_produse']['bg_11']['total_bg_11_cu_pret'] . '</td>
          <td style="text-align: center;">' . $sofer['total_produse']['ar_8']['total_ar_8_cu_pret'] . '</td>
          <td style="text-align: center;">' . $sofer['total_produse']['ar_9']['total_ar_9_cu_pret'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['bg_11']['comision'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['ar_8']['comision'] . '</td>
          <td style="text-align: center">' . $sofer['total_produse']['ar_9']['comision'] . '</td>
         </tr>';

    $total_bg_11 = $total_bg_11 + $sofer['total_produse']['bg_11']['total_bg_11'];
    $total_ar_8 = $total_ar_8 + $sofer['total_produse']['ar_8']['total_ar_8'];
    $total_ar_9 = $total_ar_9 + $sofer['total_produse']['ar_9']['total_ar_9'];

    $total_valoare_incasata_bg_11 = $total_valoare_incasata_bg_11 + $sofer['total_produse']['bg_11']['total_bg_11_cu_pret'];
    $total_valoare_incasata_ar_8 = $total_valoare_incasata_ar_8 + $sofer['total_produse']['ar_8']['total_ar_8_cu_pret'];
    $total_valoare_incasata_ar_9 = $total_valoare_incasata_ar_9 + $sofer['total_produse']['ar_9']['total_ar_9_cu_pret'];

    $total_valoare_comision_bg_11 = $total_valoare_comision_bg_11 + $sofer['total_produse']['bg_11']['comision'];
    $total_valoare_comision_ar_8 = $total_valoare_comision_ar_8 + $sofer['total_produse']['ar_8']['comision'];
    $total_valoare_comision_ar_9 = $total_valoare_comision_ar_9 + $sofer['total_produse']['ar_9']['comision'];
}

$html .= '<tr>
          <th style="text-align: right" colspan="3">Total</th>
          <th style="text-align: center;">'.$total_bg_11.'</th>
          <th style="text-align: center;">'.$total_ar_8.'</th>
          <th style="text-align: center;">'.$total_ar_9.'</th>
          <th style="text-align: center;">'.$total_valoare_incasata_bg_11.'</th>
          <th style="text-align: center;">'.$total_valoare_incasata_ar_8.'</th>
          <th style="text-align: center;">'.$total_valoare_incasata_ar_9.'</th>
          <th style="text-align: center;">'.$total_valoare_comision_bg_11.'</t>
          <th style="text-align: center;">'.$total_valoare_comision_ar_8.'</th>
          <th style="text-align: center;">'.$total_valoare_comision_ar_9.'</th>
         </tr>';

$tbl .= '</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=export_livrare_sofer.xls');
header("Expires: 0");
echo $html;


//<?php
//require_once 'etc/config.php';
//if ( ! Utilizatori::hasRights(1, 1)){
//    web_redirect('/eroare_faradrept.php');
//}
//
//require_once('include/tcpdf.php');
//$traseu_id     = getRequestParameter('traseu_id', 0);
//
//// create new PDF document
//$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
//
//$pdf->SetCreator(ADRESA_EMAIL);
//$pdf->SetAuthor(ADRESA_EMAIL);
//$pdf->SetTitle('Apeluri clienti');
//$pdf->SetSubject($traseu_id);
//
////$pdf->SetHeaderData('../images/logo.png');
//
////$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
////$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
////$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//
//// set auto page breaks
//$pdf->SetAutoPageBreak(true, 25);
//$pdf->setImageScale(1.25);
//$pdf->SetFont('helvetica', 'B', 14);
//$traseu_id = 'Nume traseu';
//// add a page
//$pdf->AddPage();
//$pdf->Write(0, 'Apeluri clienti ' . $traseu_id, '', 0, 'L', true, 0, false, false, 0);
//$pdf->SetFont('helvetica', '', 8);
//
//$tbl = '<table cellpadding="1" cellspacing="0" border="1">
//<tr>
//    <td align="center">Nr</td>
//    <td align="center">Localitate</td>
//    <td align="center">Client</td>
//    <td align="center">Telefon</td>
//    <td align="center">Stoc Client</td>
//    <td align="center">Cantitati</td>
//</tr>';
//
//$tbl .= '</table>';
//
//$pdf->writeHTML($tbl, true, false, false, false, '');
//$pdf->Output('apeluri_clienti_' . str_replace(' ', '_', $traseu_id) . '_'.$an.'.pdf', 'I');
