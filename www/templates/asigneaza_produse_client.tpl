{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asigneaza produse la client: {$nume_client['nume']} </h1>
                </div>
                <div class="row-fluid span12">
                    <form action="/asigneaza_produse_client.php?id={$id}" method="post"
                          id="form_edit_traseu"
                          name="form_clienti" style="margin-bottom: 0">
                        <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat">
                        <input type="hidden" name="id" id="id" value="{$traseu_id['id']}"/>
                        <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                               id="form_asignari_clienti_trasee"/>
                        <div style="float: left;margin-right: 10px;margin-bottom: -20px;">
                            <table class="table table-bordered table-hover" style="width: 680px;">
                                <tr>
                                    <th style="text-align: left;">
                                        <select name="tip_produs_id" style="width: 150px;">
                                            <option value="0">-Selecteaza produs-</option>
                                            {foreach from=$lista_produse item=produs}
                                                {if $produs['id'] !=5 && $produs['id'] !=6 }
                                                    {$gasit = 0}
                                                    {foreach from=$target_by_client_id item = target}
                                                        {if $produs['id'] == $target['tip_produs_id']}
                                                            {$gasit = 1}
                                                        {/if}
                                                    {/foreach}
                                                    {if {$gasit == 0}}
                                                        <option value={$produs['id']}>{$produs['tip']}</option>
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        </select>
                                    </th>
                                    <th><input style="width: 160px;" name="target_produs" type="text"
                                               placeholder="stoc produs"
                                               autocomplete="off">
                                    </th>
                                    <th><input style="width: 160px;" name="pret_produs" type="text" placeholder="pret"
                                               autocomplete="off">
                                    </th>
                                    <th><input style="width: 160px;" name="comision_produs" type="text"
                                               placeholder="comision"
                                               autocomplete="off">
                                    </th>
                                    <th>
                                        <button style="margin-top: 5px;" type="submit" name="adauga" value="adauga"
                                                class="btn btn-small btn-primary">
                                            Adauga
                                        </button>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                {if count($target_by_client_id) > 0}
                    <form action="/asigneaza_produse_client.php?id={$id}" method="post"
                          id="form_edit_traseu"
                          name="form_clienti">
                        <table class="table table-bordered table-hover" style="width: 720px;margin-left: 30px;">
                            <thead>
                            <tr>
                                <th style="text-align: center;">Produs</th>
                                <th style="text-align: center;">Stoc</th>
                                <th style="text-align: center;">Pret + comision</th>
                                <th style="text-align: center;">Comision</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$target_by_client_id item=target}
                                <tr>
                                    <td style="vertical-align: middle;">{$target['nume_produs']}</td>
                                    <td style="text-align: right;">
                                        <input type="text" name="target_{$target['tip_produs_id']}"
                                               value="{$target['target']}" style="width: 100%"
                                               autocomplete="off"/>
                                    </td>
                                    <td style="text-align: right;">
                                        <input name="pret_{$target['tip_produs_id']}" type="text" style="width: 100%"
                                               value="{$target['pret']}" autocomplete="off"/>
                                    </td>
                                    {if {$target['comision']} !=''}
                                        {$valoare_comision = $target['comision']}
                                    {else}
                                        {$valoare_comision = 0}
                                    {/if}
                                    <td style="text-align: right;">
                                        <input style="width: 100%" name="comision_{$target['tip_produs_id']}"
                                               type="text"
                                               value="{$valoare_comision}"
                                               autocomplete="off"/>
                                    </td>
                                    <td class="span1" style="text-align: center;">
                                        <img title="Sterge target produs" src="../images/delete.png"
                                             style="cursor: pointer"
                                             onclick="clickOnStergeTargetClient({$target['client_id']},{$target['tip_produs_id']})">
                                    </td>
                                </tr>
                            {/foreach}
                            </tbody>
                            <tr>
                                <th colspan="5">
                                    <input style="float: right;" class="btn btn-mini btn-info" type="submit"
                                           name="update"
                                           value="update"/>
                                </th>
                            </tr>
                        </table>
                    </form>
                {/if}
                {if count($istoric_preturi) > 0}
                    <table class="table table-bordered" style="width: 720px;margin-left: 30px;margin-top: 50px;">
                        <tr class="info">
                            <td colspan="4" style="text-align: center;color: red;">ISTORIC PRET</td>
                        </tr>
                        <tr>
                            <th>PRODUS</th>
                            <th>PRET</th>
                            <th>COMISION</th>
                            <th>DATA</th>
                        </tr>
                        {foreach from=$istoric_preturi item=istoric}
                            <tr>
                                <td style="text-align: center;">{$istoric['nume_produs']}</td>
                                <td style="text-align: center;">{$istoric['pret']}</td>
                                <td style="text-align: right;">{$istoric['comision']}</td>
                                <td style="text-align: center;">{$istoric['data_start']} - {$istoric['data_stop']}</td>
                            </tr>
                        {/foreach}
                    </table>
                {/if}
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/edit_client.js"></script>
