{include file="header.tpl" title="{$title}"}
{include file="top.tpl"}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div class="main">
    {include file="menu.tpl"}
    <section id="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <div class="icon"><i class="i-truck"></i></div>
                            </div>
                            <div class="widget-content">
                                <div style="clear: both;">
                                    <div style="float: left;margin-top: 5px;">
                                        <form method="post" action="export_livrari_soferi.php">
                                            <input type="submit" name="export" class="btn btn-success" value="Export" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


