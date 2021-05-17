@extends('layout.app')


@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<!-- This site is converting visitors into subscribers and customers with Rocketbots - https://rocketbots.io -->
<!-- <script src="https://app.rocketbots.io/facebook/chat/plugin/23294/112576953600697" async></script> -->
<!-- https://rocketbots.io/ -->

<!-- slick slide cdn -->
<link rel="stylesheet" href={{ Url("https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css") }}>
<link rel="stylesheet" href={{ Url("https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css") }}>

@endsection

@section('title','M-Architect')
@section('content')

<!-- BEGIN:: Project Preview Slider -->
<section class="project-preview-container">
    <!--  Project Slide 1 -->
    <div class="project-slide-wrapper">
        <div class="header-description-text">
            <h4>@lang('index-lan.header-description-text-1')</h4>
        </div>
        <div class="project-showcase">
            <div class="img-horizontal-block">
                <img src="{{ asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/Thumbnail.jpg') }}">
                <div class="d-lg-flex pr-5 pt-3 d-none">
                    <span class="font-12">2018</span>
                    <span class="mx-auto font-12">@lang('index-lan.img-horizontal-desc-1')</span>
                </div>
            </div>
            <div class="inner-vertical-block">
                <div id="player"></div>
            </div>
        </div>
        
        <div class="body-description-text">
            <p>@lang('index-lan.body-description-text-p-1')</p>
        </div>
    </div>
    
    <!--  Project Slide 2 -->
    <div class="project-slide-wrapper">
        <div class="header-description-text">
            <h4>@lang('index-lan.header-description-text-2')</h4>
        </div>

        <div class="project-showcase">
            <div class="img-horizontal-block">
                <img src="{{asset('img/index-slider-imgs/slider2-horizontal-img.jpg')}}">
                <div class="d-lg-flex pr-5 pt-3 d-none">
                    <span class="font-14">2018</span>
                    <span class="mx-auto font-12">@lang('index-lan.img-horizontal-desc-2')</span>
                </div>
            </div>
            <div class="inner-vertical-block text-center">
                <img src="{{asset('img/index-slider-imgs/slider2-vertical-img.jpg')}}">
            </div>
        </div>

        <div class="body-description-text pt-xl-2 pr-xl-5">
            <p>@lang('index-lan.body-description-text-p-2')</p>
        </div>
    </div>
</section>

<!-- BEGIN:: Content container -->
<section class="content-container" id="content-container">
    <div class="content-image">
        <img src="{{asset('img/m-architech.png')}}" alt="">
    </div>
    <span>SINCE 2008</span>
    <h4>@lang('index-lan.content-h4')</h4>
    <ul class="content-nav">
        <li>
            <a href="{{ Url("/expertises/#service-container") }}">
                @lang('index-lan.architectural-service')
            </a>
        </li>
        <li>
            <a href="{{ Url("/expertises/#service-container") }}">
                @lang('index-lan.structural-engineering')
            </a>
        </li>
        <li>
            <a href="{{ Url("/expertises/#service-container") }}">
                @lang('index-lan.machanical-electrical-plumbing')
            </a>
        </li>
        <li>
            <a href="{{ Url("/expertises/#service-container") }}">
                @lang('index-lan.construction-management-service')
            </a>
        </li>
        <li>
            <a href="{{ Url("/expertises/#service-container") }}">
                @lang('index-lan.master-planning-service')
            </a>
        </li>
    </div>
</section>
<!-- END:: Content containerr -->

<!-- BEING:: Our clients -->
<div class="ourclient-container">
    <h4 class="ourclient-text">@lang('index-lan.ourclient-text')</h4>
    <!-- START:: Our clients icon slider -->
    <div class="slider ourclient-slide-wrapper">
        <a class="ourclient-icon-wrapper" href={{ Url('/project-detail', "edcsr") }}>
            <div class="ourclient-icon">
                <img src="{{asset('img/ourclients-icons/edc-icon.png')}}" 
                alt="ELECTRICITY DU CAMBODGE SIEM REAP">
            </div>
            <span>ELECTRICITY DU CAMBODGE SIEM REAP</span>
        </a> 
        <a class="ourclient-icon-wrapper" href={{ Url('/project-detail', "secc") }}>
            <div class="ourclient-icon">
                <img src="{{asset('img/ourclients-icons/secc-icon.png')}}" 
                alt="SECURITY AND EXCHANGE COMMISION OF CAMBODIA">
            </div>
                <span>SECURITY AND EXCHANGE COMMISION OF CAMBODIA</span>
        </a>
        <a class="ourclient-icon-wrapper" href={{ Url('/project-detail', "acu") }}>
            <div class="ourclient-icon">
                <img src="{{asset('img/ourclients-icons/acu-icon.png')}}" 
                alt="ANTI CORRUPTION UNIT">
            </div>
            <span>ANTI CORRUPTION UNIT</span>
        </a>
        <a class="ourclient-icon-wrapper" href={{ Url('/project-detail', "gdce") }}>
            <div class="ourclient-icon">
                <img src="{{asset('img/ourclients-icons/gdce-icon.png')}}" 
                alt="GENERAL DEPARTMENT OF CUSTOMES EXIST">
            </div>
            <span>GENERAL DEPARTMENT OF CUSTOMES EXIST</span>
        </a>
        <a class="ourclient-icon-wrapper" href={{ Url('/project-detail', "mef") }}>
            <div class="ourclient-icon">
                <img src="{{asset('img/ourclients-icons/mef-icon.jpg')}}" 
                alt="MINISTRY OF ECONOMY AND FINANCE">
            </div>
            <span>MINISTRY OF ECONOMY AND FINANCE</span>
        </a>
    </div>
    <!-- FINISHED:: Our clients icon slider -->
</div>
<!-- END:: Our clients -->

@endsection


@section('script')
<script src="{{asset('js/index.min.js')}}"></script>

 {{-- youtube player api --}}
<script src="{{asset('js/youtubeApi.js')}}"></script>
@endsection