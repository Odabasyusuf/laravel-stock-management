<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/assets/admin/adminox/images/favicon.ico">



    <!-- =============================================================== -->
    <!-- ========================== CSS start ========================== -->

    <!-- C3 Chart css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/c3/c3.min.css" rel="stylesheet" type="text/css"/>

    <!-- Footable css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweetalert css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="{{url('/')}}/assets/admin/adminox/css/bootstrap.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/self.css" rel="stylesheet" type="text/css" id="self-stylesheet"/>

    <link href="{{url('/')}}/assets/admin/adminox/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/app.css" rel="stylesheet" type="text/css" id="app-stylesheet"/>


    <!-- ========================== CSS end =========================== -->
    <!-- ============================================================== -->



</head>

<body class="unsticky-header" data-layout="horizontal">

<!-- ============================================================== -->
<!-- ========================== JS start ========================== -->



<!-- =========================== JS end =========================== -->
<!-- ============================================================== -->
<!-- Begin page -->
<div id="wrapper">

    <!-- Navigation Bar-->
    <header id="topnav">
            <!-- Topbar Start -->
        @include('layouts.admin.topnavigation')
        <!-- end Topbar -->

            <!-- TopMenu Start -->
        @include('layouts.admin.topmenu')
        <!-- TopMenu Start -->

            <!-- end navbar-custom -->
    </header>

    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="">Anasayfa</a></li>
                                    <li class="breadcrumb-item active">@yield('h4baslik')</li>
                                </ol>
                            </div>
                            <h4 class="page-title">@yield('h4baslik')</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                    @yield("content")
               <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->


        <!-- Footer Start -->
        @include('layouts.admin.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="{{url('/')}}/assets/admin/adminox/js/vendor.min.js"></script>

<!--C3 Chart-->
<script src="{{url('/')}}/assets/admin/adminox/libs/d3/d3.min.js"></script>
<script src="{{url('/')}}/assets/admin/adminox/libs/c3/c3.min.js"></script>
<script src="{{url('/')}}/assets/admin/adminox/libs/echarts/echarts.min.js"></script>
<script src="{{url('/')}}/assets/admin/adminox/js/pages/dashboard.init.js"></script>


<!-- Sweet alert js -->
<script src="{{url('/')}}/assets/admin/adminox/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="{{url('/')}}/assets/admin/adminox/js/pages/sweet-alerts.init.js"></script>
<!-- App js -->
<script src="{{url('/')}}/assets/admin/adminox/js/app.min.js"></script>

<!-- Footable js -->
<script src="{{url('/')}}/assets/admin/adminox/libs/footable/footable.all.min.js"></script>

<!-- Init js -->
<script src="{{url('/')}}/assets/admin/adminox/js/pages/foo-tables.init.js"></script>



</body>
</html>
