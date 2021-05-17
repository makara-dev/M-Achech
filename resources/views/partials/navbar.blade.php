<!-- BEGIN:: Navigation bar -->
<div id="m-navbar">
<nav class="navigation-background-color navbar navbar-expand-lg navbar-dark ">
    <div class="navbar-wrapper container-fluid">
        <a class="navbar-brand" href={{ Url("/") }}>
            <img id="m-architect-icon" src="{{asset('img/m-architech.png')}}" alt="M-Architect">
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link" href={{ Url("/portfolio") }}>@lang('navbar-lan.portfolio_menu')</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href={{ Url("/expertises") }}>@lang('navbar-lan.expertises_menu')</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href={{ Url("/company-profile") }}>@lang('navbar-lan.company_profile_menu')</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href={{ Url("/contact") }}>@lang('navbar-lan.contact_us_menu')</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href={{ Url("/career") }}>@lang('navbar-lan.career_menu')</a>
                </li>
                <li class="nav-item mx-3">
                    <a id="lan-url" class="nav-link" style="text-decoration: none;" href={{ Url('/locale','Khmer') }}>
                        <p id="lan-text">ភាសារខ្មែរ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
<!-- END:: Navigation bar -->

{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){

        let curLanText = @json(__('navbar-lan.language'));
        localStorage.setItem('currentLanguage', curLanText);

        let english = { 
            langUrl : "{{ Url('/locale','English') }}",
            langText : "ENGLISH",
        };

        let khmer = { 
            langUrl : "{{ Url('/locale','Khmer') }}",
            langText : "ភាសារខ្មែរ",
        };

        if(curLanText == "Khmer") {
            // change to English
            $("#lan-url").attr("href", english["langUrl"]); 
            $("#lan-text").text(english["langText"]); 
        }
        if(curLanText == "ENGLISH") {
            // change to Khmer
            $("#lan-url").attr("href", khmer["langUrl"]); 
            $("#lan-text").text(khmer["langText"]); 
        }
    });

</script>