<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.15, created on 2021-06-02 14:53:28
=======
<?php /* Smarty version Smarty-3.1.15, created on 2021-06-02 21:31:20
>>>>>>> extra
         compiled from "/var/www/html/fofoweb/www/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143770837160227b3ad82752-37659730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6ff17985b6a2b3075abf86da870e3cd8011f3f' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/index.tpl',
<<<<<<< HEAD
      1 => 1622620208,
=======
      1 => 1622637594,
>>>>>>> extra
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143770837160227b3ad82752-37659730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60227b3adc01d5_78372261',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60227b3adc01d5_78372261')) {function content_60227b3adc01d5_78372261($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>

<div class="container-fluid">
    <div id="login">
        <div class="login-wrapper" data-active="log">
            <a class="brand" href="#"><img src="images/logodark.png" alt="Crm Vlad"></a>

            <div id="log">
                <div id="avatar" style="text-align: center;vertical-align: middle;">
                    <img src="images/avatars/no_avatar.jpg" id="imagine_login" alt="nologin">
                </div>
                <div class="page-header">
                    <h3 class="center">Autentificare...</h3>
                </div>
                <form id="login-form" class="form-horizontal" action="" method="post">
                    <input type="hidden" id="no_refresh_chat" name="no_refresh_chat" value="1"/>

                    <div class="row-fluid">
                        <div class="control-group">
                            <div class="controls-row">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <input class="span12" type="text" name="user" id="user" placeholder="Utilizator" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls-row">
                                <div class="icon"><i class="icon20 i-key"></i></div>
                                <input class="span12" type="password" name="password" id="password" placeholder="Parola" value="">
                            </div>
                        </div>
                        <div class="form-actions full">
                            <button id="loginBtn" type="submit" class="btn btn-primary pull-right span5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="forgot">
                <div class="page-header">
                    <h3 class="center">Parola uitata</h3>
                </div>
                <form class="form-horizontal">
                    <div class="row-fluid">
                        <div class="control-group">
                            <div class="controls-row">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <input class="span12" type="text" name="user" id="user" placeholder="">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls-row">
                                <div class="icon"><i class="icon20 i-envelop-2"></i></div>
                                <input class="span12" type="text" name="email" id="email-field" placeholder="">
                            </div>
                        </div>
                        <div class="form-actions full">
                            <button type="submit" class="btn btn-large btn-block btn-success">Trimite parola</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="bar" data-active="log">
            <div class="btn-group btn-group-vertical">
                <a id="log" href="#" class="btn tipR" title="Login"><i class="icon16 i-key"></i></a>
                <a id="forgot" href="#" class="btn tipR" title="Ai uitat parola?"><i class="icon16 i-question"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
