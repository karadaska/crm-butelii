<?php /* Smarty version Smarty-3.1.15, created on 2021-02-21 02:44:52
         compiled from "/var/www/html/fofoweb/www/templates/filtreaza_observatii.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13983569276031a59f9316f8-98830529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5553c039703a4209d14484eaee8b4276df5a63d' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/filtreaza_observatii.tpl',
      1 => 1613868234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13983569276031a59f9316f8-98830529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_6031a59f99d6d7_28157392',
  'variables' => 
  array (
    'title' => 0,
    'lista_observatii' => 0,
    'observatie' => 0,
    'observatie_id' => 0,
    'lista_observatii_filtrate' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6031a59f99d6d7_28157392')) {function content_6031a59f99d6d7_28157392($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-menu-6"></i> Adauga observatii pentru filtrare</h1>
                </div>
            </div>
            <div class="row-fluid span12">
                <form action="/filtreaza_observatii.php" method="post"
                      style="margin-bottom: 0">
                    <input type="hidden" name="form_submit" value="1" id="form_submit"/>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: left" width="300px;">Obs
                                <select name="observatie_id">
                                    <option value="0">Toate</option>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['observatie']->value['tip_observatie']==2) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['observatie']->value['id'];?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['observatie']->value['id']==$_smarty_tpl->tpl_vars['observatie_id']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['observatie']->value['nume'];?>

                                            </option>
                                        <?php }?>
                                    <?php } ?>
                                </select>
                            </th>
                            <th style="text-align: left;"><input type="submit" class="btn btn-primary" value="Adauga" name="adauga_observatie"></th>
                        </tr>
                        </thead>
                    </table>
                </form>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <div class="icon"><i class="icon20 i-table"></i></div>
                            <h4>List&#259; observatii</h4>
                        </div>
                        <form action="/filtreaza_observatii.php" method="post" style="margin-bottom: 0">
                            <div class="widget-content">
                                <table cellpadding="0" cellspacing="0" border="0"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;" class="span1">Nr.</th>
                                        <th style="text-align: left;">Observatie</th>
                                        <th style="text-align: left;">Sterge</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['observatie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['observatie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_observatii_filtrate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['observatie']->key => $_smarty_tpl->tpl_vars['observatie']->value) {
$_smarty_tpl->tpl_vars['observatie']->_loop = true;
?>
                                        <tr>
                                            <td style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_localitate'];?>
</td>
                                            <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_client'];?>
</td>
                                            <td style="text-align: left;">
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon'];?>
<br/>
                                                <?php echo $_smarty_tpl->tpl_vars['client']->value['telefon_2'];?>

                                            </td>
                                            <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['client']->value['nume_observatie']!='' ? $_smarty_tpl->tpl_vars['client']->value['nume_observatie'] : '-';?>
</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<div style="margin-top: 100px;"></div>

<script src="/js/pagini/raport_observatii_fisa_traseu.js"></script>
<?php }} ?>
