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
        <a href="/completare_fisa_traseu.php?id={$id}"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                Inapoi
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h3>
                    Traseu: {$print_fisa['nume_traseu']}<br/>
                    Sofer: {$print_fisa['nume_sofer']}<br/>
                    Masina: {$print_fisa['numar']}<br/>
                    Data:{$print_fisa['data_intrare']}
                </h3>
            </td>
        </tr>
    </table>
    <table border="1" class="print" style="width: 1800px;">
        <tr>
            <td>#</td>
            <td>Client</td>
            <td style="text-align: center;">Produs</td>
            <td style="text-align: center;">Observatii</td>
        </tr>
        {$nr = 1}
        {foreach from=$print_fisa['clienti'] item="client"}
            <tr>
                <td style="text-align: center;">{$nr++}</td>
                <td>{$client['nume_client']}</td>
                <td>
                    <table border="1" class="print" style="width: 100%">
                        <tr>
                            <td style="text-align: center;">Produs</td>
                            <td style="text-align: center;">Pline</td>
                            <td style="text-align: center;">Defecte</td>
                        </tr>
                        {foreach from=$client['realizat'] item= realizat}
                            <tr>
                                <td>{$realizat['nume_produs']}:</td>
                                <td style="text-align: right;">{$realizat['cantitate']}</td>
                                <td style="text-align: right;">{$realizat['defecte']}</td>
                            </tr>
                        {/foreach}

                    </table>
                </td>
                <td>
                    {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$client['fisa_generata_id'])}
                   {$client_observatie['nume_observatie']}
                </td>
            </tr>
        {/foreach}
    </table>
    {if count($cantitati_produse_clienti_by_fisa_id) > 0}
        <table border="1" style="width: 600px;margin-top: 10px;">
            <tr class="info">
                <td style="text-align: center;font-weight: 900;">Produs</td>
                <td style="text-align: center;font-weight: 900;">Pline</td>
                <td style="text-align: center;font-weight: 900;">Defecte</td>
            </tr>
            {foreach from=$cantitati_produse_clienti_by_fisa_id item="cantitate"}
                {if $cantitate['pline'] > 0 || $cantitate['defecte'] > 0}
                    <tr>
                        <td>
                            <span style="color: red;font-weight: 900">{$cantitate['nume_produs']}</span>
                        </td>
                        <td style="text-align: right;">{$cantitate['pline']}</td>
                        <td style="text-align: right;">{$cantitate['defecte']}</td>
                    </tr>
                {/if}
            {/foreach}
            <tr>
                <th style="text-align: right;color: red;">Total:</th>
                <th style="text-align: right;">{$cantitati_produse_clienti_by_fisa_id['total_vandute']}</th>
                <th style="text-align: right">{$cantitati_produse_clienti_by_fisa_id['total_defecte']}</th>
            </tr>
        </table>
    {/if}
</section>
</body>
</html>
