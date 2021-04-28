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

        /*th






        {*/
                                                                    /*font-weight: bold;*/
                                                                    /*color: #000;*/
                                                                /*}       */

        /*td






        {*/
                                                                /*}       */
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
        <a href="edit_fisa_traseu.php?id={$print_fisa['id']}" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h5>

                    TRASEU: {strtoupper($print_fisa['nume_traseu'])} <br/>
                    AUTO: {$print_fisa['numar']}<br/>
                    SOFER: {$print_fisa['nume_sofer']}<br/>
                    KM PLECARE:<br/>
                    KM SOSIRE:<br/>
                    NR. CLIENTI: {count($print_fisa['clienti'])}<br/>
                    {$data = $print_fisa['data_intrare']}
                    {$newDate = date("d-m-Y", strtotime($data))}
                    <span style="font-weight: 900;margin-top: 20px;"> DATA: {$newDate}</span>
                </h5>
            </td>

        </tr>
    </table>
    <div style="text-align: center;"><h1>RAPORT ZILNIC</h1></div>
    <table border="1" class="print" style="width: 100%;">
        <thead>
        <tr>
            <td style="text-align: center;" rowspan="3">#</td>
            <th rowspan="3">LOCALITATE</th>
            <th rowspan="3">COMISIONAR</th>
            <th colspan="2" style="border-right: double;">RASTEL</th>
            {if $print_fisa['depozit_id'] == 1}
                <th colspan="2" style="border-right: double;">BG/AR</th>
            {else}
                <th colspan="3" style="border-right: double;">BG/AR</th>
            {/if}
            <th colspan="4" style="border-right: double;">INCARCATURI BG</th>
            <th colspan="4" style="border-right: double;">INCARCATURI AR/9 kg</th>
            {if $print_fisa['depozit_id'] == 2}
                <th colspan="4" style="border-right: double;">Incarcaturi AR/8 kg</th>
            {/if}
            <th>OBS</th>
            <th>OBS EXTRA</th>
        </tr>
        <tr>
            <td style="text-align: center;">BUC</td>
            <td style="text-align: center;border-right: double;">CUL</td>
            <td style="text-align: center;">BG</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">AR 8</td>
            {/if}
            <td style="text-align: center;border-right: double;">AR 9</td>
            <td style="text-align: center;">BUC<br/> BG</td>
            <td style="text-align: center;">PRET</td>
            <td style="text-align: center">COM</td>
            <td style="text-align: center;border-right: double;">VAL 2</td>
            <td style="text-align: center;">BUC<br/> AR 9</td>
            <td style="text-align: center;">PRET</td>
            <td style="text-align: center">COM</td>
            <td style="text-align: center;border-right: double;">VAL 3</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">BUC<br/> AR 8</td>
                <td style="text-align: center;">PRET</td>
                <td style="text-align: center;">COM</td>
                <td style="text-align: center;border-right: double;">VAL 4</td>
            {/if}
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
        </thead>
        {$total_bg_11 = 0}
        {$total_bg_11_comision = 0}
        {$total_bg_11_unitar = 0}

        {$total_ar_8 = 0}
        {$total_ar_8_comision = 0}
        {$total_ar_8_unitar = 0}

        {$total_ar_9 = 0}
        {$total_ar_9_comision = 0}
        {$total_ar_9_unitar = 0}

        {$nr = 1}
        {foreach from = $print_fisa['clienti'] item = client}
            <tr>
                <td style="text-align: center;">{$nr++}</td>
                <td>{strtoupper($client['nume_localitate'])}</td>
                <td>
                    {strtoupper($client['nume_client'])}<br/>
                    {$client['telefon']}
                </td>
                <td style="text-align: center">{$client['rastel']}</td>
                <td style="border-right: double;text-align: center">{$client['nume_culoare']}</td>
                <td style="text-align: center;">
                    {($client['realizat']['1']['pret'] > 0) ? {'PRET: '|cat:$client['realizat']['1']['pret']} :'-'}
                    <br/>{($client['target']['1']['target'] > 0) ? {'STOC: '|cat:$client['target']['1']['target']} : '-'}
                </td>
                {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">
                    {($client['realizat']['1']['pret'] >0 ) ? {'PRET: '|cat:$client['realizat']['1']['pret']} :'-'}
                    <br/>{($client['target']['3']['target'] > 0) ? {'STOC: '|cat:$client['target']['3']['target']} : '-'}
                    {/if}
                <td style="text-align: center;border-right: double;">
                    {($client['realizat']['4']['pret'] >0 ) ? {'PRET: '|cat:$client['realizat']['4']['pret']} :'-'}
                    <br/>{($client['target']['4']['target'] > 0) ? {'STOC: '|cat:$client['target']['4']['target']} : '-'}
                </td>
                <td style="text-align: center;">{($client['realizat']['1']['cantitate'] > 0 || $client['total_vandute_bg_extra'] > 0) ? ($client['realizat']['1']['cantitate'] +  $client['total_vandute_bg_extra']) : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['1']['cantitate'] > 0 || $client['total_valoare_bg_extra'] > 0) ? ($client['realizat']['1']['pret'] + $client['total_valoare_bg_extra']) : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['1']['cantitate'] > 0) ? $client['realizat']['1']['comision'] : '-'}</td>
                <td style="text-align: center;border-right: double;">
                    {($client['realizat']['1']['cantitate'] > 0) ? ($client['realizat']['1']['cantitate'] * ($client['realizat']['1']['pret'] - $client['realizat']['1']['comision'] )) : '-'}
                </td>
                <td style="text-align: center;">{($client['realizat']['4']['cantitate'] > 0 || $client['total_vandute_ar_9_extra'] > 0) ? $client['realizat']['4']['cantitate'] + $client['total_vandute_ar_9_extra'] : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['4']['cantitate'] > 0 || $client['total_valoare_ar_9_extra']) ? $client['realizat']['4']['pret'] +  $client['total_valoare_ar_9_extra'] : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['4']['cantitate'] > 0) ? $client['realizat']['4']['comision']: '-'}</td>
                <td style="text-align: center;border-right: double;">
                    {($client['realizat']['4']['cantitate'] > 0) ? ($client['realizat']['4']['cantitate'] * ($client['realizat']['4']['pret'] - $client['realizat']['4']['comision'])):'-'}
                </td>
                {if $print_fisa['depozit_id'] == 2}
                    <td style="text-align: center;">{($client['realizat']['3']['cantitate'] > 0 || $client['total_vandute_ar_8_extra'] > 0) ? $client['realizat']['3']['cantitate'] + $client['total_vandute_ar_8_extra'] : '-'}</td>
                    <td style="text-align: center;">{($client['realizat']['3']['cantitate'] > 0 || $client['total_valoare_ar_8_extra'] > 0) ? $client['realizat']['3']['pret'] + $client['total_valoare_ar_8_extra'] : '-'}</td>
                    <td style="text-align: center;">{($client['realizat']['3']['cantitate'] > 0)? $client['realizat']['3']['comision']:'-'}</td>
                    <td style="text-align: center;border-right: double;">
                        {($client['realizat']['3']['cantitate'] > 0) ? ($client['realizat']['3']['cantitate'] * ($client['realizat']['3']['pret'] - $client['realizat']['3']['comision'])) :'-'}
                    </td>
                {/if}
                {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$client['fisa_generata_id'])}
                <td style="text-align: left;">
                    {$client_observatie['nume_observatie']}
                </td>
                <td>{$client_observatie['observatie_extra']}</td>
            </tr>
            {$total_bg_11 = $total_bg_11 + $client['realizat']['1']['cantitate'] + $client['total_vandute_bg_extra']}
            {$total_bg_11_comision = $total_bg_11_comision + $client['realizat']['1']['cantitate'] *  $client['realizat']['1']['comision']}
            {$total_bg_11_unitar = $total_bg_11_unitar + ($client['realizat']['1']['cantitate'] * ($client['realizat']['1']['pret'] - $client['realizat']['1']['comision']))}

            {$total_ar_8 = $total_ar_8 + $client['realizat']['3']['cantitate'] + $client['total_vandute_ar_8_extra']}
            {$total_ar_8_comision = $total_ar_8_comision + $client['realizat']['3']['cantitate'] * $client['realizat']['3']['comision']}
            {$total_ar_8_unitar = $total_ar_8_unitar + $client['realizat']['3']['cantitate'] * ($client['realizat']['3']['pret'] - $client['realizat']['3']['comision'])}

            {$total_ar_9 = $total_ar_9 + $client['realizat']['4']['cantitate'] + $client['total_vandute_ar_9_extra']}
            {$total_ar_9_comision = $total_ar_9_comision + ($client['realizat']['4']['cantitate'] *  $client['realizat']['4']['comision'])}
            {$total_ar_9_unitar = $total_ar_9_unitar + $client['realizat']['4']['cantitate'] * ($client['realizat']['4']['pret'] - $client['realizat']['4']['comision'])}
        {/foreach}
        <tr style="background-color: lemonchiffon;">
            {if $print_fisa['depozit_id'] == 1}
                <td colspan="7" style="text-align: right;">TOTAL</td>
            {else}
                <td colspan="8" style="text-align: right;">TOTAL</td>
            {/if}
            <td style="text-align: center;">{$total_bg_11}</td>
            <td colspan="2" style="text-align: center;">{$total_bg_11_comision}</td>
            <td style="text-align: center;">{$total_bg_11_unitar + $client['total_vandute_ar_8_extra']}</td>
            <td style="text-align: center;">{$total_ar_9}</td>
            <td colspan="2" style="text-align: center;">{$total_ar_9_comision}</td>
            <td style="text-align: center;">{$total_ar_9_unitar}</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">{$total_ar_8}</td>
                <td colspan="2" style="text-align: center;">{$total_ar_8_comision}</td>
                <td style="text-align: center;">{$total_ar_8_unitar}</td>
            {/if}
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
        </tr>
    </table>
    <div style="display: inline-flex;margin-top: 20px;">
        {if ($print_fisa['grand_total_vandute_bg'] != 0 || $print_fisa['grand_defecte_bg'] != 0)}
            <div>
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">BG
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_total_vandute_bg']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_valoare_bg']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_comision_bg']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_defecte_bg']}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_8'] != 0 || $print_fisa['grand_defecte_ar_8'] != 0)}
            <div style="margin-left: 10px;">
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">AR
                            8
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_total_vandute_ar_8']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_valoare_ar_8']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_comision_ar_8']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_defecte_ar_8']}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {if ($print_fisa['grand_total_vandute_ar_9'] != 0 || $print_fisa['grand_defecte_ar_9'] != 0)}
            <div style="margin-left: 10px;">
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">AR
                            9
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_total_vandute_ar_9']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_valoare_ar_9']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_comision_ar_9']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_defecte_ar_9']}</td>
                    </tr>
                </table>
            </div>
        {/if}
        {$total_afisare = $print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_9'] + $print_fisa['grand_total_vandute_ar_9'] +  $print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9']}
        {if ($total_afisare != 0)}
            <div style="margin-left: 10px;">
                <table border="1" style="width: 180px;">
                    <tr>
                        <td style="text-align: center;font-weight: 900;" colspan="2">
                            TOTALURI
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">BG + AR</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_total_vandute_bg'] + $print_fisa['grand_total_vandute_ar_8'] + $print_fisa['grand_total_vandute_ar_9']}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_valoare_bg'] + $print_fisa['grand_valoare_ar_8'] + $print_fisa['grand_valoare_ar_9']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_comision_bg'] + $print_fisa['grand_comision_ar_8'] + $print_fisa['grand_comision_ar_9']}</td>
                    </tr>
                    <tr class="info">
                        <td style="text-align: left;font-weight: 900;">Def. BG + AR</td>
                        <td style="text-align: center;font-weight: 900;">{$print_fisa['grand_defecte_bg'] + $print_fisa['grand_defecte_ar_8'] + $print_fisa['grand_defecte_ar_9']}</td>
                    </tr>
                </table>
            </div>
        {/if}
    </div>
    <br/>
    <div style="font-weight: 900;margin-top: 20px;">
        {$data = date('Y-m-d')}
        {$newDate = date("d-m-Y", strtotime($data))}
        <span style="font-weight: 900;margin-top: 20px;"> DATA: {$newDate}</span>
    </div>
</section>
</body>
</html>
