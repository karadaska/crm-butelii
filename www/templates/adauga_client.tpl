{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adaugare client nou</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Detalii client</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_client" action="/adauga_client.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Nume client:</label>
                                        <div class="controls controls-row">
                                            <input style="width:230px;" id="nume" type="text" autocomplete="off" name="nume"
                                                   value="">
                                            <label class="error" style="display: inline-block" for="nume"></label>
                                        </div>
                                        <label class="control-label" for="traseu_id">Traseu:</label>
                                        <div class="controls controls-row">
                                            <select name="traseu_id" id="traseu_id">
                                                <option value="0">-Selecteaza traseu-</option>
                                                {foreach from=$lista_trasee key=tmp item=traseu}
                                                    <option value={$traseu['id']}>{$traseu['nume']}</option>
                                                {/foreach}
                                            </select>
                                            <label class="error" style="display: inline-block" for="judet_id"></label>
                                        </div>
                                        <label class="control-label" for="judet">Zona:</label>
                                        <div class="controls controls-row">
                                            <select name="judet_id" id="judet_id">
                                                <option value="0">-Selecteaza zona-</option>
                                                {foreach from=$lista_judete key=tmp item=judet}
                                                    <option value={$judet['id']}>{$judet['nume']}</option>
                                                {/foreach}
                                            </select>
                                            <label class="error" style="display: inline-block" for="judet_id"></label>
                                        </div>
                                        <label class="control-label" for="select">Localitate:</label>

                                        <div class="controls controls-row" id="lista_localitati">
                                            <select name="localitate_id" id="localitate_id">
                                                <option value="0">-Selecteaza localitate-</option>
                                                {foreach from=$lista_localitati key=tmp item=localitate}
                                                    <option value={$localitate['id']}>{$localitate['nume']}</option>
                                                {/foreach}
                                            </select>
                                            <label class="error" style="display: inline-block"
                                                   for="localitate_id"></label>
                                        </div>
                                        <label class="control-label" for="select">Adresa:</label>
                                        <div class="controls controls-row">
                                            <input style="width:230px;" placeholder="adresa" autocomplete="off" type="text"
                                                   name="adresa"
                                                   value="">
                                        </div>
                                        <label class="control-label" for="stare client">Stare Client:</label>
                                        <div class="controls controls-row" id="stare_id">
                                            <select name="stare_id" id="stare_id">
                                                {foreach from=$lista_stari key=tmp item=stare}
                                                    <option value={$stare['id']}>{$stare['nume']}</option>
                                                {/foreach}
                                            </select>
                                            <label class="error" style="display: inline-block"
                                                   for="localitate_id"></label>
                                        </div>
                                        <label class="control-label" for="culoare_id">Culoare:</label>
                                        <div class="controls controls-row">
                                            <select name="culoare_id">
                                                <option value="0">Selecteaza culoare</option>
                                                {foreach from=$culori_butelii key=tmp item=culoare}
                                                    <option value={$culoare['id']}>{$culoare['nume']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="controls controls-row" style="float: left;margin-left: 70px">
                                            <input placeholder="Telefon" autocomplete="off" type="text"
                                                   name="telefon" value="">
                                            <input placeholder="Telefon 2" autocomplete="off" type="text"
                                                   name="telefon_2" value="">
                                            <input placeholder="cnp" autocomplete="off" type="text"
                                                   name="cnp" value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input placeholder="contract" autocomplete="off" type="text"
                                                   name="contract" value="">
                                            <input  placeholder="titular" autocomplete="off" type="text"
                                                   name="titular" value="">
                                            <input placeholder="rastel" autocomplete="off" type="text"
                                                   name="rastel" value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input type="date" id="data_start" name="data_start"
                                                   value="{date('Y-m-d')}">
                                            <input placeholder="latitudine" autocomplete="off" type="text"
                                                   name="latitudine"
                                                   value="">
                                            <input placeholder="longitudine" autocomplete="off"
                                                   type="text" name="longitudine"
                                                   value="">
                                        </div>
                                        <div style="height: 20px;clear: both"></div>
                                        <div class="controls controls-row" style=";margin-left: 70px">
                                            <input placeholder="CI" autocomplete="off" type="text"
                                                   name="ci" value="">
                                            <button style="margin-bottom: 13px;margin-left: 250px;" type="submit" name="adauga" value="adauga" class="btn btn-primary">
                                                Adauga
                                            </button>
                                            <button style="margin-bottom: 13px;" type="button" class="btn btn-warning" onclick="location.href='/clienti.php';">
                                                Anuleaza
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
<script src="js/pagini/adauga_client.js"></script>
<script src="js/pagini/menu_graph.js"></script>
{include file="footer.tpl"}