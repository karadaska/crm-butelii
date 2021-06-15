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

    <table style="width: 1500px;">
        <tr>
            <td style="text-align: left;" class="span3">
                <h2 style="text-align: center;">
                    RAPORT LUNAR <br/>
                    {$newDateStart} - {$newDateSop}
                </h2>
                <h2>
                    TRASEU: {strtoupper($nume_traseu['nume'])} <br/>
                </h2>
            </td>
        </tr>
    </table>
    {if (count($lista_clienti['produse_traseu']) > 0)}
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-title">
                        <div class="icon"><i class="icon20 i-table"></i></div>
                    </div>
                    <form action="/livrari_clienti.php"
                          method="post"
                          style="margin-bottom: 0">
                        <div class="widget-content">
                            <table border="1" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th rowspan="3">LOCALITATE</th>
                                    <th rowspan="3">CLIENT</th>
                                    <th rowspan="3">TELEFON</th>
                                    <th colspan="{count($lista_clienti['produse_traseu'])}">TARGET PRODUSE</th>
                                    <th colspan="{count($lista_clienti['produse_traseu'])}">TOTAL PRODUSE</th>
                                    <th>GRAND PRODUSE</th>
                                    <th colspan="{count($lista_clienti['produse_traseu'])}">PRET PRODUSE</th>
                                </tr>
                                <tr>
                                    {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                        <th>
                                            <table border="1" style="width: 100%;">
                                                <tr>
                                                    <th colspan="3">{$produs['nume_produs']}</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">STOC</td>
                                                    <td style="text-align: center;">PRET</td>
                                                    <td style="text-align: center;">COM</td>
                                                </tr>
                                            </table>
                                        </th>
                                    {/foreach}
                                    {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                        <th>
                                            <table border="1" style="width: 100%;">
                                                <tr>
                                                    <th colspan="3">{$produs['nume_produs']}</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">BUC.</td>
                                                    <td style="text-align: center;">PRET</td>
                                                    <td style="text-align: center;">COM</td>
                                                </tr>
                                            </table>
                                        </th>
                                    {/foreach}
                                    <th>
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <th colspan="3">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">BG + AR</td>
                                                <td style="text-align: center;">VAL.</td>
                                                <td style="text-align: center;">COM.</td>
                                            </tr>
                                        </table>
                                    </th>
                                    {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                        <th>
                                            <table border="1" style="width: 100%;">
                                                <tr>
                                                    <td>&nbsp</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">{$produs['nume_produs']}</td>
                                                </tr>
                                            </table>
                                        </th>
                                    {/foreach}
                                </tr>
                                </thead>
                                {foreach from=$lista_clienti['livrare_clienti'] item=client}
                                    <tr>
                                        <td>{strtoupper($client['nume_localitate'])}</td>
                                        <td>{strtoupper($client['nume_client'])}</td>
                                        <td>{$client['telefon']} </br>{$client['telefon_2']}</td>
                                        {foreach from=$client['target_produse'] item=target_client}
                                            <td>
                                                <table border="" style="width: 100%;">
                                                    <tr>
                                                        <td>
                                                            <table border="0" style="width: 100%;">
                                                                <tr>
                                                                    <td style="text-align: center;">{($target_client['target'] > 0 || $target_client['target'] !='') ?  $target_client['target'] : '-'}</td>
                                                                    <td style="text-align: center;">{($target_client['pret_contract'] > 0 || $target_client['pret_contract'] !='') ?  $target_client['pret_contract'] : '-'}</td>
                                                                    <td style="text-align: center;">{($target_client['comision'] > 0 || $target_client['comision'] !='') ?  $target_client['comision'] : '-'}</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        {/foreach}
                                        {$grand_bucati = 0}
                                        {$grand_valoare = 0}
                                        {$grand_comision = 0}
                                        {foreach from=$client['total_produse_vandute'] item=produse}
                                            <td>
                                                <table border="1" style="width: 100%;">
                                                    <tr>
                                                        <td>
                                                            <table border="0" style="width: 100%;">
                                                                <tr>
                                                                    <td style="text-align: center;">{($produse['cantitate'] > 0 || $produse['cantitate'] !='') ?  $produse['cantitate'] : '-'}</td>
                                                                    <td style="text-align: center;">{($produse['pret'] > 0 || $produse['pret'] !='') ?  $produse['pret'] : '-'}</td>
                                                                    <td style="text-align: center;">{($produse['comision'] > 0 || $produse['comision'] !='') ?  $produse['comision'] : '-'}</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            {$grand_bucati = $grand_bucati + $produse['cantitate']}
                                            {$grand_valoare = $grand_valoare + ($produse['pret'] * $produse['cantitate'])}
                                            {$grand_comision = $grand_comision + $produse['comision']}
                                        {/foreach}
                                        <td>
                                            <table border="1" style="width: 100%;">
                                                <tr>
                                                    <td>
                                                        <table border="0" style="width: 100%;">
                                                            <tr>
                                                                <td style="text-align: center;">{$grand_bucati}</td>
                                                                <td style="text-align: center;">{$grand_valoare}</td>
                                                                <td style="text-align: center;">{$grand_comision}</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        {foreach from=$client['preturi_produse'] item=preturi}
                                            <td>
                                                {foreach from=$preturi item=pret}
                                                    {if ($pret['total_cantitati_by_pret_produs']['numar_produs_by_pret'] > 0)}
                                                        <table border="0" style="width: 100%;">
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    {$pret['pret']}
                                                                    <br/>
                                                                    {$pret['total_cantitati_by_pret_produs']['numar_produs_by_pret']}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    {/if}
                                                {/foreach}
                                            </td>
                                        {/foreach}
                                    </tr>
                                {/foreach}
                                <tr>
                                    {if (count($lista_clienti['produse_traseu']) == 2)}
                                        {$colspan = 4}
                                    {else}
                                        {$colspan = 5}
                                    {/if}
                                    <th colspan="{$colspan}"></th>
                                    <th style="text-align: right;vertical-align: middle;">TOTAL</th>
                                    {$grand_total_cantitati = 0}
                                    {$grand_total_valoare = 0}
                                    {$grand_total_comision = 0}
                                    {$grand_total_ar_bg = 0}
                                    {$grand_valoare = 0}
                                    {$grand_comision = 0}

                                    {foreach from = $lista_clienti['produse_traseu'] item= produse}
                                        {$grand_total_cantitati = $lista_clienti['grand'][$produse['tip_produs_id']]['cantitate']}
                                        {$grand_total_valoare = $lista_clienti['grand'][$produse['tip_produs_id']]['valoare']}
                                        {$grand_total_comision = $lista_clienti['grand'][$produse['tip_produs_id']]['comision']}
                                        {$grand_total_ar_bg = $grand_total_ar_bg + $grand_total_cantitati}
                                        {$grand_valoare = $grand_valoare + $grand_total_valoare}
                                        {$grand_comision = $grand_comision + $grand_total_comision}
                                        <td>
                                            <table border="1" style="width: 100%;">
                                                <tr>
                                                    <th style="text-align: center;">{($grand_total_cantitati > 0) ? $grand_total_cantitati : '-'}</th>
                                                    <th style="text-align: center;">{($grand_total_valoare > 0) ? $grand_total_valoare : '-'}</th>
                                                    <th style="text-align: center;">{($grand_total_comision > 0) ? $grand_total_comision : '-'}</th>
                                                </tr>
                                            </table>
                                        </td>
                                    {/foreach}
                                    <td>
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <th style="text-align: center;">{($grand_total_ar_bg > 0) ? $grand_total_ar_bg : '-'}</th>
                                                <th style="text-align: center;">{($grand_valoare > 0) ? $grand_valoare : '-'}</th>
                                                <th style="text-align: center;">{($grand_comision > 0) ? $grand_comision : '-'}</th>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div style="display: inline-flex">
            <div>
                {if count($preturi_by_bg_11) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_bg_11)}">PRETURI BG 11</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_bg_11 item=pret}
                                {if ($pret['pret_bg_11']['cantitate']['0']['total_cantitate'] > 0)}
                                    <td>
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                    <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_bg_11']['cantitate']['0']['total_cantitate']}</td>
                                            </tr>
                                        </table>
                                    </td>
                                {/if}
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
            <div style="margin-left: 10px;">
                {if count($preturi_by_ar_9) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_ar_9)}">PRETURI AR 9</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_ar_9 item=pret}
                                {if ($pret['pret_ar_9']['cantitate']['0']['total_cantitate'] > 0)}
                                    <td>
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                    <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_ar_9']['cantitate']['0']['total_cantitate']}</td>
                                            </tr>
                                        </table>
                                    </td>
                                {/if}
                            {/foreach}
                        </tr>
                    </table>
                {/if}
            </div>
            <div style="margin-left: 10px;">
                {if count($preturi_by_ar_8) > 0}
                    <table border="1"
                           style="margin-top: 20px;width: 400px;">
                        <tr>
                            <th colspan="{count($preturi_by_ar_8)}">PRETURI AR 8</th>
                        </tr>
                        <tr>
                            {foreach from=$preturi_by_ar_8 item=pret}
                                {if ($pret['pret_ar_8']['cantitate']['0']['total_cantitate'] > 0)}
                                    <td>
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_ar_8']['pret']}
                                                    <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">{$pret['pret_ar_8']['cantitate']['0']['total_cantitate']}</td>
                                            </tr>
                                        </table>
                                    </td>
                                {/if}
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
