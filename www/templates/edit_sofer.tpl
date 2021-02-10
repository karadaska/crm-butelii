{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-user"></i> Edit sofer: {$sofer['nume']}</h1>
                    <button type="button" onclick="location.href='/soferi.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista soferi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii sofer</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/edit_sofer.php?id={$sofer['id']}"
                                      method="post">
                                    <input type="hidden" name="id" id="id" value="{$sofer_id['id']}"/>
                                    <table class="table table-bordered" style="width: 600px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Nume sofer:</th>
                                            <th style="text-align: left;"><input style="margin-top: 12px;"
                                                                                 autocomplete="off" id="nume"
                                                                                 type="text" name="nume"
                                                                                 value="{$sofer['nume']}">
                                            </th>
                                            <th style="text-align: center;vertical-align: middle;">
                                                <button type="submit" name="modifica" value="modifica"
                                                        class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeSofer({$sofer['id']})">Sterge sofer
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
            <form action="/edit_sofer.php?id={$sofer['id']}" method="post"
                  id="form_edit_traseu"
                  name="form_clienti" style="margin-bottom: 0">
                <input type="hidden" name="id" id="id" value="{$sofer['id']}"/>
                <input type="hidden" value="1"/>
                <table class="table table-bordered table-striped" style="width: 611px;">
                    <thead>
                    <tr>
                        <td>
                            <span style="font-weight: bold">Asigneaza masina:</span>
                            <select name="masina_id" style="width: 200px;" data-schimba="2">
                                <option value="0">Alege...</option>
                                {foreach from=$lista_masini item=masina}
                                    {$gasit = 0}
                                    {foreach from=$lista_asignari_soferi_masini item=asignare}
                                        {if $asignare['masina_id'] == $masina['id']}
                                            {$gasit = 1}
                                        {/if}
                                    {/foreach}
                                    {if $gasit == 0 }
                                        <option value={$masina['id']}>{strtoupper($masina['numar'])}</option>
                                    {/if}
                                {/foreach}
                            </select>
                            <button style="margin-bottom: 5px;" type="submit" name="adauga_asignare" value="adauga"
                                    class="btn btn-small btn-primary">
                                Adauga
                            </button>
                        </td>
                    </tr>
                    </thead>
                </table>
            </form>
            {if count($lista_asignari_soferi_masini) > 0}
            <table cellpadding="0" cellspacing="0" border="0"
                   class="table table-bordered table-hover" style="width: 611px;">
                <thead>
                <tr>
                    <th style="text-align: left;width: 220px;">
                        Numar
                    </th>
                    <th style="text-align: left;width: 220px;">
                        Model
                    </th>
                    <td>&nbsp</td>
                </tr>
                </thead>
                {foreach from = $lista_asignari_soferi_masini item =lista}
                    <tr>
                        <td style="text-align: left;width: 150px;">{$lista['numar']}</td>
                        <td style="text-align: left;width: 150px;">{$lista['model']}</td>
                        <td style="text-align: center;" class="span1">
                            <img title="Sterge asignare"
                                 src="../images/delete.png"
                                 style="cursor: pointer"
                                 onclick="clickOnStergeAsignareMasinaSofer({$sofer['id']}, {$lista['masina_id']})">
                        </td>
                    </tr>
                {/foreach}
            </table>
            {/if}
        </div>
    </section>
</div>
<script src="js/pagini/edit_sofer.js"></script>
{include file="footer.tpl"}