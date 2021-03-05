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
            /*font-weight: bold;*/
            /*color: #000;*/
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
               value="Print"/>
        <a href="/apeluri_clienti.php?traseu_id={$id}&stare_id={$stare_id}" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h3>
                    TRASEU: {strtoupper($nume_traseu['nume'])} <br/>
                    DATA: {date('Y-m-d')}
                </h3>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 100%;height: 100%">
        <thead>
        <tr>
            <th style="text-align: center;">#</th>
            <th style="text-align: left;">LOCALITATE</th>
            <th style="text-align: left;">CLIENT</th>
            <th style="text-align: center;">TELEFON</th>
            <th style="text-align: center;">PRODUS</th>
            <th style="text-align: center;">GOALE</th>
            <th style="text-align: center;">OBS</th>
            <th style="text-align: center;">URGENT</th>
        </tr>
        </thead>
        <tbody>
        {$total_bg_11 = 0}
        {$total_bg_9 = 0}
        {$total_ar_8 = 0}
        {$total_ar_9 = 0}
        {$nr = 1}
        {foreach from=$lista_clienti item=client}
            {if ($nr % 2 == 0)}
                {$culoare = 'style="background-color: #f2f2f2;"'}
            {else}
                {$culoare = 'style="background-color: white"'}
            {/if}
            <input type="hidden" name="valoare_client_id" value="{$client['id']}">
            <tr {$culoare}>
                <th>{$nr++}</th>
                <th style="text-align: left;vertical-align: middle;">{strtoupper($client['nume_localitate'])}</th>
                <th style="text-align: left;vertical-align: middle;">
                    {strtoupper($client['nume_client'])}
                </th>
                <th style="text-align: center;vertical-align: middle;">
                    {if strlen($client['telefon']) >1}
                        {strtoupper($client['telefon'])}
                    {/if}
                    <br/>
                    {if strlen($client['telefon_2']) > 1}
                        {strtoupper($client['telefon_2'])}
                    {/if}
                </th>
                <th style="text-align: left;">
                    {foreach from=$client['target'] item = target_client}
                        {$target_client['nume_produs']}: {$target_client['target']}
                        <br/>
                    {/foreach}
                </th>
                <th>
                    {foreach from=$client['target'] item = target_client}
                        {$target_client['goale_la_client']}
                        <br/>
                        {if ($target_client['tip_produs_id']) == 1}
                            {$total_bg_11 = $total_bg_11+ ($target_client['goale_la_client']) }
                        {/if}
                        {if ($target_client['tip_produs_id']) == 2}
                            {$total_bg_9 = $total_bg_9+ ($target_client['goale_la_client']) }
                        {/if}
                        {if ($target_client['tip_produs_id']) == 3}
                            {$total_ar_8 = $total_ar_8+ ($target_client['goale_la_client']) }
                        {/if}
                        {if ($target_client['tip_produs_id']) == 4}
                            {$total_ar_9 = $total_ar_9+ ($target_client['goale_la_client']) }
                        {/if}
                    {/foreach}
                </th>
                <th style="width: 300px;">
                    {assign var=client_observatie value=Clienti::getObservatieApelClientiByClientId($target_client['client_id'], $id)}
                    {$client_observatie['nume_observatie']}
                </th>
                <th>
                    {assign var=client_urgenta value=Clienti::getNumeUrgentaApelClientiByClientId($target_client['client_id'],$id)}
                    {$client_urgenta['urgent']}
                </th>
            </tr>
        {/foreach}
        <tr>
            <th colspan="5" style="text-align: right;">TOTAL:</th>
            <th style="text-align: center;">
                {if $total_bg_11 > 0}
                    <span style="font-weight: bolder;">BG 11: {$total_bg_11}</span>
                    <br/>
                {/if}
                {if $total_ar_8 > 0}
                    <span style="font-weight: bolder;text-align: left;">AR 8: {$total_ar_8}</span>
                {/if}
                {if $total_ar_9 > 0}
                    <span style="font-weight: bolder;text-align: left;">AR 9: {$total_ar_9}</span>
                {/if}
            </th>
            <th></th>
            <th>
                {foreach from = $total_urgente item=numar_urgente}
                    <span style="font-weight: bolder;">TOTAL URGENTE : {$numar_urgente}</span>
                {/foreach}
            </th>
        </tr>
        </tbody>
    </table>

    {if (count($clienti_cu_observatii) > 0  || count($clienti_cu_urgente) > 0)}
        <div style="margin-top: 30px;margin-bottom: 100px;display: inline-flex">
            <div style="margin-left: 2px;">
                {if count($clienti_cu_observatii) > 0}
                    <table border="1" style="margin-top: 10px;width: 100%;">
                        <tr>
                            <th>LOCALITATE</th>
                            <th>CLIENT</th>
                            <th>OBSERVATII</th>
                        </tr>
                        {foreach from=$clienti_cu_observatii item=observatie}
                            <tr>
                                <th style="text-align: left;">{strtoupper($observatie['nume_localitate'])}</th>
                                <th style="text-align: left;">{strtoupper($observatie['nume_client'])}</th>
                                <th style="text-align: left;">{strtoupper($observatie['nume_observatie'])}</th>
                            </tr>
                        {/foreach}
                    </table>
                {/if}
            </div>
            <div>
                {if count($clienti_cu_urgente) > 0}
                    <table border="1" style="margin-top: 10px;width: 100%;margin-left: 30px;">
                        <tr>
                            <th>LOCALITATE</th>
                            <th>CLIENT</th>
                            <th>URGENT</th>
                            <th>CANTITATI</th>
                        </tr>
                        {foreach from=$clienti_cu_urgente item=client}
                            <tr>
                                <th>{$client['nume_localitate']}</th>
                                <th>{$client['nume_client']}</th>
                                <th>
                                    {$client['urgent']}
                                </th>
                                <th style="text-align: left;width: 100px;">
                                        {foreach from=$client['raspuns'] item=raspuns}
                                            <span> {$raspuns['nume_produs']}</span>
                                            :
                                            <span style="font-weight: 600;">{$raspuns['goale']}</span>
                                            <br/>
                                        {/foreach}
                                </th>
                            </tr>
                        {/foreach}
                    </table>
                {/if}
            </div>
        </div>
    {/if}
</section>
</body>
</html>
