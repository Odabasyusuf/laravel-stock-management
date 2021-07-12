<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/dore.light.blueolympic.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/main.css" />
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/mobile-self.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body id="app-container" class="menu-default show-spinner">
<nav class="navbar inherit">
    @include('layouts.admin.mobile.mobile_navbar')
</nav>
<div class="menu">
    @include('layouts.admin.mobile.mobile_menu')
</div>

<main class="anadiv-default-transition">
    <div class="container-fluid">
       <!-- <div class="row">
            <div class="col-12">

                <h1>@yield('h1baslik')</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Anasayfa</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('h4baslik')</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>
        -->
        @yield("content")
    </div>
</main>

<footer class="page-footer">
    @include("layouts.admin.mobile.mobile_footer")
</footer>

<script src="{{url('/')}}/assets/admin/mobile/js/vendor/jquery-3.3.1.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/moment.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/fullcalendar.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/datatables.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/perfect-scrollbar.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/glide.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/progressbar.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/jquery.barrating.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/select2.full.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/nouislider.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/bootstrap-datepicker.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/Sortable.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/vendor/mousetrap.min.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/dore.script.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/scripts.js"></script>
<script src="{{url('/')}}/assets/admin/mobile/js/scripts.single.theme.js"></script>
</body>

</html>
