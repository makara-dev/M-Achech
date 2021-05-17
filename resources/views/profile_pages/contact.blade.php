@extends('layout.app')

<!-- google recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcYyv4UAAAAAKBmSiGXJCJNEg--kVrSpC8v9Xdq"></script>

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
@endsection

@section('title', 'Contact Us')


@section('content')
    @include('partials.flash-message')

<!-- BEGIN :: Contact us wrapper -->
<form class="contact-wrapper " action="{{ url('contact') }}" method="POST">
    @csrf
    <!-- begin :: Form container -->
    <div class="form-container d-flex row p-md-5 p-3">
        <!-- begin :: name email filter -->
        <div class="form-name-email align-items-stretch d-flex flex-column col-lg-6 col-12 ">
            <h1 class="mb-lg-5 mb-md-3">@lang('contact-lan.contact-us')</h1>
            <div class="d-flex flex-column align-self-stretch flex-grow-1">
                <div class="form-group mb-3 mb-md-5">
                    <label for="client-name">@lang('contact-lan.name')</label>
                    <input id="clientName" name="clientName" class="form-control custom-input-box" placeholder=" " type="text" required>
                </div>
                <div class="form-group mt-3">
                    <label for="client-email">@lang('contact-lan.email')</label>
                    <input id="clientEmail" name="clientEmail" class="form-control custom-input-box" placeholder=" " type="email" aria-describedby="emailHelp">
                </div>
            </div>
        </div>

        <!--  -->
        {{-- <div class="veritcal-line"></div> --}}

        <!-- begin :: client message filter -->
        <div class="form-message col-lg-6 col-12">
            <div class="form-group">
                <label for="client-message">@lang('contact-lan.message')</label>
                <textarea id="clientMessage" name="clientMessage" class="form-control form-text-area"></textarea>
            </div>
            <input type="hidden" id="token" name="token">
            <button type="submit" class="btn btn-primary form-btn-submit">@lang('contact-lan.submit')</button>
        </div>
        <!-- end :: client message filter -->
    </div>
    <!-- end :: Form container -->
</form>
<!-- END :: Contact us wrapper -->

@endsection

@section('script')    
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6LcYyv4UAAAAAKBmSiGXJCJNEg--kVrSpC8v9Xdq', {
            action: 'contact'
        }).then(function (token) {
            console.log(token);
            document.getElementById("token").value = token;
        });
    });
</script>
@endsection
