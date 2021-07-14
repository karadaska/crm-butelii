{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Tip afis clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/actualizeaza_tip_afis.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']}
                                        {if $traseu['id'] == $traseu_id} selected="selected" {/if}>
                                    {$traseu['nume']}
                                </option>
                            {/foreach}
                            <input type="hidden" name="id_traseu" value="{$traseu_id}">
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
                        <form action="/actualizeaza_tip_afis.php?traseu_id={$traseu_id}" method="post"
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
                                        <th style="text-align: left;">Tip afis</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item=client}
                                        <tr>
                                            <th> {$nr++}</th>
                                            <th> {$client['nume_localitate']}</th>
                                            <th> {$client['nume_client']}</th>
                                            <th> {$client['telefon']}</th>
                                            <th>
                                                <select name="afis_{$client['client_id']}_{$client['traseu_id']}">
                                                    <option value="0">Alege obs.</option>
                                                    {foreach from=$lista_tip_afis item=afis}
                                                        {assign var=client_afis value=Clienti::getTipAfisByClientId($client['client_id'])}
                                                            <option value="{$afis['id']}"
                                                                    {if $afis['id'] == $client_afis['tip_afis']} selected="selected" {/if}>
                                                                {$afis['tip']}
                                                            </option>
                                                    {/foreach}
                                                </select>
                                                {*<input style="text-align: right"*}
                                                       {*value="{$client['tip_afis']}"*}
                                                       {*type="text" autocomplete="off"*}
                                                       {*name="afis_{$client['client_id']}_{$client['traseu_id']}">*}
                                            </th>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="Actualizeaza clienti"
                                       class="btn btn-info" name="update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/ordine_clienti.js"></script>
