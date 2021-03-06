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
        <a href="/raport_observatii_fisa_traseu.php?id={$id}&observatie_id={$observatie_id}&data_start={$data_start}&data_stop={$data_stop}"
           class="ascuns">
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
    {if count($lista_clienti) > 0}
        <table border="1" class="print" style="width: 100%;height: 100%">
            <thead>
            <tr>
                <th style="text-align: center;">#</th>
                <th style="text-align: left;">LOCALITATE</th>
                <th style="text-align: left;">CLIENT</th>
                <th style="text-align: center;">TELEFON</th>
                <th style="text-align: center;">DATA</th>
                <th style="text-align: center;">OBS</th>
            </tr>
            </thead>
            <tbody>
            {$nr = 1}
            {foreach from=$lista_clienti item=client}
                <input type="hidden" name="valoare_client_id" value="{$client['id']}">
                <tr>
                    <th style="text-align: center;vertical-align: middle;">{$nr++}
                    <th style="text-align: left;vertical-align: middle;">{strtoupper($client['nume_localitate'])}
                    </th>
                    <th style="text-align: left;vertical-align: middle;">{strtoupper($client['nume_client'])}
                    </th>
                    <th style="text-align: center;vertical-align: middle;">
                        {if $client['telefon'] >0}
                            {strtoupper($client['telefon'])}
                            <br/>
                        {/if}
                        {if $client['telefon_2'] >0}
                            {strtoupper($client['telefon_2'])}
                        {/if}
                    </th>
                    <td style="text-align: center;">{strtoupper($client['data'])}</td>
                    <td style="text-align: center;">{strtoupper($client['nume_observatie'])}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        {else}
        NU AI NIMIC DE PRINTAT
    {/if}
</section>
</body>
</html>
