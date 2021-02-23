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
                                <h4>
                                    <form action="/fisa_traseu.php" method="post" id="form_fisa_traseu"
                                          name="form_fisa_traseu" style="margin-bottom: 0">
                                        <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                                        <select name="depozit_id" id="depozit_id" style="width: 150px;"
                                                data-schimba="1">
                                            <option value="0">-Alege depozit-</option>
                                            {foreach from=$lista_depozite item=depozit}
                                                <option value={$depozit['id']} {if $depozit['id'] == $depozit_id} selected="selected"{/if}>{$depozit['nume']}</option>
                                            {/foreach}
                                        </select>
                                        <select name="traseu_id" style="width: 150px;"
                                                data-schimba="2">
                                            <option value="0">-Alege traseu-</option>
                                            {foreach from=$lista_trasee item=traseu}
                                                <option value={$traseu['id']} {if $traseu['id'] == $traseu_id} selected="selected"{/if}>{$traseu['nume']}</option>
                                            {/foreach}
                                        </select>
                                        <select name="sofer_id" style="width: 150px;"
                                                data-schimba="3">
                                            <option value="0">-Alege sofer-</option>
                                            {foreach from=$lista_soferi item=sofer}
                                                <option value={$sofer['id']} {if $sofer['id'] == $sofer_id} selected="selected"{/if}>{$sofer['nume']}</option>
                                            {/foreach}
                                        </select>
                                        <select name="masina_id" style="width: 150px;"
                                                data-schimba="4">
                                            <option value="0">-Alege masina-</option>
                                            {foreach from=$lista_masini item=masina}
                                                <option value={$masina['id']} {if $masina['id'] == $masina_id} selected="selected"{/if}>{$masina['numar']}</option>
                                            {/foreach}
                                        </select>
                                        <select name="luna_id" style="width: 150px;" data-schimba="2">
                                            <option value="0">Toate</option>
                                            {foreach from=$lunile_anului item=luna}
                                                <option value={$luna['id']} {if $luna['id'] == $luna_id} selected="selected"{/if}>{$luna['nume']}</option>
                                            {/foreach}
                                        </select>
                                    </form>
                                </h4>
                                <button type="submit" class="btn btn-primary"
                                        onclick="location.href='/adauga_fisa_traseu.php'">Adauga fisa
                                </button>
                                {if count($lista_fise) > 0}
                                    <form action="/completare_fisa_traseu.php" method="post"
                                          name="form_fisa_traseu" id="form_fisa_traseu" style="margin-bottom: 0">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="widget">
                                                    <div class="widget-content">
                                                        <table cellpadding="0" cellspacing="0" border="0"
                                                               class="table table-bordered table-hover" id="dataTable">
                                                            <thead>
                                                            <tr>
                                                                <td class="span1">Id_fisa</td>
                                                                <td>Depozit</td>
                                                                <td>Traseu</td>
                                                                <th>Sofer</th>
                                                                <th>Masina</th>
                                                                <th>Incarcatura plecare</th>
                                                                <th>Incarcatura sosire</th>
                                                                <th>Detalii Km</th>
                                                                <th>Data</th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                            </thead>
                                                            {foreach from = $lista_fise item =fisa}
                                                                <input type="hidden" name="fisa_id"
                                                                       value="{$fisa['id']}">
                                                                <tr>
                                                                    <td style="text-align: center;">{$fisa['id']}</td>
                                                                    <td>{$fisa['nume_depozit']}</td>
                                                                    <td>{$fisa['nume_traseu']}</td>
                                                                    <td>{$fisa['nume_sofer']}</td>
                                                                    <td style="text-align: center;">{$fisa['numar_masina']}</td>
                                                                    <td style="text-align: left;">
                                                                        {foreach from=$fisa['incarcatura_masina_plecare'] item=marfa_plecare}
                                                                            {$marfa_plecare['nume_produs']} : [Pline:{$marfa_plecare['cantitate']}]
                                                                            <br/>
                                                                        {/foreach}
                                                                    </td>
                                                                    <td>
                                                                        {foreach from=$fisa['incarcatura_masina_sosire'] item=marfa_plecare}
                                                                            {$marfa_plecare['nume_produs']} : [Pline:{$marfa_plecare['pline']}, Goale: {$marfa_plecare['goale']}]
                                                                            <br/>
                                                                        {/foreach}
                                                                    </td>
                                                                    <td>
                                                                        <span style="font-weight: 900">Plecare:</span> {($fisa['km_fisa']['km_plecare'] != '') ? $fisa['km_fisa']['km_plecare'] :'0'}
                                                                        km
                                                                        <br/>
                                                                        <span style="font-weight: 900">Sosire:</span> {($fisa['km_fisa']['km_sosire'] !='') ? $fisa['km_fisa']['km_sosire'] : '0'}
                                                                        km <br/>
                                                                        <span style="font-weight: 900">Total
                                                                            :</span> {$fisa['km_fisa']['km_plecare'] + $fisa['km_fisa']['km_sosire']}
                                                                        km
                                                                    </td>
                                                                    <td style="text-align: center;">{$fisa['data_intrare']}</td>
                                                                    <td style="text-align: center;vertical-align: top;"
                                                                        class="span3">
                                                                        <a href="edit_fisa_traseu.php?id={$fisa['id']}"
                                                                           class="btn btn-mini btn-success">Editeaza
                                                                            fisa
                                                                        </a>
                                                                        <a href="completare_fisa_traseu.php?id={$fisa['id']}"
                                                                           class="btn btn-mini btn-inverse">Completeaza
                                                                            fisa
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            {/foreach}
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/pagini/fisa_traseu.js"></script>


