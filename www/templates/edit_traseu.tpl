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
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Editare Traseu: {$traseu_id['nume']}
                                    <div style="display: inline-flex;">
                                        <a href="">
                                            <button class="i-print"></button>
                                        </a>
                                        <button type="button" class="btn btn-danger"
                                                onclick="clickOnStergeTraseu({$traseu_id['id']})">Sterge traseu
                                        </button>
                                        <button style="margin-left: 10px;" type="button"
                                                onclick="location.href='/trasee.php'"
                                                name="inapoi"
                                                value="inapoi" class="btn btn-small btn-warning">
                                            Lista trasee
                                        </button>

                                    </div>
                                </h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;" class="form-horizontal" id="form_edit_traseu"
                                              action="/edit_traseu.php"
                                              method="post">
                                            {*<input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>*}
                                            <input type="hidden" name="id" id="id" value="{$traseu_id['id']}"/>
                                            <table class="table table-bordered" style="width: 400px;">
                                                <tr>
                                                    <th style="text-align: left;"><label class="control-label"
                                                                                         for="nume">Nume traseu:</label>
                                                    </th>
                                                    <td style="text-align: center"><input type="text" name="nume"
                                                                                          value="{$traseu_id['nume']}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;"><label class="control-label"
                                                                                         for="depozit_id">Selecteaza
                                                            Depozit:</label></th>
                                                    <td>
                                                        <select name="depozit_id" id="depozitx_id"
                                                                data-schimba="2">
                                                            <option value="0">Selecteaza depozit:</option>
                                                            {foreach from=$lista_depozite item=depozit}
                                                                <option value={$depozit['id']}
                                                                        {if $depozit_by_traseu_id['depozit_id']==$depozit['id']}selected="selected"{/if}>
                                                                    {$depozit['nume']}
                                                                </option>
                                                            {/foreach}
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="text-align: right;">
                                                        <button type="submit" name="modifica" value="modifica"
                                                                class="btn btn-small btn-info">
                                                            Modifica
                                                        </button>
                                                    </th>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid span12">
            <form action="/edit_traseu.php?id={$traseu_id['id']}" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat">
                <input type="hidden" name="id" id="id" value="{$traseu_id['id']}"/>

                <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                       id="form_asignari_clienti_trasee"/>
                <table class="table table-bordered table-striped" style="width: 427px;margin-left: 10px;">
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza client:</span>
                            <select name="client_id" id="client_id" style="width: 200px;" data-schimba="2">
                                <option value="0">-Toti-</option>
                                {foreach from=$lista_clienti item=client}
                                    {$gasit = 0}
                                    {foreach from=$lista_asignari_clienti_trasee item=asignare}
                                        {if $asignare['client_id'] == $client['id']}
                                            {$gasit = 1}
                                        {/if}
                                    {/foreach}
                                    {if $gasit == 0 }
                                        <option value={$client['id']}>{strtoupper($client['nume'])} {if strlen($client['nume_localitate'])>0}[{$client['nume_localitate']}]{/if}</option>
                                    {/if}
                                {/foreach}
                            </select>
                            <button style="margin-bottom: 5px;" type="submit" name="adauga" value="adauga"
                                    class="btn btn-small btn-primary">
                                Adauga
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        {if count($lista_asignari_clienti_trasee) > 0}
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;width: 40px;">
                                        LOCALITATE
                                    </th>
                                    <td>CLIENTI</td>
                                    <td>TELEFON</td>
                                    <td style="text-align: center;">STOC CLIENT</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </thead>
                                {foreach from = $lista_asignari_clienti_trasee item =lista}
                                    <tr>
                                        <td style="text-align: left;width: 150px;">{strtoupper($lista['localitate'])}</td>
                                        <td>
                                            <a href="edit_client.php?id={$lista['id']}">{strtoupper($lista['nume_client'])}</a>
                                        </td>
                                        <td style="text-align: left;">{$lista['telefon']}</td>
                                        <td>
                                            {foreach from=$lista['target'] item=target}
                                                {$target['nume_produs']} => [Stoc: {$target['target']} buc / Pret: {$target['pret']} RON /  Comision: {$target['comision']} RON]
                                                <br/>
                                            {/foreach}
                                        </td>
                                        <td style="text-align: center;">{$lista['ordine']}</td>
                                        <td style="text-align: center;"><a
                                                    href="edit_traseu.php?id={$lista['traseu_id']}&move_down={$lista['client_id']}"><img
                                                        style="cursor: pointer;" src="../images/arrow_down.png"></a>
                                        </td>

                                        <td style="text-align: center;"><a
                                                    href="edit_traseu.php?id={$lista['traseu_id']}&move_up={$lista['client_id']}"><img
                                                        style="cursor: pointer;" src="../images/arrow_up.png"></a>
                                        </td>
                                        <td style="text-align: center;">
                                            <img title="Sterge asignare"
                                                 src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareClientTraseu({$lista['client_id']}, {$traseu_id['id']})">
                                        </td>
                                    </tr>
                                {/foreach}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        {/if}
    </section>
</div>
<script src="js/pagini/edit_traseu.js"></script>

