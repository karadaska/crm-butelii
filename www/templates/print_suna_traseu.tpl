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
        <a href="/suna_traseu.php?traseu_id={$id}" class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h5>
                    Traseu: {strtoupper($nume_traseu['nume'])} <br/>
                    Data: {date('Y-m-d')}
                </h5>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 100%;height: 100%">
        <thead>
        <tr>
            <th style="text-align: left;">#</th>
            <th style="text-align: left;">Localitate</th>
            <th style="text-align: left;">Client</th>
            <th style="text-align: left;">Telefon</th>
            <th style="text-align: left;">Produs</th>
            <th style="text-align: left;">Goale la client</th>
            <th style="text-align: center;">Obs</th>
            <th style="text-align: center;">Urgent</th>
        </tr>
        </thead>
        <tbody>
        {$total_bg_11 = 0}
        {$total_bg_9 = 0}
        {$total_ar_8 = 0}
        {$total_ar_9 = 0}
        {$nr = 1}
        {foreach from=$lista_clienti item=client}
            <input type="hidden" name="valoare_client_id" value="{{$client['id']}}">
            <tr>
                <th>{$nr++}</th>
                <th style="text-align: left;vertical-align: middle;">{strtoupper($client['nume_localitate'])}</th>
                <th style="text-align: left;vertical-align: middle;">
                    {strtoupper($client['nume_client'])}
                </th>
                <th style="text-align: left;vertical-align: middle;">
                    {if strlen($client['telefon']) >1}
                        {strtoupper($client['telefon'])}
                    {/if}
                    <br/>
                    {if strlen($client['telefon_2']) > 1}
                        {strtoupper($client['telefon_2'])}
                    {/if}
                </th>
                <th>
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
                <th>
                    {assign var=client_observatie value=Clienti::getObservatieSunaTraseuByClientId($target_client['client_id'])}
                    {foreach from=$client_observatie item=observatie_id}
                        {assign var=nume_observatie value=Clienti::getNumeObservatieByObservatieId($observatie_id)}
                        {$nume_observatie['nume_observatie']}
                    {/foreach}
                </th>
                <th>
                    {assign var=client_urgenta value=Clienti::getUrgentaSunaTraseuByClientId($target_client['client_id'])}
                    {foreach from=$client_urgenta item=urgenta}
                        {if $urgenta['urgenta'] == 0}
                            NU
                        {else}
                            DA
                        {/if}
                    {/foreach}
                </th>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <table border="1" style="width: 10%;margin-top: 10px;">
        <tr>
            {if $total_bg_11 > 0}
                <th style="text-align: left;">
                    <span style="font-weight: bolder;">TOTAL BG 11: {$total_bg_11}</span><br/>
                </th>
            {/if}
        </tr>
        <tr>
            {if $total_bg_9 > 0}
                <th style="text-align: left;">
                    <span style="font-weight: bolder;text-align: left;">TOTAL BG 9: {$total_bg_9}</span>
                </th>
            {/if}
        </tr>
        <tr>
            {if $total_ar_8 > 0}
                <th style="text-align: left;">
                    <span style="font-weight: bolder;text-align: left;">TOTAL AR 8: {$total_ar_8}</span>
                </th>
            {/if}
        </tr>
        <tr>
            {if $total_ar_9 > 0}
                <th style="text-align: left;">
                    <span style="font-weight: bolder;text-align: left;">TOTAL AR 9: {$total_ar_9}</span>
                </th>
            {/if}
        </tr>
        <tr>
            <th style="text-align: left;">
                {foreach from = $total_obs item=numar_obs}
                    <span style="font-weight: bolder;">TOTAL Observatii : {$numar_obs}</span>
                {/foreach}
            </th>
        </tr>
        <tr>
            <th style="text-align: left;">
                {foreach from = $total_urgente item=numar_urgente}
                    <span style="font-weight: bolder;">TOTAL Urgente : {$numar_urgente}</span>
                {/foreach}
            </th>
        </tr>
    </table>
    <div>
        <table border="1" width="100%">
            <tr>
                <td> {if count($clienti_cu_observatii) > 0}
                        <table border="1" style="margin-top: 10px;width: 90%;">
                            <tr>
                                <th>Client</th>
                                <th>Observatii</th>
                            </tr>
                            {foreach from=$clienti_cu_observatii item=observatie}
                                <tr>
                                    <th>{$observatie['nume_client']}</th>
                                    <th>{$observatie['nume_observatie']}</th>
                                </tr>
                            {/foreach}
                        </table>
                    {/if}</td>
                <td>
                    {if count($clienti_cu_urgente) > 0}
                        <table border="1" style="margin-top: 10px;width: 90%;">
                            <tr>
                                <th>Client</th>
                                <th>Urgent</th>
                            </tr>
                            {foreach from=$clienti_cu_urgente item=urgenta}
                                <tr>
                                    <th>{$urgenta['nume_client']}</th>
                                    <th>
                                        {$urgenta['urgent']}
                                    </th>
                                </tr>
                            {/foreach}
                        </table>
                    {/if}
                </td>
            </tr>
        </table>
    </div>
</section>
</body>
</html>
