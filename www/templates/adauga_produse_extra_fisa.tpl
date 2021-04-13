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
                                <h4>Detalii</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" action="/adauga_produse_extra_fisa.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <label class="control-label" for="tip_produs_id">Tip Produs:</label>
                                    <div class="controls controls-row">
                                        <select name="tip_produs_id" style="width: 200px;"
                                                data-schimba="2">
                                            <option value="0">--</option>
                                            {foreach from=$lista_tip_stoc item=tip}
                                                <option value={$tip['id']}
                                                        {if $tip['produs_tip_id']== $tip['id']}selected="selected"{/if}>
                                                    {$tip['tip']}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <label class="control-label" for="tip_produs_id">Stare Produs:</label>
                                    <div class="controls controls-row">
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
                                    </div>
                                    <label class="control-label" for="cantitate">Cantitate:</label>
                                    <div class="controls controls-row">
                                        <input class="span2" type="text" name="cantitate" placeholder="cantitate"
                                               autocomplete="off"
                                               value="">
                                        <label class="error" style="display: inline-block" for="cantitate"></label>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga_extra" value="adauga"
                                                class="btn btn-primary">
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
<span style="margin-left: 230px;">{$totaltime}</span>