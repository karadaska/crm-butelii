<?php /* Smarty version Smarty-3.1.15, created on 2021-06-09 22:34:19
         compiled from "/var/www/html/fofoweb/www/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79027787560c117bbf0b2c7-67995825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531fa363fd35debb80638b0c1f799e756e70e424' => 
    array (
      0 => '/var/www/html/fofoweb/www/templates/header.tpl',
      1 => 1618998671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79027787560c117bbf0b2c7-67995825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60c117bbf323a7_26271049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c117bbf323a7_26271049')) {function content_60c117bbf323a7_26271049($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ro" xml:lang="ro">
<head>
    <meta charset="utf-8">
    <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</TITLE>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Genyx admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Genyx admin template" />

    <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
    <!-- Text -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/icons.css" rel="stylesheet" />
    <link href="css/genyx-theme/jquery.ui.genyx.css" rel="stylesheet" />

    <!-- Plugins stylesheets -->
    <link href="js/plugins/misc/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="js/plugins/tables/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="js/plugins/ui/range-slider/rangeslider.css" rel="stylesheet" />
    <link href="js/plugins/forms/datepicker/datepicker.css" rel="stylesheet" />
    <link href="js/plugins/forms/uniform/uniform.default.css" rel="stylesheet" />
    <link href="js/plugins/ui/jgrowl/jquery.jgrowl.css" rel="stylesheet" />
    <link href="js/plugins/forms/switch/bootstrapSwitch.css" rel="stylesheet" />

    <!-- app stylesheets -->
    <link href="css/app.css" rel="stylesheet" />
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" />

    <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

    <script src="js/html5shiv.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/conditionizr.min.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="js/plugins/core/jrespond/jRespond.min.js"></script>
    <script src="js/jquery.genyxAdmin.js"></script>

    <!-- Charts plugins -->
    <script src="js/plugins/charts/flot/jquery.flot.js"></script>
    <script src="js/plugins/charts/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/charts/flot/jquery.flot.orderBars.js"></script>
    <script src="js/plugins/charts/flot/jquery.flot.time.min.js"></script>
    <script src="js/plugins/charts/sparklines/jquery.sparkline.min.js"></script>
    <script src="js/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/plugins/charts/gauge/justgage.1.0.1.min.js"></script>
    <script src="js/plugins/charts/gauge/raphael.2.1.0.min.js"></script>

    <!-- Form plugins -->
    <script src="js/plugins/forms/uniform/jquery.uniform.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/plugins/forms/autosize/jquery.autosize-min.js"></script>
    <script src="js/plugins/forms/inputlimit/jquery.inputlimiter.1.3.min.js"></script>
    <script src="js/plugins/forms/mask/jquery.mask.min.js"></script>
    <script src="js/plugins/forms/switch/bootstrapSwitch.js"></script>
    <script src="js/plugins/forms/globalize/globalize.js"></script>
    <script src="js/plugins/forms/spectrum/spectrum.js"></script><!--  Color picker -->
    <script src="js/plugins/forms/datepicker/bootstrap-datepicker.js"></script>
    <script src="js/plugins/forms/multiselect/ui.multiselect.js"></script>
    <script src="js/plugins/forms/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="js/plugins/forms/validation/jquery.validate.js"></script>
    <script src="js/plugins/forms/select2/select2.js"></script>

    <!-- Tables plugins -->
    <script src="js/plugins/tables/datatables/jquery.dataTables.min.js"></script>

    <!-- Misc plugins -->
    <script src="js/plugins/misc/fullcalendar/fullcalendar.min.js"></script>
    <script src="js/plugins/misc/listnav/jquery.listnav.min-2.1.js"></script>

    <!-- UI plugins -->
    <script src="js/plugins/ui/jgrowl/jquery.jgrowl.min.js"></script>

    <!-- Init plugins -->
    <script src="js/app.js"></script>
</head>
<body><?php }} ?>
