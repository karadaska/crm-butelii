{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit masin&#259;</h1>
                    <button type="button" onclick="location.href='/masini.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista ma&#351;ini
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_masina" action="/edit_masina.php?id={$id}"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="{$id}"/>
                                    <table class="table table-bordered" style="width: 370px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Numar</th>
                                            <th style="text-align: left;"><input autocomplete="off" type="text"
                                                                                 name="numar"
                                                                                 value="{$masina_id['numar']}">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Model</th>
                                            <th style="text-align: left;"><input autocomplete="off" type="text"
                                                                                 name="model"
                                                                                 value="{$masina_id['model']}">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Stare masina</th>
                                            <th style="text-align: left;">
                                                <select name="stare_id">
                                                    {foreach from=$stari_masini key=tmp item=stare_masina}
                                                        <option value={$stare_masina['id']}
                                                                {if $stare_by_masina_id['stare_id'] == $stare_masina['id']}selected="SELECTED"{/if}>
                                                            {$stare_masina['nume']}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: right;">
                                                <button type="submit" name="modifica" value="modifica"
                                                        class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeMasina({$masina_id['id']})">Sterge masina
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
        <div class="row-fluid span12">
            <form action="/edit_masina.php?id={$id}" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat">
                <input type="hidden" name="id" id="id" value="{$masina['id']}"/>

                <input type="hidden" value="1"/>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza traseu:</span>
                            <select name="traseu_id" style="width: 200px;" data-schimba="2">
                                <option value="0">Alege...</option>
                                {foreach from=$lista_trasee item=traseu}
                                    {$gasit = 0}
                                    {foreach from=$lista_asignari_masini_trasee item=asignare}
                                        {if $asignare['traseu_id'] == $traseu['id']}
                                            {$gasit = 1}
                                        {/if}
                                    {/foreach}
                                    {if $gasit == 0 }
                                        <option value={$traseu['id']}>{strtoupper($traseu['nume'])}</option>
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
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-content">
                        <table cellpadding="0" cellspacing="0" border="0"
                               class="table table-bordered table-hover" id="dataTable">
                            <thead>
                            <tr>
                                <th style="text-align: left;width: 220px;">
                                    Numar
                                </th>
                                <th style="text-align: left;width: 220px;">
                                    Model
                                </th>
                                <td>Traseu</td>
                                <td>&nbsp</td>
                            </tr>
                            </thead>
                            {foreach from = $lista_asignari_masini_trasee item =lista}
                                <tr>
                                    <td style="text-align: left;width: 150px;">{$lista['numar']}</td>
                                    <td style="text-align: left;width: 150px;">{$lista['model']}</td>
                                    <td>{$lista['nume_traseu']}</td>
                                    <td style="text-align: center;" class="span1">
                                        <img title="Sterge asignare"
                                        src="../images/delete.png"
                                        style="cursor: pointer"
                                        onclick="clickOnStergeAsignareMasinaTraseu({$id}, {$lista['traseu_id']})">
                                    </td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/edit_masina.js"></script>
