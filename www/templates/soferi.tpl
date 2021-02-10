{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Soferi</h1>
                    <a href="adauga_sofer.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            &#351;ofer
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; &#351;oferi</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Nume</th>
                                    <th style="text-align: left;">Asignari masini</th>
                                    {*<th style="text-align: left;">Asignari trasee</th>*}
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_soferi item=sofer}
                                    <tr>
                                        <td><a href="../edit_sofer.php?id={$sofer['id']}">{$sofer['nume']}</a></td>
                                        <td>
                                            {if $sofer['asignari_trasee']}
                                            {foreach from=$sofer['asignari_trasee'] item=asignare}
                                                {$asignare['nume_masina']} => [{$asignare['nume_traseu']}]{'<br/>'}
                                            {/foreach}
                                                {else}
                                                -
                                            {/if}
                                        </td>
                                        {*<td>*}
                                            {*{if $sofer['asignari_trasee']}*}
                                                {*{foreach from=$sofer['asignari_trasee'] item=asignare}*}
                                                    {*{$asignare['nume_masina']} => [{$asignare['nume_traseu']}]{'<br/>'}*}
                                                {*{/foreach}*}
                                            {*{else}*}
                                                {*-*}
                                            {*{/if}*}
                                        {*</td>*}
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
<script src="js/pagini/edit_sofer.js"></script>
{include file="footer.tpl"}
