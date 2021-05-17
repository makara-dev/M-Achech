@extends('layout.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endsection

@section('title', 'About Us')

@section('content')

<!-- BEGIN :: About Us -->
<div class="about-us-wrapper">
    <div class="about-us-content">
        <div class="content">
            <h2>@lang('about-lan.content-h2')</h2>
            <p>@lang('about-lan.content-p1')</p>
            <p>@lang('about-lan.content-p2')</p>
        </div>
    </div>
    <div class="about-us-img">
        <img src="{{asset('img/expertises-background.png')}}" alt="">
    </div>
</div>
<!--  END :: About Us -->

<!-- BEGIN :: About Us Information -->
<div class="detail-infor-wrapper">
    <!-- begin inner left service -->
    <div class="inner-left-service">
        <h3>@lang('about-lan.about-us')</h3>
        <ul class="btn-service">
            <li><button id="1" class="serviceClick" style="outline: none;">@lang('about-lan.service-click-1')</button></li>
            <li><button id="2" class="serviceClick" style="outline: none;">@lang('about-lan.service-click-2')</button></li>
            <li><button id="3" class="serviceClick" style="outline: none;">@lang('about-lan.service-click-3')</button></li>
            <li><button id="4" class="serviceClick" style="outline: none;">@lang('about-lan.service-click-4')</button></li>
        </ul>
    </div>
    <!-- finish inner left service -->
    <!-- start inner right service -->
    <div class="inner-right-service-wrapper">
        <img src="{{asset('img/project-img-1.png')}}" alt="office image">
        <!-- placeholder for service description -->
        <div class="inner-right-service-desc">
            <h3 id="service-id-header">@lang('about-lan.service-click-1')</h3>
            <p id="service-id-description">@lang('about-lan.ps')</p>
        </div>
    </div>
    <!-- finished inner right service -->
</div>
{{-- mobile version --}}
<div class="detail-wrapper" style="display: none;">
    <h3>@lang('about-lan.about-us')</h3>
    <div class="service-menu">
        <h4>@lang('about-lan.service-click-1')</h4>
        <ul>
            <li>@lang('about-lan.ps')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('about-lan.service-click-2')</h4>
        <ul>
            <li>@lang('about-lan.is')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('about-lan.service-click-3')</h4>
        <ul>
            <li>@lang('about-lan.ms')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('about-lan.service-click-4')</h4>
        <ul>
            <li>@lang('about-lan.ap')</li>
        </ul>
        <hr>
    </div>
</div>
<!-- END :: About Us Information-->  

@endsection

@section('script')
    
<script>
    $(document).ready(function() {
        let services = {
            //PROFESSIONAL SERVICE 
            1 : {
                header      : @json(__('about-lan.service-click-1')),
                description : @json(__('about-lan.ps'))
            },
            //INDUSTRIES SERVICE 
            2 : {
                header      : @json(__('about-lan.service-click-2')),
                description : @json(__('about-lan.is'))
            }, 
            // M-ARCHITECT CULTURE
            3 : {
                header      : @json(__('about-lan.service-click-3')),
                description : @json(__('about-lan.ms'))
            },
            // ALLIANCE PARTNERS 
            4 : {
                header      : @json(__('about-lan.service-click-4')),
                description : @json(__('about-lan.ap'))
            },
        };
        let newDescription ;

        $(".serviceClick").click(function() {
            let currentTextId = $(this).attr('id');
            $("#service-id-header").text(services[currentTextId]["header"]); 
            document.getElementById("service-id-description").innerHTML = services[currentTextId]["description"];
        });
    });
</script>

@endsection