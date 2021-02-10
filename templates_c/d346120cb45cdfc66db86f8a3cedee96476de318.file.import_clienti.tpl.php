<?php /* Smarty version Smarty-3.1.15, created on 2020-07-07 14:50:34
         compiled from "/home/dinobaby/public_html/crm/www/templates/import_clienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18441055915eff239c386373-60787249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd346120cb45cdfc66db86f8a3cedee96476de318' => 
    array (
      0 => '/home/dinobaby/public_html/crm/www/templates/import_clienti.tpl',
      1 => 1594122631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18441055915eff239c386373-60787249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5eff239c3d6352_69299052',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eff239c3d6352_69299052')) {function content_5eff239c3d6352_69299052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-plus-circle-2"></i> Adaugare clienti noi</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">

                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <h4>Import din fisier</h4>
                            </div>
                            <div class="widget-content">
                                <form class="form-horizontal" id="form_adauga_clienti" action="/import_clienti.php" method="post" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="nume">Fisier:</label>
                                        <div class="controls controls-row">
                                            <input type="file" name="fisier" id="fisier" value="" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <b>format fisier csv:</b> &nbsp;&nbsp;&nbsp;&nbsp; Nume client; Judet; Localitate; Stare_client; Telefon; Cnp; Ci; Contract; Titular; Ratel; Culoare;
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="adauga" value="adauga" class="btn btn-primary">Adauga</button>
                                        <button type="button" class="btn" onclick="location.href='/clienti.php';">Anuleaza</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php }} ?>
