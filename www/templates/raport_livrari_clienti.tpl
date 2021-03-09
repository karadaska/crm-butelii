{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari clienti
                        <a href="/print_raport_livrari_clienti.php?id={$traseu_id}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_livrari_clienti.php" method="post"
                      style="margin-bottom: 0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left;">Traseu
                                <select name="traseu_id">
                                    {foreach from=$lista_trasee item=traseu}
                                        <option value={$traseu['id']}
                                                {if $traseu['id'] == $traseu_id} selected="selected"
                                                {/if}>
                                            {$traseu['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                                <div id="data_start_datepicker" class="input-append date" data-date="{date("Y-m-d")}"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_start" name="data_start"
                                           value="{$data_start}"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
                                <div id="data_stop_datepicker" class="input-append date" data-date="{date("Y-m-d")}"
                                     data-date-format="yyyy-mm-dd">
                                    <input style="margin-bottom: 0;" type="text" id="data_stop" name="data_stop"
                                           value="{$data_stop}"/>
                                    <span class="add-on"><i class="icon16 i-calendar-4"></i></span>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; clien&#355i</h4>
                        </div>
                        <form action="/raport_livrari_clienti.php"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                {if $depozit_by_traseu['depozit_id'] == 1}
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                                            <th style="text-align: center;" rowspan="2">CLIENT</th>
                                            <th style="text-align: center;" rowspan="2">TELEFON</th>
                                            <th colspan="2">BG/AR</th>
                                            <th colspan="2">PRET UNITAR</th>
                                            <th colspan="2">COMISION</th>
                                            <th colspan="2">TOTAL BUCATI</th>
                                            <th colspan="2">TOTAL VAL. INCASATA</th>
                                            <th colspan="2">TOTAL COMISION</th>
                                            <th colspan="2">VALOARE BUCATI BG/AR</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center;">BG 11</td>
                                            <td style="text-align: center;">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 9</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {$nr = 1}
                                        {$total_bg_11 = 0}
                                        {$total_ar_9 = 0}
                                        {$total_valoare_incasare_bg_11 = 0}
                                        {$total_valoare_incasare_ar_9 = 0}
                                        {$total_comision_bg_11 = 0}
                                        {$total_comision_ar_9 = 0}
                                        {foreach from=$lista_clienti item=client}
                                            <tr>
                                                <td style="text-align: center" class="span1">{$nr++}</td>
                                                <td style="text-align: left"
                                                    class="span3">{strtoupper($client['nume_localitate'])}</td>
                                                <td>
                                                    {if ($client['sters'] == 0)}
                                                        <a href="edit_client.php?id={$client['id']}">
                                                            {strtoupper($client['nume_client'])}
                                                        </a>
                                                    {else}
                                                        <a href="edit_client.php?id={$client['id']}">
                                                            <abbr title="Client sters de pe acest traseu"
                                                                  style="color: red;"> {strtoupper($client['nume_client'])}</abbr>
                                                        </a>
                                                    {/if}
                                                </td>
                                                <td>{$client['telefon']}<br/>{$client['telefon2']}</td>
                                                <td style="text-align: center;border-left:double">{($client['target']['1']['target'] !='') ? $client['target']['1']['target'] : '-'}</td>
                                                <td style="text-align: center">{($client['target']['4']['target'] !='') ? $client['target']['4']['target'] : '-'}</td>
                                                <td style="text-align: center;border-left:double">{($client['total_produse']['bg_11']['pret_contract_client'] !='') ? $client['total_produse']['bg_11']['pret_contract_client'] - $client['target']['1']['comision']  : '-'}</td>
                                                <td style="text-align: center;border-left:double">{($client['total_produse']['ar_9']['pret_contract_client'] !='') ? $client['total_produse']['ar_9']['pret_contract_client'] - $client['target']['1']['comision']  : '-'}</td>
                                                <td style="text-align: center;">{($client['target']['1']['comision'] !='') ? $client['target']['1']['comision'] : '-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['target']['4']['comision'] !='') ? $client['target']['4']['comision'] : '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] :'-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] !='') ? $client['total_produse']['ar_9']['total_ar_9']: '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? $client['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-'} </td>
                                                <td style="text-align: center;border-right:double;">{($client['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? $client['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] :'-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] !='') ? $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] : '-'}</td>
                                                <td>
                                                    {if count($client['lista_preturi_bg_11']) >0}
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$client['lista_preturi_bg_11'] item=lista}
                                                                    <td style="text-align: center;">
                                                                        <a href="istoric_client_fisa_traseu.php?id={$client['client_id']}">
                                                                            Pret: {$lista['pret']} <br/>
                                                                            Cant: {$lista['total_cantitati_bg_11']['numar_produs_by_pret']}
                                                                        </a>
                                                                    </td>
                                                                {/foreach}
                                                            </tr>
                                                        </table>
                                                    {else}
                                                        <span style="text-align: center;">-</span>
                                                    {/if}
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    {if count($client['lista_preturi_ar_9']) >0}
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$client['lista_preturi_ar_9'] item=lista}
                                                                    <td style="text-align: center;">
                                                                        <a href="istoric_client_fisa_traseu.php?id={$client['client_id']}">
                                                                            Pret: {$lista['pret']}<br/>
                                                                            Cant: {$lista['total_cantitati_ar_9']['numar_produs_by_pret']}
                                                                        </a>
                                                                    </td>
                                                                {/foreach}
                                                            </tr>
                                                        </table>
                                                    {else}
                                                        <span style="text-align: center;">-</span>
                                                    {/if}
                                                </td>
                                            </tr>
                                            {$total_bg_11 = $total_bg_11 + $client['total_produse']['bg_11']['total_bg_11']}
                                            {$total_ar_9 = $total_ar_9 + $client['total_produse']['ar_9']['total_ar_9']}
                                            {$total_valoare_incasare_bg_11 = $total_valoare_incasare_bg_11 + $client['total_produse']['bg_11']['total_bg_11_cu_pret']}
                                            {$total_valoare_incasare_ar_9 = $total_valoare_incasare_ar_9 + $client['total_produse']['ar_9']['total_ar_9_cu_pret']}
                                            {$total_comision_bg_11 = ($total_comision_bg_11 + $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'])}
                                            {$total_comision_ar_9 =  ($total_comision_ar_9 + $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'])}
                                        {/foreach}
                                        <tr>
                                            <th colspan="10" style="text-align: right;border-right:double;">TOTAL:</th>
                                            <th><abbr title="Total bucati BG 11"
                                                      style="color: red;">{$total_bg_11}</abbr></th>
                                            <th style="border-right:double;"><abbr title="Total bucati AR 9"
                                                                                   style="color: red;">{$total_ar_9}</abbr>
                                            </th>
                                            <th>
                                                <abbr title="Total valoare incasare BG 11"
                                                      style="color: red;">{$total_valoare_incasare_bg_11}</abbr>
                                            </th>
                                            <th style="border-right:double;">
                                                <abbr title="Total valoare incasare AR 9"
                                                      style="color: red;">{$total_valoare_incasare_ar_9}</abbr>
                                            </th>
                                            <th><abbr title="Total comision BG 11"
                                                      style="color: red;">{$total_comision_bg_11}</abbr></th>
                                            <th style="border-right:double;"><abbr title="Total comision AR 9"
                                                                                   style="color: red;">{$total_comision_ar_9}</abbr>
                                            </th>
                                            <th colspan="20"></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: inline-flex">
                                        <div>
                                            {if count($preturi_by_bg_11) > 0}
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="{count($preturi_by_bg_11)}">PRETURI BG 11</th>
                                                    </tr>
                                                    <tr>
                                                        {foreach from=$preturi_by_bg_11 item=pret}
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$pret['pret_bg_11']['cantitate']['0']['total_cantitate']}</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        {/foreach}
                                                    </tr>
                                                </table>
                                            {/if}
                                        </div>
                                        <div style="margin-left: 10px;w">
                                            {if count($preturi_by_ar_9) > 0}
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="{count($preturi_by_ar_9)}">PRETURI AR 9</th>
                                                    </tr>
                                                    <tr>
                                                        {foreach from=$preturi_by_ar_9 item=pret}
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$pret['pret_ar_9']['cantitate']['0']['total_cantitate']}</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        {/foreach}
                                                    </tr>
                                                </table>
                                            {/if}
                                        </div>
                                    </div>
                                {else}
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: center;" rowspan="2">LOCALITATE</th>
                                            <th style="text-align: center;" rowspan="2">CLIENT</th>
                                            <th style="text-align: center;" rowspan="2">TELEFON</th>
                                            <th colspan="3">BG/AR</th>
                                            <th colspan="3">PRET UNITAR</th>
                                            <th colspan="3">COMISION</th>
                                            <th colspan="3">TOTAL BUCATI</th>
                                            <th colspan="3">TOTAL VAL. INCASATA</th>
                                            <th colspan="3">TOTAL COMISION</th>
                                            <th colspan="3">VALOARE BUCATI BG/AR</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center;">BG 11</td>
                                            <td style="text-align: center;">AR 8</td>
                                            <td style="text-align: center;">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>
                                            <td style="text-align: center">BG 11</td>
                                            <td style="text-align: center">AR 8</td>
                                            <td style="text-align: center">AR 9</td>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        {$nr = 1}
                                        {$total_bg_11 = 0}
                                        {$total_ar_8 = 0}
                                        {$total_ar_9 = 0}
                                        {$total_valoare_incasare_bg_11 = 0}
                                        {$total_valoare_incasare_ar_8 = 0}
                                        {$total_valoare_incasare_ar_9 = 0}
                                        {$total_comision_bg_11 = 0}
                                        {$total_comision_ar_8 = 0}
                                        {$total_comision_ar_9 = 0}
                                        {foreach from=$lista_clienti item=client}
                                            <tr>
                                                <td style="text-align: center" class="span1">{$nr++}</td>
                                                <td style="text-align: left"
                                                    class="span3">{strtoupper($client['nume_localitate'])}</td>
                                                <td>
                                                    {if ($client['sters'] == 0)}
                                                        <a href="edit_client.php?id={$client['id']}">

                                                            {strtoupper($client['nume_client'])}
                                                        </a>
                                                    {else}
                                                        <a href="edit_client.php?id={$client['id']}">

                                                            <abbr title="Client sters de pe acest traseu"
                                                                  style="color: red;"> {strtoupper($client['nume_client'])}</abbr>
                                                        </a>
                                                    {/if}
                                                </td>
                                                <td>{$client['telefon']}<br/>{$client['telefon2']}</td>
                                                <td style="text-align: center;border-left:double">{($client['target']['1']['target'] !='') ? $client['target']['1']['target'] : '-'}</td>
                                                <td style="text-align: center;">{($client['target']['3']['target'] !='') ? $client['target']['3']['target'] : '-'}</td>
                                                <td style="text-align: center">{($client['target']['4']['target'] !='') ? $client['target']['4']['target'] : '-'}</td>
                                                <td style="text-align: center;border-left:double">{($client['target']['1']['pret'] !='') ? $client['target']['1']['pret'] - $client['target']['1']['comision']  : '-'}</td>
                                                <td style="text-align: center">{($client['target']['3']['pret'] !='') ? $client['target']['3']['pret'] - $client['target']['3']['comision'] : '-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['target']['4']['pret'] !='') ? $client['target']['4']['pret'] - $client['target']['4']['comision'] : '-'}</td>
                                                <td style="text-align: center">{($client['target']['1']['comision'] !='') ? $client['target']['1']['comision'] : '-'}</td>
                                                <td style="text-align: center;">{($client['target']['3']['comision'] !='') ? $client['target']['3']['comision'] : '-' }</td>
                                                <td style="text-align: center;border-right:double">{($client['target']['4']['comision'] !='') ? $client['target']['4']['comision'] : '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] :'-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8'] !='') ? $client['total_produse']['ar_8']['total_ar_8'] : '-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] !='') ? $client['total_produse']['ar_9']['total_ar_9']: '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? $client['total_produse']['bg_11']['total_bg_11_cu_pret'] : '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8_cu_pret'] != '') ? $client['total_produse']['ar_8']['total_ar_8_cu_pret'] :'-'}</td>
                                                <td style="text-align: center;border-right:double;">{($client['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? $client['total_produse']['ar_9']['total_ar_9_cu_pret'] : '-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] !='') ? $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'] :'-'}</td>
                                                <td style="text-align: center;">{($client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'] !='') ? $client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'] : '-'}</td>
                                                <td style="text-align: center;border-right:double">{($client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] !='') ? $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'] : '-'}</td>
                                                <td style="text-align: center;border-right:double">
                                                    {if count($client['lista_preturi_bg_11']) >0}
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$client['lista_preturi_bg_11'] item=lista}
                                                                    <td style="text-align: center;">
                                                                        <a href="istoric_client_fisa_traseu.php?id={$client['client_id']}">
                                                                            Pret: {$lista['pret']} <br/>
                                                                            Cant: {$lista['total_cantitati_bg_11']['numar_produs_by_pret']}
                                                                        </a>
                                                                    </td>
                                                                {/foreach}
                                                            </tr>
                                                        </table>
                                                    {else}
                                                        <span style="text-align: center;">-</span>
                                                    {/if}
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    {if count($client['lista_preturi_ar_8']) >0}
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$client['lista_preturi_ar_8'] item=lista}
                                                                    <td style="text-align: center;">
                                                                        <a href="istoric_client_fisa_traseu.php?id={$client['client_id']}">
                                                                            Pret: {$lista['pret']} <br/>
                                                                            Cant: {$lista['total_cantitati_ar_8']['numar_produs_by_pret']}
                                                                        </a>
                                                                    </td>
                                                                {/foreach}
                                                            </tr>
                                                        </table>
                                                    {else}
                                                        <span style="text-align: center;">-</span>
                                                    {/if}
                                                </td>
                                                <td style="text-align: center;">
                                                    {if count($client['lista_preturi_ar_9']) >0}
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                {foreach from=$client['lista_preturi_ar_9'] item=lista}
                                                                    <td style="text-align: center;">
                                                                        <a href="istoric_client_fisa_traseu.php?id={{$client['client_id']}}">
                                                                            Pret: {$lista['pret']} <br/>
                                                                            Cant: {$lista['total_cantitati_ar_9']['numar_produs_by_pret']}
                                                                        </a>
                                                                    </td>
                                                                {/foreach}
                                                            </tr>
                                                        </table>
                                                    {else}
                                                        <span style="text-align: center;">-</span>
                                                    {/if}
                                                </td>
                                            </tr>
                                            {$total_bg_11 = $total_bg_11 + $client['total_produse']['bg_11']['total_bg_11']}
                                            {$total_ar_8 = $total_ar_8 + $client['total_produse']['ar_8']['total_ar_8']}
                                            {$total_ar_9 = $total_ar_9 + $client['total_produse']['ar_9']['total_ar_9']}
                                            {$total_valoare_incasare_bg_11 = $total_valoare_incasare_bg_11 + $client['total_produse']['bg_11']['total_bg_11_cu_pret']}
                                            {$total_valoare_incasare_ar_8 = $total_valoare_incasare_ar_8 + $client['total_produse']['ar_8']['total_ar_8_cu_pret']}
                                            {$total_valoare_incasare_ar_9 = $total_valoare_incasare_ar_9 + $client['total_produse']['ar_9']['total_ar_9_cu_pret']}
                                            {$total_comision_bg_11 = ($total_comision_bg_11 + $client['total_produse']['bg_11']['total_bg_11'] * $client['target']['1']['comision'])}
                                            {$total_comision_ar_8 = ($total_comision_ar_8 + $client['total_produse']['ar_8']['total_ar_8'] * $client['target']['3']['comision'])}
                                            {$total_comision_ar_9 =  ($total_comision_ar_9 + $client['total_produse']['ar_9']['total_ar_9'] * $client['target']['4']['comision'])}
                                        {/foreach}
                                        <tr>
                                            <th colspan="13" style="text-align: right;border-right:double">TOTAL:</th>
                                            <th style="color: red;"><abbr
                                                        title="Total bucati BG 11">{$total_bg_11}</abbr></th>
                                            <th style="color: red;"><abbr title="Total bucati AR 8">{$total_ar_8}</abbr>
                                            </th>
                                            <th style="text-align: right;border-right:double;"><abbr
                                                        title="Total bucati AR 9"
                                                        style="color: red;">{$total_ar_9}</abbr></th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare BG 11">{$total_valoare_incasare_bg_11}</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare AR 8">{$total_valoare_incasare_ar_8}</abbr>
                                            </th>
                                            <th style="text-align: right;border-right:double;">
                                                <abbr title="Total valoare incasare AR 9"
                                                      style="color: red;">{$total_valoare_incasare_ar_9}</abbr>
                                            </th>
                                            <th style="color: red;"><abbr
                                                        title="Total comision BG 11">{$total_comision_bg_11}</abbr></th>
                                            <th style="color: red;"><abbr
                                                        title="Total comision BG 11">{$total_comision_ar_8}</abbr></th>
                                            <th style="text-align: right;border-right:double;"><abbr
                                                        title="Total comision AR 9"
                                                        style="color: red;">{$total_comision_ar_9}</abbr></th>
                                            <th colspan="20"></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: inline-flex">
                                        <div>{if count($preturi_by_bg_11) > 0}
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="{count($preturi_by_bg_11)}">PRETURI BG 11</th>
                                                    </tr>
                                                    <tr>
                                                        {foreach from=$preturi_by_bg_11 item=pret}
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;">{$pret['pret_bg_11']['pret']}
                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$pret['pret_bg_11']['cantitate']['0']['total_cantitate']}</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        {/foreach}
                                                    </tr>
                                                </table>
                                            {/if}
                                        </div>
                                        <div style="margin-left: 10px;">
                                            {if count($preturi_by_ar_8) > 0}
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="{count($preturi_by_ar_8)}">PRETURI AR 8</th>
                                                    </tr>
                                                    <tr>
                                                        {foreach from=$preturi_by_ar_8 item=pret}
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;">{$pret['pret_ar_8']['pret']}
                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$pret['pret_ar_8']['cantitate']['0']['total_cantitate']}</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        {/foreach}
                                                    </tr>
                                                </table>
                                            {/if}
                                        </div>
                                        <div style="margin-left: 10px;w">
                                            {if count($preturi_by_ar_9) > 0}
                                                <table class="table table-bordered"
                                                       style="margin-top: 20px;width: 400px;">
                                                    <tr>
                                                        <th colspan="{count($preturi_by_ar_9)}">PRETURI AR 9</th>
                                                    </tr>
                                                    <tr>
                                                        {foreach from=$preturi_by_ar_9 item=pret}
                                                            <td>
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th style="text-align: center;">{$pret['pret_ar_9']['pret']}
                                                                            <br/>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="text-align: center;">{$pret['pret_ar_9']['cantitate']['0']['total_cantitate']}</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        {/foreach}
                                                    </tr>
                                                </table>
                                            {/if}
                                        </div>
                                    </div>
                                {/if}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



