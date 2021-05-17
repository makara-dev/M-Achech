<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- fonts cdn -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- custom css -->
    @yield('stylesheet')

    <title>@yield('title')</title>

</head>

<body>
    <!-- navbar -->
    <header>
        @include('partials.navbar')
    </header>

    <!-- main body -->
    <main>
        @yield('content')
    </main>

    <!-- footer -->
    <footer>
        @include('partials.footer')
    </footer>
    
    <!-- messenger chat widget -->
    @include('partials.messenger-widget')
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- slick js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <!-- messenger widget -->
    <script src="{{asset('js/messenger-widget.js')}}"></script>

    {{-- @yield('quick_script') --}}

    <!-- custom -->
    {{-- <script src="{{asset('js/all.js')}}"></script> --}}

    @yield('script')
    <script src="{{asset('js/messenger-widget.js')}}"></script>

</body>

</html>
