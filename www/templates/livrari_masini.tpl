{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1>
                        <i class="icon20 i-menu-6"></i> Raport livrari masini
                        <a target="_blank"
                           href="/print_livrari_masini.php?id={$masina_id}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/livrari_masini.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Masina
                                <select name="masina_id">
                                    <option value="0">Alege masina</option>
                                    {foreach from=$lista_masini item=masina}
                                        <option value={$masina['id']} {if $masina['id'] == $masina_id} selected="selected"{/if}>
                                            {$masina['numar']}
                                        </option>
                                    {/foreach}

                                </select>
                                <input type="hidden" name="id" id="id" value="{$masina_id}">
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input autocomplete="off" type="date" name="data_start" id="data_start"
                                                value="{$data_start}">
                                <input autocomplete="off" type="date" name="data_stop" id="data_stop"
                                       value="{$data_stop}">
                            </th>
                            <th style="text-align: left;">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                                <button class="btn btn-success" type="button" data-export_livrari="{$masina_id}"
                                        id="export_livrari_soferi">Export TO DO:
                                </button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            {if ($masina_id > 0)}
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <form action="/livrari_masini.php"
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
                                            {foreach from = $livrari_masini['produse_masina'] item= produse}
                                                <th colspan="2" style="border: double;">{$produse['nume_produs']}</th>
                                            {/foreach}
                                        </tr>
                                        <tr>
                                            <th>CANTITATI</th>
                                            <th>VALOARE</th>
                                            {foreach from = $livrari_masini['produse_masina'] item= produse}
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
                                        {foreach from = $livrari_masini['trasee'] item= livrare}
                                            <tr>
                                                <td style="text-align: center;" class="span1">{$nr++}</td>
                                                <td>{$livrare['nume_sofer']}</td>
                                                <td style="text-align: center;">{$livrare['numar']}</td>
                                                <td>{$livrare['nume_traseu']}</td>
                                                <td style="text-align: center;">{$livrare['km']['km_traseu']}</td>
                                                <td style="text-align: center">
                                                    {$livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] }
                                                </td>
                                                <td style="text-align: center">
                                                    {$livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] }
                                                </td>
                                                {foreach from = $livrari_masini['produse_masina'] item= produse}
                                                    <td style="text-align: right;">
                                                        {($livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] : '-'}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {($livrare['total_produse'][$produse['tip_produs_id']]['valoare'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['valoare'] : '-'}
                                                    </td>
                                                {/foreach}
                                            </tr>
                                            {$grand_total_km = $grand_total_km + $livrare['km']['km_traseu']}
                                            {$grand_cantitati = $grand_cantitati + $livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] }
                                            {$grand_valoare = $grand_cantitati + $livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] }
                                        {/foreach}
                                        <tr>
                                            <th colspan="3" style="text-align: right;"></th>
                                            <th style="text-align: right;">TOTAL:</th>
                                            <th style="text-align: center;color: red;vertical-align: middle;">{$grand_total_km}</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{$grand_cantitati}</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{$grand_valoare}</th>
                                            {foreach from = $livrari_masini['produse_masina'] item= produse}
                                                <th style="text-align: right;color: red;vertical-align: middle;">{$livrari_masini['grand'][$produse['tip_produs_id']]['cantitate']}</th>
                                                <th style="text-align: right;color: red;vertical-align: middle;">{$livrari_masini['grand'][$produse['tip_produs_id']]['valoare']}</th>
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

