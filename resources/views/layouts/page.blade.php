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
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Reset -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- jQuery -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>
    <!-- venobox popup -->
    <script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
    <!-- mixitup filter -->
    <script src="{{ asset('plugins/mixitup/mixitup.min.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

    {{--  Sharing --}}
    <!-- sharing -->
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=62c69482fbc6330013125c89&product=inline-share-buttons"
        async="async"></script>
    {{-- Spotlight --}}
    <script src="{{ asset('js/spotlight.bundle.js') }}" differ></script>
    <!-- Main Script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
