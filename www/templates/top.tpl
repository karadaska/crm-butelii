<header id="header" class="navbar navbar-inverse navbar-fixed-top z_index_1000">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="/dashboard.php"><img src="images/logo.png" alt="crm admin"></a>

            <div class="nav-no-collapse">
                <div id="top-search">
                    <form action="/search.php" method="post" class="form-search" id="form_search_top"
                          novalidate="novalidate">
                        <div class="input-append">
                            <input type="text" name="tsearch" id="tsearch" placeholder="Cautare ..." required=""
                                   class="search-query" title="Introduceti un text!">
                            <button type="submit" class="btn" id="buton_search"><i
                                        class="icon16 i-search-2 gap-right0"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="nav pull-right">
                    <li class="dropdown">
                    <li><a href="edit_user.php?id={$curent_user_id}" class=""><i class="icon16 i-user"></i> Profil</a>
                    </li>
                    <li><a href="logout.php" class=""><i class="icon16 i-exit"></i> Iesire aplicatie</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
        </div>
    </div>
</header>