{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i> Edit produs</h1>
                    <button type="button" onclick="location.href='/adauga_produse_extra_fisa.php?fisa_id={$fisa_id}&id_client={$client_id}'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Produse extra
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div>
                                <div style="float: left">
                                    <form class="form-horizontal" action="/edit_produs_extra.php?id={$id}&id_client={$client_id}&fisa_id={$fisa_id}"
                                          method="post">
                                        <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                        <table class="table table-bordered" style="width: 400px;">
                                            <tr style="text-align: left;">
                                                <th style="width: 150px;vertical-align: middle;text-align: left">TIP PRODUS</th>
                                                <th>{$produs_extra[$id]['nume_produs']}</th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">CANTITATE</th>
                                                <th style="text-align: left;">
                                                   <input style="text-align: right;width: 100%;" type="text" name="cantitate" value="{$produs_extra[$id]['cantitate']}">
                                                </th>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th style="vertical-align: middle;text-align: left">PRET</th>
                                                <th style="text-align: left;">
                                                    <input style="text-align: right;width: 100%;" type="text" name="pret" value="{$produs_extra[$id]['pret']}">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" style="text-align: right;">
                                                    <button type="submit" name="modifica" value="modifica"
                                                            class="btn btn-info">
                                                        Modifica
                                                    </button>
                                                    <button onclick="return confirm('Sigur ?');" type="submit" name="sterge" value="sterge"
                                                            class="btn btn-danger">
                                                        Sterge
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
        </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="js/pagini/edit_client.js"></script>
<script src="js/pagini/data_table.js"></script>
