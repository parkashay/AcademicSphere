<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
</head>

<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- jQuery -->
    <script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
    <!-- aos -->
    <script src="{{asset('plugins/aos/aos.js')}}"></script>
    <!-- venobox popup -->
    <script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
    <!-- mixitup filter -->
    <script src="{{asset('plugins/mixitup/mixitup.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{asset('plugins/google-map/gmap.js')}}"></script>

    <!-- Main Script -->
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>