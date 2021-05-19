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
                            {assign var=clienti_neasignati value=Clienti::getClientiNeasignati()}

                            <h4>Clienti Neasignati: <a target="_blank"
                                                       href="clienti_neasignati.php">
                                     {count($clienti_neasignati)}</a>
                            </h4>
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
                                                            {for $a=2014 to date("Y")}
                                                                {assign var=clienti_infiintati value=Depozite::getClientiActiviInfiintatiByDepozitIdAndDataStart($depozit['depozit_id'], $a)}
                                                                {assign var=clienti_activi value=Depozite::getClientiByDepozitIdAndDataStart($depozit['depozit_id'], $a)}
                                                                {assign var=clienti_depozit_stop value=Depozite::getClientiByDepozitIdAndDataStop($depozit['depozit_id'], $a)}
                                                                {assign var=clienti_depozit_fara_data value=Depozite::getClientiByDepozitIdFaraDataContract($depozit['depozit_id'])}
                                                                <tr>
                                                                    <th>{$a}</th>
                                                                    <th><a target="_blank"
                                                                           href="clienti_activi_contract.php?depozit_id={$depozit['depozit_id']}&an={$a}">Activi
                                                                            : {count($clienti_activi)}</a></th>
                                                                    <th><a target="_blank"
                                                                           href="clienti_infiintati.php?depozit_id={$depozit['depozit_id']}&an={$a}">Infiintati
                                                                            : {count($clienti_infiintati)}</a></th>
                                                                    <th><a target="_blank"
                                                                           href="clienti_desfiintati_contract.php?depozit_id={$depozit['depozit_id']}&an={$a}">Desfiintati: {count($clienti_depozit_stop)}</a>
                                                                    </th>
                                                                </tr>
                                                            {/for}
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fara data contract: <a
                                                                href="clienti_activi_fara_data_contract.php?depozit_id={$depozit['depozit_id']}">{count($clienti_depozit_fara_data)}</a>
                                                    </th>

                                                </tr>
                                                {*<tr>*}
                                                    {*<th>Neasignati:<a target="_blank"*}
                                                           {*href="clienti_neasignati.php?depozit_id={$depozit['depozit_id']}&an={$a}"> {count($clienti_depozit_stop)}</a>*}
                                                    {*</th>*}
                                                {*</tr>*}
                                                </tbody>
                                            </table>
                                        </td>
                                    {/foreach}
                                </tr>
                            </table>
                            <div>
                                *Clienti Activi: clienti care nu sunt stersi si au stare client: activ sau
                                necunoscut. <br/>
                                *Clienti Infiintati: clienti care nu sunt stersi si au stare client: activ, desfiintat,
                                necunoscut. <br/>
                                *Clienti Desfiintati: clienti care nu sunt stersi si au stare client: desfiintat.
                                <br/>
                                *Clienti Neasignati: clienti care nu sunt stersi si au stare client: activ,
                                desfiintat, decunoscut. <br/>
                                *Clienti Fara Data Contract: clienti care nu sunt stersi si au stare client: activ, desfiintat,
                                necunoscut, iar data incheierii contractului este "0000-00-00" si data desfiintarii
                                contractului este "0000-00-00"<br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
