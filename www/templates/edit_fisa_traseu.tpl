{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}
<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title" style="display: block ruby;">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Editare Fisa Traseu: {$fisa_id['nume_traseu']}</h4>
                                <a target="_blank" href="/print_fisa_traseu.php?id={$id}">
                                    <button class="i-print"></button>
                                </a>
                                <a href="/completare_fisa_traseu.php?id={$id}" class="btn btn-mini btn-primary">Completeaza
                                    fisa</a>
                                <form class="form-horizontal" id="form_edit_fisa"
                                      action="/edit_fisa_traseu.php?id={$id}"
                                      method="post">
                                    {if {$fisa_id['consum_plecare'] == 0}}
                                        <button type="submit" class="btn btn-mini btn-success" name="consuma_stoc">
                                            Consuma stoc
                                        </button>
                                    {/if}
                                </form>
                            </div>
                            <div class="widget-content">
                                <form style="margin-top: 20px;" class="form-horizontal" id="form_edit_fisa"
                                      action="/edit_fisa_traseu.php?id={$id}"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="{$id}"/>
                                    <table class="table table-bordered" style="width: 900px;margin-top: -20px;">
                                        <tr>
                                            <th style="text-align: left;">
                                                <select name="traseu_id"
                                                        style="width: 160px;">
                                                    <option value="0">Alege traseu:</option>
                                                    {foreach from=$lista_trasee item=traseu}
                                                        <option value={$traseu['id']}
                                                                {if $fisa_id['traseu_id']==$traseu['id']}selected="selected"{/if}>
                                                            {$traseu['nume']}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                            <th style="text-align: left;">
                                                <select name="sofer_id"
                                                        style="width: 200px;">
                                                    <option value="0">-Alege sofer-</option>
                                                    {foreach from=$lista_soferi item=sofer}
                                                        <option value={$sofer['id']}
                                                                {if $fisa_id['sofer_id'] == $sofer['id']}selected="selected"{/if}>
                                                            {$sofer['nume']}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                            <th style="text-align: left;">
                                                <select name="masina_id"
                                                        style="width: 100px;">
                                                    <option value="0">-Alege..-</option>
                                                    {foreach from=$lista_masini item=masina}
                                                        <option value={$masina['id']}
                                                                {if $fisa_id['masina_id']== $masina['id']} selected={$asignare['masina_id']}{/if}>
                                                            {$masina['numar']}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                            <th>
                                                <input style="width: 120px;" type="date" name="data_start"
                                                value="{$fisa_id['data_intrare']}">
                                            </th>
                                            <th>
                                                <button type="submit" name="modifica"
                                                        class="btn btn-small btn-info">
                                                    Modifica
                                                </button>
                                                {if {$fisa_id['consum_plecare'] == 0}}
                                                    <button style="margin-top: 1px" type="submit" name="sterge_fisa"
                                                            value=""
                                                            class="btn btn-small btn-danger">
                                                        Sterge
                                                    </button>
                                                {/if}
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                                {if {$fisa_id['consum_plecare'] == 0}}
                                    <form style="margin-top: 5px;" class="form-horizontal"
                                          action="/edit_fisa_traseu.php?id={$id}"
                                          method="post">
                                        <input type="hidden" name="data_fisa" value="{$fisa_id['data_intrare']}">
                                        <table class="table table-bordered" style="width: 900px;margin-top: 50px;">
                                            <tr>
                                                <th>Produs</th>
                                                <th>Stare produs</th>
                                                <th>Cantitate</th>
                                                {if {$fisa_id['consum_plecare'] == 0}}
                                                    <th>&nbsp;</th>
                                                {/if}
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="tip_produs_id">
                                                        <option>Selecteaza produs</option>
                                                        {foreach from=$lista_produse item=produs}
                                                            {$gasit = 0}
                                                            {foreach from=$plecare_marfa_by_traseu_id item=marfa_plecare_client}
                                                                {if $produs['id'] == $marfa_plecare_client['tip_produs_id']}
                                                                    {$gasit = 1}
                                                                {/if}
                                                            {/foreach}
                                                            {if $gasit == 0}
                                                                <option value={$produs['id']}> {$produs['tip']}</option>
                                                            {/if}
                                                        {/foreach}
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="stare_produs">
                                                        {foreach from=$lista_stari_produse item=stare}
                                                            {if $stare['id'] == 1}
                                                                <option value={$stare['id']}
                                                                        {if $stare['id'] == $stare_produs['id']} selected={$stare['id']}{/if}>
                                                                    {$stare['nume']}
                                                                </option>
                                                            {/if}
                                                        {/foreach}
                                                    </select>
                                                </td>
                                                <td><input autocomplete="off" type="text" style="width: 175px;"
                                                           name="cantitate">
                                                </td>
                                                <td style="vertical-align: middle;text-align: center;">
                                                    <button style="margin-bottom: 5px;" type="submit"
                                                            name="adauga_cantitate_masina"
                                                            value=""
                                                            class="btn btn-mini btn-primary">
                                                        Adauga
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                {/if}
                                {if count($plecare_marfa_by_traseu_id) > 0}
                                    <table class="table table-bordered" style="width: 900px;">
                                        <tr>
                                            <th>Produs</th>
                                            <th>Cantitate</th>
                                            {if {$fisa_id['consum_plecare'] == 0}}
                                                <th>#</th>
                                            {/if}
                                        </tr>
                                        {$total_marfa=0}
                                        {foreach from=$plecare_marfa_by_traseu_id item=marfa}
                                            <tr>
                                                <td>{$marfa['nume_produs']}</td>
                                                <td style="text-align: right;">{$marfa['cantitate']}</td>
                                                {if {$fisa_id['consum_plecare'] == 0}}
                                                    <td class="span1" style="text-align: center;"><img
                                                                title="Sterge cantitate produs"
                                                                src="../images/delete.png"
                                                                style="cursor: pointer"
                                                                onclick="clickOnStergeCantitateMasinaTraseu({$id},{$marfa['tip_produs_id']})">
                                                    </td>
                                                {/if}
                                            </tr>
                                            {$total_marfa = $total_marfa + $marfa['cantitate']}
                                        {/foreach}
                                        <tr>
                                            <th style="text-align: left;">Total:</th>
                                            <th style="text-align: right;">{$total_marfa}</th>
                                            {if {$fisa_id['consum_plecare'] == 0}}
                                                <th></th>
                                            {/if}
                                        </tr>
                                    </table>
                                {/if}
                                <form action="/edit_fisa_traseu.php?id={$id}" method="post"
                                      id="form_edit_traseu"
                                      name="form_clienti" style="margin-bottom: 0">

                                    <input type="hidden" name="data_fisa" value="{$fisa_id['data_intrare']}">

                                    <table class="table table-bordered" style="width: 900px;margin-top: 50px;">
                                        <tr>
                                            <th style="text-align: left" colspan="4">
                                                <span style="font-weight: bold">Asigneaza client:</span>
                                                <select name="client_id" id="client_id" style="width: 400px;"
                                                        data-schimba="2">
                                                    <option value="0">-Toti-</option>
                                                    {foreach from=$lista_clienti item=client}
                                                        {$gasit = 0}
                                                        {foreach from=$lista_clienti_asignati_la_fisa item=asignare}
                                                            {if $asignare['client_id'] == $client['id']}
                                                                {$gasit = 1}
                                                            {/if}
                                                        {/foreach}
                                                        {if $gasit == 0 }
                                                            <option value={$client['id']}>
                                                                {strtoupper($client['nume'])} {if strlen($client['nume_localitate'])>0}[{$client['nume_localitate']}]{/if}
                                                            </option>
                                                        {/if}
                                                    {/foreach}
                                                </select>
                                                <button style="margin-bottom: 5px;margin-left: 10px;" type="submit"
                                                        name="adauga" value="adauga"
                                                        class="btn btn-small btn-primary">
                                                    Adauga client
                                                </button>
                                                <button style="margin-bottom: 5px;margin-left: 10px;" type="submit"
                                                        name="import_clienti_fisa_generata"
                                                        class="btn btn-small btn-inverse">
                                                    Import clienti la fisa traseu
                                                </button>
                                            </th>
                                        </tr>
                                        {$nr = 1}
                                        {foreach from = $lista_clienti_asignati_la_fisa item =lista}
                                            <tr>
                                                <td class="span1" style="text-align: center;">{$nr++}</td>
                                                <td>{strtoupper($lista['nume_localitate'])}</td>
                                                <td>
                                                    <a href="edit_client.php?id={$lista['client_id']}">{strtoupper($lista['nume_client'])}</a>
                                                </td>
                                                <td class="span1" style="text-align: center;"><img
                                                            title="Sterge asignare"
                                                            src="../images/delete.png"
                                                            style="cursor: pointer"
                                                            onclick="clickOnStergeClientFisaGenerata({$id},{$lista['client_id']})">
                                                </td>
                                            </tr>
                                        {/foreach}
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="js/pagini/data_table.js"></script>
<script src="js/pagini/edit_fisa_traseu.js"></script>
<span style="margin-left: 230px;">{$totaltime}</span>