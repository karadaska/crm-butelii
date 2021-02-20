{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Lista clienti by pret</h1>
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
                                    <th style="text-align: center;" class="span1">Nr.</th>
                                    <th style="text-align: center;" class="span3">Nume Client</th>
                                    <th style="text-align: center;">Localitate</th>
                                    <th style="text-align: center;">Pret</th>
                                    <th style="text-align: center;">Comision</th>

                                </tr>
                                </thead>
                                {$nr = 1}
                                {foreach from=$lista_clienti item=client}
                                    <tr>
                                        <td style="text-align: center;">{$nr++}</td>
                                        <td style="text-align: center;"><a href="edit_client.php?id={$client['id']}">{$client['nume_client']}</td>
                                        <td style="text-align: center;">{$client['nume_localitate']}</td>
                                        <td style="text-align: center;"><a href="asigneaza_produse_client.php?id={$client['id']}">{$client['pret']}</a></td>
                                        <td style="text-align: center;">{($client['comision'] !='') ? $client['comision'] : '-'}</td>
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
