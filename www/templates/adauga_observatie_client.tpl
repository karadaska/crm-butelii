{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga observatie la clientul: {$client['nume']}</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_observatie_client.php?id={$client['id']}"
                                      method="post">
                                    <table class="table table-bordered" style="width: 400px;">
                                        <thead>
                                        <tr>
                                            <td style="vertical-align: middle;">Observatie</td>
                                            <td><textarea name="nume"></textarea></td>
                                            <td style="vertical-align: middle;">
                                                <button type="submit" name="adauga" value="adauga"
                                                        class="btn btn-primary">
                                                    Adauga
                                                </button>
                                            </td>
                                        </tr>
                                        </thead>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{include file="footer.tpl"}