{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Actualizare produse goale la client

                        <a target="_blank" href="/print_apeluri_clienti.php?id={$traseu_id}&stare_id={$stare_id}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>

            </div>
            <div class="row-fluid span12">
                <form action="/apeluri_clienti.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']}
                                        {if $traseu['id'] == $traseu_id} selected="selected" {/if}>
                                    {$traseu['nume']}
                                </option>
                            {/foreach}
                        </select>
                        <input type="hidden" name="id_traseu" value="{$traseu_id}">
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;">
                            <option value="-1">-Toti-</option>
                            {foreach from=$lista_stari key=tmp item=stare}
                                <option value={$stare['id']} {if $stare['id'] == $stare_id} selected="selected"{/if}>{$stare['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <input type="hidden" name="id_traseu" value="{$stare['id']}">

                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                            <div style="float: right;margin-right: 20px;margin-top: 10px;">
                                <form action="export.php" method="post">
                                    <input type="submit" name="export" class="btn btn-mini btn-success" value="Export">
                                </form>
                            </div>
                        </div>
                        <form action="/apeluri_clienti.php?traseu_id={$traseu_id}&stare_id={$stare_id}" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: center;">TELEFON</th>
                                        <th style="text-align: center;">STOC CLIENT</th>
                                        <th style="text-align: center;">CANTITATI</th>
                                        <th style="text-align: center;" colspan="2">OBSERVATII</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$total_bg_11 = 0}
                                    {$total_bg_9 = 0}
                                    {$total_bg_ar_8 = 0}
                                    {$total_bg_ar_9 = 0}
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item=client}
                                        <tr>
                                            <input type="hidden" name="valoare_client_id" value="{{$client['id']}}">
                                            <th style="text-align: center;vertical-align: middle;">{$nr++}</th>
                                            <th style="text-align: left;vertical-align: middle;">{strtoupper($client['nume_localitate'])}</th>
                                            <th style="text-align: left;vertical-align: middle;">
                                                <a target="_blank"
                                                   href="edit_client.php?id={$client['id']}">{strtoupper($client['nume_client'])}</a>
                                            </th>
                                            <th style="text-align: center;vertical-align: middle;">
                                                {if strlen($client['telefon']) >1}
                                                    {strtoupper($client['telefon'])}
                                                {/if}
                                                <br/>
                                                {if strlen($client['telefon_2']) > 1}
                                                    {strtoupper($client['telefon_2'])}
                                                {/if}
                                            </th>
                                            <th style="vertical-align: middle;text-align: left;">
                                                {foreach from=$client['target'] item = target_client}
                                                    {$target_client['nume_produs']}: {$target_client['target']} buc
                                                    <br/>
                                                {/foreach}
                                            </th>
                                            {if $target_client['target'] > 0}
                                                {$total_ar_9 = 0}
                                                {$total_ar_8 = 0}
                                                {$total_bg_11 = 0}
                                                <td style="vertical-align: middle;text-align: right;color: red;background-color: gainsboro;"
                                                    class="span4">
                                                    {foreach from=$client['target'] item = target_client}
                                                        {assign var=cantitati_goale value=Clienti::getGoaleApelClientiByClientId($client['id'],$target_client['tip_produs_id'],$traseu_id)}
                                                        {$target_client['nume_produs']}
                                                        {if $cantitati_goale['goale'] > 0}
                                                            {$valoare_goale_input = $cantitati_goale['goale']}
                                                        {else}
                                                            {$valoare_goale_input = 0}
                                                        {/if}
                                                        <input style="text-align: right"
                                                               value="{$valoare_goale_input}"
                                                               type="text" autocomplete="off"
                                                               name="goale_{$target_client['client_id']}_{$target_client['tip_produs_id']}">
                                                        <br/>
                                                        {if ($target_client['tip_produs_id']) == 1}
                                                            {$total_bg_11 = $total_bg_11+ ($cantitati_goale['goale']) }
                                                        {/if}
                                                        {if ($target_client['tip_produs_id']) == 2}
                                                            {$total_bg_9 = $total_bg_9+ ($cantitati_goale['goale']) }
                                                        {/if}
                                                        {if ($target_client['tip_produs_id']) == 3}
                                                            {$total_ar_8 = $total_ar_8+ ($cantitati_goale['goale']) }
                                                        {/if}
                                                        {if ($target_client['tip_produs_id']) == 4}
                                                            {$total_ar_9 = $total_ar_9+ ($cantitati_goale['goale']) }
                                                        {/if}
                                                    {/foreach}
                                                </td>
                                            {else}
                                                <td style="vertical-align: middle;text-align: center;">
                                                    <span style="color: red;">Nu are produse asignate!!</span>
                                                    <a href="/asigneaza_produse_client.php?id={$client['id']}"
                                                       class="btn btn-mini btn-inverse">Asigneaza</a>
                                                </td>
                                            {/if}
                                            <th style="vertical-align: middle;width: 300px;padding-bottom: 10px;padding-top: 10px;">
                                                {assign var=observatie_client value=Clienti::getObservatieApelClientiByClientId($client['id'],$traseu_id)}
                                                <select style="text-align: left;width: 250px;"
                                                        name="obs_{$target_client['client_id']}_{$target_client['tip_produs_id']}">
                                                    <option value="0">Obs</option>
                                                    {foreach from=$lista_observatii item=observatie}
                                                        {if $observatie['tip_observatie'] == 1}
                                                            <option value="{$observatie['id']}"
                                                                    {if $observatie_client['observatie_id'] == $observatie['id']}selected="selected"{/if}>
                                                                {$observatie['nume']}
                                                            </option>
                                                        {/if}
                                                    {/foreach}
                                                </select>
                                                <div style="margin-top: 5px;"></div>
                                                {assign var=urgenta_client value=Clienti::getUrgentaApelClientiByClientId($client['id'],$traseu_id)}
                                                <select name="urgent_{$target_client['client_id']}_{$target_client['tip_produs_id']}"
                                                        style="width: 250px;">
                                                    <option value="0"
                                                            {if $urgenta_client['urgent'] == 0}selected="selected"{/if}>
                                                        NU
                                                    </option>
                                                    <option value="1"
                                                            {if $urgenta_client['urgent'] == 1}selected="selected"{/if}>
                                                        DA
                                                    </option>
                                                </select>
                                            </th>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                    <tr>
                                        <th colspan="5" style="text-align: right;color: red;"> TOTAL:</th>
                                        <th style="color: red;">
                                            {if $total_bg_11 > 0}
                                                <span style="font-weight: bolder;">BG 11: {$total_bg_11}</span>
                                                <br/>
                                            {/if}
                                            {if $total_ar_8 > 0}
                                                <span style="font-weight: bolder;text-align: left;">AR 8: {$total_ar_8}</span>
                                            {/if}
                                            {if $total_ar_9 > 0}
                                                <span style="font-weight: bolder;text-align: left;">AR 9: {$total_ar_9}</span>
                                            {/if}
                                        </th>
                                    </tr>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza produse"
                                       class="btn btn-info" name="update"/>
                            </div>
                        </form>
                    </div>
                    {*<table class="table table-bordered" style="width:68%;margin-left: 15px;">*}
                    {*<tr>*}
                    {*{if $total_bg_11 > 0}*}
                    {*<th style="text-align: left;color: red;">*}
                    {*<span style="font-weight: bolder;margin-left: 20px;">BG 11: {$total_bg_11}*}
                    {*buc</span><br/>*}
                    {*</th>*}
                    {*{/if}*}
                    {*{if $total_ar_8 > 0}*}
                    {*<th style="text-align: left;color: red">*}
                    {*<span style="font-weight: bolder;margin-left: 20px;">AR 8: {$total_ar_8} buc</span>*}
                    {*</th>*}
                    {*{/if}*}
                    {*{if $total_ar_9 > 0}*}
                    {*<th style="text-align: left;color: red">*}
                    {*<span style="font-weight: bolder;margin-left: 20px;">AR 9: {$total_ar_9} buc</span>*}
                    {*</th>*}
                    {*{/if}*}
                    {*<th style="text-align: left;">*}
                    {*{foreach from = $total_obs item=numar_obs}*}
                    {*<span style="font-weight: bolder;margin-left: 20px;color: red">OBSERVATII : {$numar_obs}</span>*}
                    {*{/foreach}*}
                    {*</th>*}
                    {*<th style="text-align: left;">*}
                    {*{foreach from = $total_urgente item=numar_urgente}*}
                    {*<span style="font-weight: bolder;margin-left: 20px;color: red">URGENTE : {$numar_urgente}</span>*}
                    {*{/foreach}*}
                    {*</th>*}
                    {*</tr>*}
                    {*</table>*}
                    <div style="display: inline-flex;margin-top: 20px;">
                        {if count($clienti_cu_observatii) > 0}
                            <div style="margin-left: 10px;">
                                <table class="table table-bordered table-hover"
                                       style="width: 560px;margin-left: 5px;">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;" class="span1">#</th>
                                        <th>LOCALITATE</th>
                                        <th>CLIENT</th>
                                        <th>OBSERVATII</th>
                                    </tr>
                                    </thead>
                                    {$nr = 1}
                                    {foreach from=$clienti_cu_observatii item=observatie}
                                        <tr>
                                            <td>{$nr++}</td>
                                            <td>{strtoupper($observatie['nume_localitate'])}</td>
                                            <td>
                                                <a href="edit_client.php?id={$observatie['id']}">{$observatie['nume_client']}</a>
                                            </td>
                                            <td>{$observatie['nume_observatie']}</td>
                                        </tr>
                                    {/foreach}
                                </table>
                            </div>
                        {/if}
                        {if count($clienti_cu_urgente) > 0}
                            <div style="margin-left: 15px;">
                                <table class="table table-bordered table-hover" style="width: 570px;">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center" class="span1">#</th>
                                        <th>LOCALITATE</th>
                                        <th>CLIENT</th>
                                        <th>URGENT</th>
                                        <th>CANTITATI</th>
                                    </tr>
                                    </thead>
                                    {$nr = 1}
                                    {foreach from=$clienti_cu_urgente item=client}
                                        <tr>
                                            <td style="text-align: center;">{$nr++}</td>
                                            <td>{strtoupper($client['nume_localitate'])}</td>
                                            <td>
                                                <a href="edit_client.php?id={$client['client_id']}">{$client['nume_client']}</a>
                                            </td>
                                            <td style="text-align: center;" class="span1">
                                                {$client['urgent']}
                                            </td>
                                            <td style="text-align: left;" class="span2">
                                                {foreach from=$client['raspuns'] item=raspuns}
                                                        <span style="color: red;"> {$raspuns['nume_produs']}</span>
                                                        {($raspuns['goale']  > 0) ? ':' : ''}
                                                        <span style="font-weight: 600;">{$raspuns['goale']}</span>
                                                        <br/>
                                                {/foreach}
                                            </td>
                                        </tr>
                                    {/foreach}
                                </table>
                            </div>
                        {/if}
                    </div>

                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/apeluri_clienti.js"></script>
<span style="margin-left: 230px;">{$totaltime}</span>
