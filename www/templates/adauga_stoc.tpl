{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adauga stoc</h1>
                    <a href="stoc.php">
                        <button class="btn btn-mini btn-warning">Inapoi</button>
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
                                <form class="form-horizontal" action="/adauga_stoc.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <label class="control-label" for="depozit_id">Depozit:</label>
                                    <div class="controls controls-row">
                                        <select name="depozit_id" style="width: 200px;"
                                                data-schimba="2">
                                            <option value="0">--</option>
                                            {foreach from=$lista_depozite item=depozit}
                                                <option value={$depozit['id']}
                                                        {if $depozit_by_traseu_id['depozit_id']==$depozit['id']}selected="selected"{/if}>
                                                    {$depozit['nume']}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
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
                                                    <option value={$stare['id']}
                                                            {if $stare['id'] == $stare_produs['id']} selected={$stare['id']}{/if}>
                                                        {$stare['nume']}
                                                    </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <label class="control-label" for="cantitate">Adauga Stoc:</label>
                                    <div class="controls controls-row">
                                        <input class="span2" type="text" name="cantitate" placeholder="cantitate"
                                               autocomplete="off"
                                               value="">
                                        <label class="error" style="display: inline-block" for="cantitate"></label>
                                    </div>
                                    <label class="control-label" for="data_intrare">Data adaugarii:</label>
                                    <div class="controls controls-row">
                                        <input class="span2" type="date" name="data_intrare" autocomplete="off"
                                               value="{date('Y-m-d')}">
                                        <label class="error" style="display: inline-block" for="data_intrare"></label>
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
<span style="margin-left: 230px;">{$totaltime}</span>