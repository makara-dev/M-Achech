@extends('layout.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/expertises.css') }}">
@endsection

@section('title', 'Expertises')

@section('content')
    
<!-- BEGIN :: Our Expertise --> 
<div class="our-expertise-wrapper" data-snap-point="1">
    <div class="our-expertise-content">
        <h2>@lang('expertises-lan.our-expertise-content-h2')</h2>
        <h4>@lang('expertises-lan.our-expertise-content-h4')</h4>
        <p>@lang('expertises-lan.our-expertise-content-p')</p>
    </div>
    <div class="our-expertise-img">
        <img src="{{asset('img/expertises-background.png')}}" alt="">
    </div>
</div>
<!--  END :: Our Expertise -->

<!-- BEGIN :: Expertise Service -->

{{-- desktop version --}}
<div id="service-container" class="expertise-service-wrapper" data-snap-point="2">
    <!-- begin inner left service -->
    <div class="inner-left-service">
        <div class="inner-left-service-text">
            <h3 class="pl-4">@lang('expertises-lan.inner-left-service-h3')</h3>
            <ul class="service-nav">
                <li><a id="1" class="serviceClick">@lang('expertises-lan.serviceClick-1')</a></li>
                <li><a id="2" class="serviceClick">@lang('expertises-lan.serviceClick-2')</a></li>
                <li><a id="3" class="serviceClick">@lang('expertises-lan.serviceClick-3')</a></li>
                <li><a id="4" class="serviceClick">@lang('expertises-lan.serviceClick-4')</a></li>
                <li><a id="5" class="serviceClick">@lang('expertises-lan.serviceClick-5')</a></li>
            </ul>
        </div>
    </div>
    <!-- finish inner left service -->
    <!-- start inner right service -->
    <div class="inner-right-service-wrapper">
        <!-- placeholder for service description -->
        <div class="inner-right-service-desc">
            <h3 id="service-id-header">@lang('expertises-lan.serviceClick-1')</h3>
            <p id="service-id-description">@lang('expertises-lan.as') </p>
        </div>
    </div>
    <!-- finished inner right service -->
</div>

{{-- mobile version --}}
<div class="expertise-wrapper" style="display: none;">
    <h3>@lang('expertises-lan.inner-left-service-h3')</h3>
    <div class="service-menu">
        <h4>@lang('expertises-lan.serviceClick-1')</h4>
        <ul>
            <li>@lang('expertises-lan.as')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('expertises-lan.serviceClick-2')</h4>
        <ul>
            <li>@lang('expertises-lan.se')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('expertises-lan.serviceClick-3')</h4>
        <ul>
            <li>@lang('expertises-lan.mepe')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('expertises-lan.serviceClick-4')</h4>
        <ul>
            <li>@lang('expertises-lan.pmcms')</li>
        </ul>
        <hr>
    </div>
    <div class="service-menu">
        <h4>@lang('expertises-lan.serviceClick-5')</h4>
        <ul>
            <li>@lang('expertises-lan.mps')</li>
        </ul>
    <hr>
    </div>
</div>
<!-- END :: Expertise Service -->  

@endsection

@section('script')
<script>
    $(document).ready(function() {   
        // set height to fit client screen


        let services = {
            //ARCHITECTURAL_SERVICE 
            1 : {
                header      : @json(__("expertises-lan.serviceClick-1")),
                description : @json(__("expertises-lan.as"))
            },
            //STRUCTURAL_ENGINEERING 
            2 : {
                header      : @json(__("expertises-lan.serviceClick-2")),
                description : @json(__("expertises-lan.se"))
            }, 
            // MACHANICAL_ELECTRICAL_PLUMBING 
            3 : {
                header      : @json(__("expertises-lan.serviceClick-3")),
                description : @json(__("expertises-lan.mepe"))
            },
            // PROJECT_MANAGEMENT_CONSTRUCTION_MANAGEMENT_SERVICE
            4 : {
                header      : @json(__("expertises-lan.serviceClick-4")),
                description : @json(__("expertises-lan.pmcms"))
            },
            // MASTER_PLANNING_SERVICE 
            5 : {
                header      : @json(__("expertises-lan.serviceClick-5")),
                description : @json(__("expertises-lan.mps"))
            }
        };
        let newDescription ;

        $(".serviceClick").click(function() {
            let currentTextId = $(this).attr('id');
            $("#service-id-header").text(services[currentTextId]["header"]); 
            document.getElementById("service-id-description").innerHTML = services[currentTextId]["description"];
            console.log(lang('expertises-lan.serviceClick-1'));
        });
    });
</script>

@endsection