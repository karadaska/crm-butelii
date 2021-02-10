{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga sofer</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_masina" action="/adauga_sofer.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="numar">Nume</label>
                                        <div class="controls controls-row">
                                            <input class="span3" type="text" name="nume" autocomplete="off" value="">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                            Adauga
                                        </button>
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
{include file="footer.tpl"}