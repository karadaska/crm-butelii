{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}

<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="i-car"></i> Edit localitate</h1>
                    <button type="button" onclick="location.href='/localitati.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-info">
                        Lista localitati
                    </button>
                    <button type="button" onclick="location.href='/localitati.php'" name="inapoi"
                            value="inapoi" class="btn btn-small btn-warning">
                        Inapoi
                    </button>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_edit_masina" action="/edit_localitate.php"
                                      method="post">
                                    <input type="hidden" name="adaugat" value="{$adaugat}" id="adaugat"/>
                                    <input type="hidden" name="id" id="id" value="{$localitate_id['id']}"/>
                                    <table class="table table-bordered" style="width: 200px;">
                                        <tr>
                                            <th style="text-align: left;">
                                                <select name="zona_id">
                                                    <option>Alege zona</option>
                                                    {foreach from=$zone item=zona}
                                                            <option value={$zona['id']}
                                                    {if $get_zona_by_localitate_id['judet_id'] == $zona['id']} SELECTED="SELECTED"{/if}>
                                                            {$zona['nume']}
                                                            </option>
                                                    {/foreach}
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">
                                                <input autocomplete="off" type="text" name="nume"
                                                       value="{$localitate_id['nume']}">
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="submit" name="modifica" value="modifica" class="btn btn-info">
                                                    Modifica
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="clickOnStergeLocalitate({$localitate_id['id']})">Sterge localitate
                                                </button>
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
    </section>
</div>
<script src="js/pagini/edit_localitate.js"></script>
{include file="footer.tpl"}