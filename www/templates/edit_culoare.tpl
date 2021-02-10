{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit culoare: {$culoare_id['nume']}</h1>
                    <button type="button" onclick="location.href='/culori_butelii.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista culori
                    </button>
                </div>
                <form class="form-horizontal" action="/edit_culoare.php"
                      method="post">
                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                    <input type="hidden" name="id" id="id" value="{$culoare_id['id']}"/>
                    <table class="table table-bordered" style="width: 600px;">
                        <tr>
                            <th style="text-align: left;vertical-align: middle">Culoare:</th>
                            <th style="text-align: left;"><input autocomplete="off" class="span3" type="text"
                                                                 name="nume"
                                                                 value="{$culoare_id['nume']}">
                            </th>
                            <th>
                                <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                    Modifica
                                </button>
                            </th>
                            <th>
                                <button type="button" class="btn btn-danger"
                                        onclick="clickOnStergeCuloare({$culoare_id['id']})">Sterge
                                </button>
                            </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
{include file="footer.tpl"}