{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Actualizare stoc, pret, comision</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/actualizeaza_stoc_clienti.php" method="post" id="form_actualizeaza_stoc"
                     style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id" style="width: 180px;">
                            <option value="0">Alege traseu...</option>
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']}
                                        {if $traseu['id'] == $traseu_id} selected="selected"
                                        {/if}>
                                    {$traseu['nume']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;">
                        <select name="stare_id" style="width: 120px;">
                            <option value="-1">-Toti-</option>
                            {foreach from=$lista_stari key=tmp item=stare}
                                <option value={$stare['id']} {if $stare['id'] == $stare_id} selected="selected"{/if}>{$stare['nume']}</option>
                            {/foreach}
                        </select>
                    </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <div class="widget-content">
                            <input type="hidden" name="xxx" value="{$traseu['id']}">

                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">NUME</th>
                                        <th style="text-align: left;" colspan="3">LOCALITATE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {$nr = 1}
                                    {foreach from=$lista_clienti item=client}
                                        <input type="hidden" name="valoare_client_id" value="{{$client['id']}}">
                                        <tr>
                                            <th style="vertical-align: middle;">{$nr++}</th>
                                            <th style="vertical-align: middle;text-align: left;">{strtoupper($client['nume_localitate'])}</th>
                                            <th style="text-align: left;vertical-align: middle;"><a target="_blank"
                                                        href="edit_client.php?id={$client['id']}">{strtoupper($client['nume_client'])}</a>
                                            </th>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tr class="info">
                                                        <td class="span3"
                                                            style="text-align: center;font-weight: bolder;">
                                                            PRODUS
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: center;font-weight: bolder;width: 100px;">
                                                            STOC
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: center;font-weight: bolder;width: 100px;">
                                                            PRET
                                                        </td>
                                                        <td class="span1"
                                                            style="text-align: center;font-weight: bolder;">
                                                            COMISION
                                                        </td>
                                                    </tr>
                                                    {foreach from=$client['target'] item = target_client}
                                                        <tr>
                                                            <td>{$target_client['nume_produs']}
                                                                <input type="hidden" name="tip_produs_id"
                                                                       value="{$target_client['tip_produs_id']}">
                                                            </td>
                                                            <td>
                                                                <input style="text-align: right"
                                                                       value="{$target_client['target']}"
                                                                       type="text" autocomplete="off"
                                                                       name="target_{$target_client['client_id']}_{$target_client['tip_produs_id']}">
                                                            </td>
                                                            <td>
                                                                <input style="text-align: right"
                                                                       value="{$target_client['pret']}"
                                                                       type="text" autocomplete="off"
                                                                       name="pret_{$target_client['client_id']}_{$target_client['tip_produs_id']}">
                                                            </td>
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right;"
                                                                       value="{$target_client['comision']}"
                                                                       type="text"
                                                                       autocomplete="off"
                                                                       name="comision_{$target_client['client_id']}_{$target_client['tip_produs_id']}">
                                                            </td>
                                                        </tr>
                                                    {/foreach}
                                                </table>
                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                                <input style="float: right;margin-top: 20px;" type="submit" value="update" class="btn btn-info" name="update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/actualizeaza_stoc_clienti.js"></script>

<span style="margin-left: 230px;">{$totaltime}</span>