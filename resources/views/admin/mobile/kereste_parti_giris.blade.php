@extends('layouts.admin.mobile.mobile_master')

@section('title','Kereste Giriş')

@section('h1baslik','Kereste Ekle')
@section('h4baslik','Kereste Ekle')

@section('content')

    <div class="row">
        <!-- <div class="col-lg-12 col-xl-6"> -->

        <div class="card mb-8">
            <div class="card-body">
                <h5 class="mb-4"></h5>


                <form action="#" method="post"
                      enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf

                    <div class="form-group">
                        <label for="musteri_id" class="col-form-label">Müşteri Seçiniz</label>
                        <select name="musteri_id" id="musteri_id" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-group">
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

                    <div class="form-group">
                        <table class="table table-bordered" id="orders">

                            <tr>
                                <td>#</td>
                                <th>Kln</th>
                                <th>En</th>
                                <th>Boy</th>
                                <th>dm3</th>
                            </tr>
                            <tr>
                                <td>1 <input class="form-control" type='hidden' data-type="sira_1"
                                             value="#1" id='sira_1'
                                             name='sira[]'/></td>
                                <td style="padding: 2px 1px"><input class="form-control product_price"
                                                                    type='number'
                                                                    data-type="kln"
                                                                    id='kln_1' name='kln[]'
                                                                    for="1"/></td> <!-- purchase_cost -->
                                <td style="padding: 2px 1px"><input class="form-control quantity"
                                                                    type='number'
                                                                    id='eni_1'
                                                                    name='eni[]' for="1"/></td>
                                <td style="padding: 2px 1px"><input class="form-control boy sonrakiSatir"
                                                                    type='number'
                                                                    id='boy_1' name='boy[]' for="1"/>
                                </td>

                                <td style="padding: 2px 1px"><input class="form-control total_cost"
                                                                    type='text'
                                                                    id='toplam_dm_1'
                                                                    name='toplam_dm[]' for='1' readonly/>
                                </td>

                            </tr>
                        </table>
                        <!-- ???? <input class="form-control" type='hidden' data-type="product_id_1" id='product_id_1'
                               name='product_id[]'/> -->
                        <div class="form-group" style="text-align: center;">
                            <button type="button" name="add" id="add" class="btn btn-primary circle">+ Yeni
                                Satır Ekle
                            </button>
                        </div>

                        <div class="line line-dashed line-lg pull-in" style="clear: both;"></div>

                        <label style="margin-right: 10px">Toplam dm3</label>
                        <div class="form-group">
                            <td><input class="form-control subtotal" type='text' id='subtotal'
                                       name='subtotal'
                                       readonly/></td>
                        </div>
                        <br />
                        <div class="form-group">
                            <button type="submit" class="btn btn-success  btn-block mb-1">
                                <i class="simple-icon-check"></i> Kaydet
                            </button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <!-- </div> -->
    </div>




    <div class="row mt-3">
        <div class="col-lg-12 col-xl-6">


            <div class="card mb-4">
                <div class="card-body">

                </div>
            </div>


        </div>
    </div>

    <!-- Parti giris tablosu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">

        //enter engelleme
        $(document).ready(function () {
            $(window).keydown(function (event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });

        $(".sonrakiSatir").keyup(function (event) {
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

@endsection
