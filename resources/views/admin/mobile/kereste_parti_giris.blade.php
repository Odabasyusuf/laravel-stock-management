@extends('layouts.admin.mobile.mobile_master')

@section('title','Kereste Giriş')

@section('h1baslik','Kereste Ekle')
@section('h4baslik','Kereste Ekle')

@section('content')

        @include('admin.flash-message')

    <div class="row" style="margin: 0px 0px">
        <!-- <div class="col-lg-12 col-xl-6"> -->

      <!--   <div class="card mb-8">
            <div class="card-body"> -->
                <h5 class="mb-4"></h5>


                <form action="{{ route('admin.mobile.kerestepartikaydet') }}" method="post"
                      enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf

                    <div class="form-group">
                        <label for="musteri_id" class="col-form-label">Servis Sağlayan</label>
                        <input type="text" class="form-control textbox-b-line" name="servis_saglayan_1" id="servis_saglayan_1" value="YENORSAN A.Ş." style="text-align: center">
                        <input type="text" class="form-control mt-1 textbox-b-line" name="servis_saglayan_2" id="servis_saglayan_2" value="Tel: 0546 648 1350 - Yenice/Karabük" style="text-align: center">
                    </div> <div class="form-group">
                        <label for="musteri_id" class="col-form-label">Müşteri: </label>
                        <!--<select name="musteri_id" id="musteri_id" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>-->
                        <input type="text" class="form-control textbox-b-line" name="musteri_adi" id="musteri_adi" list="musterilistesi" style="text-align: center" required autocomplete="off">
                        <datalist id="musterilistesi">
                            @foreach($musteriler as $musteri)
                                <option value="{{$musteri}}" />
                            @endforeach
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="agac_turu" class="col-form-label">Ağaç Türü</label>
                        <select name="agac_turu" id="agac_turu" class="form-control">
                            <<option value="" selected="selected">Seçiniz</option>
                            <option value="Kızılçam">Kızılçam</option>
                            <option value="Karaçam">Karaçam</option>
                            <option value="Sarıçam">Sarıçam</option>
                            <option value="Göknar">Göknar</option>
                            <option value="Ladin">Ladin</option>
                            <option value="Fıstık Çamı">Fıstık Çamı</option>
                            <option value="Ardıç">Ardıç</option>
                            <option value="Sedir">Sedir</option>
                            <option value="Diğer İbreli">Diğer İbreli</option>
                            <option value="Kayın">Kayın</option>
                            <option value="Meşe">Meşe</option>
                            <option value="Ihlamur">Ihlamur</option>
                            <option value="Kavak">Kavak</option>
                            <option value="Akçaağaç">Akçaağaç</option>
                            <option value="Dişbudak">Dişbudak</option>
                            <option value="Karaağaç">Karaağaç</option>
                            <option value="Kestane">Kestane</option>
                            <option value="Kızılağaç">Kızılağaç</option>
                            <option value="Diğer Yapraklı">Diğer Yapraklı</option>
                            <option value="Çınar">Çınar</option>
                            <option value="Şamdan Sediri">Şamdan Sediri</option>
                            <option value="Fındık">Fındık</option>
                            <option value="Ceviz">Ceviz</option>
                            <option value="Gürgen">Gürgen</option>
                            <option value="Selvi">Selvi</option>
                            <option value="Kayacık">Kayacık</option>
                            <option value="Kızılcık">Kızılcık</option>
                            <option value="Belirsiz">Belirsiz</option>
                            <option value="Saçlı Meşesi">Saçlı Meşesi</option>
                            <option value="Pırnal Meşesi">Pırnal Meşesi</option>
                            <option value="Badem">Badem</option>
                            <option value="Koca Yemiş">Koca Yemiş</option>
                            <option value="Maki">Maki</option>
                            <option value="Ilgın">Ilgın</option>
                            <option value="Kıbrıs Akasyası">Kıbrıs Akasyası</option>
                            <option value="Yalancı Akasya">Yalancı Akasya</option>
                            <option value="Ahlat">Ahlat</option>
                            <option value="Yabani Kiraz">Yabani Kiraz (Mahlep)</option>
                            <option value="Üvez">Üvez</option>
                            <option value="Kasnak Meşesi">Kasnak Meşesi</option>
                            <option value="Kermes Meşesi">Kermes Meşesi</option>
                            <option value="Harnup">Harnup</option>
                            <option value="Çitlembik">Çitlembik</option>
                            <option value="Menengiç">Menengiç</option>
                            <option value="Sakız">Sakız</option>
                            <option value="Sandal">Sandal</option>
                            <option value="Akçakesme">Akçakesme</option>
                            <option value="Hurma">Hurma</option>
                            <option value="Yalankoz">Yalankoz</option>
                            <option value="Aylantus">Aylantus</option>
                            <option value="İğde">İğde</option>
                            <option value="Antep Fıstığı">Antep Fıstığı</option>
                            <option value="Istranca Meşesi">Istranca Meşesi</option>
                            <option value="Çampinus">Çampinus</option>
                            <option value="Yabani Fındık">Yabani Fındık</option>
                            <option value="Diğer Çam<">Diğer Çam</option>
                            <option value="Camiyanı Karaçamı">Camiyanı Karaçamı</option>
                            <option value="Alıç">Alıç</option>
                            <option value="Porsuk">Porsuk</option>
                            <option value="Lübnan Meşesi">Lübnan Meşesi</option>
                            <option value="Okaliptus">Okaliptus</option>
                            <option value="Titrekkavak">Titrekkavak</option>
                            <option value="Makedonya Meşesi">Makedonya Meşesi</option>
                            <option value="Halep Çamı">Halep Çamı</option>
                            <option value="Sahil Çamı">Sahil Çamı</option>
                            <option value="Radiata Çamı">Radiata Çamı</option>
                            <option value="Duglaz">Duglaz</option>
                            <option value="Andız">Andız</option>
                            <option value="Teada Çamı">Teada Çamı</option>
                            <option value="Elderica Çamı">Elderica Çamı</option>
                            <option value="Melez">Melez (larix)</option>
                            <option value="Mazı">Mazı</option>
                            <option value="Sığla">Sığla</option>
                            <option value="Söğüt">Söğüt</option>
                            <option value="Huş">Huş</option>
                            <option value="Defne">Defne</option>
                            <option value="Şimşir">Şimşir</option>
                            <option value="Orman Gülü">Orman Gülü</option>
                            <option value="Yabani Zeytin">Yabani Zeytin</option>
                            <option value="Palamut Meşesi">Palamut Meşesi</option>
                            <option value="Saplı Meşe">Saplı Meşe</option>
                            <option value="Sapsız Meşe">Sapsız Meşe</option>
                            <option value="Macar Meşesi">Macar Meşesi</option>
                            <option value="Tüylü Meşe">Tüylü Meşe</option>
                            <option value="Mazı Meşesi">Mazı Meşesi</option>
                        </select>
                    </div>
 <div class="form-group">
                        <label for="urun_kalitesi" class="col-form-label">Ürün Kalitesi</label>
                        <select name="urun_kalitesi" id="urun_kalitesi" class="form-control">
                            <option value="1. Sınıf">1. Sınıf</option>
                            <option value="2. Sınıf">2. Sınıf</option>
                            <option value="3. Sınıf">3. Sınıf</option>
                            <option value="1. Sınıf Prizma">1. Sınıf Prizma</option>
                            <option value="2. Sınıf Prizma">2. Sınıf Prizma</option>
                            <option value="3. Sınıf Prizma">3. Sınıf Prizma</option>
                            <option value="Arta Kalan">Arta Kalan</option>
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
                                <td style="padding: 2px 1px"><input class="form-control product_price kalinlik"
                                                                    type='number'
                                                                    id='kln_1' name='kln[]'
                                                                    for="1"/></td> <!-- purchase_cost -->
                                <td style="padding: 2px 1px"><input class="form-control quantity eni"
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
                            <button type="button" name="add" id="add" class="btn btn-primary circle" style="display: none;">+ Yeni
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
        <!-- </div>
           </div>-->
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
        $(document).on("keyup",'input.kalinlik',function() {
            if ($(this).val().length == 1) {
                $(this).parent('td').next('td').find('input').focus();
            }
        });
        $(document).on("keyup",'input.eni',function() {
            if ($(this).val().length == 2) {
                $(this).parent('td').next('td').find('input').focus();
            }
        });
        $(document).on("keyup",'input.boy',function() {
            if ($(this).val().length == 3) {
                $("#add").click();

                var asd = $('.kalinlik').val();
                $('.kalinlik').val(asd);

                $(this).parent().parent().next('tr').find('.eni').focus();


            }
        });

        var rowCount = 1;

        $('#add').click(function () {
            rowCount++;

            // $('#orders').append('<tr id="row' + rowCount + '"><td>' + rowCount + '</td><td style="padding: 2px 1px"><input class="form-control product_price" type="number" data-type="kln" id="kln_' + rowCount + '" name="kln[]" for="' + rowCount + '"/></td><input class="form-control" type="hidden" data-type="product_id" id="product_id_' + rowCount + '" name="product_id[]" for="' + rowCount + '"/><td style="padding: 2px 1px"><input class="form-control quantity" type="number" class="quantity" id="eni_' + rowCount + '" name="eni[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control boy" type="number" class="boy" id="boy_' + rowCount + '" name="boy[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control total_cost" type="text" id="toplam_dm_' + rowCount + '" name="toplam_dm[]" for="' + rowCount + '" readonly/></td></tr>');
            $('#orders').append('<tr id="row' + rowCount + '"><td>' + rowCount + '<input class="form-control" type="hidden" data-type="sira" value="#' + rowCount + '" id="sira_' + rowCount + '" name="sira[]"/></td><td style="padding: 2px 1px"><input class="form-control kalinlik product_price" type="number" id="kln_' + rowCount + '" name="kln[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control quantity eni" type="number" class="quantity" id="eni_' + rowCount + '" name="eni[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control boy sonrakiSatir" type="number" class="boy" id="boy_' + rowCount + '" name="boy[]" for="' + rowCount + '"/></td><td style="padding: 2px 1px"><input class="form-control total_cost" type="text" id="toplam_dm_' + rowCount + '" name="toplam_dm[]" value="0" for="' + rowCount + '" readonly/></td></tr>');

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
            var en = $('#eni_' + ind).val();
            var kln = $('#kln_' + ind).val();
            var boy = $('#boy_' + ind).val();
            var totNumber = en * kln * boy;
            var totNumber2 = Math.round(totNumber / 1000);
            var tot = totNumber2.toFixed(0);

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
