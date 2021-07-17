@extends('layouts.admin.amaster')

@section('title','Hammadde Girişi')

@section('h4baslik','Hammadde Girişi')

@section('content')


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card-box">

                <p class="sub-header">
                    @include('admin.flash-message')
                </p>


                <form action="{{ route('admin.tomrukgiriskaydet') }}" method="post"
                      enctype="multipart/form-data"
                      class="form-horizontal">
                @csrf

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="miktar">Miktar (m3)</label>
                        <input type="text" class="form-control" name="miktar" id="miktar" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="adet">Adet</label>
                        <input type="text" class="form-control" name="adet" id="adet" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="musteri_adi">Müşteri / Mal Sahibi</label>
                        <input type="text" class="form-control" name="musteri_adi" id="musteri_adi" list="musterilistesi" required autocomplete="off">
                        <datalist id="musterilistesi" style = "display:none;">
                            @foreach($musteriler as $musteri)
                                <option value="{{$musteri}}" />
                            @endforeach
                        </datalist>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="arac_plaka">Araç Plakası</label>
                        <input type="text" class="form-control" name="arac_plaka" id="arac_plaka" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="nakliye_seri_no">Nakliye Tezkere Seri/No</label>
                        <input type="text" class="form-control" name="nakliye_seri_no" id="nakliye_seri_no" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="agac_turu" class="col-form-label">Ağaç Türü</label>
                        <select name="agac_turu" id="agac_turu" class="form-control">

                            <option value="" selected="selected">Seçiniz</option>
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

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="gelis_yeri">Ürünleri Satan İşletme</label>
                        <input type="text" class="form-control" name="gelis_yeri" id="gelis_yeri" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="emval_yeri">Emvalin Bulunduğu Yer</label>
                        <input type="text" class="form-control" name="emval_yeri" id="emval_yeri" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="urun_turu">Ürün Türü</label>
                        <select name="urun_turu" id="urun_turu" class="form-control">
                            <option value="" selected="selected">Seçiniz</option>
                            <option>Tomruk</option>
                            <option>Tel Direği</option>
                            <option>Maden Direği</option>
                            <option>Sanayi Odunu</option>
                            <option>Kağıtlık Odun</option>
                            <option>Kabuklu Kağıtlık Odun</option>
                            <option>Lif Yonga Odunu</option>
                            <option>İnce ve Yarma Sanayi Odunu</option>
                            <option>Yakacak Odun</option>
                            <option>Sırık</option>
                            <option>Çubuk</option>
                            <option>Dikili Ağaç</option>
                            <option>Talaş Odunu</option>
                            <option>Kabuklu İbreli Maden Direk (8-14)</option>
                            <option>Kabuksuz İbreli Maden Direk (8-14)</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="sinif_kodu">Sınıf Kodu</label>
                        <select name="sinif_kodu" id="sinif_kodu" class="form-control">
                            <option value="" selected="selected">Seçiniz</option>
                            <option value="1.Sınıf">1.Sınıf</option>
                            <option value="2.Sınıf">2.Sınıf</option>
                            <option value="3.Sınıf">3.Sınıf</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label" for="boy_kodu">Boy Kodu</label>
                        <select name="boy_kodu" id="boy_kodu" class="form-control">
                            <option value="" selected="selected">Seçiniz</option>
                            <option value="Kısa">Kısa</option>
                            <option value="Normal">Normal</option>
                            <option value="Uzun">Uzun</option>
                        </select>
                    </div>


                    <div class="form-group mb-2 col-md-12">
                        <label class="col-form-label" for="cap_kodu">Çap Kodu</label>
                        <select name="cap_kodu" id="cap_kodu" class="form-control">
                            <option value=""  selected="selected">Seçiniz</option>
                            <option value="İnce">İnce</option>
                            <option value="Kalın">Kalın</option>
                            <option value="Pacal">Pacal</option>
                        </select>
                    </div>


                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-check-square"></i> Kaydet
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
   <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

@endsection
