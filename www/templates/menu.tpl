<aside id="sidebar">
    <div class="side-options">
        <ul>
            <li><a href="#" id="collapse-nav" class="act act-primary tip" title="Collapse navigation"><i
                            class="icon16 i-arrow-left-7"></i></a></li>
        </ul>
    </div>

    <div class="sidebar-wrapper">
        <nav id="mainnav">
            <ul class="nav nav-list">
                <li {if $menu_curent==1}class="current"{/if}>
                    <a href="/dashboard.php">
                        <span class="icon"><i class="icon20 i-screen"></i></span>
                        <span class="txt">Dashboard</span>
                    </a>
                </li>
                <li {if $menu_curent==2}class="current"{/if}>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-people"></i></span>
                        <span class="txt">Portofoliu</span>
                    </a>
                    <ul class="sub">
                        <li {if $menu_curent==3}class="current"{/if}>
                            <a href="/clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Clienti</span>
                            </a>
                        </li>
                        <li {if $menu_curent==3}class="current"{/if}>
                            <a href="/clienti_depozit_activi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Clienti activi pe depozite</span>
                            </a>
                        </li>
                        <li {if $menu_curent==3}class="current"{/if}>
                            <a href="/clienti_afis.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Clienti tip afis</span>
                            </a>
                        </li>
                        <li {if $menu_curent==4}class="current"{/if}>
                            <a href="/depozite.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Depozite</span>
                            </a>
                        </li>
                        <li {if $menu_curent==4}class="current"{/if}>
                            <a href="/randament_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Randament</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li {if $menu_curent==7}class="current"{/if}>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Stocuri</span>
                    </a>
                    <ul class="sub">
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/adauga_stoc.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Adauga stoc depozit</span>
                            </a>
                        </li>
                        {*Aici o sa afisam intrarile si iesirile*}

                        {*<li {if $menu_curent==10}class="current"{/if}>*}
                            {*<a href="/stoc.php">*}
                                {*<span class="icon"><i class="icon20 i-stack-list"></i></span>*}
                                {*<span class="txt">Miscari produse depozit</span>*}
                            {*</a>*}
                        {*</li>*}
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/actualizeaza_stoc_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Actualizeaza stoc clienti</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li {if $menu_curent==7}class="current"{/if}>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Trasee</span>
                    </a>
                    <ul class="sub">
                        <li {if $menu_curent==6}class="current"{/if}>
                            <a href="/trasee.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Lista trasee</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/fisa_traseu.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Fisa traseu</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/apeluri_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Apeluri clienti</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/raport_complet_apeluri_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Raport apeluri clienti</span>
                            </a>
                        </li>
                        {*<li {if $menu_curent==10}class="current"{/if}>*}
                            {*<a href="/raport_livrari_clienti.php">*}
                                {*<span class="icon"><i class="icon20 i-stack-list"></i></span>*}
                                {*<span class="txt">Raport livrari clienti</span>*}
                            {*</a>*}
                        {*</li>*}

                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/observatii_fisa_traseu.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Observatii fisa traseu</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/neconcordanta_preturi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Neconcordanta preturi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li {if $menu_curent==7}class="current"{/if}>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Livrari</span>
                    </a>
                    <ul class="sub">
                        <li {if $menu_curent==9}class="current"{/if}>
                            <a href="/raport_livrari_soferi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Livrari soferi</span>
                            </a>
                        </li>
                        <li {if $menu_curent==9}class="current"{/if}>
                            <a href="/livrari_masini.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Livrari masini</span>
                            </a>
                        </li>
                        <li {if $menu_curent==9}class="current"{/if}>
                            <a href="/livrari_trasee.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Livrari trasee</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/livrari_clienti.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Livrari clienti</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/livrari_depozite.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Livrari depozite</span>
                            </a>
                        </li>
                        <li {if $menu_curent==10}class="current"{/if}>
                            <a href="/miscari_fise.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Miscari Fise</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li {if $menu_curent==7}class="current"{/if}>
                    <a href="#">
                        <span class="icon"><i class="icon20 i-car"></i></span>
                        <span class="txt">Parc auto</span>
                    </a>
                    <ul class="sub">
                        <li {if $menu_curent==8}class="current"{/if}>
                            <a href="/masini.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Masini</span>
                            </a>
                        </li>
                        <li {if $menu_curent==9}class="current"{/if}>
                            <a href="/soferi.php">
                                <span class="icon"><i class="icon20 i-stack-list"></i></span>
                                <span class="txt">Soferi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li {if $menu_curent==1}class="current"{/if}>
                    <a href="/configurare.php">
                        <span class="icon"><i class="icon20 i-screen"></i></span>
                        <span class="txt">Config</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
