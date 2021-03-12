{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari sofer (de verificat cantitatile + print TO DO)
                        <a href="/print_raport_livrari_soferi.php?id={$sofer_id}&data_start={$data_start}&data_stop={$data_stop}">
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
                                            <th style="text-align: center;" rowspan="2">Nr. auto</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th style="text-align: center;" rowspan="2">Km parcursi</th>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                <th colspan="3" style="border: double;">{$produse['nume_produs']}</th>
                                            {/foreach}
                                        </tr>
                                        <tr>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                <th>Cantitate</th>
                                                <th>Valoare</th>
                                                <th>Comision</th>
                                            {/foreach}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {$nr = 1}
                                        {foreach from = $livrari_soferi['trasee'] item= livrare}
                                            <tr>
                                                <td style="text-align: center;" class="span1">{$nr++}</td>
                                                <td>{$livrare['nume_sofer']}</td>
                                                <td style="text-align: center;">{$livrare['numar']}</td>
                                                <td>{$livrare['nume_traseu']}</td>
                                                <td style="text-align: right;">
                                                    {$livrare['km']['km_traseu']}
                                                </td>
                                                {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                    <td style="text-align: right;">
                                                        {($livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['cantitate'] : '-'}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {($livrare['total_produse'][$produse['tip_produs_id']]['valoare'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['valoare'] : '-'}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {($livrare['total_produse'][$produse['tip_produs_id']]['comision'] != '') ? $livrare['total_produse'][$produse['tip_produs_id']]['comision'] : '-'}
                                                    </td>
                                                {/foreach}
                                            </tr>
                                        {/foreach}
                                        <tr>
                                            <th colspan="4" style="text-align: right;"></th>
                                            <th style="text-align: right;">To do</th>
                                            {foreach from = $livrari_soferi['produse_sofer'] item= produse}
                                                <th style="text-align: right;color: red;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['cantitate']}</th>
                                                <th style="text-align: right;color: red;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['valoare']}</th>
                                                <th style="text-align: right;color: red;">{$livrari_soferi['grand'][$produse['tip_produs_id']]['comision']}</th>
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
            {*<div style="margin-left: 10px;">*}
            {*<table class="table table-bordered table-striped" style="width: 280px;">*}
            {*<tr class="info">*}
            {*<td style="text-align: center;font-weight: 900;color: red;" colspan="2">BG*}
            {*</td>*}
            {*</tr>*}
            {*<tr>*}
            {*<td style="text-align: left;font-weight: 900;">Total cantitati</td>*}
            {*<td style="text-align: center;font-weight: 900;">cantitate</td>*}
            {*</tr>*}
            {*<tr class="info">*}
            {*<td style="text-align: left;font-weight: 900;">Total Valoare</td>*}
            {*<td style="text-align: center;font-weight: 900;">total valoare</td>*}
            {*</tr>*}
            {*<tr>*}
            {*<td style="text-align: left;font-weight: 900;">Total Comision</td>*}
            {*<td style="text-align: center;font-weight: 900;">comison</td>*}
            {*</tr>*}
            {*</table>*}
            {*</div>*}
    </section>
</div>
<div style="margin-top: 100px;"></div>

<script src="/js/pagini/raport_livrari_soferi.js"></script>

