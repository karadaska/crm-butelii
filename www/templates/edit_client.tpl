{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i> Edit client</h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista clienti
                    </button>
                    <button type="button" onclick="location.href='/observatii_apel_client.php?id={$client['id']}'"
                            name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Observatii apel client
                    </button>
                    <button type="button" onclick="location.href='/randament_client.php?id={$client['id']}'"
                            value="Randament" class="btn btn-small btn-info">
                        Randament
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <table class="table table-bordered" style="width: 400px;">
                                    <tr>
                                        <th colspan="4" style="color: red;"> Stoc client</th>
                                    </tr>
                                    {if count($target_by_client_id) > 0}
                                        <tr>
                                            {foreach from=$target_by_client_id item=target}
                                                <th>
                                                    <a href="asigneaza_produse_client.php?id={$client['id']}">{$target['nume_produs']}
                                                        : {$target['target']}</a><br/></th>
                                            {/foreach}
                                        </tr>
                                    {else}
                                        <tr>
                                            <th><a href="/asigneaza_produse_client.php?id={$client['id']}">Asigneaza
                                                    produse la client</a></th>
                                        </tr>
                                    {/if}
                                </table>
                            </div>
                            <div>
                                <div style="float: left">
                                    <form class="form-horizontal" id="form_edit_client" action="/edit_client.php"
                                          method="post">
                                        <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                        <input type="hidden" name="id" id="id" value="{$client['id']}"/>
                                        <table class="table table-bordered" style="width: 400px;">
                                            <tr style="text-align: left;">
                                                <th style="width: 150px;vertical-align: middle;text-align: left">Nume client</th>
                                                <th><input style="width: 100%" autocomplete="off" id="nume" type="text"
                                                           name="nume"
                                                           value="{$client['nume']}"></th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Zona</th>
                                                <th style="text-align: left;">
                                                    <select name="judet_id" id="judet_id" style="width: 100%">
                                                        <option value="0">Alege...</option>
                                                        {foreach from=$lista_judete key=tmp item=judet}
                                                            <option value={$judet['id']}{if $judet['id']==$client['judet_id']} selected="selected" {/if}>{$judet['nume']}</option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Localitate</th>
                                                <th style="text-align: left;">
                                                    <select name="localitate_id" id="localitate_id" style="width: 100%">
                                                        <option value="0">Alege...</option>
                                                        {foreach from=$lista_localitati key=tmp item=localitate}
                                                            <option value={$localitate['id']} {if $localitate['id'] == $client['localitate_id']} selected="selected" {/if}>{$localitate['nume']}</option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Stare client</th>
                                                <th style="text-align: left;">
                                                    <select name="stare_id" id="stare_id" style="width: 100%">
                                                        {foreach from=$lista_stari key=tmp item=stare}
                                                            <option value={$stare['id']} {if $stare['id'] == $client['stare_id']} selected="selected"{/if}>{$stare['nume']}</option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Adresa</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="adresa"
                                                           value="{$client['adresa']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Telefon</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="telefon"
                                                           value="{$client['telefon']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Telefon 2</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="telefon_2"
                                                           value="{$client['telefon_2']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Cnp</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text" name="cnp"
                                                           value="{$client['cnp']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">C.I</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text" name="ci"
                                                           value="{$client['ci']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="contract"
                                                           value="{$client['contract']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Titular</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" type="text"
                                                           name="titular"
                                                           value="{$client['titular']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Rastel</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="rastel"
                                                           type="text"
                                                           name="rastel_id"
                                                           value="{$client['rastel']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Tip Rastel</th>
                                                <th style="text-align: left;">
                                                    <select name="tip_rastel">
                                                        {assign var=rastel_by_client_id value=Clienti::getTipRastelByClientId($client['id'])}
                                                        <option value="0">Alege...</option>
                                                        {foreach from=$lista_tip_rastel key=tmp item=tip_rastel}
                                                            <option value={$tip_rastel['id']}
                                                                    {if $tip_rastel['id'] == $rastel_by_client_id['tip_rastel_id']} selected="selected"{/if}>
                                                                {$tip_rastel['tip']}
                                                            </option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Culoare</th>
                                                <th style="text-align: left;">
                                                    <select name="culoare_id">
                                                        <option value="0">Selecteaza culoare</option>
                                                        {foreach from=$culori_butelii key=tmp item=culoare}
                                                            <option value={$culoare['id']} {if $culoare['id'] == $client['culoare_id']} selected="selected"{/if}>{$culoare['nume']}</option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Tip Afis</th>
                                                <th style="text-align: left;">
                                                    <select name="tip_afis">
                                                        <option value="0">Alege...</option>
                                                        {foreach from=$lista_tip_afis item= afis}
                                                            <option value={$afis['id']}
                                                                    {if $afis['id'] == $client['tip_afis']} selected="selected"{/if}>
                                                                {$afis['tip']}
                                                            </option>
                                                        {/foreach}
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Incheiere contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" type="date" name="data_start"
                                                           value="{$client['data_start']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Desfiintare contract</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" type="date" name="data_stop"
                                                           value="{$client['data_stop']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Latitudine</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="latitudine"
                                                           type="text"
                                                           name="latitudine"
                                                           value="{$client['latitudine']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Longitudine</th>
                                                <th style="text-align: left;">
                                                    <input autocomplete="off" style="width: 100%" id="longitudine"
                                                           type="text"
                                                           name="longitudine"
                                                           value="{$client['longitudine']}">
                                                </th>
                                            </tr>
                                            {*<th colspan="2" style="text-align: left; vertical-align: middle;">*}
                                                {*<?php*}
                                                {*$checked = $si_consumat == 1 ? ' checked="checked"' : '';*}
                                                {*?>*}
                                                                                    {*<input type="checkbox" id="si_consumat" name="si_consumat" value="1" <?= $checked; ?>/><label*}
                                                        {*for="si_consumat" style="display: inline; margin-left: 10px;">afi&#351;eaz&#259;*}
                                                    {*&#351;i bugetul consumat</label>*}
                                            {*</th>*}

                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">Ignore</th>
                                                <th style="text-align: left;">
                                                   <input type="checkbox" name="exclus" value="1" {if $client['exclus'] == 1 } checked="checked" {/if}>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" style="text-align: right;">
                                                    <button type="submit" name="modifica" value="modifica"
                                                            class="btn btn-info">
                                                        Modifica
                                                    </button>

                                                    <button type="button" class="btn btn-danger"
                                                            onclick="clickOnStergeClient({$client['id']})">Sterge client
                                                    </button>
                                                </th>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div style="float: right">
                                    <table class="table table-bordered table-hover"
                                           id="dataTable" style="width: 800px">
                                        <thead>
                                        <tr>
                                            <th>Observatie</th>
                                            <th>User</th>
                                            <th>Data adaugarii</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {foreach from=$observatii_by_client_id item=observatie}
                                            <tr>
                                                <td>
                                                    <a href="edit_observatie_client.php?id={{$observatie['id']}}"
                                                       target="_blank">{$observatie['nume']}</a>
                                                </td>
                                                <td style="text-align: center;">{$observatie['nume_user']}</td>
                                                <td style="text-align: center;">{$observatie['data_intrare']}</td>
                                                <td style="text-align: center;">
                                                    <img title="Sterge target produs" src="../images/delete.png"
                                                         style="cursor: pointer"
                                                         onclick="clickOnStergeObservatieLaClient({$observatie['id']})">
                                                </td>
                                            </tr>
                                        {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
