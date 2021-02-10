<?php
require_once 'etc/config.php';
if ( ! Utilizatori::hasRights(1, 1)){
    web_redirect('/eroare_faradrept.php');
}

$html = '
<table border="1" style ="border: 1px solid black;">
<tr>
<td>mumu</td>
<td>sas</td>
</tr>
</table>
';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=export.xls');
header ("Expires: 0");
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
