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
                            <h4>Stoc depozit devel:</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    {foreach from=$stoc_produse['depozite'] item=depozit}
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="6">{$depozit['nume']}</th>
                                                </tr>
                                                <tr>
                                                    <th>Nume produs</th>
                                                    <th>Pline</th>
                                                    <th>Goale</th>
                                                    <th>Defecte</th>
                                                    <th>Neconforme</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {foreach from=$depozit['content'] item=depozit_content}
                                                    <tr>
                                                        <td>{$depozit_content['nume']}</td>
                                                        <td style="text-align: right;">{$depozit_content['pline']}</td>
                                                        <td style="text-align: right;">{$depozit_content['goale']}</td>
                                                        <td style="text-align: right;">{$depozit_content['defecte']}</td>
                                                        <td style="text-align: right;">{$depozit_content['neconforme']}</td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                                <tr class="success">
                                                    <td style="text-align: right;font-weight: bolder">Total depozit:
                                                    </td>
                                                    <td style="text-align: right;font-weight: bolder">{$depozit['totaluri']['pline']}</td>
                                                    <td style="text-align: right;font-weight: bolder">{$depozit['totaluri']['goale']}</td>
                                                    <td style="text-align: right;font-weight: bolder">{$depozit['totaluri']['defecte']}</td>
                                                    <td style="text-align: right;font-weight: bolder">{$depozit['totaluri']['neconforme']}</td>
                                                </tr>
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
