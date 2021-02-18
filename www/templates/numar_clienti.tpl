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
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Numar clienti by pret:</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    {foreach from=$lista_clienti['depozite'] item=depozit}
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="3">{$depozit['nume']}</th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: left;" colspan="3">Nume produs</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    {foreach from=$depozit['produse'] item=produs}
                                                        <th>{$produs['nume_produs']}<br/>
                                                            {foreach from=$produs['pret'] item=pret}
                                                                {$pret}
                                                                <br/>
                                                            {/foreach}
                                                        </th>
                                                    {/foreach}
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    {/foreach}
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
