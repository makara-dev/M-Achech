@extends('layout.app')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/company-profile.css') }}">
@endsection

@section('title','Company Profile')

@section('content')
{{-- loading --}}
<div class="loadingio-spinner-pulse-vffx9eikz2">
	<div class="ldio-880ws2y60g8">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
{{-- Time-line --}}
<div class="time-line-wrapper d-none">
	<div class="time-line-text">
		<h4>@lang('company-profile-lan.time-line-header')</h4>
		<span>Our Company Time-line</span>
	</div>
	{{-- Time-line nav buttons --}}
	<ul class="time-line-year-list">
		<li class="year-text">@lang('company-profile-lan.year-2017')</li>
		<li class="year-text">@lang('company-profile-lan.year-2018')</li>
		<li class="year-text">@lang('company-profile-lan.year-2019')</li>
		<li class="year-text">@lang('company-profile-lan.year-2020')</li>
	</ul>
	<ul class="time-line-list">
		@for ($i = 0; $i < 4; $i++) <li id="circle-node{{$i}}" class="circle-node"></li>
			@if($i < 3) 
			<li class="line-node"></li>
			@endif
		@endfor
	</ul>
	{{--project container--}}
	<div class="time-line-body">
		{{-- 2017 --}}
		<div id="project-container0" class="project-container" style="z-index=2;">
			{{-- project row --}}
			<div id="m-project-block" class="project-block">
				<div id="v-line0" class="v-line"></div>
				{{-- project col --}}
				<div id="project-node0" class="project-node project-node0">
					<div id="m-line" class="line"></div>
					<div class="img-wrapper">
                        <img src="{{asset('img/m-logo.png')}}" id="m-logo" alt="m-logo">
						<div class="project-text">
							<p>@lang('company-profile-lan.founder-text')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- 2018 --}}
		<div id="project-container1" class="project-container" style="z-index=3;">
            {{-- EDC Siem Reap --}}
			<div class="project-block">
				<div id="v-line1" class="v-line"></div>
				{{-- project col --}}
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a href="{{url('/project-detail', "edcsr")}}" style="z-index: 4;" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/Thumbnail.jpg')}}" alt="project-img">
						<small>@lang('company-profile-lan.edc')</small>
					</a>
				</div>
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/WSiBtyEvKB4HiQmT9')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/map.jpg')}}" alt="project-map">
						<small>@lang('company-profile-lan.siem-reap')</small>
					</a>
				</div>
			</div>
			{{-- GDCE --}}
			<div class="project-block">
				<div id="sub-v-line1" class="sub-v-line"></div>
				{{-- project col --}}
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a href="{{url('/project-detail', "gdce")}}" style="z-index: 4;" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/Thumbnail.min.jpg')}}" alt="project-img">
						<small>@lang('company-profile-lan.gdce')</small>
					</a>
				</div>
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/ebPZhUHZkG39RohF6')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/map.jpg')}}" alt="project-map">
						<small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
			{{-- GDCE School --}}
			<div class="project-block">
				<div id="sub-v-line1" class="sub-v-line"></div>
				{{-- project col --}}
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a href="{{url('/project-detail', "gdceuniversity")}}" style="z-index: 4;" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/Thumbnail.jpg')}}" alt="project-img">
						<small>@lang('company-profile-lan.gdceuniversity')</small>
					</a>
				</div>
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/dvDM5RGzmaizv1AT6')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/map.png')}}" alt="project-map">
						<small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
			{{-- GDNT --}}
			<div class="project-block">
				<div id="sub-v-line1" class="sub-v-line"></div>
				{{-- project col --}}
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a href="{{url('/project-detail', "gdnt")}}" style="z-index: 4;" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/Thumbnail.jpg')}}" alt="project-img">
						<small>@lang('company-profile-lan.gdnt')</small>
					</a>
				</div>
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/gcU4NNrfyuEpoqB49')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/map.jpg')}}" alt="project-map">
						<small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
			{{-- SECC --}}
			<div class="project-block">
				<div id="sub-v-line1" class="sub-v-line"></div>
				{{-- project col --}}
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a href="{{url('/project-detail', "secc")}}" style="z-index: 4;" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/Thumbnail.jpg')}}" alt="project-img">
						<small>@lang('company-profile-lan.secc')</small>
					</a>
				</div>
				<div id="project-node1" class="project-node project-node1">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/9jn89Z1jEu86iTZe7')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/map.jpg')}}" alt="project-map">
						<small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
		</div>
		{{-- 2019 --}}
		<div id="project-container2" class="project-container" style="z-index=4;">
			{{-- ACU --}}
			<div class="project-block">
				<div id="v-line2" class="v-line"></div>
				{{-- project col --}}
				<div id="project-node2" class="project-node project-node2">
					<div class="line"></div>
					<a href="{{url('/project-detail', "acu")}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex2.jpg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.acu')</small>
					</a>
				</div>
				<div id="project-node2" class="project-node project-node2">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/5qkSdQxCzV9dfJQx5')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2019-ACU-anti-corruption-unit/map.png')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
			{{-- MEF --}}
			<div class="project-block">
				<div id="sub-v-line2" class="sub-v-line"></div>
				{{-- project col --}}
				<div id="project-node2" class="project-node project-node2">
					<div class="line"></div>
					<a href="{{url('/project-detail', "mef")}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/Thumbnail.min.jpeg')}}" alt="project-img">
                        <small>@lang('company-profile-lan.mef')</small>
					</a>
				</div>
				<div id="project-node2" class="project-node project-node2">
					<div class="line"></div>
					<a target="_blank" href="{{Url('https://goo.gl/maps/AhfARsWBk4gAqfcQA')}}" class="img-wrapper text-decoration-none">
                        <img src="{{asset('img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/map.jpg')}}" alt="project-map">
                        <small>@lang('company-profile-lan.phnom-penh')</small>
					</a>
				</div>
			</div>
		</div>
		{{-- 2020 --}}
		<div id="project-container3" class="project-container" style="z-index=5;">
			<p>@lang('company-profile-lan.next-year-resolution')</p>
		</div>
	</div>
