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
                    Nr. clienti: {count($lista_asignari_clienti_trasee)}<br/>
                    Data: {$data_traseu}<br/>
                </h5>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 1800px;">
        <thead>
        <tr>
            <th rowspan="2">LOCALITATE</th>
            <th rowspan="2">COMISIONAR</th>
            <th colspan="2" style="border-right: double;">RASTEL</th>
            <th colspan="3" style="border-right: double;">BG/AR</th>
            {if $print_fisa['depozit_id'] == 1}
                <th colspan="3" style="border-right: double;">Incarcaturi BG/9 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>
            {else}
                <th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/8 kg</th>
                <th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>
            {/if}
            <th style="width: 150px;">Obs:</th>
        </tr>
        <tr>
            <td style="text-align: center;">BUC</td>
            <td style="text-align: center;border-right: double;">CUL</td>
            {if $print_fisa['depozit_id'] == 1}
                <td style="text-align: center;">Bg9</td>
                <td style="text-align: center;">Bg11</td>
                <td style="text-align: center;border-right: double;">Ar9</td>
                <td style="text-align: center;">Buc<br/> Bg9</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">Val 1</td>
                <td style="text-align: center;">Buc<br/> Bg</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 2</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 3</td>
            {else}
                <td style="text-align: center;">Bg11</td>
                <td style="text-align: center;">Ar8</td>
                <td style="text-align: center;border-right: double;">Ar9</td>
                <td style="text-align: center;">Buc<br/> Bg11</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">Val 1</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 2</td>
                <td style="text-align: center;">Buc<br/> Ar</td>
                <td style="text-align: center;">Pret</td>
                <td style="text-align: center;border-right: double;">VAL 3</td>
            {/if}
            <td></td>
        </tr>
        {foreach from = $print_fisa['clienti'] item = client}
                <tr>
                    <td>{$client['nume_localitate']}</td>
                    <td>
                        {$client['nume_client']}<br/>
                        {$client['telefon']}
                    </td>
                    <td style="text-align: center">{$client['rastel']}</td>
                    <td style="border-right: double;text-align: center">{$client['culoare']}</td>
                    {if $print_fisa['depozit_id'] == 1}
                        <td style="text-align: right;">{$client['target']['2']['target']}</td>
                        <td style="text-align: right;">{$client['target']['1']['target']}</td>
                        <td style="text-align: right;border-right: double;">{$client['target']['4']['target']}</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['2']['pret']}</td>
                        <td style="text-align: right;border-right: double;">{$client['target']['2']['comision']}</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['1']['pret']}</td>
                        <td style="border-right: double;text-align: right;">{$client['target']['1']['comision']}</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['4']['pret']}</td>
                        <td style="border-right: double;text-align: right;">{$client['target']['4']['comision']}</td
                    {else}
                        <td style="text-align: right;">{$client['target']['1']['target']}</td>
                        <td style="text-align: right;">{$client['target']['3']['target']}</td>
                        <td style="text-align: right;border-right: double;">{$client['target']['4']['target']}</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['1']['pret']}</td>
                        <td style="text-align: right;border-right: double;">{$client['target']['1']['comision']}</td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['3']['pret']}</td>
                        <td style="border-right: double;text-align: right;"></td>
                        <td style="text-align: right;"></td>
                        <td style="text-align: right;">{$client['target']['4']['pret']}</td>
                        <td style="border-right: double;text-align: right;">{$client['target']['4']['comision']}</td
                    {/if}
                    <td></td>
                    <td></td>
                </tr>
        {/foreach}
        </thead>
    </table>
</section>

</body>
</html>

{*<table border="1" class="print" style="width: 1800px;">*}
{*<thead>*}
{*<tr>*}
{*<th rowspan="2">LOCALITATE</th>*}
{*<th rowspan="2">COMISIONAR</th>*}
{*<th colspan="2" style="border-right: double;">RASTEL</th>*}
{*<th colspan="3" style="border-right: double;">BG/AR</th>*}
{*{if $print_fisa['depozit_id'] == 1}*}
{*<th colspan="3" style="border-right: double;">Incarcaturi BG/9 kg</th>*}
{*<th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>*}
{*<th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>*}
{*{else}*}
{*<th colspan="3" style="border-right: double;">Incarcaturi BG/11 kg</th>*}
{*<th colspan="3" style="border-right: double;">Incarcaturi AR/8 kg</th>*}
{*<th colspan="3" style="border-right: double;">Incarcaturi AR/9 kg</th>*}
{*{/if}*}
{*<th style="width: 150px;">Obs:</th>*}
{*</tr>*}
{*<tr>*}
{*<td style="text-align: center;">BUC</td>*}
{*<td style="text-align: center;border-right: double;">CUL</td>*}
{*{if $print_fisa['depozit_id'] == 1}*}
{*<td style="text-align: center;">Bg9</td>*}
{*<td style="text-align: center;">Bg11</td>*}
{*<td style="text-align: center;border-right: double;">Ar9</td>*}
{*<td style="text-align: center;">Buc<br/> Bg9</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">Val 1</td>*}
{*<td style="text-align: center;">Buc<br/> Bg</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">VAL 2</td>*}
{*<td style="text-align: center;">Buc<br/> Ar</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">VAL 3</td>*}
{*{else}*}
{*<td style="text-align: center;">Bg11</td>*}
{*<td style="text-align: center;">Ar8</td>*}
{*<td style="text-align: center;border-right: double;">Ar9</td>*}
{*<td style="text-align: center;">Buc<br/> Bg11</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">Val 1</td>*}
{*<td style="text-align: center;">Buc<br/> Ar</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">VAL 2</td>*}
{*<td style="text-align: center;">Buc<br/> Ar</td>*}
{*<td style="text-align: center;">Pret</td>*}
{*<td style="text-align: center;border-right: double;">VAL 3</td>*}
{*{/if}*}
{*<td></td>*}
{*</tr>*}
{*{foreach from = $print_fisa['clienti'] item = client}*}
{*<tr>*}
{*<td>{$client['nume_localitate']}</td>*}
{*<td>*}
{*{$client['nume_client']}<br/>*}
{*{$client['telefon']}*}
{*</td>*}
{*<td style="text-align: center">{$client['rastel']}</td>*}
{*<td style="border-right: double;text-align: center">{$client['culoare']}</td>*}
{*{if $print_fisa['depozit_id'] == 1}*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['stoc_ar_8']}</td>*}
{*<td style="text-align: right;border-right: double;">{$client['stoc_ar_9']}</td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_bg_9']}</td>*}
{*<td style="text-align: right;border-right: double;"></td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_bg_11']}</td>*}
{*<td style="border-right: double;text-align: right;"></td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_ar_9']}</td>*}
{*<td style="border-right: double;text-align: right;"></td*}
{*{else}*}
{*<td style="text-align: right;">{$client['stoc_bg_11']}</td>*}
{*<td style="text-align: right;">{$client['stoc_ar_8']}</td>*}
{*<td style="text-align: right;border-right: double;">{$client['stoc_ar_9']}</td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_bg_11']}</td>*}
{*<td style="text-align: right;border-right: double;"></td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_ar_8']}</td>*}
{*<td style="border-right: double;text-align: right;"></td>*}
{*<td style="text-align: right;"></td>*}
{*<td style="text-align: right;">{$client['pret_ar_9']}</td>*}
{*<td style="border-right: double;text-align: right;"></td*}
{*{/if}*}
{*<td></td>*}
{*<td></td>*}
{*</tr>*}
{*{/foreach}*}
{*</thead>*}
{*</table>*}
