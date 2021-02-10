{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Asignari clienti la: {$traseu['nume']}</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/asignari_clienti_trasee.php?id={$traseu['id']}" method="post"
                      id="form_asignari_clienti_trasee"
                      name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat">
                    <input type="hidden" name="id" id="id" value="{$traseu['id']}"/>

                    <input type="hidden" name="form_asignari_clienti_trasee" value="1"
                           id="form_asignari_clienti_trasee"/>
                    <div style="float: left;margin-right: 10px;">
                        Selecteaza client:
                        <select name="client_id" id="client_id" style="width: 150px;" data-schimba="2">
                            <option value="0">-Toti-</option>
                            {foreach from=$lista_clienti item=client}
                                {$gasit = 0}
                                {foreach from=$lista_asignari_clienti_trasee item=asignare}
                                    {if $asignare['client_id'] == $client['id']}
                                        {$gasit = 1}
                                    {/if}
                                {/foreach}
                                {if $gasit == 0 }
                                    <option value={$client['id']}>{$client['nume']}</option>
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
                                    <td style="text-align: left;">Clienti</td>
                                    <td style="text-align: left;" class="span1">&nbsp;</td>
                                </tr>
                                </thead>
                                {foreach from = $lista_asignari_clienti_trasee item =lista}
                                    <tr>
                                        <td>{$lista['nume_client']}</td>
                                        <td><img title="Sterge asignare" src="../images/delete.png"
                                                 style="cursor: pointer"
                                                 onclick="clickOnStergeAsignareClientTraseu2({$lista['id']})"></td>
                                    </tr>
                                {/foreach}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<script src="js/pagini/asignari_clienti_trasee.js"></script>

{include file="footer.tpl"};
