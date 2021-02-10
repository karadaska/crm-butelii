{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga traseu</h1>
                    <button type="button" class="btn btn-warning" onclick="location.href='/trasee.php';">
                        Inapoi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii adaugare traseu</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_traseu" action="/adauga_traseu.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <div class="control-group">
                                        <table class="table table-bordered" style="width: 350px;">
                                            <thead>
                                            <tr>
                                                <th style="vertical-align: middle;">Nume:</th>
                                                <td>
                                                    <input style="width: 100%" type="text" name="nume"
                                                           autocomplete="off"
                                                           value="">
                                                </td>
                                                <td style="text-align: right;">
                                                    <button type="submit" name="adauga" value="adauga"
                                                            class="btn btn-small btn-primary">
                                                        Adauga
                                                    </button>
                                                </td>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/adauga_traseu.js"></script>
{include file="footer.tpl"}