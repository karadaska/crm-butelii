{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Istoric observatii apeluri: </h1>
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
                                        <th>NUME</th>
                                        <th>OBSERVATIE</th>
                                        <th>URGENT</th>
                                        <th>PPRODUS</th>
                                        <th>CANTITATE</th>
                                        <th>DATA</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$observatie_by_client_id item=observatie}
                                        <tr>
                                            <td>{$observatie['nume_client']}</td>
                                            <td style="text-align: center">{($observatie['nume_observatie'] !='') ? $observatie['nume_observatie'] : '-'}</td>
                                            <td style="text-align: center">
                                                {if $observatie['urgent'] == 'DA'}
                                                    <span style="color: red;">{$observatie['urgent']}</span>
                                                {else}
                                                    {$observatie['urgent']}
                                                {/if}
                                            </td>
                                            <td style="text-align: center">{($observatie['nume_produs'] !='') ? $observatie['nume_produs'] :'-'}</td>
                                            <td style="text-align: center">{($observatie['goale'] !='') ? $observatie['goale'] : '-'}</td>
                                            <td style="text-align: center">{($observatie['data_start'] !='') ? $observatie['data_start'] : '-'}</td>
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
