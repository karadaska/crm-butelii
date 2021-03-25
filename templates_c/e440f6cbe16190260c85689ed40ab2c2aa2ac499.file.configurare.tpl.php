<?php /* Smarty version Smarty-3.1.15, created on 2021-03-25 09:46:45
         compiled from "/var/www/html/fofoweb/www/templates/configurare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155416866860227bae5a03f4-39826954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e440f6cbe16190260c85689ed40ab2c2aa2ac499' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/configurare.tpl',
      1 => 1616658403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155416866860227bae5a03f4-39826954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60227bae5e8de1_62438200',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60227bae5e8de1_62438200')) {function content_60227bae5e8de1_62438200($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="main">

    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section id="content">

        <div class="wrapper">

            <div class="container-fluid">

                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-dashboard"></i>Configuratii</h1>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title plain">
                                <div class="icon"><i class="icon20 i-pie-2"></i></div>
                                <h4>Rapoarte</h4>
                                <a href="#" class="minimize"></a>
                            </div>
                            <div class="widget-content center">
                                <div class="vital-stats">
                                    <ul>
                                        <li>
                                            <a href="/observatii.php">
                                                <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                    <span class="percent"></span>
                                                    <span class="txt">Lista observatii</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/localitati.php">
                                            <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                <span class="percent"></span>
                                                <span class="txt">Localitati</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/transfer_produse.php">
                                                <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                    <span class="percent"></span>
                                                    <span class="txt">Transfer</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/culori_butelii.php">
                                            <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                    <span class="percent"></span>
                                                    <span class="txt">Culori butelii</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/ordine_clienti.php">
                                                <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                    <span class="percent"></span>
                                                    <span class="txt">Ordine clienti</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/numar_clienti.php">
                                                <div class="item">
                                                    <div class="icon"><i class="i-cool"></i></div>
                                                    <span class="percent"></span>
                                                    <span class="txt">Nr.clienti </span>
                                                </div>
                                            </a>
                                        </li>
                                        
                                            
                                                
                                                    
                                                    
                                                    
                                                
                                            
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container-fluid  -->
        </div>

    </section>
</div>
<?php }} ?>
