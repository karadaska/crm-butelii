{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Miscari fise

                        {*<a target="_blank" href="/print_apeluri_clienti.php?id={$traseu_id}&stare_id={$stare_id}">*}
                            {*<button class="i-print"></button>*}
                        {*</a>*}
                    </h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/miscari_fise.php" method="post" id="form_miscari_fise"
                      style="margin-bottom: 0">
                    <div style="float: left;margin-right: 10px;">
                        <select name="depozit_id">
                            <option value="0">Alege depozit</option>
                            {foreach from=$lista_depozite item=depozit}
                                <option value={$depozit['id']}
                                        {if $depozit['id'] == $depozit_id} selected="selected"{/if}>
                                    {$depozit['nume']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="traseu_id">
                            <option value="0">Alege traseu</option>
                            {foreach from=$lista_trasee item=traseu}
                                <option value={$traseu['id']} {if $traseu['id'] == $traseu_id} selected="selected"{/if}>
                                    {$traseu['nume']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="sofer_id">
                            <option value="0">Alege sofer</option>
                            {foreach from=$lista_soferi item=sofer}
                                <option value={$sofer['id']} {if $sofer['id'] == $sofer_id} selected="selected"{/if}>
                                    {$sofer['nume']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="float: left;margin-right: 10px;">
                        <select name="masina_id">
                            <option value="0">Alege masina</option>
                            {foreach from=$lista_masini item=masina}
                                <option value={$masina['id']} {if $masina['id'] == $masina_id} selected="selected"{/if}>
                                    {$masina['numar']}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                </form>
                <table cellpadding="0" cellspacing="0" border="0"
                       class="table table-striped table-bordered table-hover" id="dataTable"
                       style="margin-top: 50px;">
                    <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Depozit</th>
                        <th>Traseu</th>
                        <th>Sofer</th>
                        <th>Masina</th>
                        <th>Fisa Id</th>
                        <th>Valoare Z</th>
                        <th>NR. casa</th>
                        <th>Nr. raport Z</th>
                    </tr>
                    </thead>
                    {$nr= 1 }
                    {foreach from=$miscari_fise item = miscari}
                        <tr>
                            <th class="span1"> {$nr++ }</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <td class="span2"><a
                                        href="completare_fisa_traseu.php?id={$miscari['fisa_id']}">{$miscari['fisa_id']}</a>
                            </td>
                            <td class="span2">{$miscari['valoare_z']}</td>
                            <td class="span2">{$miscari['fisa_id']}</td>
                            <td class="span2">{$miscari['fisa_id']}</td>
                        </tr>
                    {/foreach}
                </table>
            </div>
    </section>
</div>
<script src="/js/pagini/miscari_fise.js"></script>

