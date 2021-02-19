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
                        <form action="/neconcordanta_preturi.php" method="post" style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">Localitate</th>
                                        <th style="text-align: left;">Client</th>
                                        <th style="text-align: left;">Telefon</th>
                                        <th style="text-align: left;">Diferente Pret</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti['neconcordanta'] item=client}
                                        <tr>
                                            <th style="text-align: center;vertical-align: middle;"> {$nr++}</th>
                                            <th style="text-align: center;vertical-align: middle;"> {$client['nume_localitate']}</th>
                                            <th style="text-align: left;vertical-align: middle;"> <a href="asigneaza_produse_client.php?id={$client['client_id']}">{$client['nume']}</a></th>
                                            <th style="text-align: center;vertical-align: middle;"> {$client['telefon']}</th>
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>
                                                            {foreach from=$client['produse_client'] item=clienti}
                                                                {foreach from=$clienti['produse_pret'] item=produs}
                                                                    <table class="table-bordered table">
                                                                        <tr>
                                                                            <th style="vertical-align: middle;width: 80px;">{$clienti['nume_produs']}
                                                                                <br/>
                                                                            </th>
                                                                            <th>
                                                                                <table class="table-bordered table">
                                                                                    <tr>
                                                                                        <th style="text-align: left;width: 200px;">{$produs['nume_sofer']}
                                                                                            <br/>{$produs['numar']}</th>
                                                                                        <th><abbr title="PRET CONTRACT" style="cursor: pointer;color: red;">{$produs['pret_contract']}</abbr></th>
                                                                                        <th><abbr title="PRET SOFER" style="cursor: pointer;color: red;">{$produs['pret']}</abbr></th>
                                                                                        <th title="CANTITATE">{$produs['cantitate']}</th>
                                                                                        <th>
                                                                                            <a href="completare_fisa_traseu.php?id={$produs['fisa_id']}">{$produs['fisa_id']}</a>
                                                                                        </th>
                                                                                    </tr>
                                                                                </table>
                                                                            </th>
                                                                        </tr>
                                                                    </table>
                                                                {/foreach}
                                                            {/foreach}
                                                        </th>
                                                    </tr>
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
<script src="/js/pagini/neconcordanta_preturi.js"></script>
