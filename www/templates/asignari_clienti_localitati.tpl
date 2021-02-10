{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clienti de pe localitatea: {$nume_localitate['nume']}</h1>
                    <a href="localitati.php" class="btn btn-mini btn-warning">Inapoi</a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clienti</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td style="text-align: center;">#</td>
                                    <td style="text-align: left;">Client</td>
                                </tr>
                                </thead>
                                {$nr = 1}
                                {foreach from = $clienti_asignati_localitate item =client}
                                    <tr>
                                        <td class="span1" style="text-align: center;">{$nr++}</td>
                                        <td><a href="edit_client.php?id={$client['id']}">{$client['nume']}</a></td>
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
