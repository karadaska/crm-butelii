{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Ordine clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/randament_clienti.php" method="post" id="form_actualizeaza_stoc"
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
                    <div style="float: left;margin-right: 10px;">
                        <select name="an" style="width: 180px;">
                            {foreach from=$lista_ani item=an}
                                <option value={$an['id']}
                                        {if $an['id'] == $an} selected="selected" {/if}>
                                    {$an['an']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            {foreach from=$lista_perioade item=perioada}
                                <option value={$perioada['id']}
                                        {if $perioada['id'] == $perioada} selected="selected" {/if}>
                                    {$perioada['nume']}
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
                        <form action="/randament_clienti.php?traseu_id={$traseu_id}" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: left;">TELEFON</th>
                                        <th style="text-align: left;">RANDAMENT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item=client}
                                        <tr>
                                            <th> {$nr++}</th>
                                            <th style="text-align: left;"> {strtoupper($client['nume_localitate'])}</th>
                                            <th style="text-align: left;"> {strtoupper($client['nume_client'])}</th>
                                            <th style="text-align: center;"> {$client['telefon']}</th>
                                            <th>
                                                <input style="text-align: right"
                                                       value="{$client['randament']}"
                                                       type="text" autocomplete="off"
                                                       name="randament_{$client['client_id']}_{$client['traseu_id']}">
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
<script src="/js/pagini/randament_clienti.js"></script>
