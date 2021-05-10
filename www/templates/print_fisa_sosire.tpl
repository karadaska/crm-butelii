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
                <td style="text-align: left">
                    <table border="1" style="width: 100%">
                        {if $client['vandute_ar_9'] > 0 || $client['vandute_ar_9_extra'] > 0 || $client['defecte_ar_9'] || $client['vandute_bg_extra'] || $client['vandute_bg'] || $client['vandute_ar_8_extra'] || $client['vandute_ar_8']}
                            <tr>
                                <td></td>
                                <td><span style="float: left;">Pline</span><span style="float: right">Defecte</span>
                                </td>
                            </tr>
                        {else}
                            -
                        {/if}
                        {if $client['vandute_bg'] > 0 || $client['vandute_bg_extra'] > 0 || $client['defecte_bg']}
                            <tr>
                                <td style="width: 80px;">BG</td>
                                <td>
                                    <table border="1" style="width: 100%">
                                        <tr>
                                            <td style="text-align: left;width: 50%">{($client['vandute_bg'] + $client['vandute_bg_extra'] > 0) ? ($client['vandute_bg'] + $client['vandute_bg_extra']) : '-'}</td>
                                            <td style="text-align: right;width: 50%">{($client['defecte_bg'] > 0) ? $client['defecte_bg'] : '-'}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        {/if}
                        {if $client['vandute_ar_9'] > 0 || $client['vandute_ar_9_extra'] > 0 || $client['defecte_ar_9']}
                            <tr>
                                <td style="width: 80px;">AR 9</td>
                                <td>
                                    <table border="1" style="width: 100%">
                                        <tr>
                                            <td style="text-align: left;width: 50%">{($client['vandute_ar_9'] + $client['vandute_ar_9_extra'] > 0) ? ($client['vandute_ar_9'] + $client['vandute_ar_9_extra']) : '-'}</td>
                                            <td style="text-align: right;width: 50%">{($client['defecte_ar_9'] > 0) ? $client['defecte_ar_9'] : '-'}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        {/if}
                        {if $client['vandute_ar_8'] > 0 || $client['vandute_ar_8_extra'] > 0 || $client['defecte_ar_8']}
                            <tr>
                                <td style="width: 80px;">AR 8</td>
                                <td>
                                    <table border="1" style="width: 100%">
                                        <tr>
                                            <td style="text-align: left;width: 50%"
                                            >{($client['vandute_ar_8'] + $client['vandute_ar_8_extra'] > 0) ? ($client['vandute_ar_8'] + $client['vandute_ar_8_extra']) : '-'}</td>
                                            <td style="text-align: right;width: 50%"
                                            ">{($client['defecte_ar_8'] > 0) ? $client['defecte_ar_8'] : '-'}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        {/if}
                    </table>
                </td>
                <td style="text-align: center;">
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$print_fisa['id'])}
                    {($client_observatie['nume_observatie'] !='') ? $client_observatie['nume_observatie'] : '-'}
                </td>
                <td style="text-align: center;">
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$print_fisa['id'])}
                    {($client_observatie['observatie_extra'] !='') ? $client_observatie['observatie_extra'] :'-'}
                </td>
            </tr>
        {/foreach}
    </table>
    <div style="display: inline-flex;margin-top: 20px;">
        {if ($print_fisa['grand_total_vandute_bg'] != 0 || $print_fisa['grand_defecte_bg'] != 0 || $print_fisa['grand_vandute_bg_extra'] > 0)}
            <div>
                <table border="1" style="width: 200px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">BG</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_vandute_bg_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_bg'] + $print_fisa['grand_valoare_bg_extra']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{($print_fisa['grand_comision_bg'] > 0) ? $print_fisa['grand_comision_bg'] : '-'}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;">{($print_fisa['grand_defecte_bg'] > 0) ? $print_fisa['grand_defecte_bg'] : '-'}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_8'] != 0 || $print_fisa['grand_defecte_ar_8'] != 0 || $print_fisa['grand_vandute_ar_8_extra'] > 0)}
            <div style="margin-left: 10px;">
                <table border="1" style="width: 200px;">
                    <tr>
                        <th style="text-align: center;font-weight: 900;" colspan="2">AR 8
                        </th>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_ar_8'] + $print_fisa['grand_vandute_ar_8_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_ar_8'] + $print_fisa['grand_valoare_ar_8_extra']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{($print_fisa['grand_comision_ar_8'] > 0) ? $print_fisa['grand_comision_ar_8'] : '-'}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;">

                            {($print_fisa['grand_defecte_ar_8'] > 0) ? $print_fisa['grand_defecte_ar_8'] : '-'}
                        </td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_9'] != 0 || $print_fisa['grand_defecte_ar_9'] != 0 || $print_fisa['grand_vandute_ar_9_extra'] > 0)}
            <div style="margin-left: 5px;">
                <table border="1" style="width: 200px;">
                    <tr>
                        <td style="text-align: center;font-weight: 600;" colspan="2">AR
                            9
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL CANTITATI</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_ar_9'] + $print_fisa['grand_vandute_ar_9_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">TOTAL VALOARE</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_ar_9'] + $print_fisa['grand_valoare_ar_9_extra']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL COMISION</td>
                        <td style="text-align: center;font-weight: 500;">{($print_fisa['grand_comision_ar_9'] > 0) ? $print_fisa['grand_comision_ar_9'] : '-'}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">TOTAL DEFECTE</td>
                        <td style="text-align: center;font-weight: 500;"> {($print_fisa['grand_defecte_ar_9'] > 0) ? $print_fisa['grand_defecte_ar_9'] : '-'}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {$total_afisare = $print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_9'] + $print_fisa['grand_total_vandute_ar_9'] +  $print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9'] + $print_fisa['grand_vandute_ar_9_extra'] + $print_fisa['grand_vandute_ar_8_extra'] + $print_fisa['grand_vandute_bg_extra']}
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
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_8'] + $print_fisa['grand_total_vandute_ar_9'] + $print_fisa['grand_vandute_ar_9_extra'] + $print_fisa['grand_vandute_ar_8_extra'] + $print_fisa['grand_vandute_bg_extra']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 500;">VAL. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">{$print_fisa['grand_valoare_bg'] + $print_fisa['grand_valoare_ar_8'] + $print_fisa['grand_valoare_ar_9'] + $print_fisa['grand_valoare_ar_9_extra'] + $print_fisa['grand_valoare_ar_8_extra'] + $print_fisa['grand_valoare_bg_extra']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">COM. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">
                            {$total_comision =$print_fisa['grand_comision_bg'] + $print_fisa['grand_comision_ar_8'] + $print_fisa['grand_comision_ar_9']}
                            {($total_comision > 0) ? $total_comision : '-'}
                        </td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 500;">DEF. BG + AR</td>
                        <td style="text-align: center;font-weight: 500;">
                            {$total_defecte = $print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9']}
                            {($total_defecte > 0 )? $total_defecte : '-'}
                        </td>
                    </tr>
                </table>
            </div>
        {/if}
    </div>
    <div style="margin-top: 100px;"></div>
</section>
</body>
</html>
