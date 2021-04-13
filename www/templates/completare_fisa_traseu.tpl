{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}
<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-people"></i>Completare fisa <a href="edit_fisa_traseu.php?id={$fisa['id']}">
                            <button class="btn btn-mini btn-primary">Edit fisa</button>
                        </a>
                        <table class="table-bordered table">
                            <tr>
                                <th style="text-align: left;vertical-align: middle;"><h6
                                            style="color: red;">{$fisa['nume_depozit']}</h6></th>
                                <th style="text-align: left;vertical-align: middle;"><h6
                                            style="color: red;">{$fisa['nume_traseu']}</h6></th>
                                <th style="text-align: left;vertical-align: middle;"><h6
                                            style="color: red;">{$fisa['numar']}</h6></th>
                                <th style="text-align: left;vertical-align: middle;"><h6
                                            style="color: red;">{$fisa['nume_sofer']}</h6></th>
                                <th style="text-align: left;vertical-align: middle;"><h6
                                            style="color: red;">{$fisa['data_intrare']}</h6></th>
                                <th>
                                    <a target="_blank" href="/print_fisa_sosire.php?id={$fisa['id']}"
                                       class="i-print"></a>
                                </th>
                            </tr>
                        </table>
                    </h1>
                </div>
                <div class="row-fluid">
                    <form action="/completare_fisa_traseu.php?id={$fisa['id']}" method="post">
                        <div class="span12" style="display: inline-flex">
                            <div style="float: left;">
                                <table class="table table-bordered"
                                       style="width: 500px;margin-bottom: 14px;">
                                    <tr>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        Z:
                                                    </th>
                                                    <th style="text-align: left;">
                                                        {if $miscari_fisa['valoare_z'] != ''}
                                                            {$valoare_z = $miscari_fisa['valoare_z']}
                                                        {else}
                                                            {$valoare_z = 0}
                                                        {/if}
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_z"
                                                               autocomplete="off"
                                                               value="{$valoare_z}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari" style="text-align: center;">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. casa</th>
                                                    <th style="text-align: left;">
                                                        {if $miscari_fisa != ''}
                                                            {$valoare_casa_marcat = $miscari_fisa['casa_marcat']}
                                                        {else}
                                                            {$valoare_casa_marcat = 0}
                                                        {/if}
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               name="casa_marcat"
                                                               type="text" class="form-control" autocomplete="off"
                                                               value="{$valoare_casa_marcat}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Km parcursi:</th>
                                                    <th style="text-align: left;">
                                                        {if $miscari_fisa['km_parcursi'] != ''}
                                                            {$km_parcursi = $miscari_fisa['km_parcursi']}
                                                        {else}
                                                            {$km_parcursi = 0}
                                                        {/if}
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="km_parcursi"
                                                               autocomplete="off"
                                                               value="{$km_parcursi}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;"> Nr. raport Z</th>
                                                    <th style="text-align: left;">
                                                        {if $miscari_fisa['raport_z'] != ''}
                                                            {$valoare_raport_z = $miscari_fisa['raport_z']}
                                                        {else}
                                                            {$valoare_raport_z = 0}
                                                        {/if}
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="raport_z"
                                                               autocomplete="off"
                                                               value="{$valoare_raport_z}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Nr. BG:</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_bg"
                                                               autocomplete="off"
                                                               value="{$miscari_fisa['nr_bg']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        BG:
                                                    </th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_bg"
                                                               value="{$miscari_fisa['valoare_bg']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. AR 8</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_ar_8"
                                                               autocomplete="off"
                                                               value="{$miscari_fisa['nr_ar_8']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare AR 8</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_ar_8"
                                                               autocomplete="off"
                                                               value="{$miscari_fisa['valoare_ar_8']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>

                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">NR. AR 9</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="nr_ar_9"
                                                               autocomplete="off"
                                                               value="{$miscari_fisa['nr_ar_9']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare AR 9</th>
                                                    <th style="text-align: left;">
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" name="valoare_ar_9"
                                                               autocomplete="off"
                                                               value="{$miscari_fisa['valoare_ar_9']}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Tip plata</th>
                                                    <th style="text-align: left;">
                                                        <select name="tip_alimentare" style="width: 100%;">
                                                            <option value="0">Alege..</option>
                                                            {foreach from=$get_tip_alimentare item=alimentare_tip}
                                                                <option value={$alimentare_tip['id']}
                                                                        {if $alimentare_tip['id'] == {$miscari_fisa['tip_alimentare_id']}}selected="selected"{/if}>
                                                                    {$alimentare_tip['tip']}</option>
                                                            {/foreach}
                                                        </select>
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="table_miscari">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="text-align: left;width: 100px;">Valoare
                                                        plata
                                                    </th>
                                                    <th style="text-align: left;">
                                                        {if $miscari_fisa['valoare_alimentare'] != ''}
                                                            {$valoare_alimentare = $miscari_fisa['valoare_alimentare']}
                                                        {else}
                                                            {$valoare_alimentare = 0}
                                                        {/if}
                                                        <input style="width: 100%; line-height: 10px;min-height: 10px !important;"
                                                               type="text" class="form-control" autocomplete="off"
                                                               name="valoare_alimentare"
                                                               value="{$valoare_alimentare}"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table_miscari">
                                            <h6> {foreach from = $cantitati_plecare item = incarcatura}
                                                    <span style="color: red;"> {$incarcatura['nume_produs']}
                                                        : {$incarcatura['cantitate']} bucati</span>
                                                    <br/>
                                                {/foreach}
                                            </h6>
                                        </th>
                                        <th class="table_miscari">
                                            <textarea style="width: 100%" type="text" rows="2"
                                                      name="nota_explicativa">{$miscari_fisa['nota_explicativa']}</textarea>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align: right;">
                                            <button style="margin-bottom: 11px;" type="submit"
                                                    name="adauga_miscari_fisa"
                                                    class="btn btn-mini btn-primary">
                                                Adauga detalii
                                            </button>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <div style="float: right;margin-top: -10px;">
                                {if ($fisa['consum_sosire'] == 0)}
                                    <table class="table table-bordered"
                                           style="width: 500px;margin-top: 10px;margin-left: 10px;">
                                        <tr>
                                            <td>
                                                <select name="tip_produs_id" style="width: 120px;">
                                                    <option>Alege produs</option>
                                                    {foreach from=$lista_produse item=produs}
                                                        {$gasit = 0}
                                                        {foreach from=$cantitati_plecare item=marfa}
                                                            {if $produs['id'] == $marfa['tip_produs_id']}
                                                                {if $gasit == 0}
                                                                    <option value="{$produs['id']}"> {$produs['tip']}</option>
                                                                {/if}
                                                            {/if}
                                                        {/foreach}
                                                    {/foreach}
                                                </select>
                                                <select name="stare_produs" style="width: 100px;">
                                                    <option>Alege stare</option>
                                                    {foreach from=$lista_stari_produse item=stare}
                                                        {if ($stare['id'] !=4)}
                                                            <option value={$stare['id']}
                                                                    {if $stare['id'] == $stare_produs['id']} selected={$stare['id']}{/if}>
                                                                {$stare['nume']}
                                                            </option>
                                                        {/if}
                                                    {/foreach}
                                                </select>
                                                <input autocomplete="off" placeholder="Cantitate"
                                                       style="margin-top: 10px;width: 100px;" type="text"
                                                       name="cantitate">
                                                <button style="margin-top: 2px;" type="submit"
                                                        name="adauga_cantitate_intoarcere_traseu"
                                                        class="btn btn-primary">
                                                    Adauga
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                {/if}
                                {if count($cantitate_sosire_by_fisa_id['marfa_sosire']) > 0}
                                    <table class="table table-bordered"
                                           style="width: 500px;margin-right: 100px;margin-top: 10px;margin-left: 10px;">
                                        <tr>
                                            <th class="span2">Produs</th>
                                            <th>Pline (Ramase)</th>
                                            <th>Def.</th>
                                            <th>Goale</th>
                                        </tr>
                                        {foreach from=$cantitate_sosire_by_fisa_id['marfa_sosire'] item=marfa_sosire}
                                            <tr>
                                                <td>{$marfa_sosire['nume_produs']}</td>
                                                <td style="text-align: right;">
                                                    {$marfa_sosire['pline']}
                                                </td>
                                                <td style="text-align: right;">
                                                    {$marfa_sosire['defecte']}
                                                </td>
                                                <td style="text-align: right;">
                                                    {$marfa_sosire['goale']}
                                                </td>
                                            </tr>
                                        {/foreach}
                                        <tfoot>
                                        <tr>
                                            <td style="text-align: left;">Total:</td>
                                            <td style="text-align: right;">{$cantitate_sosire_by_fisa_id['totaluri']['total_pline']}</td>
                                            <td style="text-align: right;">{$cantitate_sosire_by_fisa_id['totaluri']['total_defecte']}</td>
                                            <td style="text-align: right;">{$cantitate_sosire_by_fisa_id['totaluri']['total_goale']} </td>
                                        </tr>
                                        <form action="/completare_fisa_traseu.php?id={$fisa['id']}" method="post"
                                              style="margin-bottom: 0;">
                                            {if ($fisa['consum_sosire'] == 0)}
                                                <tr>
                                                    <td colspan="4">
                                                        <button type="submit" class="btn btn-mini btn-success"
                                                                name="consuma_stoc"
                                                                style="float: right;">Consuma
                                                            stoc
                                                        </button>
                                                    </td>
                                                </tr>
                                            {/if}
                                        </form>
                                        </tfoot>
                                    </table>
                                {/if}
                            </div>
                        </div>
                    </form>
                    {if (count($fisa['clienti']) > 0)}
                        <form action="/completare_fisa_traseu.php?id={$fisa['id']}" method="post"
                              style="margin-bottom: 0">
                            <input type="hidden" name="id_fisa_adauga_produse" value="{$fisa['id']}">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: left;" class="span4">Clienti</th>
                                    <th style="text-align: left;" colspan="4">Localitate</th>
                                </tr>
                                </thead>
                                {$total_vandute = 0}
                                {$total_defecte = 0}
                                {$nr = 1}
                                {foreach from = $fisa['clienti'] item = client}
                                    {$total_vandute = $total_vandute + $fisa['cantitate']}
                                    <tr>
                                        <td style="text-align: center;">{$nr++ }</td>
                                        <td>
                                            <a href="edit_client.php?id={$client['client_id']}">{$client['nume_client']}</a><br/>
                                            {foreach from=$client['traseu_client'] item=traseu_client}
                                                {$traseu_client['nume_traseu']}
                                                <br/>
                                            {/foreach}
                                        </td>
                                        <td class="span3">{strtoupper($client['nume_localitate'])}</td>
                                        <td>
                                            <table class="table table-bordered">
                                                <tr class="info">
                                                    <td colspan="8"
                                                        style="text-align: center;font-weight: 900;color: red">
                                                        Observatie I:
                                                        <select name="obs_{$client['client_id']}">
                                                            <option value="0">Alege obs.</option>
                                                            {foreach from=$lista_observatii item=observatie}
                                                                {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$fisa['id'])}
                                                                {if $observatie['tip_observatie'] == 2}
                                                                    <option value="{$observatie['id']}"
                                                                            {if $observatie['id'] == $client_observatie['observatie_id']} selected="selected" {/if}>
                                                                        {$observatie['nume']}
                                                                    </option>
                                                                {/if}
                                                            {/foreach}
                                                        </select>
                                                        Observatie II:
                                                        <select name="obssecond_{$client['client_id']}">
                                                            <option value="0">Alege obs.</option>
                                                            {foreach from=$lista_observatii item=observatie}
                                                                {assign var=client_observatie value=Trasee::getObservatieDinFisaTraseuByClientIdAndFisaId($client['client_id'],$fisa['id'])}
                                                                {if $observatie['tip_observatie'] == 2}
                                                                    <option value="{$observatie['id']}" {if $observatie['id'] == $client_observatie['second_obs']} selected="selected" {/if}>
                                                                        {$observatie['nume']}
                                                                    </option>
                                                                {/if}
                                                            {/foreach}
                                                        </select>
                                                        {if ($produse_extra)}
                                                            <a style="float: right;margin-right: 5px;" target="_blank"
                                                               href="adauga_produse_extra_fisa.php?id={$fisa['id']}&client_id={$client['client_id']}"
                                                               title="Adauga produse extra la client">
                                                                <i class="i-flag-5"></i>
                                                            </a>
                                                        {/if}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="span2"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Produs
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Stoc
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Pret + comision
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Vandute
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;width: 100px;">
                                                        Defecte
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Goale
                                                    </th>
                                                    <th class="span1"
                                                        style="text-align: center;font-weight: bolder;">
                                                        Comision
                                                    </th>
                                                    <th hidden>Pret contract</th>
                                                </tr>
                                                {foreach from=$client['target'] item = target_client}
                                                    {*{foreach from=$fisa['incarcatura_masina_plecare'] item = target_client}*}
                                                    {$realizat_produs = $client['realizat'][$target_client['tip_produs_id']]}
                                                    <tr>
                                                        <td style="vertical-align: middle;">{$target_client['nume_produs']}</td>
                                                        <td style="text-align: center;vertical-align: middle;">
                                                            {$target_client['target']}
                                                        </td>
                                                        {if $realizat_produs['pret'] == 0}
                                                            {$valoare_cantitate = $target_client['pret']}
                                                        {else}
                                                            {$valoare_cantitate = $realizat_produs['pret']}
                                                        {/if}
                                                        {if ($realizat_produs['pret_contract'] != $realizat_produs['pret']) && $realizat_produs['pret']!=''}
                                                            {if ($realizat_produs['pret_contract'] < $realizat_produs['pret'])}
                                                                {$title_pret = 'PRET MAI MARE DECAT CEL DIN CONTRACT'}
                                                            {else}
                                                                {$title_pret = 'PRET MAI MIC DECAT CEL DIN CONTRACT'}
                                                            {/if}
                                                            <td title="{$title_pret}" style="text-align: right;">
                                                                <input style="text-align: right;width: 100px;border-color: red"
                                                                       value="{$valoare_cantitate}"
                                                                       type="text" autocomplete="off"
                                                                       name="pret_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                            </td>
                                                        {else}
                                                            <td style="text-align: right;">
                                                                <input style="text-align: right;width: 100px;"
                                                                       value="{$valoare_cantitate}"
                                                                       type="text" autocomplete="off"
                                                                       name="pret_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                            </td>
                                                        {/if}
                                                        {if $realizat_produs['cantitate'] != ''}
                                                            {$valoare_cantitate = $realizat_produs['cantitate']}
                                                        {else}
                                                            {$valoare_cantitate = 0}
                                                        {/if}
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;"
                                                                   value="{$valoare_cantitate}"
                                                                   type="text" autocomplete="off"
                                                                   name="cantitate_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                        </td>
                                                        {if $realizat_produs['defecte'] != ''}
                                                            {$valoare_defecte = $realizat_produs['defecte']}
                                                        {else}
                                                            {$valoare_defecte = 0}
                                                        {/if}
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;"
                                                                   value="{$valoare_defecte}"
                                                                   type="text" autocomplete="off"
                                                                   name="defecte_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                        </td>
                                                        <td style="text-align: right;">
                                                            {if $realizat_produs['cantitate'] != ''}
                                                                {$valoare_goale = $realizat_produs['cantitate']}
                                                            {else}
                                                                {$valoare_goale = 0}
                                                            {/if}
                                                            <input style="text-align: right;width: 100px;" readonly
                                                                   value="{$valoare_goale}"
                                                                   type="text"
                                                                   autocomplete="off"
                                                                   name="goale_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <input style="text-align: right;width: 100px;" readonly
                                                                   value="{$target_client['comision']}"
                                                                   type="text"
                                                                   autocomplete="off"
                                                                   name="comision_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                        </td>
                                                        <td hidden>
                                                            <input
                                                                    value="{$target_client['pret']}"
                                                                    type="text" autocomplete="off"
                                                                    name="pretcontract_{$fisa['depozit_id']}_{$client['client_id']}_{$target_client['tip_produs_id']}">
                                                        </td>
                                                    </tr>
                                                {/foreach}
                                                <tr>
                                                    {if ($client['total_valoare_ar_8'] > 0 || $client['total_valoare_bg'] > 0 || $client['total_valoare_ar_9'] > 0)}
                                                        <th style="text-align: left;" colspan="7">
                                                            TOTAL:
                                                            <span style="color:red;">{($client['total_valoare_bg'] > 0) ? {'BG = '|cat:$client['total_valoare_bg']} : ''}</span>
                                                            {(($client['total_valoare_bg'] > 0) && ($client['total_valoare_ar_8'] > 0 || $client['total_valoare_ar_9'] > 0))? ';' : ''}
                                                            <span style="color:red;">{($client['total_valoare_ar_9'] > 0) ? {'AR 9 = '|cat:$client['total_valoare_ar_9']} : ''}</span>
                                                            {($client['total_valoare_bg'] > 0 && $client['total_valoare_ar_9'] > 0 && $client['total_valoare_ar_8'] > 0)? ';' : ''}
                                                            <span style="color:red;">{($client['total_valoare_ar_8'] > 0) ? {'AR 8 = '|cat:$client['total_valoare_ar_8']} : ''}</span>

                                                        </th>
                                                    {/if}
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                {/foreach}
                            </table>
                            {if ($luna_curenta <= $extract_data_fisa)}
                                <button type="submit" name="adauga" value="adauga"
                                        class="btn btn-primary" style="float: right">
                                    Adauga cantitate client
                                </button>
                            {/if}
                        </form>
                    {/if}
                    <div style="display: inline-flex">
                        {if ($fisa['grand_total_vandute_bg'] != 0 || $fisa['grand_defecte_bg'] != 0)}
                            <div>
                                <table class="table table-bordered table-striped" style="width: 180px;">
                                    <tr class="info">
                                        <td style="text-align: center;font-weight: 900;color: red;" colspan="2">BG
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_total_vandute_bg']}</td>
                                    </tr>
                                    <tr class="info">
                                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_valoare_bg']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_comision_bg']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_defecte_bg']}</td>
                                    </tr>
                                </table>
                            </div>
                        {/if}
                        {if ($fisa['grand_total_vandute_ar_8'] != 0 || $fisa['grand_defecte_ar_8'] != 0)}
                            <div style="margin-left: 10px;">
                                <table class="table table-bordered table-striped" style="width: 180px;">
                                    <tr class="info">
                                        <td style="text-align: center;font-weight: 900;color: red;" colspan="2">AR
                                            8
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_total_vandute_ar_8']}</td>
                                    </tr>
                                    <tr class="info">
                                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_valoare_ar_8']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_comision_ar_8']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_defecte_ar_8']}</td>
                                    </tr>
                                </table>
                            </div>
                        {/if}
                        {if ($fisa['grand_total_vandute_ar_9'] != 0 || $fisa['grand_defecte_ar_9'] != 0)}
                            <div style="margin-left: 10px;">
                                <table class="table table-bordered table-striped" style="width: 180px;">
                                    <tr class="info">
                                        <td style="text-align: center;font-weight: 900;;color: red;" colspan="2">AR
                                            9
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total cantitati</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_total_vandute_ar_9']}</td>
                                    </tr>
                                    <tr class="info">
                                        <td style="text-align: left;font-weight: 900;">Total Valoare</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_valoare_ar_9']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Comision</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_comision_ar_9']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Total Defecte</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_defecte_ar_9']}</td>
                                    </tr>
                                </table>
                            </div>
                        {/if}
                        {$total_afisare = $fisa['grand_total_vandute_bg'] + $fisa['grand_total_vandute_ar_9'] + $fisa['grand_total_vandute_ar_9'] +  $fisa['grand_defecte_bg'] + $fisa['grand_defecte_ar_8'] + $fisa['grand_defecte_ar_9']}
                        {if ($total_afisare != 0)}
                            <div style="margin-left: 10px;">
                                <table class="table table-bordered table-striped" style="width: 180px;">
                                    <tr class="info">
                                        <td style="text-align: center;font-weight: 900;color: red;" colspan="2">
                                            TOTALURI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">BG + AR</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_total_vandute_bg'] + $fisa['grand_total_vandute_ar_8'] + $fisa['grand_total_vandute_ar_9']}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;font-weight: 900;">Val. BG + AR</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_valoare_bg'] + $fisa['grand_valoare_ar_8'] + $fisa['grand_valoare_ar_9']}</td>
                                    </tr>
                                    <tr class="info">
                                        <td style="text-align: left;font-weight: 900;">Com. BG + AR</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_comision_bg'] + $fisa['grand_comision_ar_8'] + $fisa['grand_comision_ar_9']}</td>
                                    </tr>
                                    <tr class="info">
                                        <td style="text-align: left;font-weight: 900;">Def. BG + AR</td>
                                        <td style="text-align: center;font-weight: 900;">{$fisa['grand_defecte_bg'] + $fisa['grand_defecte_ar_8'] + $fisa['grand_defecte_ar_9']}</td>
                                    </tr>
                                </table>
                            </div>
                        {/if}
                    </div>
                    <div style="margin-top: 100px;"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<span style="margin-left: 230px;">{$totaltime}</span>
<script src="js/pagini/completare_fisa_traseu.js"></script>
<script src="../css/custom.css"></script>


{*<table class="table table-bordered" style="width: 500px;">*}
{*<tr>*}
{*<th>Client</th>*}
{*<th><select>*}
{*<option>Produs</option>*}
{*/select></th>*}
{*<th><input type="text" name="pret_extra" autocomplete="off"></th>*}
{*<th><input type="text" name="cantitate_extra" autocomplete="off"></th>*}
{*<th>*}
{*<button type="submit" name="adauga_cantitate_extra" value="adauga"*}
{*class="btn btn-primary" style="float: right">*}
{*Adauga cantitate extra*}
{*</button>*}
{*</th>*}
{*</tr>*}
{*</table>*}
{*</form>*}
{*{/if}*}
