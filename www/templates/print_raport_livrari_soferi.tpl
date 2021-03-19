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
               value="PRINT"/>
        <a href="/raport_livrari_soferi.php?sofer_id={$id}&data_start={$data_start}&data_stop={$data_stop}"
           class="ascuns">
            <button type="button" class="btn btn-mini btn-warning ascuns">
                INAPOI
            </button>
        </a>
    </div>
    <table style="width: 1800px;">
        <tr>
            <td style="text-align: left;" class="span3">
                {$newdata_start = date("d-m-Y", strtotime($data_start))}
                {$newdata_stop = date("d-m-Y", strtotime($data_stop))}
                <h3 style="font-weight: 600;">
                    RAPORT LIVRARE SOFER: {strtoupper($nume_sofer['nume'])} <br/>
                    PERIOADA: {$newdata_start} / {$newdata_stop}
                </h3>
            </td>
        </tr>
    </table>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <form action="/raport_livrari_soferi.php"
                      method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div class="widget-content">
                        <table cellpadding="0" cellspacing="0" border="1">
                            <thead>
                            <tr>
                                <td style="text-align: center;" rowspan="2">#</td>
                                <td style="text-align: left;" rowspan="2">NUME SI PRENUME</td>
                                <td style="text-align: center;" rowspan="2">NR. AUTO</td>
                                <td style="text-align: center;" rowspan="2">TRASEU</td>
                                <td style="text-align: center;" rowspan="2">KM PARCURSI</td>
                                <td style="text-align: center;" colspan="2">TOTAL PRODUSE</td>
                                {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                    <td colspan="2" style="text-align: center;">{$produse['nume_produs']}</td>
                                {/foreach}
                            </tr>
                            <tr>
                                <td>CANTITATI</td>
                                <td>VALOARE</td>
                                {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                    <td>CANTITATE</td>
                                    <td>VALOARE</td>
                                    {*<td>COMISION</td>*}
                                {/foreach}
                            </tr>
                            </thead>
                            <tbody>
                            {$nr = 1}
                            {$grand_total_km = 0}
                            {$grand_cantitati = 0}
                            {$grand_valoare = 0}
                            {foreach from = $livrari_soferi['trasee'] item= livrare}
                                <tr>
                                    <td style="text-align: center;" class="span1">{$nr++}</td>
                                    <td>{$livrare['nume_sofer']}</td>
                                    <td style="text-align: center;">{$livrare['numar']}</td>
                                    <td>{$livrare['nume_traseu']}</td>
                                    <td style="text-align: right;">
                                        {$livrare['km']['km_traseu']}
                                    </td>
                                    <td style="text-align: center">
                                        {$livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] }
                                    </td>
                                    <td style="text-align: center">
                                        {$livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] }
                                    </td>
                                    {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                        <td style="text-align: right;">
                                            {($livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] : '-'}
                                        </td>
                                        <td style="text-align: right;">
                                            {($livrare['total_produse'][$produse['tip_produs_id']]['valoare'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['valoare'] : '-'}
                                        </td>
                                        {*<td style="text-align: right;">*}
                                            {*{($livrare['total_produse'][$produse['tip_produs_id']]['comision'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['comision'] : '-'}*}
                                        {*</td>*}
                                    {/foreach}
                                </tr>
                                {$grand_total_km = $grand_total_km + $livrare['km']['km_traseu']}
                                {$grand_cantitati = $grand_cantitati + $livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] }
                                {$grand_valoare = $grand_cantitati + $livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] }
                            {/foreach}
                            <tr>
                                <th colspan="3" style="text-align: right;"></th>
                                <th style="text-align: right;font-weight: 900;">TOTAL:</th>
                                <th style="text-align: right;font-weight: 900;">{$grand_total_km}</th>
                                <th style="text-align: right;vertical-align: middle;">{$grand_cantitati}</th>
                                <th style="text-align: right;vertical-align: middle;">{$grand_valoare}</th>
                                {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                    <th style="text-align: right;font-weight: 900;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['cantitate']}</th>
                                    <th style="text-align: right;font-weight: 900;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['valoare']}</th>
                                    {*<th style="text-align: right;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['comision']}</th>*}
                                {/foreach}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
