<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="/site/assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header--one clearfix">
            <div class="main-header__top">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Luanda Angola</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="">geral@dibata.ao</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-right-content">
                            <ul class="list-unstyled main-header__top-right-menu">
                                <li><a href="#">Sobre</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Contactos</a></li>
                            </ul>
                            <div class="main-header__top-right-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">

                    <div class="main-menu__left main-menu__left--two">
                        <div class="main-menu__logo">
                            <a href="index.html">
                                <img class="logo-dark" src="/site/logo.png" alt="" width="170">
                                <img class="logo-light" src="/site/logo.png" alt="">
                            </a>
                        </div>
                        <div class="main-menu__main-menu-box main-menu__main-menu-box--two">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown current megamenu">
                                    <a href="{{ route('site.home') }}">Home</a>
                                 
                                </li>
                            
                                <li class="dropdown">
                                    <a href="{{ route('site.services') }}">Serviços</a>
                                   
                                </li>
                                <li class="dropdown">
                                    <a href="#">Projectos</a>
                                   
                                </li>
                               
                                <li class="dropdown">
                                    <a href="{{ route('site.news') }}">Notícias</a>
                                   
                                </li>
                                <li><a href="{{ route('site.contact') }}">Contactos</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="main-menu__right">
                        <div class="main-menu__search-call">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <img src="/site/assets/images/icon/main-menu-icon-comment.png" alt="">
                                </div>
                                <div class="main-menu__call-number">
                                    <p>Have any question?</p>
                                    <h5><a href="tel:926668880000"><span>Free</span> +98 (000)-9850</a></h5>
                                </div>
                            </div>
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>