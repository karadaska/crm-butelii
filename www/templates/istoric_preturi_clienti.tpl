{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Preturi</h1>
                    <a href="adauga_depozit.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            p
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; preturi</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th style="text-align: left;" class="span3">CLIENT</th>
                                    <th style="text-align: left;">PRET</th>
                                    <th style="text-align: left;">DATA</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_depozite item=depozit}
                                    <tr>
                                        <td class="center"><a href="../edit_depozit.php?id={$depozit['id']}"><img
                                                        title="edit" src="../images/edit.png"></a></td>
                                        <td>{$depozit['nume']}</td>
                                        <td>
                                            {foreach from = $depozit['asignari'] item=asignare}
                                                <a href="../asignari_trasee_depozite.php?id={$depozit['id']}">{'['}{$asignare['nume_traseu']}{']'}</a>
                                            {/foreach}
                                            <a href="../asignari_trasee_depozite.php?id={$depozit['id']}"><img
                                                        title="Adauga asignare" src="../images/adauga18x18.png"></a>
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
<script src="js/pagini/edit_depozit.js"></script>
{include file="footer.tpl"};
