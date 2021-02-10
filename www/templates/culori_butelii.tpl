{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Culori butelii</h1>
                    <a href="adauga_culoare.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            culoare
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; culori</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th style="text-align: left;" class="span11">Culoare</th>
                                    <th style="text-align: left;" class="span11">Clienti asignati</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$culori_butelii item=culoare}
                                    <tr>
                                        <td class="center"><a href="../edit_culoare.php?id={$culoare['id']}"><img
                                                        title="edit" src="../images/edit.png"></a>
                                        </td>
                                        <td class="span3">{$culoare['nume']}</td>
                                        <td>
                                            {count($culoare['asignari_culori'])}
                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
{include file="footer.tpl"};
