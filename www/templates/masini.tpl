{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Masini</h1>
                    <a href="adauga_masina.php">
                        <button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;
                            ma&#351;in&#259;
                        </button>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; ma&#351;ini</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Numar</th>
                                    <th style="text-align: left;">Model</th>
                                    <th style="text-align: left;">Stare</th>
                                    <th style="text-align: left;">Soferi asignati</th>
                                    <th style="text-align: left;">Trasee asignate</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$lista_masini item=masina}
                                    <tr>
                                        <td class="span3"><a
                                                    href="edit_masina.php?id={$masina['id']}">{$masina['numar']}</a>
                                        </td>
                                        <td class="span3">
                                            {$masina['model']}
                                        </td>
                                        <td>{$masina['stare_masina']}</td>
                                        <td>
                                            {if $masina['asignari_masina']}
                                                {foreach from=$masina['asignari_masina'] item=asignare}
                                                    {$asignare['nume_sofer']}{'<br/>'}
                                                {/foreach}
                                            {else}
                                                -
                                            {/if}
                                        </td>
                                        <td>
                                            {if $masina['traseu_by_masina']}
                                                {foreach from=$masina['traseu_by_masina'] item=asignare}
                                                    {$asignare['nume_traseu']}{'<br/>'}
                                                {/foreach}
                                            {else}
                                                -
                                            {/if}
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
{include file="footer.tpl"}
