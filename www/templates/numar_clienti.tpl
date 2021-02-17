{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Numar clienti by pret</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/numar_clienti.php" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            {foreach from=$lista_depozite item=depozit}
                                <option value={$depozit['id']}
                                        {if $depozit['id'] == $depozit} selected="selected" {/if}>
                                    {$depozit['nume']}
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
                        <form action="/numar_clienti.php?depozit_id={$depozit_id}" method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    <tr>
                                        <th style="text-align: left"> {$nr++}</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/ordine_clienti.js"></script>
