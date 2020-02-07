<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--Link icon--}}
    <link rel="icon" type="image/png" href="/img/design_img/carbiddinglogo.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/media.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <main>
        @if(!empty($carssearch))
            <app :errorsreg="{{$errors}}" :errorschangepass="{{$errors}}" :errors="{{$errors}}" :carssearch="{{$carssearch}}"></app>
        @elseif(!empty($carsfilter))
            <app :errorsreg="{{$errors}}" :errors="{{$errors}}" :errorschangepass="{{$errors}}" :carsfilter="{{$carsfilter}}"></app>
        @else
            <app :errorsreg="{{$errors}}" :errors="{{$errors}}" :errorschangepass="{{$errors}}"></app>
        @endif
    </main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("#carnavbar").css({"background-color": "#fffffff5", "transition": "0.8s"});
        } else {
            $("#carnavbar").css({"background-color": "transparent", "transition": "0.8s"});
        }
    });
</script>
</body>
</html>
