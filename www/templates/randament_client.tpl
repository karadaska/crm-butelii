{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Randament clienti</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/randament_client.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="an" style="width: 180px;">
                            {foreach from=$lista_ani item=ani}
                                <option value={$ani['id']}
                                        {if $ani['id'] == $an} selected="selected" {/if}>
                                    {$ani['an']}
                                </option>
                            {/foreach}
                        </select>
                        <input type="hidden" name="id_an" value="{$ani['an']}">
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            <option value="0">Toate</option>
                            {foreach from=$lista_perioade item=perioada}
                                <option value={$perioada['id']}
                                        {if $perioada['id'] == $perioada_id} selected="selected" {/if}>
                                    {$perioada['nume']}
                                </option>
                            {/foreach}
                        </select>
                        <input type="hidden" name="id_perioada" value="{$perioada_id}">
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                            <input type="hidden" name="id_perioada" value="{$perioada_id}">
                            <input type="hidden" name="id_an" value="{$an}">
                            <input type="hidden" name="id_traseu" value="{$traseu_id}">

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
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/randament_clienti.js"></script>
