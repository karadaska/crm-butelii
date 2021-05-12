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
                                            <th style="text-align: center;" rowspan="2">DATA</th>
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
                                                <td style="text-align: right;">{($livrare['km']['km_traseu'] > 0) ? $livrare['km']['km_traseu'] : '-'}</td>
                                                <td class="span2">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td></td>
                                                            {*{if count($livrare['fise_by_masina']) > 3}*}
                                                                {*<td><i id="toggle_cantitate" class="icon16 i-list"*}
                                                                       {*style="cursor: pointer;"></i>*}
                                                                {*</td>*}
                                                            {*{/if}*}
                                                            <th>Fisa</th>
                                                            <th style="text-align: center;">Data</th>
                                                            <th>Cant</th>
                                                        </tr>
                                                        {$nr = 1}
                                                        {foreach from=$livrare['fise_by_masina'] item=cantitate}
                                                            <tr>
                                                                <td style="text-align: center;">{$nr++}</td>
                                                                <td style="text-align: center;"><a target="_blank" href="completare_fisa_traseu.php?id={$cantitate['id']}">{$cantitate['id']}</a>
                                                                </td>
                                                                <td style="text-align: center;">{$cantitate['data']}</td>
                                                                <td style="text-align: center;">{$cantitate['suma_cantitati']}</td>
                                                            </tr>
                                                            {*<tr {($nr > 3) ? 'class="ascunde_cantitate"' : ''}>*}
                                                                {*<td style="text-align: center;">{$nr++}</td>*}
                                                                {*<td style="text-align: center;"><a target="_blank" href="completare_fisa_traseu.php?id={$cantitate['id']}">{$cantitate['id']}</a>*}
                                                                {*</td>*}
                                                                {*<td style="text-align: center;">{$cantitate['data']}</td>*}
                                                                {*<td style="text-align: center;">{$cantitate['suma_cantitati']}</td>*}
                                                            {*</tr>*}
                                                        {/foreach}
                                                    </table>
                                                </td>
                                                <td style="text-align: right">
                                                    {$total_livrare = $livrare['total_produse']['1']['cantitate'] + $livrare['total_produse']['3']['cantitate'] +  $livrare['total_produse']['4']['cantitate'] + $livrare['total_produse_extra']['1']['cantitate'] + $livrare['total_produse_extra']['3']['cantitate'] +  $livrare['total_produse_extra']['4']['cantitate']}
                                                    {($total_livrare > 0) ? $total_livrare :'-'}
                                                </td>
                                                <td style="text-align: right">
                                                    {$livrare_produse = $livrare['total_produse']['1']['valoare'] + $livrare['total_produse']['3']['valoare'] +  $livrare['total_produse']['4']['valoare'] + $livrare['total_produse_extra']['1']['valoare'] + $livrare['total_produse_extra']['3']['valoare'] +  $livrare['total_produse_extra']['4']['valoare']}
                                                    {($livrare_produse > 0) ? $livrare_produse : '-'}
                                                </td>
                                                {foreach from = $livrari_masini['produse_masina'] item= produse}
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
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_total_km > 0) ? $grand_total_km :'-'}</th>
                                            <th></th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_cantitati > 0) ? $grand_cantitati : '-'}</th>
                                            <th style="text-align: right;color: red;vertical-align: middle;">{($grand_valoare > 0) ? $grand_valoare : '-'}</th>
                                            {foreach from = $livrari_masini['produse_masina'] item= produse}
                                                {$grand_total_cantitati = $livrari_masini['grand_extra'][$produse['tip_produs_id']]['cantitate'] + $livrari_masini['grand'][$produse['tip_produs_id']]['cantitate']}
                                                {$grand_total_valoare = $livrari_masini['grand_extra'][$produse['tip_produs_id']]['valoare'] + $livrari_masini['grand'][$produse['tip_produs_id']]['valoare']}
                                                <th style="text-align: right;color: red;">{($grand_total_cantitati > 0) ? $grand_total_cantitati : '-'}</th>
                                                <th style="text-align: right;color: red;">{($grand_total_valoare > 0) ? $livrari_masini['grand_extra'][$produse['tip_produs_id']]['valoare'] : '-'}</th>
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

<script src="/js/pagini/raport_livrari_masini.js"></script>
{*<fieldset>*}
{*<legend><b>Alimentari card</b>&nbsp;*}
{*<? if ($sf_user->hasCredential('r21')) { ?>*}
{*<?= link_to('Export alimentari', 'parcauto/exportalimentari?id=' . $vehicul->getId(), 'class="btn btn-primary btn-mini"') ?>&nbsp;*}
{*<?= link_to('Adauga alimentare', 'parcauto/addalimentare?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>*}
{*<? }; ?>*}
{*</legend>*}
{*<table class="table table-striped table-bordered" width="100%">*}
{*<tr>*}
{*<th style="width: 30px;">*}
{*<? if (count($alimentari) > 5) { ?>*}
{*<i id="toggle_alimentari" class="icon16 i-list" style="cursor: pointer;"></i>*}
{*<? } ?>*}
{*</th>*}
{*<th width="170">*}
{*Data*}
{*</th>*}
{*<th>*}
{*Cantitate*}
{*</th>*}
{*<th width="200">*}
{*Pret*}
{*</th>*}
{*</tr>*}
{*<?*}
{*$total_cantitate = 0;*}
{*$total_cost = 0;*}
{*$data_luna_curenta = date("m");*}
{*$nr_randuri = 0;*}
{*foreach ($alimentari as $row) {*}
{*$nr_randuri++;*}
{*if ($row->getData("m") != $data_luna_curenta) {*}
{*if ($total_cantitate > 0) {*}
{*?>*}
{*<tr <? if ($nr_randuri > 5) {*}
{*echo 'class="alimentare_ascunsa"';*}
{*} ?>>*}
{*<td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>*}
{*<td align="right"><b><?= $total_cantitate ?> litri</b></td>*}
{*<td align="right"><b><?= $total_cost ?> lei</b></td>*}
{*</tr>*}
{*<?*}
{*}*}
{*$data_luna_curenta = $row->getData("m");*}
{*$total_cantitate = 0;*}
{*$total_cost = 0;*}
{*}*}
{*$total_cantitate += $row->getCantitate();*}
{*$total_cost += $row->getCost();*}
{*?>*}
{*<tr <? if ($nr_randuri > 5) {*}
{*echo 'class="alimentare_ascunsa"';*}
{*} ?> >*}
{*<td width="20">*}
{*<?= link_to('<img src="/images/edit.png">', 'parcauto/editalimentare?id=' . $row->getId(), ' title="edit"') ?>*}
{*</td>*}
{*<td>*}
{*<?= $row->getData("d-m-Y") ?>*}
{*</td>*}
{*<td align="right">*}
{*<?= $row->getCantitate() ?>*}
{*</td>*}
{*<td align="right">*}
{*<?= $row->getCost() ?>*}
{*</td>*}
{*</tr>*}
{*<?*}
{*}*}
{*if (count($alimentari)) { ?>*}
{*<tr <? if ($nr_randuri > 5) {*}
{*echo 'class="alimentare_ascunsa"';*}
{*} ?>>*}
{*<td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>*}
{*<td align="right"><b><?= $total_cantitate ?> litri</b></td>*}
{*<td align="right"><b><?= $total_cost ?> lei</b></td>*}
{*</tr>*}
{*<? } ?>*}
{*</table>*}
{*</fieldset>*}

