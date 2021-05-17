{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clien&#355i</h1>
                    <a href="adauga_client.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            client
                        </button>
                    </a>
                    <a href="adauga_depozit.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            depozit
                        </button>
                    </a>
                    <a href="import_clienti.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Import clienti
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id" style="width: 150px;" data-schimba="1">
                            <option value="0">Alege depozit...</option>
                            {foreach from=$lista_depozite item=depozit}
                                <option value={$depozit['id']} {if $depozit['id'] == $depozit_id} selected="selected"{/if}>{$depozit['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="zona_id" style="width: 150px;" data-schimba="2">
                            <option value="0">Alege zona...</option>
                            {foreach from=$lista_zone item=zona}
                                <option value={$zona['id']} {if $zona['id'] == $zona_id} selected="selected"{/if}>
                                    {strtoupper($zona['nume'])}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;" id="lista_localitati">
                        <select name="localitate_id" id="localitate_id" style="width: 150px;" data-schimba="2">
                            <option value="0">Alege localitate...</option>
                            {foreach from=$lista_localitati item=localitate}
                                <option value={$localitate['id']} {if $localitate['id'] == $localitate_id} selected="selected"{/if}>
                                    {strtoupper($localitate['nume'])}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 150px;" data-schimba="3">
                            <option value="0">Alege traseu...</option>
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']} {if $traseu['id'] == $traseu_id} selected="selected"{/if}>{$traseu['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;" data-schimba="4">
                            <option value="-1">-Toti-</option>
                            {foreach from=$lista_stari key=tmp item=stare}
                                <option value={$stare['id']} {if $stare['id'] == $stare_id} selected="selected"{/if}>{$stare['nume']}</option>
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
                                    <th style="text-align: center;">TRASEU</th>
                                    <th style="text-align: center;">STARE</th>
                                    <th style="text-align: center;">TELEFON</th>
                                    <th style="text-align: left;" class="span1">OBSERVATII</th>
                                    <th style="text-align: center;" class="span1">Data Contract</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_clienti item=client}
                                    <tr>
                                        <td>{strtoupper($client['nume_judet'])}</td>
                                        <td>{strtoupper($client['nume_localitate'])}</td>
                                        <td>
                                            <a href="edit_client.php?id={$client['id']}">{strtoupper($client['nume'])}</a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="istoric_client_fisa_traseu.php?id={$client['id']}"
                                               title="Istoric client produse adaugate la fisa traseu">
                                                <i class="i-truck"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="asigneaza_produse_client.php?id={$client['id']}"
                                               title="Asigneaza produse la client">
                                                <i class="i-bubble-forward-2"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="adauga_observatie_client.php?id={$client['id']}"
                                               title="Adauga observatie la client">
                                                <i class="i-bubble-dots-4"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="observatii_apel_client.php?id={$client['id']}"
                                               title="Lista observatii apeluri">
                                                <i class="i-bell"></i>
                                            </a>
                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                               href="randament_client.php?id={$client['id']}"
                                               title="Randament client">
                                                <i class="i-balance"></i>
                                            </a>
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
                                        <td style="text-align: center;">{$client['nume_stare']}</td>
                                        <td style="text-align: center;">
                                            {if strlen({$client['telefon']} > 2)}
                                                Tel 1: {$client['telefon']}<br/>
                                            {/if}
                                            {if strlen({$client['telefon_2']} > 2)}
                                                Tel 2: {$client['telefon_2']}
                                            {/if}
                                        </td>
                                        {*<td style="text-align: right;">{$client['rastel']}</td>*}
                                        {*<td>*}
                                            {*{foreach from=$client['target'] item = produse_client}*}
                                                {*{$produse_client['nume_produs']} => [Stoc: {$produse_client['target']}]<br/> Pret: {$produse_client['pret']} RON; Comision: {$produse_client['comision']} RON*}
                                                {*<br/>*}
                                            {*{/foreach}*}
                                        {*</td>*}
                                        <td>
                                            {$client['nume_observatie']}
                                            {*{foreach from=$client['observatii_client'] item = observatie_client}*}
                                                {*{$observatie_client['nume']}*}
                                            {*{/foreach}*}
                                        </td>
                                        <td style="text-align: center;">
                                            {$client['data_contract']}
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