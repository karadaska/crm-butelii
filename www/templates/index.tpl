{include file="header_login.tpl" title="{$title}"}
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
                <form id="login-form" class="form-horizontal" action="">
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
{include file="footer.tpl"}