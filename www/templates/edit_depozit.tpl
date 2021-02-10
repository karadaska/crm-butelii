{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Edit depozit: {$depozit_id['nume']}</h1>
                    <button type="button" onclick="location.href='/depozite.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista depozite
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii depozit</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_depozit" action="/edit_depozit.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="{$depozit_id['id']}"/>
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Nume depozit:</label>
                                        <div class="controls controls-row">
                                            <input class="span2" id="nume" type="text" name="nume"
                                                   value="{$depozit_id['nume']}">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                            <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                                Modifica
                                            </button>
                                            <button type="button" onclick="location.href='/depozite.php'" name="inapoi"
                                                    value="inapoi" class="btn btn-warning">
                                                Inapoi
                                            </button>
                                        </div>
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
<script src="js/pagini/edit_depozit.js"></script>

{include file="footer.tpl"}