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
    <!-- Self css -->
    <link href="{{url('/')}}/assets/admin/adminox/css/self.css" rel="stylesheet" type="text/css" id="self-stylesheet"/>

    <link href="{{url('/')}}/assets/admin/adminox/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/assets/admin/adminox/css/app.css" rel="stylesheet" type="text/css" id="app-stylesheet"/>


    <!-- Parti giris tablosu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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

                <div class="card-box">
                    <div class="col-md-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                            <form action="{{ route('admin.musteripartikaydet') }}" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">
                                @csrf
                                <div class="row mt-3">
                                <div class="form-group col-md-6">
                                    <label for="musteri_id" class="col-form-label">Müşteri Seçiniz</label>
                                    <select name="musteri_id" id="musteri_id" class="form-control">
                                        @foreach($musteriBilgileri as $musteri)
                                        <option value="{{$musteri->id}}">{{$musteri->musteriadi}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="urun_kalitesi" class="col-form-label">Ürün Kalitesi</label>
                                    <select name="urun_kalitesi" id="urun_kalitesi" class="form-control">
                                        <option value="K01.01">1.Snf Kayın Kereste</option>
                                        <option value="K01.02">2.Snf Kayın Kereste</option>
                                        <option value="K01.03">3.Snf Kayın Kereste</option>
                                        <option value="K01.04">4.Snf Kayın Kereste</option>
                                        <option value="K01.05">Iskarta Kayın Kereste</option>
                                        <option value="K01.01.P">1.Snf Kayın Prizma</option>
                                        <option value="K01.02.P">2.Snf Kayın Prizma</option>
                                        <option value="K01.03.P">3.Snf Kayın Prizma</option>
                                        <option value="K01.04.P">4.Snf Kayın Prizma</option>
                                        <option value="K02.01">1.Snf Meşe Kereste</option>
                                        <option value="K02.02">2.Snf Meşe Kereste</option>
                                        <option value="K02.03">3.Snf Meşe Kereste</option>
                                        <option value="K02.04">4.Snf Meşe Kereste</option>

                                    </select>
                                </div>
                                </div>


                            <table class="table table-bordered" id="orders">
                                <button type="button" name="add" id="add" class="btn btn-primary circle">+ Yeni
                                    Satır Ekle
                                </button>
                                <tr>
                                    <td>#</td>
                                    <th>Kln</th>
                                    <th>En</th>
                                    <th>Boy</th>
                                    <th>dm3</th>
                                </tr>
                                <tr>
                                    <td>1 <input class="form-control" type='hidden' data-type="sira_1" value="#1" id='sira_1'
                                                 name='sira[]'/></td>
                                    <td style="padding: 2px 1px"><input class="form-control product_price"
                                                                        type='number'
                                                                        data-type="kln"
                                                                        id='kln_1' name='kln[]'
                                                                        for="1"/></td> <!-- purchase_cost -->
                                    <td style="padding: 2px 1px"><input class="form-control quantity" type='number'
                                                                        id='eni_1'
                                                                        name='eni[]' for="1"/></td>
                                    <td style="padding: 2px 1px"><input class="form-control boy sonrakiSatir" type='number'
                                                                        id='boy_1' name='boy[]' for="1"/>
                                    </td>

                                    <td style="padding: 2px 1px"><input class="form-control total_cost" type='text'
                                                                        id='toplam_dm_1'
                                                                        name='toplam_dm[]' for='1' readonly/></td>

                                </tr>
                            </table>
                            <!-- ???? <input class="form-control" type='hidden' data-type="product_id_1" id='product_id_1'
                                   name='product_id[]'/> -->

                            <div class="line line-dashed line-lg pull-in" style="clear: both;"></div>

                            <label style="margin-right: 10px">Toplam dm3</label>
                            <div class="form-group">
                                <td><input class="form-control subtotal" type='text' id='subtotal' name='subtotal'
                                           readonly/></td>
                            </div>

                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-check-square"></i>  Kaydet
                                </button>
                            </form>
                    </div>


                </div> <!-- end container-fluid -->

            </div> <!-- end content -->


            <script type="text/javascript">

                //enter engelleme
                $(document).ready(function() {
                    $(window).keydown(function(event){
                        if(event.keyCode == 13) {
                            event.preventDefault();
                            return false;
                        }
                    });
                });

                $(".sonrakiSatir").keyup(function(event) {
                    if (event.keyCode === 13) {
                        $("#add").click();
                    }
                });


                var rowCount = 1;

                $('#add').click(function () {
                    rowCount++;

                   // $('#orders').append('<tr id="row' + rowCount + '"><td>' + rowCount + '</td><td style="padding: 2px 1px"><input class="form-control product_price" type="number" data-type="kln" id="kln_' + rowCount + '" name="kln[]" for="' + rowCount + '"/></td><input class="form-control" type="hidden" data-type="product_id" id="product_id_' + rowCount + '" name="product_id[]" for="' + rowCount + '"/><td style="padding: 2px 1px"><input class="form-control quantity" type="number" class="quantity" id="eni_' + rowCount + '" name="eni[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control boy" type="number" class="boy" id="boy_' + rowCount + '" name="boy[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control total_cost" type="text" id="toplam_dm_' + rowCount + '" name="toplam_dm[]" for="' + rowCount + '" readonly/></td></tr>');
                    $('#orders').append('<tr id="row' + rowCount + '"><td>' + rowCount + '<input class="form-control" type="hidden" data-type="sira" value="#' + rowCount + '" id="sira_' + rowCount + '" name="sira[]"/></td><td style="padding: 2px 1px"><input class="form-control product_price" type="number" data-type="kln" id="kln_' + rowCount + '" name="kln[]" for="' + rowCount + '"/></td><input class="form-control" type="hidden" data-type="product_id" id="product_id_' + rowCount + '" name="product_id[]" for="' + rowCount + '"/><td style="padding: 2px 1px"><input class="form-control quantity" type="number" class="quantity" id="eni_' + rowCount + '" name="eni[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control boy sonrakiSatir" type="number" class="boy" id="boy_' + rowCount + '" name="boy[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control total_cost" type="text" id="toplam_dm_' + rowCount + '" name="toplam_dm[]" for="' + rowCount + '" readonly/></td></tr>');

                });

                // Add a generic event listener for any change on quantity or price classed inputs
                $("#orders").on('input', 'input.eni,input.kln,input.boy', function () {
                    getTotalCost($(this).attr("for"));
                });

                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr('id');
                    $('#row' + button_id + '').remove();
                });

                // Using a new index rather than your global variable i
                function getTotalCost(ind) {
                    var qty = $('#eni_' + ind).val();
                    var price = $('#kln_' + ind).val();
                    var boy = $('#boy_' + ind).val();
                    var totNumber = Math.round((qty * price * boy) / 1000);
                    var tot = totNumber.toFixed(0);

                    $('#toplam_dm_' + ind).val(tot);
                    calculateSubTotal();
                }

                function calculateSubTotal() {
                    var subtotal = 0;
                    $('.total_cost').each(function () {
                        subtotal += parseFloat($(this).val());
                    });
                    $('#subtotal').val(subtotal);
                }

            </script>


            <!-- Footer Start -->
        @include('layouts.admin.footer')
        <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
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
