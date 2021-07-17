@extends('layouts.admin.amaster')

@section('title','Müşteri Ekle')

@section('h4baslik','Müşteri Ekle')

@section('content')

    <!-- end col -->
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


    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title">Müşteri Detayı</h4>

                <p class="sub-header">

                </p>


                <form action="{{ route('admin.musteri.store') }}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4" class="col-form-label">Müşteri Adı</label>
                        <input type="text" class="form-control" value="{{old('musteri_adi')}}" name="musteri_adi" id="musteri_adi"
                               placeholder="Müşteri Adı" autocomplete="off" required >
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Telefon</label>
                            <input type="text" class="form-control" value="{{old('musteri_tel')}}" name="musteri_tel" id="musteri_tel"
                                   placeholder="Telefon" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="musteri_adres" class="col-form-label">Adres</label>
                            <select name="musteri_adres" id="musteri_adres" class="form-control">
                                <option value="Adana">Adana</option>
                                <option value="Adıyaman">Adıyaman</option>
                                <option value="Afyonkarahisar">Afyonkarahisar</option>
                                <option value="Ağrı">Ağrı</option>
                                <option value="Amasya">Amasya</option>
                                <option value="Ankara">Ankara</option>
                                <option value="Antalya">Antalya</option>
                                <option value="Artvin">Artvin</option>
                                <option value="Aydın">Aydın</option>
                                <option value="Balıkesir">Balıkesir</option>
                                <option value="Bilecik">Bilecik</option>
                                <option value="Bingöl">Bingöl</option>
                                <option value="Bitlis">Bitlis</option>
                                <option value="Bolu">Bolu</option>
                                <option value="Burdur">Burdur</option>
                                <option value="Bursa">Bursa</option>
                                <option value="Çanakkale">Çanakkale</option>
                                <option value="Çankırı">Çankırı</option>
                                <option value="Çorum">Çorum</option>
                                <option value="Denizli">Denizli</option>
                                <option value="Diyarbakır">Diyarbakır</option>
                                <option value="Edirne">Edirne</option>
                                <option value="Elazığ">Elazığ</option>
                                <option value="Erzincan">Erzincan</option>
                                <option value="Erzurum">Erzurum</option>
                                <option value="Eskişehir">Eskişehir</option>
                                <option value="Gaziantep">Gaziantep</option>
                                <option value="Giresun">Giresun</option>
                                <option value="Gümüşhane">Gümüşhane</option>
                                <option value="Hakkâri">Hakkâri</option>
                                <option value="Hatay">Hatay</option>
                                <option value="Isparta">Isparta</option>
                                <option value="Mersin">Mersin</option>
                                <option value="İstanbul">İstanbul</option>
                                <option value="İzmir">İzmir</option>
                                <option value="Kars">Kars</option>
                                <option value="Kastamonu">Kastamonu</option>
                                <option value="Kayseri">Kayseri</option>
                                <option value="Kırklareli">Kırklareli</option>
                                <option value="Kırşehir">Kırşehir</option>
                                <option value="Kocaeli">Kocaeli</option>
                                <option value="Konya">Konya</option>
                                <option value="Kütahya">Kütahya</option>
                                <option value="Malatya">Malatya</option>
                                <option value="Manisa">Manisa</option>
                                <option value="Kahramanmaraş">Kahramanmaraş</option>
                                <option value="Mardin">Mardin</option>
                                <option value="Muğla">Muğla</option>
                                <option value="Muş">Muş</option>
                                <option value="Nevşehir">Nevşehir</option>
                                <option value="Niğde">Niğde</option>
                                <option value="Ordu">Ordu</option>
                                <option value="Rize">Rize</option>
                                <option value="Sakarya">Sakarya</option>
                                <option value="Samsun">Samsun</option>
                                <option value="Siirt">Siirt</option>
                                <option value="Sinop">Sinop</option>
                                <option value="Sivas">Sivas</option>
                                <option value="Tekirdağ">Tekirdağ</option>
                                <option value="Tokat">Tokat</option>
                                <option value="Trabzon">Trabzon</option>
                                <option value="Tunceli">Tunceli</option>
                                <option value="Şanlıurfa">Şanlıurfa</option>
                                <option value="Uşak">Uşak</option>
                                <option value="Van">Van</option>
                                <option value="Yozgat">Yozgat</option>
                                <option value="Zonguldak">Zonguldak</option>
                                <option value="Aksaray">Aksaray</option>
                                <option value="Bayburt">Bayburt</option>
                                <option value="Karaman">Karaman</option>
                                <option value="Kırıkkale">Kırıkkale</option>
                                <option value="Batman">Batman</option>
                                <option value="Şırnak">Şırnak</option>
                                <option value="Bartın">Bartın</option>
                                <option value="Ardahan">Ardahan</option>
                                <option value="Iğdır">Iğdır</option>
                                <option value="Yalova">Yalova</option>
                                <option value="Karabük" selected="selected">Karabük</option>
                                <option value="Kilis">Kilis</option>
                                <option value="Osmaniye">Osmaniye</option>
                                <option value="Düzce">Düzce</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkmeout" required>
                            <label class="custom-control-label" for="checkmeout">Doğrula</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fe-plus"></i> Ekle</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title">Müşteri Listesi</h4>
                <p class="sub-header"></p>
                <div class="table-responsive">
                    <table id="demo-foo-filtering" class="table table-striped toggle-circle mb-0"
                           data-page-size="20">
                        <thead>
                        <tr>
                            <th width="25%">Sıra</th>
                            <th data-toggle="true">Müşteri Adı</th>
                            <th data-hide="phone, tablet">Telefon</th>
                            <th data-hide="phone, tablet">Adres</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($musteriler->sortBy('id') as $musteri)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$musteri->musteriadi}}</td>
                                <td>{{$musteri->tel}}</td>
                                <td>{{$musteri->adres}}</td>

                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="5">
                                <div class="text-right">
                                    <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>

    </div>

@endsection
