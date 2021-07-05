{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clien&#355i</h1>

                        <a target="_blank" href="/print_clienti_activi_depozit.php?id={$depozit_id}"
                           class="i-print"></a>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti_depozit_activi.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id" style="width: 150px;" data-schimba="1">
                            <option value="0">Alege depozit...</option>
                            {foreach from=$lista_depozite item=depozit}
                                <option value={$depozit['id']} {if $depozit['id'] == $depozit_id} selected="selected"{/if}>{$depozit['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">ZONA</th>
                                    <th style="text-align: left;">LOCALITATE</th>
                                    <th style="text-align: left;">NUME</th>
                                    <th style="text-align: left;">TARGET</th>
                                    <th style="text-align: center;">TRASEU</th>
                                    <th style="text-align: center;">TELEFON</th>
                                    <th style="text-align: center;">CNP</th>
                                    <th style="text-align: center;">SERIA</th>
                                    <th style="text-align: center;">STARE CLIENT</th>
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
                                            <a href="edit_client.php?id={$client['id']}">{strtoupper($client['nume'])}</a>
                                        </td>
                                        <td>
                                            {assign var=target_client value=Target::getTargetByClientId($client['id'])}
                                            {foreach from = $target_client item = target}
                                                {$target['nume_produs']} : {$target['target']} <br/>
                                            {/foreach}
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
                                        <td style="text-align: center;">{$client['stare_client']}</td>
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
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="js/pagini/edit_client.js"></script>
<script src="/js/pagini/clienti.js"></script>
<span style="margin-left: 230px;">{$totaltime}</span>