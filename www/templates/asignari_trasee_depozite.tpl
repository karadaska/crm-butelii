{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asignari trasee la: {$depozit['nume']}</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/asignari_trasee_depozite.php?id={$depozit['id']}" method="post"
                      id="form_asignari_trasee_depozite"
                      name="form_clienti" style="margin-bottom: 0">
                    {*<input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat">*}
                    <input type="hidden" name="id" id="id" value="{$depozit['id']}"/>

                    <input type="hidden" name="form_asignari_trasee_depozite" value="1"
                           id="form_asignari_trasee_depozite"/>
                    <div style="float: left;margin-right: 10px;">
                        Selecteaza traseu:
                        <select name="traseu_id" id="traseu_id" style="width: 150px;" data-schimba="2">
                            <option value="0">-Toate-</option>
                            {foreach from=$lista_trasee item=traseu}
                                {$gasit = 0}
                                {foreach from=$lista_asignari_trasee_la_depozite item=asignare}
                                    {if $asignare['traseu_id'] == $traseu['id']}
                                        {$gasit = 1}
                                    {/if}
                                {/foreach}
                                {if $gasit == 0 }
                                    <option value={$traseu['id']}>{$traseu['nume']}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                    <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                        Adauga
                    </button>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; asign&#259;ri</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="text-align: center;">#</td>
                                    <td style="text-align: left;">Traseu</td>
                                    <td style="text-align: left;" class="span1">&nbsp;</td>
                                </tr>
                                </thead>
                                {$nr = 1}
                                {foreach from = $lista_asignari_trasee_la_depozite item =lista}
                                    <tr>
                                        <td style="text-align: center;" class="span1">{$nr++}</td>
                                        <td>{$lista['nume_traseu']}</td>
                                        <td><img title="Sterge asignare" src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareTraseuLaDepozit({$lista['id']})">
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
<script src="js/pagini/asignari_trasee_depozite.js"></script>

{include file="footer.tpl"};
