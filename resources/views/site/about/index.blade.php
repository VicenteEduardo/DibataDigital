@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(/site/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('site.home') }}l">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Sobre Nós</li>
            </ul>
            <h2>Sobre Nós</h2>
        </div>
    </div>
</section>
<!--Delivering IT Start-->
<section class="delivering-it delivering-it-two">
    <div class="container">
        <div class="delivering-it__bottom">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Delivering IT Single-->
                    <div class="delivering-it__single">
                        <div class="delivering-it__img">
                            <img src="/site/assets/images/resources/delivering-it-img-1.jpg" alt="">
                        </div>
                        <div class="delivering-it__content">
                            <h5 class="delivering-it__content-title">Perfect solution every business demands
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Delivering IT Single-->
                    <div class="delivering-it__single">
                        <div class="delivering-it__img">
                            <img src="/site/assets/images/resources/delivering-it-img-2.jpg" alt="">
                        </div>
                        <div class="delivering-it__content">
                            <h5 class="delivering-it__content-title">Helping businesses around the world</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Delivering IT Single-->
                    <div class="delivering-it__single">
                        <div class="delivering-it__img">
                            <img src="/site/assets/images/resources/delivering-it-img-3.jpg" alt="">
                        </div>
                        <div class="delivering-it__content">
                            <h5 class="delivering-it__content-title">What is holding back the IT solution.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Delivering IT End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <h4 class="brand-one__title">Os parceiros de negócios</h4>
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                    <img src="assets/images/brand/brand-1-5.png" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Business From Start-->
<section class="business-from">
    <div class="business-from-bg-box">
        <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(/site/assets/images/backgrounds/business-from-bg.jpg);"></div>
    </div>
    <div class="container">
        <div class="business-from__inner text-center">
            <p class="business-from__sub-title">Negócios de uma grande ideia para</p>
            <h2 class="business-from__title">Lançamento</h2>
            <div class="business-from__btn-box">
                <a href="{{ route('site.contact') }}" class="business-from__btn thm-btn">Entre em contato conosco agora</a>
            </div>
        </div>
    </div>
</section>
<!--Business From End-->

<!--Notech More Start-->
<section class="notech-more">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="notech-more__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Fique protegido</span>
                            <div class="section-title-shape">
                                <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">A Dibata é mais do que uma empresa de tecnologia</h2>
                    </div>
                    <p class="notech-more__text">Na Dibata Digital, somos muito mais do que uma simples fornecedora de soluções tecnológicas. Nossa essência vai além da inovação e da excelência técnica; somos parceiros estratégicos dedicados a impulsionar o sucesso de nossos clientes. Combinamos expertise em tecnologia com uma profunda compreensão das necessidades de negócios, oferecendo soluções que transformam desafios em oportunidades reais.</p>
                    <ul class="list-unstyled notech-more__points">
                        <li>
                            <div class="icon">
                                <span class="icon-technology"></span>
                            </div>
                            <h3 class="notech-more__title">Inovações de dados</h3>
                            <p class="notech-more__text-2">Na era digital, transformar dados em insights valiosos é essencial para a vantagem competitiva. A Dibata Digital está na vanguarda das inovações de dados, oferecendo soluções tecnológicas que definem tendências de mercado.
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-stock-market"></span>
                            </div>
                            <h3 class="notech-more__title">Soluções de negócios</h3>
                            <p class="notech-more__text-2">No cenário atual, a Dibata Digital fornece soluções de negócios inovadoras que transformam desafios em oportunidades e impulsionam o crescimento e a eficiência.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="notech-more__right">
                    <div class="notech-more__img wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="/site/assets/images/resources/notech-more-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Notech More End-->

<!--Counter One Start-->
<section class="counter-one about-page__counter">
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
                        <p class="counter-one__title">Anos de experiência</p>
                        <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__icon">
                            <span class="icon-technical-support"></span>
                        </div>
                        <h3 class="odometer" data-count="2800">00</h3>
                        <p class="counter-one__title">Problemas de TI resolvidos</p>
                        <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <span class="icon-like"></span>
                        </div>
                        <h3 class="odometer" data-count="6960">00</h3>
                        <p class="counter-one__title">Clientes satisfeitos</p>
                        <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <span class="icon-user"></span>
                        </div>
                        <h3 class="odometer" data-count="29">00</h3>
                        <span class="counter-one__plus">+</span>
                        <p class="counter-one__title">Membros da equipe profissional</p>
                        <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--Team One Start-->
<section class="team-one about-page-team">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Conheça a equipe</span>
                <div class="section-title-shape">
                    <img src="assets/images/shapes/section-title-shape.png" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Membros da equipe</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-1.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Kevin martin</a></h4>
                            <p class="team-one__title">Accountant</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-2.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Jessica brown</a></h4>
                            <p class="team-one__title">Co founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-3.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">David cooper</a></h4>
                            <p class="team-one__title">Senior assistant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->


@endsection
