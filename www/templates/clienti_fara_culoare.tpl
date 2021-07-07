{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Clienti By Culoare <a href="culori_butelii.php"
                                                                   class="btn btn-mini btn-warning">Inapoi</a></h1>
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
                                    <th style="text-align: left;">CLIENTI</th>
                                    <th style="text-align: center;">LOCALITATE</th>
                                    <th style="text-align: center;">TELEFON</th>
                                </tr>
                                </thead>
                                <tbody>
                                {$nr = 1}
                                {foreach from=$clienti_fara_culori item=client}
                                    <tr>
                                        <td style="text-align: center;">{$nr++}</td>
                                        <td><a target="_blank"
                                               href="../edit_client.php?id={$client['id']}">{strtoupper($client['nume_client'])}</a>
                                        </td>
                                        <td style="text-align: center;">{strtoupper($client['nume_localitate'])}</td>
                                        <td style="text-align: center;">{$client['telefon']} <br/>{$client['telefon_2']}</td>
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
<script src="js/pagini/infiintari_clienti.js"></script>
{include file="footer.tpl"}
