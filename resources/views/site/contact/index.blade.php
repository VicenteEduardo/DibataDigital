@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')
<!--Page Header End-->
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(/site/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Contactos</li>
            </ul>
            <h2>Contate-nos</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Contact Details Start-->
<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="contact-details__img">
                    <img src="/site/assets/images/resources/contact-details-img.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Entre em contato conosco</span>
                            <div class="section-title-shape">
                                <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Entre em contato conosco</h2>
                    </div>
                    <p class="contact-details__text">Estamos aqui para ajudar a transformar suas ideias em realidade e encontrar soluções personalizadas para as necessidades da sua empresa. Na Dibata Digital, acreditamos que a comunicação é a chave para uma parceria bem-sucedida. Se você tem dúvidas, precisa de mais informações ou deseja discutir como nossas soluções podem beneficiar seu negócio, não hesite em nos contatar.</p>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="text">
                                <p>Tem alguma pergunta?</p>
                                <a href="tel:980009850"><span>Free</span> +98 (000)-9850</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="text">
                                <p>Escrever e-maill</p>
                                <a href="mailto:geral@dibata.ao">geral@dibata.ao</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="text">
                                <p>Visite a qualquer momento</p>
                                <span>66 broklyn golden street. New York</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Envie-nos um e-mail</span>
                <div class="section-title-shape">
                    <img src="/site/assets/images/shapes/section-title-shape.png" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Sinta-se livre para escrever</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form action="/site/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write comment"></textarea>
                                </div>
                                <div class="comment-form__btn-box">
                                    <button type="submit" class="thm-btn comment-form__btn">Enviar uma mensagem</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="google-map-two">
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
    class="google-map__two-box" allowfullscreen></iframe>

</section>
<!--Google Map End-->

<!--Site Footer Start-->
@endsection
