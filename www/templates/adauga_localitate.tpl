{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga localitate</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_localitate.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <table class="table table-bordered" style="width: 300px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;">Zona</th>
                                            <th style="text-align: left;">
                                                <select name="zona_id">
                                                    <option value="0">Alege...</option>
                                                    {foreach from=$lista_judete key=tmp item=judet}
                                                        <option value={$judet['id']}>{$judet['nume']}</option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Nume</th>
                                            <th><input type="text" name="nume" autocomplete="off"
                                                       value=""></th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: right;">
                                                <button type="submit" name="adauga" value="adauga"
                                                        class="btn btn-mini btn-primary">
                                                    Adauga
                                                </button>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{include file="footer.tpl"}