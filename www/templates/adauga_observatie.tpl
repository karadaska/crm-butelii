{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga observatie</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <form class="form-horizontal" action="/adauga_culoare.php"
                                  method="post">
                                <table class="table table-bordered" style="width: 200px;">
                                    <tr>
                                        <th style="vertical-align: middle;">Observatie</th>
                                        <th style="text-align: left;">
                                            <select name="tip_observatie">
                                                <option value="0">Alege...</option>
                                            </select>
                                        </th>
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                            Adauga
                                        </button>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{include file="footer.tpl"}