</div>

{{-- Our Team --}}
<div class="our-team-wrapper">
	<h4 class="">@lang('company-profile-lan.our-team-header')</h4>
	{{-- CEO Profile --}}
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
	<div class="team-profile-row-block">
		{{-- Architect Director Profile --}}
		<div class="team-profile-block">
			<div class="team-img-wrapper">                
				<img src="{{asset('img/team-img/architect-director.jpg')}}" alt="">
				<div class="team-profile-text">
					<h5 class="team-name">@lang('company-profile-lan.architect-name')</h5>
					<h5 class="team-position"><i>@lang('company-profile-lan.position-architect')</i></h5>
				</div>
				<div class="team-description">
					<p style="font-size: 12px;">@lang('company-profile-lan.architect-description')</p>
				</div>
			</div>
		</div>
		{{-- Interior Design Manager Profile --}}
		<div class="team-profile-block">
			<div class="team-img-wrapper">                
				<img src="{{asset('img/team-img/interior-design-manager.min.jpg')}}" alt="">
				<div class="team-profile-text">
					<h5 class="team-name">@lang('company-profile-lan.interior-name')</h5>
					<h5 class="team-position"><i>@lang('company-profile-lan.position-interior')</i></h5>
				</div>
				<div class="team-description">
					<p style="font-size: 12px;">@lang('company-profile-lan.interior-description')</p>
				</div>
			</div>
		</div>
		{{-- Structural Director Profile --}}
		<div class="team-profile-block">
			<div class="team-img-wrapper">                
				<img src="{{asset('img/team-img/structural-director.jpg')}}" alt="">
				<div class="team-profile-text">
					<h5 class="team-name">@lang('company-profile-lan.structural-name')</h5>
					<h5 class="team-position"><i>@lang('company-profile-lan.position-structural')</i></h5>
				</div>
				<div class="team-description">
					<p style="font-size: 12px;">@lang('company-profile-lan.structural-description')</p>
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="about-m-block">
		<h4 class="header-text">@lang('company-profile-lan.about-m-header')</h4>
		<p class="description-text">@lang('company-profile-lan.about-m-description')</p>
	</div> --}}
</div>
@endsection

@section('script')
<script src="{{ asset('js/company-profile.js') }}"></script>
<script>
	$(window).on("load", function() {
		for(let i=0;i<4;i++){
			setPadding(i);
			timeLineInit(i);
		}
		$('.loadingio-spinner-pulse-vffx9eikz2').remove();
		$('.time-line-wrapper').removeClass('d-none');
		setMargin();
	});
	$(window).on('resize',function() {
		setMargin();
	})
</script>
@endsection