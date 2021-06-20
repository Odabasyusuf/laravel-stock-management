<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Parti Girişi - Yenorsan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/assets/admin/adminox/images/favicon.ico">

    <!-- C3 Chart css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/c3/c3.min.css" rel="stylesheet" type="text/css"/>

    <!-- Footable css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/footable/footable.core.min.css" rel="stylesheet"
          type="text/css"/>

    <!-- Sweetalert css -->
    <link href="{{url('/')}}/assets/admin/adminox/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
          type="text/css"/>


    <!-- App css -->
    <link href="{{url('/')}}/assets/admin/adminox/css/bootstrap.css" rel="stylesheet" type="text/css"
          id="bootstrap-stylesheet"/>

    <link href="{{url('/')}}/assets/admin/adminox/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/app.css" rel="stylesheet" type="text/css" id="app-stylesheet"/>

</head>

<body class="unsticky-header" data-layout="horizontal">

<!-- Begin page -->
<div id="wrapper">

    <!-- Navigation Bar-->
    <header id="topnav">
        <!-- Topbar Start -->
    @include('layouts.admin.topnavigation')
    <!-- end Topbar -->

        <!-- TopMenu Start -->
    @include('layouts.admin.topmenu')
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
                                    <li class="breadcrumb-item active">Parti Girişi</li>
                                </ol>
                            </div>
                            <h4 class="page-title">YENORSAN</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <!-- Clickable Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="header-title">Parti Girişi</h4>
                            <p class="sub-header">

                            </p>

                            <form id="wizard-clickable">
                                <fieldset title="1">
                                    <legend>Müşteri</legend>
                                    <div class="row mt-3">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="musteri_adi" class="col-form-label">Müşteri Seç</label>
                                                <select name="musteri_adi" id="musteri_adi" class="form-control">
                                                    <option value="Demirci">Demirci 1</option>
                                                    <option value="Mustafa">Mustafa 1</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="parti_kalite" class="col-form-label">Kalite Seç</label>
                                                <select name="parti_kalite" id="parti_kalite" class="form-control">
                                                    <option value="1.Sınıf">1. Sınıf</option>
                                                    <option value="1.Prizma">1. Prizma</option>
                                                    <option value="Arta-Kalan">Arta Kalan</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="table-responsive">

                                                <table class="table mb-0 table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kln</th>
                                                        <th>En</th>
                                                        <th>Boy</th>
                                                        <th>dm3</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><input type="text" class="form-control" name="parti_kln_1"
                                                                   id="parti_kln_1"></td>
                                                        <td><input type="text" class="form-control" name="parti_en_1"
                                                                   id="parti_en_1"></td>
                                                        <td><input type="text" class="form-control" name="parti_boy_1"
                                                                   id="parti_boy_1"></td>
                                                        <td><input type="text" class="form-control" name="parti_dm3_1"
                                                                   id="parti_dm3_1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><input type="text" class="form-control" name="parti_kln_2"
                                                                   id="parti_kln_2"></td>
                                                        <td><input type="text" class="form-control" name="parti_en_2"
                                                                   id="parti_en_2"></td>
                                                        <td><input type="text" class="form-control" name="parti_boy_2"
                                                                   id="parti_boy_2"></td>
                                                        <td><input type="text" class="form-control" name="parti_dm3_2"
                                                                   id="parti_dm3_2"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><input type="text" class="form-control" name="parti_kln_3"
                                                                   id="parti_kln_3"></td>
                                                        <td><input type="text" class="form-control" name="parti_en_3"
                                                                   id="parti_en_3"></td>
                                                        <td><input type="text" class="form-control" name="parti_boy_3"
                                                                   id="parti_boy_3"></td>
                                                        <td><input type="text" class="form-control" name="parti_dm3_3"
                                                                   id="parti_dm3_3"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><input type="text" class="form-control" name="parti_kln_4"
                                                                   id="parti_kln_4"></td>
                                                        <td><input type="text" class="form-control" name="parti_en_4"
                                                                   id="parti_en_4"></td>
                                                        <td><input type="text" class="form-control" name="parti_boy_4"
                                                                   id="parti_boy_4"></td>
                                                        <td><input type="text" class="form-control" name="parti_dm3_4"
                                                                   id="parti_dm3_4"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td><input type="text" class="form-control" name="parti_kln_5"
                                                                   id="parti_kln_5"></td>
                                                        <td><input type="text" class="form-control" name="parti_en_5"
                                                                   id="parti_en_5"></td>
                                                        <td><input type="text" class="form-control" name="parti_boy_5"
                                                                   id="parti_boy_5"></td>
                                                        <td><input type="text" class="form-control" name="parti_dm3_5"
                                                                   id="parti_dm3_5"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset title="2">
                                    <legend>10 Parti</legend>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phonenumber1">Phone Number</label>
                                                <input type="text" class="form-control" id="phonenumber1"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="address1">Address</label>
                                                <input type="text" class="form-control" id="address1" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="aboutme1">About Me</label>
                                                <textarea class="form-control" rows="5" id="aboutme1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="currentlocation1">Current Location</label>
                                                <input type="text" class="form-control" id="currentlocation1"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="username">Freelance</label>
                                                <select class="form-control">
                                                    <option>Available</option>
                                                    <option>Unavailable</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset title="3">
                                    <legend>20 Parti</legend>

                                    <div class="row mt-3">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="mdi mdi-facebook"></i></span>
                                                    <input type="text" class="form-control" placeholder="Facebook url">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Linkdin</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="mdi mdi-linkedin"></i></span>
                                                    <input type="text" class="form-control" placeholder="Linkdin url">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="mdi mdi-instagram"></i></span>
                                                    <input type="text" class="form-control" placeholder="Instagram url">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="mdi mdi-twitter"></i></span>
                                                    <input type="text" class="form-control" placeholder="Twitter url">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Skype</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                                    <input type="text" class="form-control" placeholder="Skype url">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Pinterest</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="mdi mdi-pinterest"></i></span>
                                                    <input type="text" class="form-control" placeholder="Pinterest url">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- End row -->


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

<!--Form Wizard-->
<script src="{{url('/')}}/assets/admin/adminox/libs/stepy/jquery.stepy.js"></script>

<!-- Validation init js-->
<script src="{{url('/')}}/assets/admin/adminox/js/pages/wizard.init.js"></script>

<!-- App js -->
<script src="{{url('/')}}/assets/admin/adminox/js/app.min.js"></script>
<!--
<script src="{{url('/')}}/assets/admin/adminox/js/jquery-3.6.0.min.js"></script>
<script src="{{url('/')}}/assets/admin/adminox/js/bootstrap.min.js"></script>
-->
</body>
</html>
