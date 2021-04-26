<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/conditionizr.min.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>
<script src="js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
<script src="js/plugins/core/jrespond/jRespond.min.js"></script>
<script src="js/jquery.genyxAdmin.js"></script>
<script src="js/plugins/forms/uniform/jquery.uniform.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/plugins/forms/autosize/jquery.autosize-min.js"></script>
<script src="js/plugins/forms/inputlimit/jquery.inputlimiter.1.3.min.js"></script>
<script src="js/plugins/forms/mask/jquery.mask.min.js"></script>
<script src="js/plugins/forms/switch/bootstrapSwitch.js"></script>
<script src="js/plugins/forms/globalize/globalize.js"></script>
<script src="js/plugins/forms/spectrum/spectrum.js"></script><!--  Color picker -->
<script src="js/plugins/forms/datepicker/bootstrap-datepicker.js"></script>
<script src="js/plugins/forms/multiselect/ui.multiselect.js"></script>
<script src="js/plugins/forms/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="js/plugins/forms/validation/jquery.validate.js"></script>
<script src="js/plugins/forms/select2/select2.js"></script>
<html>
<head>
    <style type='text/css' media="print">
        body {
            visibility: hidden;
            font-family: Verdana;
            font-size: 14px;
        }

        .print {
            visibility: visible;
        }

        .ascuns {
            visibility: hidden;
        }

        table {
            font-size: 16px;
        }

        td {
            font-weight: normal;
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>
    <script type="text/javascript">
        function setPrint() {
            jQuery("#print_button").attr({
                "class": "ascuns"
            });
        }
    </script>
</head>
<body>
<section id="content" class="print">
    <div class="wrapper">
        <input type="button" onclick="setPrint();window.print();return false;" id="print_button" name="print_button"
               value="PRINT"/>
        <a href="/completare_fisa_traseu.php?id={$id}"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;font-weight: 400" class="span3">
                <h3>
                    TRASEU: {$print_fisa['nume_traseu']}<br/>
                    SOFER: {$print_fisa['nume_sofer']}<br/>
                    MASINA: {$print_fisa['numar']}<br/>
                    {$data = $print_fisa['data_intrare']}
                    {$newDate = date("d-m-Y", strtotime($data))}
                    <span style="font-weight: 900;margin-top: 20px;"> DATA: {$newDate}</span>
                </h3>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 100%">
        <tr>
            <th>#</th>
            <th>CLIENT</th>
            <th style="text-align: center;">DETALII</th>
            <th style="text-align: center;">OBSERVATII</th>
            <th style="text-align: center;">OBSERVATII EXTRA</th>
        </tr>
        {$nr = 1}
        {foreach from=$print_fisa['clienti'] item="client"}
            <tr>
                <td style="text-align: center;">{$nr++}</td>
                <td>{strtoupper($client['nume_client'])}</td>
                <td>
                    {if (count($client['realizat']) > 0)}
                        <table border="1" style="width: 100%">
                            <tr>
                                <td style="text-align: center;width: 150px;">PRODUS</td>
                                <td style="text-align: center;">VANDUTE</td>
                                <td style="text-align: center;">DEFECTE</td>
                            </tr>
                            {foreach from=$client['realizat'] item= realizat}
                                <tr>
                                    <td>{$realizat['nume_produs']}:</td>
                                    <td style="text-align: right;">{($realizat['cantitate'] > 0) ? $realizat['cantitate'] : '-'}</td>
                                    <td style="text-align: right;">{($realizat['defecte'] > 0) ? $realizat['defecte'] : '-'}</td>
                                </tr>
                            {/foreach}
                        </table>
                    {else}
                        <div style="text-align: center;">-</div>
                    {/if}
                </td>
                <td style="text-align: center;">
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$client['fisa_generata_id'])}
                    {($client_observatie['nume_observatie'] !='') ? $client_observatie['nume_observatie'] : '-'}
                </td>
                <td style="text-align: center;">
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$client['fisa_generata_id'])}
                    {($client_observatie['observatie_extra'] !='') ? $client_observatie['observatie_extra'] :'-'}
                </td>
            </tr>
        {/foreach}
    </table>
    <div style="display: inline-flex;margin-top: 20px;">
        {if ($print_fisa['grand_total_vandute_bg'] != 0 || $print_fisa['grand_defecte_bg'] != 0 || $produs_extra_bg['cantitate_extra'] > 0)}
            <div>
                <table border="1" style="width: 200px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">BG</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_bg']  + $produs_extra_bg['cantitate_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_bg'] + ($produs_extra_bg['cantitate_extra'] * $produs_extra_bg['pret_extra'])}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_comision_bg']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;">{($print_fisa['grand_defecte_bg'] > 0) ? $print_fisa['grand_defecte_bg'] : '-'}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_8'] != 0 || $print_fisa['grand_defecte_ar_8'] != 0 || $produs_extra_ar_8['cantitate_extra'] > 0)}
            <div style="margin-left: 10px;">
                <table border="1" style="width: 200px;">
                    <tr>
                        <th style="text-align: center;font-weight: 900;" colspan="2">AR
                            8
                        </th>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_ar_8'] + $produs_extra_ar_8['cantitate_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_ar_8'] + ($produs_extra_ar_8['cantitate_extra'] * $produs_extra_ar_8['pret_extra'])}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_comision_ar_8']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_defecte_ar_8']}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_9'] != 0 || $print_fisa['grand_defecte_ar_9'] != 0 || $produs_extra_ar_9['cantitate_extra'] > 0)}
            <div style="margin-left: 5px;">
                <table border="1" style="width: 200px;">
                    <tr>
                        <td style="text-align: center;font-weight: 600;" colspan="2">AR
                            9
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_ar_9'] + $produs_extra_ar_9['cantitate_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_ar_9'] + ($produs_extra_ar_9['cantitate_extra'] * $produs_extra_ar_9['pret_extra'])}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_comision_ar_9']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_defecte_ar_9']}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {$total_afisare = $print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_9'] + $print_fisa['grand_total_vandute_ar_9'] +  $print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9']}
        {if ($total_afisare != 0)}
            <div style="margin-left: 5px;">
                <table border="1" style="width: 200px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">
                            TOTALURI
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_8'] + $print_fisa['grand_total_vandute_ar_9']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">VAL. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_bg'] + $print_fisa['grand_valoare_ar_8'] + $print_fisa['grand_valoare_ar_9']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">COM. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_comision_bg'] + $print_fisa['grand_comision_ar_8'] + $print_fisa['grand_comision_ar_9']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">DEF. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9']}</td>
                    </tr>
                </table>
            </div>
        {/if}
    </div>
    <div style="margin-top: 100px;"></div>
</section>
</body>
</html>
