{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Raport livrari clienti
                        <a target="_blank"
                           href="/print_raport_livrari_clienti.php?id={$traseu_id}&data_start={$data_start}&data_stop={$data_stop}">
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
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th rowspan="3">LOCALITATE</th>
                                        <th rowspan="3">CLIENT</th>
                                        <th rowspan="3">TELEFON</th>
                                        <th colspan="3">PRODUSE</th>
                                    </tr>
                                    <tr>
                                        {foreach from=$lista_clienti['produse_traseu'] item=produs}
                                            <th>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th colspan="3">{$produs['nume_produs']}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>STOC</th>
                                                        <th>PRET</th>
                                                        <th>COM</th>
                                                    </tr>
                                                </table>
                                            </th>
                                        {/foreach}
                                    </tr>
                                    </thead>
                                    {foreach from=$lista_clienti['livrare_clienti'] item=client}
                                        <tr>
                                            <td>{$client['nume_localitate']}</td>
                                            <td>{$client['nume_client']}</td>
                                            <td>{$client['telefon']} </br>{$client['telefon_2']}</td>
                                            <td>
                                                <table class="table table-bordered">
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>43</td>
                                                                <td>d</td>
                                                                <td>d</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </table>
                                            </td>
                                        </tr>
                                    {/foreach}
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<div style="margin-top: 100px;"></div>
<script src="/js/pagini/raport_livrari_clienti.js"></script>



