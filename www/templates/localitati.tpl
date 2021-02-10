{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Localitati</h1>
                    <a href="adauga_localitate.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            localitate
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; localitati</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="center span1">#</th>
                                    <th class="center span1">Zona</th>
                                    <th style="text-align: left;">Nume</th>
                                    <th style="text-align: left;">Clienti asignati</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_localitati item=localitate}
                                    {assign var=clienti_asignati_localitati value=Clienti::getClientiByLocalitateId($localitate['id'])}
                                    <tr>
                                        <td class="center"><a href="../edit_localitate.php?id={$localitate['id']}"><img
                                                        title="edit" src="../images/edit.png"></a></td>
                                        <td style="width: 150px;">{strtoupper($localitate['zona'])}</td>
                                        <td>{strtoupper($localitate['nume'])}</td>
                                        <td>
                                            <a href="asignari_clienti_localitati.php?id={$localitate['id']}">{count($clienti_asignati_localitati)}</a>
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
<script src="js/pagini/edit_localitate.js"></script>
<script src="js/pagini/data_table.js"></script>
{include file="footer.tpl"};
