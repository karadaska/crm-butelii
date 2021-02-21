{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Adauga observatii pentru filtrare</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/filtreaza_observatii.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Obs
                                <select name="observatie_id">
                                    <option value="0">Toate</option>
                                    {foreach from=$lista_observatii item=observatie}
                                        {if $observatie['tip_observatie'] == 2}
                                            <option value="{$observatie['id']}"
                                                    {if $observatie['id'] == $observatie_id} selected="selected"{/if}>
                                                {$observatie['nume']}
                                            </option>
                                        {/if}
                                    {/foreach}
                                </select>
                            </th>
                            <th style="text-align: left;"><input type="submit" class="btn btn-primary" value="Adauga" name="adauga_observatie"></th>
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
                            <h4>List&#259; observatii</h4>
                        </div>
                        <form action="/filtreaza_observatii.php" method="post" style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;" class="span1">Nr.</th>
                                        <th style="text-align: left;">Observatie</th>
                                        <th style="text-align: left;">Sterge</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$lista_observatii_filtrate item=observatie}
                                        <tr>
                                            <td style="text-align: left">{$client['nume_localitate']}</td>
                                            <td style="text-align: left;">{$client['nume_client']}</td>
                                            <td style="text-align: left;">
                                                {$client['telefon']}<br/>
                                                {$client['telefon_2']}
                                            </td>
                                            <td style="text-align: left;">{($client['nume_observatie'] !='') ? $client['nume_observatie'] : '-'}</td>
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
