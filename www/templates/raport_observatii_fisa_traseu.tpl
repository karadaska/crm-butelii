{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport complet fisa traseu
                        <a href="/print_observatii_fisa_traseu.php?id={$traseu_id}&observatie_id=0&data_start={$data_start}&data_stop={$data_stop}">
                            <button class="i-print"></button>
                        </a>
                        {*<a href="/filtreaza_observatii.php">*}
                        {*<button class="btn btn-mini btn-success">Filtreaza observatii</button>*}
                        {*</a>*}
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/raport_observatii_fisa_traseu.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Traseu
                                <select name="traseu_id">
                                    <option value="0">Alege traseu..</option>
                                    {foreach from=$lista_trasee item=traseu}
                                        <option value={$traseu['id']}
                                                {if $traseu['id'] == $traseu_id} selected="selected"{/if}>
                                            {$traseu['nume']}
                                        </option>
                                    {/foreach}
                                </select>
                            </th>
                            {$array_obs = array()}
                            <th style="text-align: left" width="400px;">Obs
                                <select name="observatie_id[]" multiple="multiple" style="width: 400px;">
                                    <option value="0">Toate</option>
                                    {foreach from=$lista_observatii item=observatie}
                                        {$selected = ""}
                                        {if in_array($observatie['id'],$observatii)}
                                            {$selected = "selected = 'selected'"}
                                        {/if}
                                        {if $observatie['tip_observatie'] == 2}
                                            <option value="{$observatie['id']}" {$selected}>
                                                {$observatie['nume']}
                                            </option>
                                        {/if}
                                    {/foreach}
                                </select>
                            </th>
                            <th style="text-align: left;width: 500px;">
                                Interval <input placeholder="{$smarty.now|date_format}" autocomplete="off" type="date"
                                                name="data_start"
                                                value="{$data_start}"/>
                                <input autocomplete="off" type="date" name="data_stop"
                                       value="{$data_stop}"/>
                                <input type="hidden" placeholder="" name="data_start_interval" value="{$data_start}"/>
                                <input type="hidden" name="data_stop_interval" value="{$data_stop}"/>
                            </th>
                            <th style="text-align: left;"><input type="submit" class="btn btn-primary" value="Aplica"
                                                                 name="aplica"></th>
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
                        <form action="/raport_observatii_fisa_traseu.php?traseu_id={$traseu_id}&observatie_id={$observatie_id}"
                              method="post"
                              style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left;">LOCALITATE</th>
                                        <th style="text-align: left;">CLIENT</th>
                                        <th style="text-align: center;">TELEFON</th>
                                        <th style="text-align: center;">MASINA</th>
                                        <th style="text-align: center;">SOFER</th>
                                        <th style="text-align: center;">DATA</th>
                                        <th style="text-align: center;">OBSERVATIE I</th>
                                        <th style="text-align: center;">OBSERVATIE EXTRA</th>
                                        <th style="text-align: center;" class="span1">FISA</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$lista_clienti item=client}
                                        <tr>
                                            <td style="text-align: left">{$client['nume_localitate']}</td>
                                            <td style="text-align: left;">{$client['nume_client']}</td>
                                            <td style="text-align: left;">
                                                {$client['telefon']}<br/>
                                                {$client['telefon_2']}
                                            </td>
                                            <td style="text-align: center;">{$client['numar']}</td>
                                            <td style="text-align: center;">{$client['nume_sofer']}</td>
                                            <td style="text-align: center;">{$client['data']}</td>
                                            <td style="text-align: left;">{($client['nume_observatie'] !='') ? $client['nume_observatie'] : '-'}</td>
                                            <td style="text-align: left;">{($client['observatie_extra'] !='') ? $client['observatie_extra'] : '-'}</td>
                                            <td style="text-align: center;"><a
                                                        href="completare_fisa_traseu.php?id={$client['fisa_id']}">{$client['fisa_id']}</a>
                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<div style="margin-top: 100px;"></div>

<script src="/js/pagini/raport_observatii_fisa_traseu.js"></script>
