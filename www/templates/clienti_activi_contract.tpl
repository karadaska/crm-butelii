{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clienti</h1>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: left;">Clienti</th>
                                    <th style="text-align: left;">Localitate</th>
                                    <th style="text-align: left;">Judet</th>
                                    <th style="text-align: left;">Telefon</th>
                                </tr>
                                </thead>
                                <tbody>
                                {$nr = 1}
                                {foreach from=$lista_clienti item=client}
                                    <tr>
                                        <td style="text-align: center;">{$nr++}</td>
                                        <td><a target="_blank" href="../edit_client.php?id={$client['id']}">{$client['nume_client']}</a></td>
                                        <td>{$client['nume_localitate']}</td>
                                        <td>{$client['nume_judet']}</td>
                                        <td>{$client['telefon']} <br/>{$client['telefon_2']}</td>
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
<script src="js/pagini/edit_sofer.js"></script>
{include file="footer.tpl"}
