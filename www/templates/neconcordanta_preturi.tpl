{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Neconcordanta preturi la clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/neconcordanta_preturi.php" method="post" id="form_neconcordanta_preturi"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']}
                                        {if $traseu['id'] == $traseu_id} selected="selected" {/if}>
                                    {$traseu['nume']}
                                </option>
                            {/foreach}
                            <input type="hidden" name="traseu" value="{$traseu_id}">
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
                        <form action="/neconcordanta_preturi.php" method="post"

                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: center;">Diferente</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item=client}
                                        <tr>
                                            <th style="text-align: center;vertical-align: middle;"> {$nr++}</th>
                                            <th style="text-align: center;vertical-align: middle;"> {$client['nume_localitate']}</th>
                                            <th style="text-align: left;vertical-align: middle;"> {$client['nume_client']}</th>
                                            <th style="text-align: center;vertical-align: middle;"> {$client['telefon']}</th>
                                            <th>
                                                <table class="table table-bordered">
                                                    {foreach from=$client['dif_pret'] item=dif}
                                                        <tr>
                                                            <th>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <td style="text-align: center;">Produs</td>
                                                                        <td style="text-align: center;">Pret sofer</td>
                                                                        <td style="text-align: center;">Pret Contract
                                                                        </td>
                                                                        <td style="text-align: center;">Comision</td>
                                                                        <td style="text-align: center;">Cantitate</td>
                                                                        <td style="text-align: center;">Data</td>
                                                                        <td style="text-align: center;">Fisa_id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$dif['nume_produs']}</td>
                                                                        <td style="text-align: center;color: red;">{$dif['pret_sofer']}</td>
                                                                        <td style="text-align: center;color: red;">{$dif['pret_contract']}</td>
                                                                        <td style="text-align: center;">{$dif['comision']}</td>
                                                                        <td style="text-align: center;">{$dif['cantitate']}</td>
                                                                        <td style="text-align: center;">{$dif['data_intrare']}</td>
                                                                        <td style="text-align: center;">
                                                                            <a href="completare_fisa_traseu.php?id={$dif['fisa_id']}"> {$dif['fisa_id']}</a>

                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </th>
                                                        </tr>
                                                    {/foreach}
                                                </table>
                                            </th>
                                        </tr>
                                    {/foreach}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/neconcordanta_preturi.js"></script>
