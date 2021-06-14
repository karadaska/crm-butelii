{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i>Miscari masini</h1>
                    <a href="adauga_masina.php">
                        {*<button class="btn btn-mini btn-info" type="button"><i class="icon20 i-users"></i>Adaug&#259;*}
                            {*ma&#351;in&#259;*}
                        {*</button>*}
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>Detalii fise</h4>
                        </div>
                        <div class="widget-content">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered table-hover" id="dataTable">
                                <tr>
                                    <th style="text-align: left" width="300px;">Depozit
                                        <select name="depozit_id">
                                            <option value="0">Alege depozit</option>
                                            {foreach from=$lista_depozite item=depozit}
                                                <option value={$depozit['id']} {if $depozit['id'] == $depozit} selected="selected"{/if}>
                                                    {$depozit['nume']}
                                                </option>
                                            {/foreach}
                                        </select>
                                        <input type="hidden" name="id" id="id" value="{$masina_id}">
                                    </th>
                                    <th style="text-align: left" width="300px;">Traseu
                                        <select name="traseu_id">
                                            <option value="0">Alege traseu</option>
                                            {foreach from=$lista_trasee item=traseu}
                                                <option value={$traseu['id']} {if $traseu['id'] == $traseu_id} selected="selected"{/if}>
                                                    {$traseu['nume']}
                                                </option>
                                            {/foreach}
                                        </select>
                                        <input type="hidden" name="id" id="id" value="{$masina_id}">
                                    </th>
                                    <th style="text-align: left" width="300px;">Sofer
                                        <select name="sofer_id">
                                            <option value="0">Alege traseu</option>
                                            {foreach from=$lista_soferi item=sofer}
                                                <option value={$sofer['id']} {if $sofer['id'] == $sofer_id} selected="selected"{/if}>
                                                    {$sofer['nume']}
                                                </option>
                                            {/foreach}
                                        </select>
                                        <input type="hidden" name="id" id="id" value="{$masina_id}">
                                    </th>
                                    <th style="text-align: left" width="300px;">Masina
                                        <select name="masina_id">
                                            <option value="0">Alege traseu</option>
                                            {foreach from=$lista_masini item=masina}
                                                <option value={$masina['id']} {if $masina['id'] == $masina_id} selected="selected"{/if}>
                                                    {$masina['nume']}
                                                </option>
                                            {/foreach}
                                        </select>
                                        <input type="hidden" name="id" id="id" value="{$masina_id}">
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
{include file="footer.tpl"}
