{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Istoric adaugari stoc</h1>
                    <a href="adauga_stoc.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            stoc
                        </button>
                    </a>
                </div>
                <div class="row-fluid span12">
                    <form action="/stoc.php" method="post" id="form_clienti" name="form_clienti"
                          style="margin-bottom: 0">
                        <div style="float: left;margin-right: 10px;">
                            <select name="depozit_id" style="width: 150px;" data-schimba="1">
                                <option value="0">-Depozite-</option>
                                {foreach from=$lista_depozite item=depozit}
                                    <option value={$depozit['id']} {if $depozit['id'] == $depozit_id} selected="selected"{/if}>{$depozit['nume']}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div style="float: left;margin-right: 10px;">
                            <select name="luna_id" style="width: 150px;" data-schimba="2">
                                <option value="0">Toate</option>
                                {foreach from=$lunile_anului item=luna}
                                    <option value={$luna['id']} {if $luna['id'] == $luna_id} selected="selected"{/if}>{$luna['nume']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            {if count($stocuri) > 0}
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-table"></i></div>
                                <h4>List&#259; stoc</h4>
                            </div>
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th class="center span1">Depozit</th>
                                        <th class="center span1">Produs</th>
                                        <th class="center span1">Stare</th>
                                        <th class="center span1">Cantitate</th>
                                        <th class="center span1">Data</th>
                                        <th class="center span1">&nbsp;</th>
                                    </tr>
                                    </thead>
                                        {foreach from = $stocuri['depozite'] item= stoc}
                                            <tr>
                                                <td>{$stoc['nume']}</td>
                                                <td>{$stoc['nume_produs']}</td>
                                                <td style="text-align: right;">{$stoc['stare_produs']}</td>
                                                <td style="text-align: right;">{$stoc['cantitate']}</td>
                                                <td style="text-align: center;">{$stoc['data_intrare']}</td>
                                                <td style="text-align: center;">
                                                    <a href="">
                                                        <button><i class="i-folder-download-2"></i>Aviz intrare</button>
                                                    </a>
                                                    <a href="">
                                                        <button><i class=" i-folder-upload-2"></i>Aviz iesire</button>
                                                    </a>
                                                </td>
                                            </tr>
                                    {/foreach}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            {else}
                <h4 style="color: red;margin-left: 60px;">Nu avem nicio inregistrare in stoc</h4>
            {/if}
    </section>
</div>
<script src="js/pagini/data_table.js"></script>
<script src="/js/pagini/stoc.js"></script>