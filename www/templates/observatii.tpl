{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Observatii</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Adauga observatii
                                    {*<form method="post" action="export.php">*}
                                        {*<input type="submit" name="export" class="btn btn-success" value="Export" />*}
                                    {*</form>*}
                                </h4>

                            </div>
                            <form class="form-horizontal" action="/observatii.php"
                                  method="post">
                                <table class="table table-bordered" style="width: 700px;">
                                    <tr>
                                        <th style="text-align: left;">
                                            <select name="tip_observatie">
                                                <option value="0">Alege...</option>
                                                {foreach from=$lista_tip_observatii item = observatie}
                                                    <option value="{$observatie['id']}">{$observatie['tip']}</option>
                                                {/foreach}
                                            </select>
                                        </th>
                                        <th><input style="width: 100%" type="text" name="observatie"/></th>
                                        <th>
                                            <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                                Adauga
                                            </button>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nume</th>
                                    <th>Tip Observatie</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                {$nr = 1}
                                {foreach from=$lista_observatii item = observatie}
                                    <tr>
                                        <th class="span1" style="text-align: center;">{$nr++}</th>
                                        <td>
                                            <a href="edit_observatie.php?id={$observatie['id']}">{$observatie['nume']}</a>
                                        </td>
                                        <td>{$observatie['tip']}</td>
                                        <td class="span1" style="text-align: center;"><img title="Sterge asignare"
                                                                                           src="../images/delete.png"
                                                                                           style="cursor: pointer"
                                                                                           onclick="clickOnStergeObservatieClient({$observatie['id']})">
                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/observatii.js"></script>
