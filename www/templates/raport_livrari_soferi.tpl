{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari sofer
                        <a target="_blank"
                           href="/print_raport_livrari_soferi.php?id={$sofer_id}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_livrari_soferi.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Sofer
                                <select name="sofer_id">
                                    <option value="0">Alege sofer</option>
                                    {foreach from=$lista_soferi item=sofer}
                                        <option value={$sofer['id']}
                                                {if $sofer['id'] == $sofer_id} selected="selected"{/if}>
                                            {$sofer['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                                <input type="hidden" name="id" id="id" value="{$sofer_id}">
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input autocomplete="off" type="date" name="data_start" id="data_start"
                                                value="{$data_start}">
                                <input autocomplete="off" type="date" name="data_stop" id="data_stop"
                                       value="{$data_stop}">
                            </th>
                            <th style="text-align: left;">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                                <button class="btn btn-success" type="button" data-export_livrari="{$sofer_id}"
                                        id="export_livrari_soferi">Export TO DO:
                                </button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            {if ($sofer_id > 0)}
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <form action="/raport_livrari_soferi.php"
                                  method="post" id="form_actualizeaza_stoc"
                                  style="margin-bottom: 0">
                                <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: left;" rowspan="2">NUME SI PRENUME</th>
                                            <th style="text-align: center;" rowspan="2">NR. AUTO</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th style="text-align: center;" rowspan="2">KM PARCURSI</th>
                                            <th style="text-align: center;" colspan="2">TOTAL PRODUSE</th>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                <th colspan="2" style="border: double;">{$produse['nume_produs']}</th>
                                            {/foreach}
                                        </tr>
                                        <tr>
                                            <th>CANTITATI</th>
                                            <th>VALOARE</th>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                <th>CANTITATE</th>
                                                <th>VALOARE</th>
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
                                                <td>{$livrare['nume_traseu']} <br/></td>
                                                <td style="text-align: right;">
                                                    {($livrare['km']['km_traseu'] > 0) ? $livrare['km']['km_traseu'] : '-'}
                                                </td>
                                                <td style="text-align: right">
                                                    dasdas
                                                    {$total_cantitati_produse = $livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate']}
                                                    {($total_cantitati_produse > 0) ? $total_cantitati_produse : '-'}
                                                </td>
                                                <td style="text-align: right">
                                                    bbb
                                                    {$total_produse_valoare = $livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] }
                                                    {($total_produse_valoare >0) ? $total_produse_valoare :'-'}
                                                </td>
                                                {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                    {$total_produse = $livrare['total_produse_extra'][$produse['tip_produs_id']]['cantitate'] + $livrare['total_produse'][$produse['tip_produs_id']]['cantitate']}
                                                    {$total_valoare = $livrare['total_produse_extra'][$produse['tip_produs_id']]['valoare'] + $livrare['total_produse'][$produse['tip_produs_id']]['valoare']}
                                                    <td style="text-align: right;">
                                                        {($total_produse > 0 ) ? $total_produse : '-'}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {($total_valoare > 0) ? $total_valoare : '-'}
                                                    </td>
                                                {/foreach}
                                            </tr>
                                            {$grand_total_km = $grand_total_km + $livrare['km']['km_traseu']}
                                            {$grand_cantitati = $grand_cantitati + $livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] + $livrare['total_produse_extra']['1']['cantitate'] + $livrare['total_produse_extra']['3']['cantitate'] +  $livrare['total_produse_extra']['4']['cantitate']}
                                            {$grand_valoare = $grand_valoare + $livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] +$livrare['total_produse_extra']['1']['valoare'] + $livrare['total_produse_extra']['3']['valoare'] +  $livrare['total_produse_extra']['4']['valoare']}
                                        {/foreach}
                                        <tr>
                                            <th colspan="3" style="text-align: right;"></th>
                                            <th style="text-align: right;">TOTAL:</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_total_km > 0) ? $grand_total_km : '-'}</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_cantitati > 0) ? $grand_cantitati : '-'}</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_valoare > 0) ? $grand_valoare :'-'}</th>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                {$grand_total_cantitati = $livrari_soferi['grand_extra'][$produse['tip_produs_id']]['cantitate'] + $livrari_soferi['grand'][$produse['tip_produs_id']]['cantitate']}
                                                {$grand_total_valoare = $livrari_soferi['grand_extra'][$produse['tip_produs_id']]['valoare'] + $livrari_soferi['grand'][$produse['tip_produs_id']]['valoare']}
                                                <th style="text-align: right;color: red;">{($grand_total_cantitati > 0) ? $grand_total_cantitati : '-'}</th>
                                                <th style="text-align: right;color: red;">{($grand_total_valoare > 0) ? $grand_total_valoare : '-'}</th>
                                            {/foreach}
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            {/if}
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_soferi.js"></script>

