{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adaugare clienti noi</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">

                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Import din fisier</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_clienti" action="/import_clienti.php" method="post" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Fisier:</label>
                                        <div class="controls controls-row">
                                            <input type="file" name="fisier" id="fisier" value="" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <b>format fisier csv:</b> &nbsp;&nbsp;&nbsp;&nbsp; Nume client; Judet; Localitate; Stare_client; Telefon; Cnp; Ci; Contract; Titular; Ratel; Culoare;
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">Adauga</button>
                                        <button type="button" class="btn" onclick="location.href='/clienti.php';">Anuleaza</button>
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
