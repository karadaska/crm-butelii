{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Trasee</h1>
                    <a href="adauga_traseu.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            traseu
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; trasee</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" class="span1">ID</th>
                                    <th style="text-align: left;" class="span3">TRASEU</th>
                                    <th style="text-align: left;">CLIENTI ASIGNATI</th>

                                </tr>
                                </thead>
                                {foreach from=$lista_trasee item=traseu}
                                    <tr>
                                        <td style="text-align: center;">{$traseu['id']}</td>
                                        <td class="span3"><a target="_blank" href="edit_traseu.php?id={$traseu['id']}"
                                               title="Adauga client la traseu"
                                               style="cursor: pointer;">{strtoupper($traseu['nume'])}</a></td>
                                        <td>
                                                <a  title="Adauga asignare" href="../edit_traseu.php?id={$traseu['id']}">{count($traseu['asignari_clienti'])}</a>
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
<script src="js/pagini/edit_traseu.js"></script>
{include file="footer.tpl"};
