{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Numar clienti by perioada:</h4>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    {foreach from=$lista_clienti['depozite'] item=depozit}
                                        <td>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th colspan="3">{$depozit['nume']}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>

                                                        <table class="table-bordered table">
                                                            {for $a=2016 to date("Y")}
                                                                {assign var=clienti_depozit_start value=Depozite::getClientiByDepozitIdAndDataStart($depozit['depozit_id'], $a)}
                                                                {assign var=clienti_depozit_stop value=Depozite::getClientiByDepozitIdAndDataStop($depozit['depozit_id'], $a)}
                                                                {assign var=clienti_depozit_fara_data value=Depozite::getClientiByDepozitIdFaraDataContract($depozit['depozit_id'])}
                                                                <tr>
                                                                    <th>{$a}</th>
                                                                    <th><a href="clienti_activi_contract.php?depozit_id={$depozit['depozit_id']}&an={$a}">Infiintare : {$clienti_depozit_start['numar_clienti']}</a></th>
                                                                    <th>Incetare: {$clienti_depozit_stop['numar_clienti']}</th>
                                                                </tr>
                                                            {/for}
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fara data contract: {$clienti_depozit_fara_data['numar_clienti']}</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    {/foreach}
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
