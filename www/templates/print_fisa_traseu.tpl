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

        th {
            font-weight: bold;
            color: #000;
        }

        td {
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
               value="Print"/>
        <a href="edit_fisa_traseu.php?id={$print_fisa['id']}" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h5>

                    Traseu: {strtoupper($print_fisa['nume_traseu'])} <br/>
                    Auto: {$print_fisa['numar']}<br/>
                    Sofer: {$print_fisa['nume_sofer']}<br/>
                    Km plecare:<br/>
                    Km sosire:<br/>
                    Nr. clienti: {count($print_fisa['clienti'])}<br/>
                </h5>
            </td>

        </tr>
    </table>
    <span style="text-align: center;"><h1>RAPORT ZILNIC</h1></span>
    <table border="1" class="print" style="width: 1800px;">
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
            <th colspan="4" style="border-right: double;">Incarcaturi BG/11 kg</th>
            <th colspan="4" style="border-right: double;">Incarcaturi AR/9 kg</th>
            {if $print_fisa['depozit_id'] == 2}
                <th colspan="4" style="border-right: double;">Incarcaturi AR/8 kg</th>
            {/if}
            <th>Obs</th>
        </tr>
        <tr>
            <td style="text-align: center;">BUC</td>
            <td style="text-align: center;border-right: double;">CUL</td>
            <td style="text-align: center;">Bg11</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">Ar8</td>
            {/if}
            <td style="text-align: center;border-right: double;">Ar9</td>
            <td style="text-align: center;">Buc<br/> BG 11</td>
            <td style="text-align: center;">Pret</td>
            <td>Com</td>
            <td style="text-align: center;border-right: double;">Val 2</td>
            <td style="text-align: center;">Buc<br/> Ar 9</td>
            <td style="text-align: center;">Pret</td>
            <td>Com</td>
            <td style="text-align: center;border-right: double;">Val 3</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">Buc<br/> Ar 8</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;">Com</td>
                <td style="text-align: center;border-right: double;">Val 4</td>
            {/if}
            <td>&nbsp;</td>
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
                <td style="border-right: double;text-align: center">{$client['culoare']}</td>
                <td style="text-align: center;">
                    {($client['target']['1']['pret'] !='') ? {'Pret: '|cat:$client['target']['1']['pret']} :'-'}
                    <br/>{($client['target']['1']['target'] !='') ? {'Stoc: '|cat:$client['target']['1']['target']} : '-'}
                </td>
                {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">
                    {($client['target']['3']['pret'] !='') ? {'Pret: '|cat:$client['target']['3']['pret']} :'-'}
                    <br/>{($client['target']['3']['target'] !='') ? {'Stoc: '|cat:$client['target']['3']['target']} : '-'}
                    {/if}
                <td style="text-align: center;border-right: double;">
                    {($client['target']['4']['pret'] !='') ? {'Pret: '|cat:$client['target']['4']['pret']} :'-'}
                    <br/>{($client['target']['4']['target'] !='') ? {'Stoc: '|cat:$client['target']['4']['target']} : '-'}
                </td>
                <td style="text-align: center;">{($client['realizat']['1']['cantitate'] !='') ? $client['realizat']['1']['cantitate'] : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['1']['pret'] !='') ? $client['realizat']['1']['pret'] : '-'}</td>
                <td style="text-align: center;">{($client['target']['1']['comision'] !='') ? $client['target']['1']['comision'] : '-'}</td>
                <td style="text-align: center;border-right: double;">
                    {*{$client['realizat']['1']['cantitate'] * ($client['realizat']['1']['pret'] - $client['target']['1']['comision'])}*}
                    {($client['realizat']['1']['cantitate'] !='') ? ($client['realizat']['1']['cantitate'] * ($client['realizat']['1']['pret'] - $client['target']['1']['comision'] )) : '-'}
                </td>
                <td style="text-align: center;">{($client['realizat']['4']['cantitate'] !='') ? $client['realizat']['4']['cantitate'] : '-'}</td>
                <td style="text-align: center;">{($client['realizat']['4']['pret'] !='') ? $client['realizat']['4']['pret'] : '-'}</td>
                <td style="text-align: center;">{($client['target']['4']['comision'] !='') ? $client['target']['4']['comision']: '-'}</td>
                <td style="text-align: center;border-right: double;">
                    {($client['realizat']['4']['cantitate'] !='') ? ($client['realizat']['4']['cantitate'] * ($client['realizat']['4']['pret'] - $client['target']['4']['comision'])):'-'}
                </td>
                {if $print_fisa['depozit_id'] == 2}
                    <td style="text-align: center;">{($client['realizat']['3']['cantitate'] !='') ? $client['realizat']['3']['cantitate'] : '-'}</td>
                    <td style="text-align: center;">{($client['realizat']['3']['pret'] !='') ? $client['realizat']['3']['pret']: '-'}</td>
                    <td style="text-align: center;">{($client['target']['3']['comision']!='')? $client['target']['3']['comision']:'-'}</td>
                    <td style="text-align: center;border-right: double;">
                        {($client['realizat']['3']['pret'] !='') ? ($client['realizat']['3']['cantitate'] * ($client['realizat']['3']['pret'] - $client['target']['3']['comision'])) :'-'}
                    </td>
                {/if}
                <td style="text-align: left;">
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$client['fisa_generata_id'])}
                    {$client_observatie['nume_observatie']}
                </td>
            </tr>
            {$total_bg_11 = $total_bg_11 + $client['realizat']['1']['cantitate']}
            {$total_bg_11_comision = $total_bg_11_comision + $client['realizat']['1']['cantitate'] *  $client['target']['1']['comision']}
            {$total_bg_11_unitar = $total_bg_11_unitar + $client['realizat']['1']['cantitate'] * ($client['realizat']['1']['pret'] - $client['target']['1']['comision'])}

            {$total_ar_8 = $total_ar_8 + $client['realizat']['3']['cantitate']}
            {$total_ar_8_comision = $total_ar_8_comision + $client['realizat']['3']['cantitate'] * $client['target']['3']['comision']}
            {$total_ar_8_unitar = $total_ar_8_unitar + $client['realizat']['3']['cantitate'] * ($client['realizat']['3']['pret'] - $client['target']['3']['comision'])}

            {$total_ar_9 = $total_ar_9 + $client['realizat']['4']['cantitate']}
            {$total_ar_9_comision = $total_ar_9_comision + ($client['realizat']['4']['cantitate'] *  $client['target']['4']['comision'])}
            {$total_ar_9_unitar = $total_ar_9_unitar + $client['realizat']['4']['cantitate'] * ($client['realizat']['4']['pret'] - $client['target']['4']['comision'])}
        {/foreach}
        <tr style="background-color: lemonchiffon;">
            {if $print_fisa['depozit_id'] == 1}
            <td colspan="7" style="text-align: right;">TOTAL</td>
                {else}
                <td colspan="8" style="text-align: right;">TOTAL</td>
            {/if}
            <td style="text-align: center;">{$total_bg_11}</td>
            <td colspan="2" style="text-align: center;">{$total_bg_11_comision}</td>
            <td style="text-align: center;">{$total_bg_11_unitar}</td>
            <td style="text-align: center;">{$total_ar_9}</td>
            <td colspan="2" style="text-align: center;">{$total_ar_9_comision}</td>
            <td style="text-align: center;">{$total_ar_9_unitar}</td>
            {if $print_fisa['depozit_id'] == 2}
                <td style="text-align: center;">{$total_ar_8}</td>
                <td colspan="2" style="text-align: center;">{$total_ar_8_comision}</td>
                <td style="text-align: center;">{$total_ar_8_unitar}</td>
            {/if}
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
        {$data = $print_fisa['data_intrare']}
        {$newDate = date("m-d-Y", strtotime($data))}
        <span style="font-weight: 900;margin-top: 20px;"> DATA: {$newDate}</span>
    </div>
</section>
</body>
</html>
