<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Yenorsan - Mobile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/assets/admin/adminox/images/favicon.ico">

    <!-- App css -->
    <link href="{{url('/')}}/assets/admin/adminox/css/bootstrap.min.css" rel="stylesheet" type="text/css"
          id="bootstrap-stylesheet"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/app.min.css" rel="stylesheet" type="text/css"
          id="app-stylesheet"/>

</head>
<style>
    .bg-primary {
        background: url("{{url('/')}}/assets/admin/adminox/images/login-img.jpg")!important;
        background-repeat: no-repeat;
    }
</style>
<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

<div class="home-btn d-none d-sm-block">
    <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
</div>

<div class="account-pages w-100 mt-5 mb-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mb-0">

                    <div class="card-body p-4">

                        <div class="account-box">

                            <div class="account-logo-box">
                                <div class="text-center">

                                    <img src="{{url('/')}}/assets/admin/adminox/images/yenorsan-mobile.png" alt=""
                                         height="30" style="width: 164px; height: 52px">

                                </div>
                            </div>
                            <div class="mt-4">
                                <!-- <h5 class="">Giriş Yap</h5> -->
                                @if(\Session::has('message'))
                                    <div class="alert alert-danger">
                                        <p><br>{{ \Session::get('message') }}</p>
                                    </div>
                                @endif
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <p><br>{{ \Session::get('success') }}</p>
                                    </div>
                                    @endif
                                    </divmt-4>

                                    <div class="account-content mt-4">
                                        <form action="{{url('/')}}/mobile/login" method="post" class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="emailaddress">Kullanıcı Adı</label>
                                                    <input class="form-control" type="email" name="email" id="email"
                                                           value="yusuf.odabas.78@gmail.com"  required placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <!--
                                                    <a href="page-recoverpw.html" class="text-muted float-right"><small>Şifremi Unuttum</small></a>
                                                    -->
                                                    <label for="password">Şifre</label>
                                                    <input class="form-control" type="password" name="password"
                                                           value="123456789" id="password" required placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" name="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Beni Hatırla
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center mt-2">
                                                <div class="col-12">
                                                    <button
                                                        class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                        type="submit">Giriş Yap
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                        <!--
                                            <div class="row">
                                             Social Media Accounts
                                            </div>
                                        -->


                                    </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
</div>

<!-- Vendor js -->
<script src="{{url('/')}}/assets/admin/adminox/js/vendor.min.js"></script>

<!-- App js -->
<script src="{{url('/')}}/assets/admin/adminox/js/app.min.js"></script>

</body>

</html>
