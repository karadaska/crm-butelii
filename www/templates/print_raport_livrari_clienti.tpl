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
        <a href="/raport_livrari_clienti.php?traseu_id={$id}&data_start={$data_start}&data_stop={$data_stop}"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h2 style="text-align: center;">
                    RAPORT LUNAR <br/>
                    {$data_start} - {$data_stop}
                </h2>
                <h2>
                    Traseu: {strtoupper($nume_traseu['nume'])} <br/>
                </h2>
            </td>
        </tr>
    </table>
    {if $depozit_by_traseu['depozit_id'] == 1}
        <table border="1">
            <thead>
            <tr>
                <th style="text-align: center;" rowspan="2">#</th>
                <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                <th style="text-align: center;" rowspan="2">CLIENT</th>
                <th style="text-align: center;" rowspan="2">TELEFON</th>
                <th colspan="2" style="text-align: center;">BG/AR</th>
                <th colspan="2" style="text-align: center;">PRET UNITAR</th>
                <th colspan="2" style="text-align: center;">COMISION</th>
                <th colspan="2" style="text-align: center;">TOTAL BUCATI</th>
                <th colspan="2" style="text-align: center;">TOTAL VAL. INCASARE</th>
                <th colspan="2" style="text-align: center;">TOTAL COMISION</th>
                <th colspan="2" style="text-align: center;">VALOARE BUCATI BG/AR</th>
            </tr>
            <tr>

                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center;">BG 11</td>
                <td style="text-align: center;">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 9</td>

            </tr>
            </thead>
            <tbody>
            {$nr = 1}
            {$total_bg_11 = 0}
            {$total_ar_9 = 0}
            {$total_valoare_incasare_bg_11 = 0}
            {$total_valoare_incasare_ar_9 = 0}
            {$total_comision_bg_11 = 0}
            {$total_comision_ar_9 = 0}
            {foreach from=$lista_clienti item=client}
                <tr>
                    <td style="text-align: center" class="span1">{$nr++}</td>
                    <td style="text-align: left"
                        class="span3">{$client['nume_localitate']}</td>
                    <td>
                        {if ($client['sters'] == 0)}
                            {$client['nume_client']}
                        {else}
                            <abbr title="Client sters de pe acest traseu"
                                  style="color: red;"> {$client['nume_client']}</abbr>
                        {/if}
                    </td>
                    <td>{$client['telefon']}<br/>{$client['telefon2']}</td>

                    <td style="text-align: center;border-left:double">{($client['target']['1']['target'] !='') ? $client['target']['1']['target'] : '-'}</td>
                    <td style="text-align: center">{($client['target']['4']['target'] !='') ? $client['target']['4']['target'] : '-'}</td>
                    <td style="text-align: center;border-left:double">{($client['target']['1']['pret'] !='') ? $client['target']['1']['pret'] - $client['target']['1']['comision']  : '-'}</td>
                    <td style="text-align: center;border-right:double">{($client['target']['4']['pret'] !='') ? $client['target']['4']['pret'] - $client['target']['4']['comision'] : '-'}</td>
                    <td style="text-align: center;">{($client['target']['1']['comision'] !='') ? $client['target']['1']['comision'] : '-'}</td>
                    <td style="text-align: center;border-right:double">{($client['target']['4']['comision'] !='') ? $client['target']['4']['comision'] : '-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] :'-'}</td>
                    <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] !='') ? $client['total_produse']['ar_9']['total_ar_9']: '-'}</td>

                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? $client['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-'} </td>
                    <td style="text-align: center;border-right:double;">{($client['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? $client['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] :'-'}</td>
                    <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] !='') ? $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] : '-'}</td>
                    <td>
                        {if count($client['lista_preturi_bg_11']) >0}
                            <table border="1">
                                <tr>
                                    {foreach from=$client['lista_preturi_bg_11'] item=lista}
                                        <td style="text-align: center;">
                                            Pret: {$lista['pret']} <br/>
                                            Cant: {$lista['total_cantitati_bg_11']['numar_produs_by_pret']}
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                        {else}
                            <span style="text-align: center;">-</span>
                        {/if}
                    </td>
                    <td style="text-align: center;border-right:double">
                        {if count($client['lista_preturi_ar_9']) >0}
                            <table border="1">
                                <tr>
                                    {foreach from=$client['lista_preturi_ar_9'] item=lista}
                                        <td style="text-align: center;">
                                            Pret: {$lista['pret']} <br/>
                                            Cant: {$lista['total_cantitati_ar_9']['numar_produs_by_pret']}
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                        {else}
                            <span style="text-align: center;">-</span>
                        {/if}
                    </td>
                </tr>
                {$total_bg_11 = $total_bg_11 + $client['total_produse']['bg_11']['total_bg_11']}
                {$total_ar_9 = $total_ar_9 + $client['total_produse']['ar_9']['total_ar_9']}
                {$total_valoare_incasare_bg_11 = $total_valoare_incasare_bg_11 + $client['total_produse']['bg_11']['total_bg_11_cu_pret']}
                {$total_valoare_incasare_ar_9 = $total_valoare_incasare_ar_9 + $client['total_produse']['ar_9']['total_ar_9_cu_pret']}
                {$total_comision_bg_11 = ($total_comision_bg_11 + $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'])}
                {$total_comision_ar_9 =  ($total_comision_ar_9 + $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'])}
            {/foreach}
            <tr>
                <th colspan="10" style="text-align: right;">TOTAL:</th>
                <th><abbr title="Total bucati BG 11">{$total_bg_11}</abbr></th>
                <th><abbr title="Total bucati AR 9">{$total_ar_9}</abbr></th>
                <th>
                    <abbr title="Total valoare incasare BG 11">{$total_valoare_incasare_bg_11}</abbr>
                </th>
                <th>
                    <abbr title="Total valoare incasare AR 9">{$total_valoare_incasare_ar_9}</abbr>
                </th>
                <th><abbr title="Total comision BG 11">{$total_comision_bg_11}</abbr></th>
                <th><abbr title="Total comision AR 9">{$total_comision_ar_9}</abbr></th>
                <th colspan="20"></th>
            </tr>
            </tbody>
        </table>
        <div style="display: inline-flex">
            <div>
                {if count($preturi_by_bg_11) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_bg_11)}">Preturi BG 11</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_bg_11 item=pret}
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                <br/>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">{$pret['pret_bg_11']['cantitate']['0']['total_cantitate']}</td>
                                        </tr>
                                    </table>
                                </td>
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
            {*<div style="margin-left: 10px;">*}
            {*{if count($preturi_by_ar_8) > 0}*}
            {*<table class="table table-bordered"*}
            {*style="margin-top: 20px;width: 400px;">*}
            {*<tr>*}
            {*<th colspan="{count($preturi_by_ar_8)}">Preturi AR 8</th>*}
            {*</tr>*}
            {*<tr>*}
            {*{foreach from=$preturi_by_ar_8 item=pret}*}
            {*<td>*}
            {*<table class="table table-bordered">*}
            {*<tr>*}
            {*<th style="text-align: center;">{$pret['pret_ar_8']['pret']}*}
            {*<br/>*}
            {*</th>*}
            {*</tr>*}
            {*<tr>*}
            {*<td style="text-align: center;">{$pret['pret_ar_8']['cantitate']['0']['total_cantitate']}</td>*}
            {*</tr>*}
            {*</table>*}
            {*</td>*}
            {*{/foreach}*}
            {*</tr>*}
            {*</table>*}
            {*{/if}*}
            {*</div>*}
            <div style="margin-left: 10px;w">
                {if count($preturi_by_ar_9) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_ar_9)}">Preturi AR 9</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_ar_9 item=pret}
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                <br/>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">{$pret['pret_ar_9']['cantitate']['0']['total_cantitate']}</td>
                                        </tr>
                                    </table>
                                </td>
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
        </div>
    {else}
        <table border="1">
            <thead>
            <tr>
                <th style="text-align: center;" rowspan="2">#</th>
                <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                <th style="text-align: center;" rowspan="2">CLIENT</th>
                <th style="text-align: center;" rowspan="2">TELEFON</th>
                <th colspan="3" style="text-align: center;">BG/AR</th>
                <th colspan="3" style="text-align: center;">PRET UNITAR</th>
                <th colspan="3" style="text-align: center;">COMISION</th>
                <th colspan="3" style="text-align: center;">TOTAL BUCATI</th>
                <th colspan="3" style="text-align: center;">TOTAL VAL. INCASARE</th>
                <th colspan="3" style="text-align: center;">TOTAL COMISION</th>
                <th colspan="3" style="text-align: center;">VALOARE BUCATI BG/AR</th>
            </tr>
            <tr>

                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 8</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 8</td>
                <td style="text-align: center">AR 9</td>
                <td style="text-align: center;">BG 11</td>
                <td style="text-align: center;">AR 8</td>
                <td style="text-align: center;">AR 9</td>
                <td style="text-align: center">BG 11</td>
                <td style="text-align: center">AR 8</td>
                <td style="text-align: center">AR 9</td>

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
            </thead>
            <tbody>
            {$nr = 1}
            {$total_bg_11 = 0}
            {$total_ar_8 = 0}
            {$total_ar_9 = 0}
            {$total_valoare_incasare_bg_11 = 0}
            {$total_valoare_incasare_ar_8 = 0}
            {$total_valoare_incasare_ar_9 = 0}
            {$total_comision_bg_11 = 0}
            {$total_comision_ar_8 = 0}
            {$total_comision_ar_9 = 0}
            {foreach from=$lista_clienti item=client}
                <tr>
                    <td style="text-align: center" class="span1">{$nr++}</td>
                    <td style="text-align: left"
                        class="span3">{$client['nume_localitate']}</td>
                    <td>
                        {if ($client['sters'] == 0)}
                            {$client['nume_client']}
                        {else}
                            <abbr title="Client sters de pe acest traseu"
                                  style="color: red;"> {$client['nume_client']}</abbr>
                        {/if}
                    </td>
                    <td>{$client['telefon']}<br/>{$client['telefon2']}</td>
                    <td style="text-align: center;border-left:double">{($client['target']['1']['target'] !='') ? $client['target']['1']['target'] : '-'}</td>
                    <td style="text-align: center;">{($client['target']['3']['target'] !='') ? $client['target']['3']['target'] : '-'}</td>
                    <td style="text-align: center">{($client['target']['4']['target'] !='') ? $client['target']['4']['target'] : '-'}</td>
                    <td style="text-align: center;border-left:double">{($client['target']['1']['pret'] !='') ? $client['target']['1']['pret'] - $client['target']['1']['comision']  : '-'}</td>
                    <td style="text-align: center">{($client['target']['3']['pret'] !='') ? $client['target']['3']['pret'] - $client['target']['3']['comision'] : '-'}</td>
                    <td style="text-align: center;border-right:double">{($client['target']['4']['pret'] !='') ? $client['target']['4']['pret'] - $client['target']['4']['comision'] : '-'}</td>
                    <td style="text-align: center;">{($client['target']['1']['comision'] !='') ? $client['target']['1']['comision'] : '-'}</td>
                    <td style="text-align: center;">{($client['target']['3']['comision'] !='') ? $client['target']['3']['comision'] : '-' }</td>
                    <td style="text-align: center;border-right:double">{($client['target']['4']['comision'] !='') ? $client['target']['4']['comision'] : '-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] :'-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8'] !='') ? $client['total_produse']['ar_8']['total_ar_8'] : '-'}</td>
                    <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] !='') ? $client['total_produse']['ar_9']['total_ar_9']: '-'}</td>

                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? $client['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8_cu_pret'] != '') ? $client['total_produse']['ar_8']['total_ar_8_cu_pret'] :'-'}</td>
                    <td style="text-align: center;border-right:double;">{($client['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? $client['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] :'-'}</td>
                    <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'] !='') ? $client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'] : '-'}</td>
                    <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] !='') ? $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] : '-'}</td>
                    <td style="text-align: center;border-right:double">
                        {if count($client['lista_preturi_bg_11']) >0}
                            <table border="1">
                                <tr>
                                    {foreach from=$client['lista_preturi_bg_11'] item=lista}
                                        <td style="text-align: center;">
                                            Pret: {$lista['pret']} <br/>
                                            Cant: {$lista['total_cantitati_bg_11']['numar_produs_by_pret']}
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                        {else}
                            <span style="text-align: center;">-</span>
                        {/if}
                    </td>
                    <td style="text-align: center;border-right:double">
                        {if count($client['lista_preturi_ar_8']) >0}
                            <table border="1">
                                <tr>
                                    {foreach from=$client['lista_preturi_ar_8'] item=lista}
                                        <td style="text-align: center;">
                                            Pret: {$lista['pret']} <br/>
                                            Cant: {$lista['total_cantitati_ar_8']['numar_produs_by_pret']}
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                        {else}
                            <span style="text-align: center;">-</span>
                        {/if}
                    </td>
                    <td style="text-align: center;">
                        {if count($client['lista_preturi_ar_9']) >0}
                            <table border="1">
                                <tr>
                                    {foreach from=$client['lista_preturi_ar_9'] item=lista}
                                        <td style="text-align: center;">
                                            Pret: {$lista['pret']} <br/>
                                            Cant: {$lista['total_cantitati_ar_9']['numar_produs_by_pret']}
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                        {else}
                            <span style="text-align: center;">-</span>
                        {/if}
                    </td>
                </tr>
                {$total_bg_11 = $total_bg_11 + $client['total_produse']['bg_11']['total_bg_11']}
                {$total_ar_8 = $total_ar_8 + $client['total_produse']['ar_8']['total_ar_8']}
                {$total_ar_9 = $total_ar_9 + $client['total_produse']['ar_9']['total_ar_9']}
                {$total_valoare_incasare_bg_11 = $total_valoare_incasare_bg_11 + $client['total_produse']['bg_11']['total_bg_11_cu_pret']}
                {$total_valoare_incasare_ar_8 = $total_valoare_incasare_ar_8 + $client['total_produse']['ar_8']['total_ar_8_cu_pret']}
                {$total_valoare_incasare_ar_9 = $total_valoare_incasare_ar_9 + $client['total_produse']['ar_9']['total_ar_9_cu_pret']}
                {$total_comision_bg_11 = ($total_comision_bg_11 + $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'])}
                {$total_comision_ar_8 = ($total_comision_ar_8 + $client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'])}
                {$total_comision_ar_9 =  ($total_comision_ar_9 + $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'])}
            {/foreach}
            <tr>
                <th colspan="13" style="text-align: right;border-right:double">TOTAL:</th>
                <th><abbr title="Total bucati BG 11">{$total_bg_11}</abbr></th>
                <th><abbr title="Total bucati AR 8">{$total_ar_8}</abbr></th>
                <th style="text-align: right;border-right:double"><abbr
                            title="Total bucati AR 9">{$total_ar_9}</abbr></th>
                <th>
                    <abbr title="Total valoare incasare BG 11">{$total_valoare_incasare_bg_11}</abbr>
                </th>
                <th>
                    <abbr title="Total valoare incasare AR 8">{$total_valoare_incasare_ar_8}</abbr>
                </th>
                <th style="text-align: right;border-right:double">
                    <abbr title="Total valoare incasare AR 9">{$total_valoare_incasare_ar_9}</abbr>
                </th>
                <th><abbr title="Total comision BG 11">{$total_comision_bg_11}</abbr></th>
                <th><abbr title="Total comision BG 11">{$total_comision_ar_8}</abbr></th>
                <th style="text-align: right;border-right:double"><abbr
                            title="Total comision AR 9">{$total_comision_ar_9}</abbr></th>
                <th colspan="20"></th>
            </tr>
            </tbody>
        </table>
        <div style="display: inline-flex">
            <div>{if count($preturi_by_bg_11) > 0}
                    <table border="1" style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_bg_11)}">Preturi BG 11</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_bg_11 item=pret}
                                <td>
                                    <table border="1">
                                        <tr>
                                            <th style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                <br/>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">{$pret['pret_bg_11']['cantitate']['0']['total_cantitate']}</td>
                                        </tr>
                                    </table>
                                </td>
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
            {*<div style="margin-left: 10px;">*}
            {*{if count($preturi_by_ar_8) > 0}*}
            {*<table border="1"*}
            {*style="margin-top: 20px;width: 400px;">*}
            {*<tr>*}
            {*<th colspan="{count($preturi_by_ar_8)}">Preturi AR 8</th>*}
            {*</tr>*}
            {*<tr>*}
            {*{foreach from=$preturi_by_ar_8 item=pret}*}
            {*<td>*}
            {*<table border="1">*}
            {*<tr>*}
            {*<th style="text-align: center;">{$pret['pret_ar_8']['pret']}*}
            {*<br/>*}
            {*</th>*}
            {*</tr>*}
            {*<tr>*}
            {*<td style="text-align: center;">{$pret['pret_ar_8']['cantitate']['0']['total_cantitate']}</td>*}
            {*</tr>*}
            {*</table>*}
            {*</td>*}
            {*{/foreach}*}
            {*</tr>*}
            {*</table>*}
            {*{/if}*}
            {*</div>*}
            <div style="margin-left: 10px;w">
                {if count($preturi_by_ar_9) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_ar_9)}">Preturi AR 9</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_ar_9 item=pret}
                                <td>
                                    <table border="1">
                                        <tr>
                                            <th style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                <br/>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">{$pret['pret_ar_9']['cantitate']['0']['total_cantitate']}</td>
                                        </tr>
                                    </table>
                                </td>
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
        </div>
    {/if}
</section>
</body>
</html>
