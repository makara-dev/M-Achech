@extends('layout.app')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/project-detail.css')}}">
<!-- slick slide cdn -->
<link rel="stylesheet" href={{ Url("https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css") }}>
<link rel="stylesheet" href={{ Url("https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css") }}>

@endsection

@section('title', 'Project Detail')

@section('content')
<!-- BEGIN :: Project Image Detail -->
<section class="project-showcase bg-dark">
    <div class="showcase-wrapper">
        <img class="project-img" src="{{ asset($project['showcaseImg']) }}" alt="@lang($project['name'])">
        <div class="project-showcase-text">
            <h4 class="project-name">@lang($project['name'])</h4>
            <p class="project-year">@lang($project['year'])</p>
        </div>
    </div>
</section>
<!-- END :: Project Image Detail -->

<!-- BEGIN :: Project Description -->
<section class="project-info">
    <div class="project-info-name pb-2 pb-sm-5">
        <h4 id="project-info-heading">@lang($project['description']['heading'])</h4>
    </div>
    <div class="project-info-detail row">
        <div class="detail-info col-lg-7 col-md-6 col-12 pb-5 pb-sm-0">
            <h5 id="content-header-text">@lang('project-detail-lan.duration-design')</h5>
            <p id="project-info-duration">@lang($project['description']['duration'])</p>
            <h5 id="content-header-text">@lang('project-detail-lan.scope-of-work') :</h5>
            <p id="project-info-desc">@lang($project['description']['scopeOfWork'])</p>
        </div>
        <a class="project-info-img col-lg-5 col-md-6 col-12" href="{{$project['url']}}" target="_blank" >
            <img id="map_img" class="col-12 col-sm-auto shadow-sm p-0" src="{{ asset($project['location']) }}" alt="Location On The Map">
        </a>
    </div>
</section>
<!-- END :: Project Description -->

<!-- BEGIN :: Project Preview Slider -->
<section class="project-preview">
    @foreach ($project['previewImg'] as $img)
        <div class="preview-img-wrapper">
            <img class="preview-img" src="{{asset($img)}}" alt="@lang($project['description']['heading'])">
        </div>
    @endforeach
</section>
<!-- END :: Project Preview -->

<!-- BEGIN :: Project Preview Slider -->
<div id="popUpModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgModal">
  <p id="captionModal" class="text-white font-20"></p>
</div>
@endsection
<!-- END :: Project Preview Slider -->
@section('script')
<script src="{{asset('js/project-detail.js')}}"></script>
<script>

</script>
@endsection
