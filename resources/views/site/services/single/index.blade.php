@extends('layouts.merge.site')
@section('titulo', 'Notícia')
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
                <li class="active">{{ $service->name }}</li>
            </ul>
            <h2>{{ $service->name }}</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="project-details__top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__img-box">
                        <img src="/storage/{{ $service->photo }}" alt="">
                       
                    </div>
                    <div class="project-details__content-one">
                        <h3 class="project-details__content-one-title">{{ $service->name }}</h3>
                        <p class="project-details__content-one-text">{!! html_entity_decode($service->description) !!}</p>
                    </div>
                 
                </div>
            </div>
         
          
        </div>
    </div>
</section>
<!--Project Details End-->

<!--Similar project Start-->
<section class="similar-project">
    <div class="container">
        <div class="section-title text-center">
         
            <h2 class="section-title__title">Serviços Relacionados</h2>
        </div>
        <div class="row">
            @foreach ($lasted as $item)
            <div class="col-xl-4 col-lg-4">
                <!--Project Page Two Single-->
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="/storage/{{ $service->photo }}" alt="">
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">{!! url('/servicos/' . urlencode($item->name)) !!}</p>
                        <h3 class="project-two__title"><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! url('/servicos/' . urlencode($item->name)) !!}</a></h3>
                        <div class="project-two__arrow">
                            <a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
