<?php /* Smarty version Smarty-3.1.15, created on 2021-02-15 22:05:31
         compiled from "/var/www/html/fofoweb/www/templates/completare_fisa_traseu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19409619136022e1a89e4906-33897539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a34008cc56acd5b0bd4a562548e7bdda918c42' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/completare_fisa_traseu.tpl',
      1 => 1613419530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19409619136022e1a89e4906-33897539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6022e1a8be9f99_05262437',
  'variables' => 
  array (
    'title' => 0,
    'fisa' => 0,
    'incarcatura' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6022e1a8be9f99_05262437')) {function content_6022e1a8be9f99_05262437($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <form action="/completare_fisa_traseu.php?id=<?php echo $_smarty_tpl->tpl_vars['fisa']->value['id'];?>
" method="post">
                        <div class="span12">
                            <div style="float: left;">
                                <table class="table tab-content table-bordered" style="width: 800px;">
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left;">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_depozit'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>NR. casa</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               name="casa_marcat"
                                                               type="text" class="form-control"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['casa_marcat'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Nr. BG:</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="nr_bg"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_bg'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                            
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_traseu'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th> Nr. raport Z</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="raport_z"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['raport_z'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Valoare
                                                        BG:
                                                    </th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="valoare_bg"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_bg'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['fisa']->value['numar'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Valoare
                                                        Z:
                                                    </th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="valoare_z"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_z'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>NR. AR 8</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="nr_ar_8"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_ar_8'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['fisa']->value['nume_sofer'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Total Km:</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="km"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['km'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Valoare AR 8</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="valoare_ar_8"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_ar_8'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['fisa']->value['data_intrare'];?>
</h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Tip plata</th>
                                                    <th>
                                                        <select style="width: 100px;">
                                                            <option value="0">Alege...</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>NR. AR 9</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="nr_ar_9"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['nr_ar_9'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-row" style="display: inline-flex;float: left">
                                                <div class="form-group col-md-6" style="text-align: left;">
                                                    <label for="inputEmail4"
                                                           style="margin-bottom: 0;color: red">Produse</label>
                                                    <h5> <?php  $_smarty_tpl->tpl_vars['incarcatura'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incarcatura']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fisa']->value['incarcatura_masina_plecare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incarcatura']->key => $_smarty_tpl->tpl_vars['incarcatura']->value) {
$_smarty_tpl->tpl_vars['incarcatura']->_loop = true;
?>
                                                            <span style="color: red;"> <?php echo $_smarty_tpl->tpl_vars['incarcatura']->value['nume_produs'];?>

                                                                : <?php echo $_smarty_tpl->tpl_vars['incarcatura']->value['cantitate'];?>
 bucati</span>
                                                            <br/>
                                                        <?php } ?></h5>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Valoare
                                                        plata
                                                    </th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control"
                                                               name="valoare_alimentare"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_alimentare'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Valoare AR 9</th>
                                                    <th>
                                                        <input style="width: 100px; line-height: 10px;min-height: 10px !important;cursor: pointer;"
                                                               type="text" class="form-control" name="valoare_ar_9"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['fisa']->value['miscari_fisa']['valoare_ar_9'];?>
"
                                                        />
                                                    </th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><textarea style="width: 100%" name="nota_explicativa"
                                                                  placeholder="Adauga observatii"></textarea></th>
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
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
<span style="margin-left: 230px;"><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</span>
<script src="js/pagini/completare_fisa_traseu.js"></script>
<script src="../css/custom.css"></script>




















































































































































































































































































































































































































































































































































<?php }} ?>
