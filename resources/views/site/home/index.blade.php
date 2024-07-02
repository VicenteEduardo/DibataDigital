@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/site/assets/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="/site/assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="/site/assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="/site/assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>It Software Solution &</p>
                                    <h2>technology</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubra mais</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/Assistir?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Assistir <br> como funciona</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/site/assets/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="/site/assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="/site/assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="/site/assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>It Software Solution &</p>
                                    <h2>technology</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubra mais</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/Assistir?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Assistir <br> como funciona</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/site/assets/images/backgrounds/main-slider-1-3.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="/site/assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="/site/assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="/site/assets/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>Solução de software de TI &</p>
                                    <h2>tecnologia</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubra mais</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/Assistir?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Assistir <br> como funciona</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Get Solutions Start-->
    <section class="get-solutions">
        <div class="container">
            <div class="get-solutions__inner">
                <p class="get-solutions__text">Pare de desperdiçar tempo e dinheiro com tecnologia. <a href="about.html">Explorar
                    notech</a> e obtenha as melhores soluções.</p>
            </div>
        </div>
    </section>
    <!--Get Solutions End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="/site/assets/images/resources/feature-1-1.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Gerenciar serviços de TI</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-system"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Gerenciar serviços de TI</a>
                                </h3>
                                <p class="feature-one__hover-text">Existem muitos lipsum de sábios de passagem de
                                    disponíveis alguns.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="/site/assets/images/resources/feature-1-2.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Cíber segurança</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-cyber"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Cíber segurança</a></h3>
                                <p class="feature-one__hover-text">Taqui estão muitos lipsum de in pass sábios de
                                    disponíveis alguns.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="/site/assets/images/resources/feature-1-3.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Digital experience</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-application"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Digital experience</a>
                                </h3>
                                <p class="feature-one__hover-text">Existem muitos lipsum de sábios de passagem de
                                    disponíveis alguns.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Get To Know Start-->
    <section class="get-to-know">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="get-to-know__img-box">
                            <div class="get-to-know__img">
                                <img src="/site/Flyer02.png" alt="">
                            </div>
                            <div class="get-to-know__small-img">
                                <img src="/site/assets/images/resources/get-to-know-small-img.jpg" alt="">
                            </div>
                            <div class="get-to-know__client-box">
                                <h3 class="odometer" data-count="6860">00</h3>
                                <span class="get-to-know__plus">+</span>
                                <p class="get-to-know__client-text">worldwide clients</p>
                            </div>
                            <div class="get-to-know-shape-1"><img src="/site/d.png" 
                                    alt="" width="300"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-to-know__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Conheça-nos</span>
                                <div class="section-title-shape">
                                    <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Soluções fáceis para seus problemas de TI</h2>
                        </div>
                        <p class="get-to-know__text">Lorem ipsum dolor sit amet, consectetur nod adipisicing elit
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn.</p>
                        <ul class="list-unstyled get-to-know__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Donec scelerisque egestas purus eget fringilla</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mauris imperdiet non ligula et lobortis.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="get-to-know__it-solutions">
                            <div class="get-to-know__it-solutions-icon">
                                <span class="icon-data-analytics"></span>
                            </div>
                            <div class="get-to-know__it-solutions-text-box">
                                <p class="get-to-know__it-solutions-text">Pare de se preocupar, nós cuidamos dos seus
                                    problemas de tecnologia.</p>
                            </div>
                        </div>
                        <a href="about.html" class="get-to-know__btn thm-btn">Descubra mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Get To Know End-->

    <!--Services One Start-->
    <section class="services-one" style="background-image: url(/site/assets/images/shapes/service-bg-1-1.png);">
        <div class="service-one__shape-1"></div><!-- /.service-one__shape-1 -->
        <div class="service-one__shape-2"></div><!-- /.service-one__shape-2 -->
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">O que estamos oferecendo</span>
                                    <div class="section-title-shape">
                                        <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Serviços que oferecemos aos nossos clientes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-one__top-right">
                            <p class="services-one__top-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud
                                exercitation ullamco laboris.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <ul class="list-unstyled services-one__list">
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-coding"></span>
                            </div>
                            <h3 class="services-one__title"><a href="product-development.html">produtos <br>
                                desenvolvimento</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor <br> sit amet do.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-design-thinking"></span>
                            </div>
                            <h3 class="services-one__title"><a href="ui-ux-designing.html">UI/UX <br> projetando</a>
                            </h3>
                            <p class="services-one__text">Lorem ipsum dolor <br> sit amet do.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-technology"></span>
                            </div>
                            <h3 class="services-one__title"><a href="digital-marketing.html">Digital <br>
                                    marketing</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor <br> sit amet do.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-content"></span>
                            </div>
                            <h3 class="services-one__title"><a href="content-management.html">Content <br>
                                    management</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor <br> sit amet do.</p>
                        </div>
                    </li>
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-optimization"></span>
                            </div>
                            <h3 class="services-one__title"><a href="data-analysis.html">Data <br> analysis</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor <br> sit amet do.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Services One End-->

   


    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one__inner">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Trabalho concluído recentemente</span>
                        <div class="section-title-shape">
                            <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Nossos últimos projetos</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="/site/assets/images/project/project-1-1.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="/site/assets/images/icon/project-1-icon-1.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Technology</span>
                                <h3 class="project-one__title"><a href="project-details.html">Cloud migration saves
                                        <br> money & protect</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Project One Single-->
                        <div class="project-one__single project-one__single-two">
                            <div class="project-one__img">
                                <img src="/site/assets/images/project/project-1-2.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="/site/assets/images/icon/project-1-icon-2.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Development</span>
                                <h3 class="project-one__title"><a href="project-details.html">Perfect solution that
                                        your <br> business demands</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Project One Single-->
                        <div class="project-one__single project-one__single-three">
                            <div class="project-one__img">
                                <img src="/site/assets/images/project/project-1-3.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="/site/assets/images/icon/project-1-icon-3.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Solution</span>
                                <h3 class="project-one__title"><a href="project-details.html">Trusted by The world's
                                        best <br> organizations</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->

    <!--Tech Services Start-->
    <section class="tech-services">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tech-services__left">
                        <div class="tech-services__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="tech-services__img">
                                <img src="/site/assets/images/resources/tech-services-img-1.jpg" alt="">
                            </div>
                            <div class="tech-services__img-content">
                                <p class="tech-services__img-text">At mi mauris <br> vestibulum <br> eu tellus <br>
                                    tristique <br> sapien</p>
                                <div class="tech-services__learn-more">
                                    <a href="about.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tech-services__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Fique protegido</span>
                                <div class="section-title-shape">
                                    <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Serviços de tecnologia para suas ideias de negócios</h2>
                        </div>
                        <p class="tech-services__text">Donec suscipit ante ipsum. Donec convallis quam at tortor
                            hendrerit, ut elementum augue suscipit. Morbi tincidunt risus vel neque convallis
                            pretium non nec justo.</p>
                        <ul class="list-unstyled tech-services__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>Nós entregamos soluções perfeitas</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>Trabalhamos com marcas globais</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Tech Services End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url(/site/assets/images/backgrounds/funfact-bg-1-1.png);">
        </div><!-- /.counter-one__bg -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__icon">
                                <span class="icon-work"></span>
                            </div>
                            <h3 class="odometer" data-count="30">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Years of experience</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="odometer" data-count="2800">00</h3>
                            <p class="counter-one__title">IT problems solved</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-like"></span>
                            </div>
                            <h3 class="odometer" data-count="6960">00</h3>
                            <p class="counter-one__title">Satisfied clients</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-user"></span>
                            </div>
                            <h3 class="odometer" data-count="29">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Pro team members</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Trusted Source Start-->
    <section class="trusted-source">
        <div class="container">
            <div class="trusted-source__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="trusted-source__left">
                    <h3 class="trusted-source__content">Trusted source in IT <br> services</h3>
                    <div class="trusted-source__icon">
                        <img src="/site/assets/images/icon/trusted-source-icon.png" alt="">
                    </div>
                </div>
                <div class="trusted-source__right">
                    <div class="trusted-source__contact-info">
                        <p>Have any question?</p>
                        <a href="tel:980009850"><span>Free</span> +98 (000)-9850</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Trusted Source End-->

    <!--Helping Start-->
    <section class="helping">
        <div class="helping-wrapper">
            <div class="helping__left">
                <div class="helping__left-bg"
                    style="background-image: url(/site/assets/images/backgrounds/helping-left-bg.jpg);"></div>
            </div>
            <div class="helping__right">
                <div class="helping-shape-1  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="/site/assets/images/shapes/helping-shape-1.png" alt="">
                </div>
                <div class="helping__right-content">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Technology solution</span>
                            <div class="section-title-shape">
                                <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Ajudando empresas ao redor do mundo</h2>
                    </div>
                    <p class="helping__text">Lorem ipsum is simply free text dolor sit am adipi we help you ensure
                        everyone.</p>
                    <ul class="list-unstyled helping__points">
                        <li>
                            <div class="icon">
                                <span class="icon-data-protection"></span>
                            </div>
                            <h3 class="helping__title">Proteção de dados</h3>
                            <p class="helping__text-2">Lorem ipsum dolor sit amet consectetur notted.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-backup-copy"></span>
                            </div>
                            <h3 class="helping__title">Optimize IT system</h3>
                            <p class="helping__text-2">Lorem ipsum dolor sit amet consectetur notted.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Helping End-->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">O que está acontecendo</span>
                    <div class="section-title-shape">
                        <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Novos artigos</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Blog One single-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="/site/assets/images/blog/blog-1-1.jpg" alt="">
                            <div class="blog-one__tag">
                                <p>Tech</p>
                            </div>
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-clock"></i> 8 Jan, 2022</a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Layerdrops</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details.html">Easy to use software new innovation</a>
                            </h3>
                            <div class="blog-one__bottom">
                                <a href="blog-details.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Blog One single-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="/site/assets/images/blog/blog-1-2.jpg" alt="">
                            <div class="blog-one__tag">
                                <p>solution</p>
                            </div>
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-clock"></i> 8 Jan, 2022</a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Layerdrops</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details.html">What is holding back the IT solution.</a>
                            </h3>
                            <div class="blog-one__bottom">
                                <a href="blog-details.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Blog One single-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="/site/assets/images/blog/blog-1-3.jpg" alt="">
                            <div class="blog-one__tag">
                                <p>Tech</p>
                            </div>
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-clock"></i> 8 Jan, 2022</a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Layerdrops</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="blog-details.html">Podcasting operational change management</a>
                            </h3>
                            <div class="blog-one__bottom">
                                <a href="blog-details.html">Saber mais<i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <h4 class="brand-one__title">The business partners</h4>
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="/site/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
@endsection
