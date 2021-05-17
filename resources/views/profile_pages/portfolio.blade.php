@extends('layout.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
@endsection

@section('title', 'Portfolio')

@section('content')
    <!-- BEING :: Portfolio  -->
    <div class="portfolio-container">
        <div class="portfolio-text">
            <h4>@lang('portfolio-lan.portfolio-text-h4')</h4>
            <p>@lang('portfolio-lan.portfolio-text-p')</p>
        </div>
        <div class="portfolio-card-container">
            <div class="portfolio-card">
                <a href="{{url('/project-detail', 'secc')}}">
                    <img  src="{{ asset('img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/Thumbnail.jpg') }}" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.secc')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "gdnt")}}">
                    <img  src="{{ asset('img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/Thumbnail.jpg') }}" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.gdnt')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "gdce")}}">
                    <img  src="{{ asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/Thumbnail.jpg') }}" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.gdce')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "edcsr")}}">
                    <img  src="img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/Thumbnail.jpg" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.edc')</p>
                        <small>@lang('portfolio-lan.siem-reap')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "gdceuniversity")}}">
                    <img  src="img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/Thumbnail.jpg" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.gdceuniversity')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "acu")}}">
                    <img  src="img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex2.jpg" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.acu')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "mef")}}">
                    <img  src="img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/Thumbnail.min.jpeg" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.mef')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
            <div class="portfolio-card">
                <a href="{{url('/project-detail', "tpl")}}">
                <img  src="{{ asset('img/portfolio-construction-images/The-ParkLand-Project/thumbnail-interior-design.jpg') }}" alt="">
                    <div class="portfolio-card-text">
                        <p>@lang('portfolio-lan.tpl')</p>
                        <small>@lang('portfolio-lan.phnom-penh')</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END :: Portfolio  -->

@endsection
