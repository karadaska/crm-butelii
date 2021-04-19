{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga Produse extra la clientul: {$nume_client['nume']}
                    </h1>
                    <a href="completare_fisa_traseu.php?id={$fisa_id}">
                        <button class="btn btn-mini btn-warning">Inapoi</button>
                    </a>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Produse Extra</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal"
                                      action="/adauga_produse_extra_fisa.php?fisa_id={$fisa_id}&id_client={$client_id}"
                                      method="post">
                                    <table class="table table-bordered" style="width: 350px;">
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">Tip
                                                produs:
                                            </th>
                                            <td style="text-align: left;vertical-align: middle;">
                                                <select name="tip_produs_id" data-schimba="2">
                                                    <option value="0">--</option>
                                                    {foreach from=$lista_tip_stoc item=tip}
                                                        <option value={$tip['id']}
                                                                {if $tip['produs_tip_id']== $tip['id']}selected="selected"{/if}>
                                                            {$tip['tip']}
                                                        </option>
                                                    {/foreach}
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">Stare
                                                Produs:
                                            </th>
                                            <td>
                                                <select name="stare_produs">
                                                    {foreach from=$lista_stari_produse item=stare}
                                                        {if ($stare['id'] !=4)}
                                                            <option value={$stare['id']}
                                                                    {if $stare['id'] == $stare_produs['id']} selected={$stare['id']}{/if}>
                                                                {$stare['nume']}
                                                            </option>
                                                        {/if}
                                                    {/foreach}
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">
                                                Cantitate:
                                            </th>
                                            <td><input style="width: 100%" type="text" name="cantitate"
                                                       placeholder="cantitate"
                                                       autocomplete="off"
                                                       value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;vertical-align: middle;width: 120px;">
                                                Pret:
                                            </th>
                                            <td><input style="width: 100%" type="text" name="pret"
                                                       placeholder="pret"
                                                       autocomplete="off"
                                                       value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: right;">
                                                <button type="submit" name="adauga_extra" value="adauga"
                                                        class="btn btn-primary">
                                                    Adauga
                                                </button>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                                    {if count($produse_extra) > 0}
                                        <table class="table table-bordered" style="margin-top: 10px;width: 600px;">
                                            <tr>
                                                <th class="span1" style="text-align: center;">#</th>
                                                <th class="span2">Produs</th>
                                                <th class="span1">Pline</th>
                                                <th class="span1">Goale</th>
                                                <th class="span1">Defecte</th>
                                                <th class="span1">Pret</th>
                                            </tr>
                                            {foreach from=$produse_extra item=produs}
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <a href="edit_produs_extra.php?id={$produs['tip_produs_id']}">
                                                            <img title="edit" src="../images/edit.png">
                                                        </a>
                                                    </td>
                                                    <td>{$produs['nume_produs']}</td>
                                                    <td style="text-align: center;">
                                                        <input style="width: 80px;text-align: right;"
                                                                                           type="text" name="pline"
                                                                                           value="{$produs['pline']}">
                                                    </td>
                                                    <td style="text-align: center;"><input style="width: 80px;text-align: right;"
                                                                                           type="text" name="goale"
                                                                                           value="{$produs['goale']}">
                                                    </td>
                                                    <td style="text-align: center;"><input style="width: 80px;text-align: right;"
                                                                                           type="text" name="defecte"
                                                                                           value="{$produs['defecte']}">
                                                    </td>
                                                    <td style="text-align: center;"><input style="width: 80px;text-align: right;"
                                                                                           type="text" name="pret"
                                                                                           value="{$produs['pret']}">
                                                    </td>
                                                </tr>
                                            {/foreach}
                                        </table>
                                    {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{include file="footer.tpl"}
<span style="margin-left: 230px;">{$totaltime}</span>