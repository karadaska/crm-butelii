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
        <a href="/raport_livrari_clienti.php?traseu_id={$id}&data_start={$data_start}&data_stop={$data_stop}"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    {$org_date_start = $data_start}
    {$date_start = str_replace('-"', '.', $org_date_start)}
    {$newDateStart = date("d.m.Y", strtotime($date_start))}

    {$org_date_stop = $data_stop}
    {$date_stop = str_replace('-"', '.', $org_date_stop)}
    {$newDateSop = date("d.m.Y", strtotime($date_stop))}

    <table cellpadding="0" cellspacing="0" border="1"
           class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr>
            <th style="text-align: left;">ZONA</th>
            <th style="text-align: left;">LOCALITATE</th>
            <th style="text-align: left;">NUME</th>
            <th style="text-align: center;">TRASEU</th>
            <th style="text-align: center;">TELEFON</th>
            <th style="text-align: center;">CNP</th>
            <th style="text-align: center;">SERIA</th>
            <th style="text-align: center;" class="span1">DATA START</th>
            <th style="text-align: center;" class="span1">DATA STOP</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$lista_clienti item=client}
            <tr>
                <td>{strtoupper($client['nume_judet'])}</td>
                <td>{strtoupper($client['nume_localitate'])}</td>
                <td>
                   {strtoupper($client['nume'])}
                </td>
                <td>
                    {foreach from = $client['asignare_client_traseu'] item=asignare_traseu}
                        {if {$asignare_traseu['nume']}}
                            {$asignare_traseu['nume']}
                            <br/>
                        {else}
                            &ndash;
                        {/if}
                    {/foreach}
                </td>
                <td style="text-align: center;">
                    {if strlen({$client['telefon']} > 2)}
                        Tel 1: {$client['telefon']}<br/>
                    {/if}
                    {if strlen({$client['telefon_2']} > 2)}
                        Tel 2: {$client['telefon_2']}
                    {/if}
                </td>
                <td style="text-align: center;">{$client['cnp']}</td>
                <td style="text-align: center;">{$client['ci']}</td>
                <td style="text-align: center;">
                    {$client['data_start']}
                </td>
                <td style="text-align: center;">
                    {$client['data_stop']}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</section>
</body>
</html>
