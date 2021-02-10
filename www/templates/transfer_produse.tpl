{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}
<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Transfer produse: {date('Y-m-d')}</h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;margin-left: -16px;" class="form-horizontal"
                                              id="form_adauga_fisa"
                                              action="/transfer_produse.php" method="post">
                                            <table class="table table-bordered" style="width: 670px;">
                                                <tr>
                                                    <th rowspan="3" style="text-align: left;">
                                                        <select name="transfera_din_depozit_id">
                                                            <option value="0">Depozit:</option>
                                                            {foreach from=$lista_depozite item=depozit}
                                                                <option value="{{$depozit['id']}}">{$depozit['nume']}</option>
                                                            {/foreach}
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transfera_din_tip_produs_id">
                                                            <option value="0">Produs:</option>
                                                            {foreach from=$lista_produse item=produs}
                                                                <option value="{{$produs['id']}}">{$produs['tip']}</option>
                                                            {/foreach}
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transfera_din_stare_id">
                                                            <option value="0">Stare produs:</option>
                                                            {foreach from=$lista_stari_produse item=stare_produs}
                                                                <option value="{{$stare_produs['id']}}">{$stare_produs['nume']}</option>
                                                            {/foreach}
                                                        </select>
                                                    </th>
                                                    <th style="vertical-align: middle;">
                                                        <span style="text-align: center;">Transfera: </span><br/>
                                                        <input style="width: 100px;text-align: center;"
                                                               placeholder="cantitate" type="text" name="cantitate_transferata" autocomplete="off">
                                                    </th>
                                                    <th rowspan="3" style="text-align: left;">
                                                        <select name="transferat_in_depozit_id">
                                                            <option value="0">Depozit:</option>
                                                            {foreach from=$lista_depozite item=depozit}
                                                                <option value="{{$depozit['id']}}">{$depozit['nume']}</option>
                                                            {/foreach}
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transferat_in_produs_id">
                                                            <option value="0">Produs:</option>
                                                            {foreach from=$lista_produse item=produs}
                                                                <option value="{{$produs['id']}}">{$produs['tip']}</option>
                                                            {/foreach}
                                                        </select>
                                                        <br/><br/>
                                                        <select name="transferat_in_stare_id">
                                                            <option value="0">Stare produs:</option>
                                                            {foreach from=$lista_stari_produse item=stare_produs}
                                                                <option value="{$stare_produs['id']}">{$stare_produs['nume']}</option>
                                                            {/foreach}
                                                        </select>
                                                    </th>
                                                    <th style="vertical-align: middle;">
                                                        <button type="submit" name="transfer_produse"
                                                                class="btn btn-inverse">
                                                            Transfera produse
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
        </div>
    </section>
</div>

{include file="footer.tpl"}

