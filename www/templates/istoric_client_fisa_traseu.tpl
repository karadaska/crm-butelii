{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Istoric client produse fisa traseu: {$client['nume']}</h1>
                    <button type="button" onclick="location.href='/clienti.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista clienti
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div>
                                <table class="table table-bordered table-hover"
                                       id="dataTable">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">FISA ID</th>
                                        <th rowspan="2">TRASEU</th>
                                        <th rowspan="2">MASINA</th>
                                        <th rowspan="2">SOFER</th>
                                        <th rowspan="2">PRODUS</th>
                                        <th colspan="2" style="border: 1px;border-left: double;">PRET FISA TRASEU</th>
                                        <th colspan="2" style="border: 1px;border-right: double;border-left: double;">
                                            VALOARE INCASATA SOFER
                                        </th>
                                        <th rowspan="2">Observatii</th>
                                        <th rowspan="2">Data adaugarii</th>
                                    </tr>
                                    <tr>
                                        <th style="border-left: double;">PRET UNITAR</th>
                                        <th>COM</th>
                                        <th style="border-left: double;">PRET UNITAR</th>
                                        <th style="border-right: double;">COM</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$cantitati_produse_fisa_intoarcere item=cantitate}
                                        <tr>
                                            <td style="text-align: center"><a target="_blank"
                                                                              href="completare_fisa_traseu.php?id={$cantitate['fisa_id']}">{$cantitate['fisa_id']}</a>
                                            </td>
                                            <td style="text-align: center">{$cantitate['nume_traseu']}</td>
                                            <td style="text-align: center">{$cantitate['numar']}</td>
                                            <td style="text-align: left">{$cantitate['nume_sofer']}</td>
                                            <td>
                                                {foreach from=$cantitate['produse'] item = x}
                                                    {$x['nume_produs']} => [Vandute: {$x['vandute']}, Defecte: {$x['defecte']}]
                                                    <br/>
                                                {/foreach}
                                            </td>
                                            <td style="border-left: double;text-align: center">
                                                {foreach from=$cantitate['produse'] item = pret_unitar_contract}
                                                        {$pret_unitar_contract['pret_contract']}
                                                        <br/>
                                                {/foreach}
                                            </td>
                                            <td style="text-align: center;">
                                                {foreach from=$cantitate['produse'] item = comision_contract}
                                                    {$comision_contract['valoare_sofer_comision_fisa']}
                                                        <br/>
                                                {/foreach}
                                            </td>
                                            <td style="border-left: double;text-align: center;">
                                                {foreach from=$cantitate['produse'] item = valoare_sofer_incasata}
                                                        {$valoare_sofer_incasata['valoare_sofer_pret_fisa'] - $valoare_sofer_incasata['valoare_sofer_comision_fisa']}
                                                        <br/>
                                                {/foreach}
                                            <td style="border-right: double;text-align: center;">
                                                {$cantitate['comision']}
                                                {foreach from=$cantitate['produse'] item = valoare_comision_sofer}
                                                    {$valoare_comision_sofer['valoare_sofer_comision_fisa']}
                                                    <br/>
                                                {/foreach}
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                {($cantitate['observatie']['nume_observatie'] !='') ? $cantitate['observatie']['nume_observatie'] : '-'}
                                            </td>
                                            <td style="text-align: center;">{$cantitate['data_intrare']}</td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
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
