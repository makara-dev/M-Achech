@extends('layout.app')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('css/company-profile-mobile.css')}}">
@endsection

@section('title','Time line')

@section('content')
    <div class="time-line-wrapper">
        <h5 class="company-profile-text">@lang('company-profile-lan.time-line-header')</h5>
        <hr>
        {{-- 2017 time line project --}}
        <div id="m1" class="service-menu">
            <div class="time-line-header">
                <div class="circle-node"></div>
                <div class="top-v-line"></div>
                <p class="project-year-text">@lang('company-profile-lan.year-2017')</p>
                <p class="project-header-text"> </p>
                <img src="{{asset('img/company-profile-icons/arrow-down.png')}}" alt="arrow-down-icon">
            </div>
            
            <ul class="time-line-body founder">
                <div class="time-line-vline"></div>
                <div class="founder-wrapper">
                    <div class="logo-wrapper">
                        <img src="{{asset('img/m-logo.png')}}" alt="m-logo">
                    </div>
                    <div class="founder-text-wrapper">
                        <p>@lang('company-profile-lan.founder-text')</p>
                    </div>
                </div>
            </ul>
        </div>
        <hr>
        {{-- 2018 time line projects --}}
        <div id="m2" class="service-menu">
            <div class="time-line-header">
                <div class="circle-node"></div>
                <div class="middle-v-line"></div>
                <p class="project-year-text">@lang('company-profile-lan.year-2018')</p>
                <p class="project-header-text"> </p>
                <img src="{{asset('img/company-profile-icons/arrow-down.png')}}" alt="">
            </div>
            
            <ul class="time-line-body">
            <div class="time-line-vline"></div>
            {{-- EDC Siem Reap --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "edcsr")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/Thumbnail.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.edc')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/WSiBtyEvKB4HiQmT9')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.siem-reap')</small>
                    </a>
                </div>
            {{-- GDCE Phnom Penh --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "gdce")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/Thumbnail.min.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.gdce')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/ebPZhUHZkG39RohF6')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            {{-- GDCE School --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "gdceuniversity")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/Thumbnail.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.gdceuniversity')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/dvDM5RGzmaizv1AT6')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/map.png')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            {{-- GDNT Phnom Penh --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "gdnt")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/Thumbnail.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.gdnt')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/gcU4NNrfyuEpoqB49')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            {{-- SECC Phnom Penh --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "secc")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/Thumbnail.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.secc')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/9jn89Z1jEu86iTZe7')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            </ul>
        </div> <hr> 
        {{-- 2019 time line projects --}}
        <div id="m3" class="service-menu">
            <div class="time-line-header">
                <div class="circle-node"></div>
                <div class="middle-v-line"></div>
                <p class="project-year-text">@lang('company-profile-lan.year-2019')</p>
                <p class="project-header-text"> </p>
                <img src="{{asset('img/company-profile-icons/arrow-down.png')}}" alt="">
            </div>
            
            <ul class="time-line-body">
            <div class="time-line-vline"></div>
            {{-- ACU Phnom Penh --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "acu")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex2.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.acu')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/5qkSdQxCzV9dfJQx5')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2019-ACU-anti-corruption-unit/map.png')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            {{-- MEF Phnom Penh --}}
                <div class="project-block">
                    <a href="{{url('/project-detail', "mef")}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/Thumbnail.min.jpeg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.mef')</small>
                    </a>
                    <div class="h-line-node"></div>
                    <a target="_blank" href="{{Url('https://goo.gl/maps/AhfARsWBk4gAqfcQA')}}" class="img-wrapper">
                        <img src="{{asset('img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
                    </a>
                </div>
            </ul>
        </div> <hr> 
        {{-- 2020 time line projects --}}
        <div id="m4" class="service-menu">
            <div class="time-line-header">
                <div class="circle-node"></div>
                <div class="bottom-v-line"></div>
                <p class="project-year-text">@lang('company-profile-lan.year-2020')</p>
                <p class="project-header-text"> </p>
                <img src="{{asset('img/company-profile-icons/arrow-down.png')}}" alt="">
            </div>
            <ul class="time-line-body">
            </ul>
        </div> <hr> 
    </div>
    <div class="our-team-wrapper">
        <h5 style="align-self: flex-start; color: #707070;" class="company-profile-text">@lang('company-profile-lan.our-team-header')</h5>
        {{-- profile block --}}
        <div class="team-profile-block">
            <div class="team-img-wrapper">                
                <img src="{{asset('img/team-img/ceo.jpg')}}" alt="">
                <div class="team-profile-text">
                    <h5 class="team-name">@lang('company-profile-lan.ceo-name')</h5>
                    <h5 class="team-position"><i>@lang('company-profile-lan.position-ceo')</i></h5>
                </div>
                <div class="team-description">
                    <p>@lang('company-profile-lan.ceo-description')</p>
                </div>
            </div>
        </div>
        {{-- profile block --}}
        <div class="team-profile-block">
            <div class="team-img-wrapper">                
                <img src="{{asset('img/team-img/architect-director.jpg')}}" alt="">
                <div class="team-profile-text">
                    <h5 class="team-name">@lang('company-profile-lan.architect-name')</h5>
                    <h5 class="team-position"><i>@lang('company-profile-lan.position-architect')</i></h5>
                </div>
                <div class="team-description">
                    <p>@lang('company-profile-lan.architect-description')</p>
                </div>
            </div>
        </div>
        {{-- profile block --}}
        <div class="team-profile-block">
            <div class="team-img-wrapper">                
                <img src="{{asset('img/team-img/interior-design-manager.min.jpg')}}" alt="">
                <div class="team-profile-text">
                    <h5 class="team-name">@lang('company-profile-lan.interior-name')</h5>
                    <h5 class="team-position"><i>@lang('company-profile-lan.position-interior')</i></h5>
                </div>
                <div class="team-description">
                    <p>@lang('company-profile-lan.interior-description')</p>
                </div>
            </div>
        </div>
        {{-- profile block --}}
        <div class="team-profile-block">
            <div class="team-img-wrapper">                
                <img src="{{asset('img/team-img/structural-director.jpg')}}" alt="">
                <div class="team-profile-text">
                    <h5 class="team-name">@lang('company-profile-lan.structural-name')</h5>
                    <h5 class="team-position"><i>@lang('company-profile-lan.position-structural')</i></h5>
                </div>
                <div class="team-description">
                    <p>@lang('company-profile-lan.structural-description')</p>
                </div>
            </div>
        </div>
        {{-- about M-Architect block --}}
        <div class="about-m-block">
            <h4 class="header-text">@lang('company-profile-lan.about-m-header')</h4>
            <p class="description-text">@lang('company-profile-lan.about-m-description')</p>
        </div>
    </div>
@endsection
@section('script')
<script src="{{asset('js/company-profile-mobile.js')}}"></script>
<script>
	let clientWidth = $(window).width();
    $(document).ready(function() {
		showProfile_Mobile(clientWidth);
    });
</script>
@endsection