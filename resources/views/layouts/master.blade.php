<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <link sizes="80x80" href="/img/design_img/carbiddinglogo.png">
    <link rel="icon" type="image/png" href="/img/design_img/carbiddinglogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet"/>
    <link href="/css/style.css" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet"/>
    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="">
<div class="wrapper ">

    <div class="sidebar" data-color="blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="/admin/" class="simple-text logo-normal">
                <img src="/img/design_img/carbiddinglogo.png" alt="logo" class="logo_img">
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="/admin">
                        <i class="now-ui-icons business_badge"></i>
                        <p>Админ профиль</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/users">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>пользователи</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/verified">
                        <i class="now-ui-icons ui-1_check"></i>
                        <p>подверждённые аукционы </p>
                    </a>
                </li>
                <li>
                    <a href="/admin/unverified">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                        <p>неподверждённые аукционы </p>
                    </a>
                </li>
                <li>
                    <a href="/admin/carbody">
                        <i class="now-ui-icons shopping_delivery-fast"></i>
                        <p>кузов машины </p>
                    </a>
                </li>
                <li>
                    <a href="/admin/models">
                        <i class="now-ui-icons transportation_bus-front-12"></i>
                        <p>модель машины </p>
                    </a>
                </li>
                <li>
                    <a href="/admin/states">
                        <i class="now-ui-icons design-2_ruler-pencil"></i>
                        <p>состояния</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/parkings">
                        <i class="now-ui-icons location_pin"></i>
                        <p>Стоянки</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/auctioncategories">
                        <i class="now-ui-icons loader_gear"></i>
                        <p>Категории аукционов</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/cars">
                        <i class="now-ui-icons shopping_delivery-fast"></i>
                        <p>машины</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#">Панель администратора</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form action="/admin/searchcar" method="GET">
                        <div class="input-group no-border">
                            <input type="text" name="name" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                   <button style="color: white;" class="searchbut" type="submit"><i class="now-ui-icons ui-1_zoom-bold"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/">
                                    CarBidding
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chart JS -->
<script src="/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/demo/demo.js"></script>
<script src="/js/main.js"></script>
<script src="/js/jquery.js"></script>
@yield('scripts')
</body>

</html>
