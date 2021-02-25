{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari sofer
                        <a href="/print_raport_livrari_soferi.php?id={$sofer_id}&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_livrari_soferi.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Sofer
                                <select name="sofer_id">
                                    <option value="0">Alege sofer</option>
                                    {foreach from=$lista_soferi item=sofer}
                                        <option value={$sofer['id']}
                                                {if $sofer['id'] == $sofer_id} selected="selected"{/if}>
                                            {$sofer['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                                <input type="hidden" name="id" id="id" value="{$sofer_id}">
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input autocomplete="off" type="date" name="data_start" id="data_start"
                                                value="{$data_start}">
                                <input autocomplete="off" type="date" name="data_stop" id="data_stop"
                                       value="{$data_stop}">
                            </th>
                            <th style="text-align: left;">
                                <input type="submit" class="btn btn-primary" value="Aplica" name="aplica">
                                <button class="btn btn-success" type="button" data-export_livrari="{$sofer_id}" id="export_livrari_soferi">Export</button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            {if count($livrari_soferi) > 0}
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <form action="/raport_livrari_soferi.php?traseu_id={$traseu_id}&observatie_id={$observatie_id}"
                              method="post" id="form_actualizeaza_stoc"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;" rowspan="2">#</th>
                                            <th style="text-align: left;" rowspan="2">NUME SI PRENUME</th>
                                            <th style="text-align: center;" rowspan="2">INDICATOR AUTO</th>
                                            <th style="text-align: center;" rowspan="2">TRASEU</th>
                                            <th colspan="3">TOTAL BUTELII VANDUTE</th>
                                            <th colspan="3">TOTAL VALOARE INCASATA</th>
                                            <th colspan="3">TOTAL COMISION</th>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {$nr = 1}
                                        {$total_bg_11 = 0}
                                        {$total_valoare_incasata_bg_11 = 0}
                                        {$total_valoare_comision_bg_11 = 0}

                                        {$total_ar_8 = 0}
                                        {$total_valoare_incasata_ar_8  = 0}
                                        {$total_valoare_comision_ar_8 = 0}

                                        {$total_ar_9 = 0}
                                        {$total_valoare_incasata_ar_9  = 0}
                                        {$total_valoare_comision_ar_9 = 0}

                                        {foreach from=$livrari_soferi item=sofer}
                                            <tr>
                                                <td style="text-align: center" class="span1">{$nr++}</td>
                                                <td style="text-align: left"
                                                    class="span3">{$sofer['nume_sofer']}
                                                </td>
                                                <td>
                                                    {$sofer['numar']}
                                                </td>
                                                <td>{$sofer['nume_traseu']}</td>
                                                <td style="text-align: center;border-left:double">
                                                {($sofer['total_produse']['bg_11']['total_bg_11'] !='') ? {$sofer['total_produse']['bg_11']['total_bg_11']} : '-'}
                                                </td>
                                                <td style="text-align: center;">
                                                    {($sofer['total_produse']['ar_8']['total_ar_8'] !='') ? {$sofer['total_produse']['ar_8']['total_ar_8']} : '-'}
                                                </td>
                                                <td style="text-align: center">
                                                    {($sofer['total_produse']['ar_9']['total_ar_9'] !='') ? {$sofer['total_produse']['ar_9']['total_ar_9']} : '-'}
                                                </td>
                                                <td style="text-align: center;border-left:double">
                                                    {($sofer['total_produse']['bg_11']['total_bg_11_cu_pret'] !='') ? {$sofer['total_produse']['bg_11']['total_bg_11_cu_pret']} : '-'}
                                                </td>
                                                <td style="text-align: center">
                                                    {($sofer['total_produse']['ar_8']['total_ar_8_cu_pret'] !='') ? {$sofer['total_produse']['ar_8']['total_ar_8_cu_pret']} : '-'}
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    {($sofer['total_produse']['ar_9']['total_ar_9_cu_pret'] !='') ? {$sofer['total_produse']['ar_9']['total_ar_9_cu_pret']} : '-'}
                                                </td>
                                                <td style="text-align: center">
                                                    {($sofer['total_produse']['bg_11']['comision'] !='') ? {$sofer['total_produse']['bg_11']['comision']} : '-'}
                                                </td>
                                                <td style="text-align: center;">
                                                    {($sofer['total_produse']['ar_8']['comision'] !='') ? {$sofer['total_produse']['ar_8']['comision']} : '-'}
                                                </td>
                                                <td style="text-align: center;border-right:double">
                                                    {($sofer['total_produse']['ar_9']['comision'] !='') ? {$sofer['total_produse']['ar_9']['comision']} : '-'}
                                            </tr>
                                            {$total_bg_11 = $total_bg_11 + $sofer['total_produse']['bg_11']['total_bg_11']}
                                            {$total_ar_8 = $total_ar_8 + $sofer['total_produse']['ar_8']['total_ar_8']}
                                            {$total_ar_9 = $total_ar_9 + $sofer['total_produse']['ar_9']['total_ar_9']}

                                            {$total_valoare_incasata_bg_11 = $total_valoare_incasata_bg_11 + $sofer['total_produse']['bg_11']['total_bg_11_cu_pret']}
                                            {$total_valoare_incasata_ar_8 = $total_valoare_incasata_ar_8 + $sofer['total_produse']['ar_8']['total_ar_8_cu_pret']}
                                            {$total_valoare_incasata_ar_9 = $total_valoare_incasata_ar_9 + $sofer['total_produse']['ar_9']['total_ar_9_cu_pret']}

                                            {$total_valoare_comision_bg_11 = $total_valoare_comision_bg_11 + $sofer['total_produse']['bg_11']['comision']}
                                            {$total_valoare_comision_ar_8 = $total_valoare_comision_ar_8 + $sofer['total_produse']['ar_8']['comision']}
                                            {$total_valoare_comision_ar_9 = $total_valoare_comision_ar_9 + $sofer['total_produse']['ar_9']['comision']}


                                        {/foreach}
                                        <tr>
                                            <th colspan="4" style="text-align: right;">TOTAL:</th>
                                            <th style="color: red;text-align: center;"><abbr title="Total bucati vandute BG 11">{$total_bg_11}</abbr></th>
                                            <th style="color: red;text-align: center;"><abbr title="Total bucati AR 8">{$total_ar_8}</abbr></th>
                                            <th style="text-align: center;">
                                                <abbr title="Total bucati AR 9" style="color: red;">{$total_ar_9}</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare BG 11">{$total_valoare_incasata_bg_11}</abbr>
                                            </th>
                                            <th style="color: red;">
                                                <abbr title="Total valoare incasare AR 8">{$total_valoare_incasata_ar_8}</abbr>
                                            </th>
                                            <th style="text-align: center;">
                                                <abbr title="Total valoare incasare AR 9" style="color: red;">{$total_valoare_incasata_ar_9}</abbr>
                                            </th>
                                            <th style="color: red;"><abbr title="Total comision BG 11">{$total_valoare_comision_bg_11}</abbr></th>
                                            <th style="color: red;"><abbr title="Total comision AR 8">{$total_valoare_comision_ar_8}</abbr></th>
                                            <th style="text-align: center;"><abbr
                                                        title="Total comision AR 9" style="color: red;">{$total_valoare_comision_ar_9}</abbr></th>
                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {/if}
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_soferi.js"></script>

