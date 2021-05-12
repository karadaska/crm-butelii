{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Randament client: {$nume_client['nume']}</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/randament_client.php?id={$id}" method="post" id="form_actualizeaza_stoc"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="an" style="width: 180px;" data-schimba="4">
                            {for $a=2020 to date("Y")}
                                <option value="{$a}" {if $a==$an} selected="selected" {/if}>{$a}</option>
                            {/for}
                            <input type="hidden" name="numar_an" value="{$an}">
                        </select>
                        <input type="hidden" name="id_an" value="{$ani['an']}">
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="perioada_id" style="width: 180px;">
                            {foreach from=$lista_perioade item=perioada}
                                <option value={$perioada['id']}
                                        {if $perioada['id'] == $perioada_id} selected="selected" {/if}>
                                    {$perioada['nume']}
                                </option>
                            {/foreach}
                        </select>
                        <input type="hidden" name="perioada_select" value="{$perioada_id}">
                    </div>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">RANDAMENT</th>
                                    <th style="text-align: left;">PROCENT</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$randament_client item=randament}
                                    <tr>
                                        <th>{$randament['randament_lunar']}</th>
                                        <td>{number_format(($randament['randament_lunar']* 100) / 5, 2) } %</td>
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
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/randament_clienti.js"></script>
{*{assign var=luna value=Calendar::getNumePerioadaById($randament['luna_randament'])}*}
{*<td>{$luna['nume']}</td>*}
{*<td>{$randament['randament_lunar']}</td>*}