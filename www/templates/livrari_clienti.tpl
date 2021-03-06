{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari clienti
                        <a target="_blank"
                           href="/print_livrari_clienti.php?id={$traseu_id}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/livrari_clienti.php" method="post"
                      style="margin-bottom: 0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left;">Traseu
                                <select name="traseu_id">
                                    {foreach from=$lista_trasee item=traseu}
                                        <option value={$traseu['id']}
                                                {if $traseu['id'] == $traseu_id} selected="selected"
                                                {/if}>
                                            {$traseu['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                                <div id="data_start_datepicker" class="input-append date" data-date="{date("Y-m-d")}"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_start" name="data_start"
                                           value="{$data_start}"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
                                <div id="data_stop_datepicker" class="input-append date" data-date="{date("Y-m-d")}"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_stop" name="data_stop"
                                           value="{$data_stop}"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            {if (count($lista_clienti['produse_traseu']) > 0)}
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-table"></i></div>
                                <h4>List&#259; clien&#355i</h4>
                            </div>
                            <form action="/livrari_clienti.php"
                                  method="post"
                                  style="margin-bottom: 0">
                                <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
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
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th colspan="3">{$produs['nume_produs']}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>STOC</th>
                                                            <th>PRET</th>
                                                            <th>COM</th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            {/foreach}
                                            {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                                <th>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th colspan="3">{$produs['nume_produs']}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>BUC.</th>
                                                            <th>PRET</th>
                                                            <th>COM</th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            {/foreach}
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th colspan="3">&nbsp;</th>
                                                    </tr>
                                                    <tr>
                                                        <th>BG + AR</th>
                                                        <th>VAL.</th>
                                                        <th>COM.</th>
                                                    </tr>
                                                </table>
                                            </th>
                                            {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                                <th>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>&nbsp</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">{$produs['nume_produs']}</th>
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
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    <table class="table table-bordered">
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
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    <table class="table table-bordered">
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
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>
                                                                <table class="table table-bordered">
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
                                                {*{foreach from=$client['preturi_produse'] item=preturi}*}
                                                {*<td>*}
                                                {*{foreach from=$preturi item=pret}*}
                                                {*{if ($pret['total_cantitati_by_pret_produs']['numar_produs_by_pret'] > 0)}*}
                                                {*<table class="table table-bordered">*}
                                                {*<tr>*}
                                                {*<td style="text-align: center;">*}
                                                {*{$pret['pret']}*}
                                                {*<br/>*}
                                                {*{$pret['total_cantitati_by_pret_produs']['numar_produs_by_pret']}*}
                                                {*</td>*}
                                                {*</tr>*}
                                                {*</table>*}
                                                {*{/if}*}
                                                {*{/foreach}*}
                                                {*</td>*}
                                                {*{/foreach}*}
                                                {foreach from=$client['preturi_produse'] item=preturi}
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$preturi item=pret}
                                                                    {if ($pret['total_cantitati_by_pret_produs']['numar_produs_by_pret'] > 0)}
                                                                        <td style="text-align: center;">
                                                                            {$pret['pret']}
                                                                            <br/>
                                                                            {$pret['total_cantitati_by_pret_produs']['numar_produs_by_pret']}
                                                                        </td>
                                                                    {/if}
                                                                {/foreach}
                                                            </tr>
                                                        </table>
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
                                            <th style="text-align: right;vertical-align: middle;color:red;">TOTAL</th>
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
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th style="text-align: center;color: red;">{($grand_total_cantitati > 0) ? $grand_total_cantitati : '-'}</th>
                                                            <th style="text-align: center;color: red;">{($grand_total_valoare > 0) ? $grand_total_valoare : '-'}</th>
                                                            <th style="text-align: center;color: red;">{($grand_total_comision > 0) ? $grand_total_comision : '-'}</th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            {/foreach}
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th style="text-align: center;color: red;">{($grand_total_ar_bg > 0) ? $grand_total_ar_bg : '-'}</th>
                                                        <th style="text-align: center;color: red;">{($grand_valoare > 0) ? $grand_valoare : '-'}</th>
                                                        <th style="text-align: center;color: red;">{($grand_comision > 0) ? $grand_comision : '-'}</th>
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
                            <table class="table table-bordered"
                                   style="margin-top: 20px;width: 400px;">
                                <tr>
                                    <th colspan="{count($preturi_by_bg_11)}">PRETURI BG 11</th>
                                </tr>
                                <tr>
                                    {foreach from=$preturi_by_bg_11 item=pret}
                                        {if ($pret['pret_bg_11']['cantitate']['0']['total_cantitate'] > 0)}
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                            <br/>
                                                        </th>
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
                            <table class="table table-bordered"
                                   style="margin-top: 20px;width: 400px;">
                                <tr>
                                    <th colspan="{count($preturi_by_ar_9)}">PRETURI AR 9</th>
                                </tr>
                                <tr>
                                    {foreach from=$preturi_by_ar_9 item=pret}
                                        {if ($pret['pret_ar_9']['cantitate']['0']['total_cantitate'] > 0)}
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                            <br/>
                                                        </th>
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
                            <table class="table table-bordered"
                                   style="margin-top: 20px;width: 400px;">
                                <tr>
                                    <th colspan="{count($preturi_by_ar_8)}">PRETURI AR 8</th>
                                </tr>
                                <tr>
                                    {foreach from=$preturi_by_ar_8 item=pret}
                                        {if ($pret['pret_ar_8']['cantitate']['0']['total_cantitate'] > 0)}
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th style="text-align: center;">{$pret['pret_ar_8']['pret']}
                                                            <br/>
                                                        </th>
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
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



