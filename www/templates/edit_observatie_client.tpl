{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit observatie: {$observatie_id['nume']}</h1>
                    <button type="button" onclick="location.href='/edit_client.php?id={$observatie_id['client_id']}'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-warning">
                        Inapoi
                    </button>
                </div>
                <form class="form-horizontal" action="/edit_observatie_client.php"
                      method="post">
                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                    <input type="hidden" name="id" id="id" value="{$observatie_id['id']}"/>
                    <table class="table table-bordered" style="width: 600px;">
                        <tr>
                            <th style="text-align: center;vertical-align: middle">Nume:</th>
                            <th style="text-align: left;">
                                <input autocomplete="off" class="span3" type="text"
                                       name="observatie"
                                       value="{$observatie_id['nume']}">
                                <button style="margin-bottom: 10px;" type="submit" name="modifica" value="modifica" class="btn btn-mini btn-info">
                                    Modifica
                                </button>
                            </th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/observatii.js"></script>
