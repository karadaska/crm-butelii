{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}
<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                                <h4>Adauga fisa: {date('Y-m-d')}</h4>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form style="margin-top: 20px;margin-left: -16px;" class="form-horizontal"
                                              id="form_adauga_fisa"
                                              action="/adauga_fisa_traseu.php" method="post">
                                            <table class="table table-bordered" style="width: 370px;">
                                                <tr>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left;">Depozit:</th>
                                                    <td>
                                                        <select name="depozit_id" id="depozit_id" data-schimba="2">
                                                            <option value="0">-Alege depozit-</option>
                                                            {foreach from=$lista_depozite item=depozit}
                                                                <option value={$depozit['id']}
                                                                        {if $depozit_by_traseu_id['depozit_id']==$depozit['id']}selected="selected"{/if}>
                                                                    {$depozit['nume']}
                                                                </option>
                                                            {/foreach}
                                                        </select>
                                                    </td>
                                                </tr>
                                                <th style="text-align: left;vertical-align: middle;">Traseu:</th>
                                                <td style="text-align: left;">
                                                    <div id="lista_trasee">
                                                        <select name="traseu_id" id="traseu_id">
                                                            <option value="0">- Trasee -</option>
                                                            {foreach from=$lista_trasee key=tmp item=traseu}
                                                                <option value={$traseu['id']}>{$traseu['nume']}</option>
                                                            {/foreach}
                                                        </select>
                                                    </div>
                                                </td>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">Sofer</th>
                                                    <td>
                                                        <select name="sofer_id" id="sofer_id" data-schimba="2">
                                                            <option value="0">-Alege sofer-</option>
                                                            {foreach from=$lista_soferi item=sofer}
                                                                <option value={$sofer['id']}
                                                                        {if $sofer_by_traseu_id['sofer_id'] == $sofer['id']}selected="selected"{/if}>
                                                                    {$sofer['nume']}
                                                                </option>
                                                            {/foreach}
                                                        </select>
                                                    </td>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">Masina:</th>
                                                    <td>
                                                        <select name="masina_id" id="masina_id" data-schimba="2">
                                                            <option value="0">-Alege masina-</option>
                                                            {foreach from=$lista_masini item=masina}
                                                                <option value={$masina['id']}
                                                                        {if $masina_by_traseu_id['masina_id']== $masina['id']} selected={$asignare['masina_id']}{/if}>
                                                                    {$masina['numar']}
                                                                </option>
                                                            {/foreach}
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left;">Data:</th>
                                                    <td>
                                                        <input value="{$data_intrare}" type="date" name="data_intrare" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="vertical-align: middle;text-align: left">
                                                        Import clienti
                                                    </th>
                                                    <td><input title="IMPORT CLIENTI ASIGNATI DE PE TRASEUL SELECTAT!!!" type="checkbox" checked="checked" name="import_clienti_trasee">
                                                        <form action="/adauga_fisa_traseu.php" method="post">
                                                            <button style="float: right;" title="Trebuie generata fisa obligatoriu"
                                                                    type="submit"
                                                                    name="genereaza_fisa_traseu"
                                                                    class="btn btn-inverse">
                                                                Genereaza fisa traseu
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/adauga_fisa_traseu.js"></script>

