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
                                        <th colspan="3">TARGET PRODUSE</th>
                                        <th colspan="3">TOTAL PRODUSE</th>
                                        <th>GRAND PRODUSE</th>
                                        <th colspan="3">PRET PRODUSE</th>
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
                                                    <th colspan="2">&nbsp;</th>
                                                </tr>
                                                <tr>
                                                    <th>BG + AR</th>
                                                    <th>VALOARE</th>
                                                    <th>COMISION</th>
                                                </tr>
                                            </table>
                                        </th>
                                        {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>&nbsp;</th>
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
                                                {$grand_valoare = $grand_valoare + $produse['pret']}
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
                                            {foreach from=$client['preturi_produse'] item=preturi}
                                                <td>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                {foreach from=$preturi item=pret}
                                                                    {$pret['pret']}
                                                                    <br/>
                                                                    {$pret['total_cantitati_by_pret_produs']['numar_produs_by_pret']}
                                                                {/foreach}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            {/foreach}
                                        </tr>
                                    {/foreach}
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



