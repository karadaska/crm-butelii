{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport complet apeluri clienti
                        <a target="_blank" href="/print_raport_complet_apeluri_clienti.php?id={$traseu_id}&stare_id={$stare_id}&observatie_id={$observatie_id}&urgent={$urgent}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                {*id="form_actualizeaza_stoc"*}
                <form action="/raport_complet_apeluri_clienti.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left">
                                <select name="traseu_id">
                                    <option value="0">Toate</option>
                                    {foreach from=$lista_trasee item=traseu}
                                        <option value={$traseu['id']}
                                                {if $traseu['id'] == $traseu_id} selected="selected"
                                                {/if}>
                                            {$traseu['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                                <select name="stare_id" style="width: 120px;">
                                    <option value="-1">-Alege stare-</option>
                                    {foreach from=$lista_stari key=tmp item=stare}
                                        <option value={$stare['id']} {if $stare['id'] == $stare_id} selected="selected"{/if}>{$stare['nume']}</option>
                                    {/foreach}
                                </select>
                                <select name="observatie_id" style="width: 120px;">
                                    <option value="0">-Alege obs-</option>
                                    {foreach from=$lista_observatii key=tmp item=observatie}
                                        {if $observatie['tip_observatie'] == 1}
                                            <option value={$observatie['id']}
                                                    {if $observatie['id'] == $observatie_id} selected="selected"{/if}>
                                                {$observatie['nume']}
                                            </option>
                                        {/if}
                                    {/foreach}
                                </select>
                                <select style="width: 80px;" name="urgent">
                                    <option value="-1">Alege..</option>
                                    <option value="0" {if $urgent == 0} selected="selected" {/if}>NU</option>
                                    <option value="1" {if $urgent == 1} selected="selected" {/if}>DA</option>
                                </select>
                                Interval <input placeholder="{$x}" autocomplete="off" type="date" name="data_start"
                                                value="{$data_start}">
                                <input autocomplete="off" type="date" name="data_stop"
                                       value="{$data_stop}">
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
                        <form action="/raport_complet_apeluri_clienti.php?traseu_id={$traseu_id}&stare_id={$stare_id}&observatie_id={$observatie_id}"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0" id="dataTable"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">NR.</th>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: left;">TELEFON</th>
                                        <th style="text-align: center;">DATA</th>
                                        <th style="text-align: center;">OBS</th>
                                        <th style="text-align: center;">URGENT</th>
                                        <th style="text-align: center;">PRODUSE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item = client}
                                        <tr>
                                            <td style="text-align: center;">{$nr++}</td>
                                            <td>{strtoupper($client['nume_localitate'])}</td>
                                            <td>{strtoupper($client['nume_client'])}</td>
                                            <td>
                                                {$client['telefon']}<br/>
                                                {$client['telefon_2']}
                                            </td>
                                            <td style="text-align: center;">{$client['data']}</td>
                                            <td style="text-align: center;">
                                                {if strlen($client['nume_observatie']) > 0}
                                                {$client['nume_observatie']}
                                                {else}
                                                    -
                                                {/if}
                                            </td>
                                            <td style="text-align: center;">
                                                {if {$client['urgent']} == 0}
                                                    NU
                                                {else}
                                                    <span style="color: red;">DA</span>
                                                {/if}
                                            </td>
                                            <td>
                                                {if count($client['raspuns']) > 0}
                                                    <table class="table table-bordered table-bordered">
                                                        {foreach from=$client['raspuns'] item = client_raspuns}
                                                            <tr>
                                                                <th class="span2">{$client_raspuns['nume_produs']}</th>
                                                                <th>{$client_raspuns['goale']}</th>
                                                            </tr>
                                                        {/foreach}
                                                    </table>
                                                {/if}
                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/data_table.js"></script>

