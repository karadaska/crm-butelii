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
                    <a href="stoc.php">
                        <button class="btn btn-mini btn-warning">Inapoi TO DO</button>
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
                                      action="/adauga_produse_extra_fisa.php?id={$id}&client_id={$client_id}"
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
                                            <td><input style="width: 100%" type="text" name="cantitate" placeholder="cantitate"
                                                       autocomplete="off"
                                                       value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <button type="submit" name="adauga_extra" value="adauga"
                                                        class="btn btn-primary">
                                                    Adauga
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
    </section>
</div>
{include file="footer.tpl"}
<span style="margin-left: 230px;">{$totaltime}</span>