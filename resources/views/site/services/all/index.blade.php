@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(/site/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Serviços</li>
            </ul>
            <h2>Serviços</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Feature One Start-->
<section class="feature-one feature-one--service-two-page">
    <div class="container">
        <div class="row">
            @foreach ($services as $item)
          
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
               
                
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img src="/storage/{{ $item->photo }}" alt="">
                        <a href="{!! url('/servicos/' . urlencode($item->name)) !!}">
                        <div class="feature-one__title-box">
                            <h3 class="feature-one__title"><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</a></h3>
                        </div>
                    </a>
                        <div class="feature-one__hover-content">
                            <div class="feature-one__icon">
                                <span class="icon-design-thinking"></span>
                            </div>
                            <a href="">   <h3 class="feature-one__hover-title"><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</a></h3></a>
                         
                          
                            <div class="feature-one__learn-more">
                                <a href="{!! url('/servicos/' . urlencode($item->name)) !!}">Saber Mais<i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
       
            @endforeach
        </div>
    </div>
</section>
<!--Feature One End-->
@endsection
