{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/clienti_afis.php" method="POST" id="form_clienti" name="form_clienti" style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id" style="width: 150px;" data-schimba="1">
                            <option value="0">Alege depozit...</option>
                            {foreach from=$lista_depozite item=depozit}
                                <option value={$depozit['id']} {if $depozit['id'] == $depozit_id} selected="selected"{/if}>{$depozit['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 150px;" data-schimba="3">
                            <option value="0">Alege traseu...</option>
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']} {if $traseu['id'] == $traseu_id} selected="selected"{/if}>{$traseu['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;" data-schimba="4">
                            <option value="-1">-Toti-</option>
                            {foreach from=$lista_stari key=tmp item=stare}
                                <option value={$stare['id']} {if $stare['id'] == $stare_id} selected="selected"{/if}>{$stare['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">NUME</th>
                                    <th style="text-align: center;">STARE</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_clienti item=client}
                                    <tr>
                                        <td>
                                            <a href="edit_client.php?id={$client['id']}">{strtoupper($client['nume'])}</a>
                                        </td>
                                        <td style="text-align: center;">{$client['nume_stare']}</td>
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
<script src="js/pagini/edit_client.js"></script>
<script src="/js/pagini/clienti.js"></script>
<span style="margin-left: 230px;">{$totaltime}</span>