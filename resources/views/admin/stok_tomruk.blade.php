@extends('layouts.admin.amaster')

@section('title','Kereste Stok Durumu')

@section('h4baslik',' ')

@section('content')




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });

    </script>


    <div class="row">
        <div class="col-md-2">
            <div class="card-box"> <h4 class="header-title"> Filtreleme </h4> <br />
                <div class="col-12 text-sm-center">

                    Seç:
                    <div class="form-group">
                        <select id="demo-foo-filter-status" class="custom-select" style="">
                            <option value="">Tümünü Göster</option>
                            <option value="Depoda">Depodakiler</option>
                            <option value="Satıldı">Satılanlar</option>
                        </select>
                    </div>

                    <br />
                    Ara :
                    <div class="form-group" style="">
                        <input id="demo-foo-search" type="text" placeholder="Depoda Ara" class="form-control"
                               autocomplete="on">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-10">
            @include('admin.flash-message')
            <div class="card-box">
                <div style="">
                    <h4 class="header-title"> Parti Seç
                    </h4>
                </div>
                <div class="col-4" style="">


                </div>
                <p class="sub-header">

                </p>
                <div class="col-4">

                </div>
                <strong><u>Tablodaki Parti Sayısı :</u> <label id="toplamSatir"
                                                              style="font-size:16px ;margin: 0px 10px;"> </label>
                </strong>

                <div class="mb-3">
                    <div class="row">
                        <!-- <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-3">

                                <select id="demo-foo-filter-status" class="custom-select" style="visibility: hidden;">
                                    <option value="">Tümünü Göster</option>
                                    <option value="active">Aktif</option>
                                    <option value="disabled">Pasif</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                            <div class="form-group" style=" position: absolute; right: 20px;">
                                <input id="demo-foo-search" type="text" placeholder="Depoda Ara" class="form-control"
                                       autocomplete="on">
                            </div>
                        </div> -->
                    </div>
                </div>


                <div class="table-responsive">
                    <table id="demo-foo-filtering" class="table table-hover table-striped toggle-circle mb-0"
                           data-page-size="50">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th data-toggle="true" style="text-align: center;">Müşteri Adı</th>
                            <th data-hide="" style="text-align: center;">Ürün Türü</th>
                            <th data-hide="" style="text-align: center;">Ağaç Türü</th>
                            <th data-hide="" style="text-align: center;">Kalite</th>
                            <th data-hide="" style="text-align: center;">Boy</th>
                            <th data-hide="" style="text-align: center;">Çap</th>
                            <th data-hide="" style="text-align: center;">Araç Plaka</th>
                            <th data-hide="" style="text-align: center;">Nakliye No</th>
                            <th data-hide="" style="text-align: center;">Miktar x Adet</th>
                            <th data-hide="" style="text-align: center;">Durum</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($joinTables->sortBy('id') as $joinTable)
                            <tr class='clickable-row satirSay'
                                data-href='#'>
                                @if($joinTable->id<10)
                                    <td style="font-size: 13px">0{{$joinTable->id}}</td>
                                @else
                                    <td>{{$joinTable->id}}</td>
                                @endif
                                <td style="text-align: center;">{{$joinTable->musteriadi}}</td>
                                <td style="text-align: center;">{{$joinTable->urun_turu}}</td>
                                <td style="text-align: center;">{{$joinTable->agac_turu}}</td>
                                <td style="text-align: center;">{{$joinTable->sinif_kodu}}</td>
                                <td style="text-align: center;">{{$joinTable->boy_kodu}}</td>
                                <td style="text-align: center;">{{$joinTable->cap_kodu}}</td>
                                <td style="text-align: center;">{{$joinTable->arac_plaka}}</td>
                                <td style="text-align: center;">{{$joinTable->nakliye_seri_no}}</td>
                                <td style="text-align: center; font-weight: bold; font-size:13px;">
                                    {{$joinTable->miktar}} m³ x {{$joinTable->adet}} adet
                                </td>
                                <td style="text-align: center;">
                                    @if($joinTable->durum == 'Satıldı' )
                                        <b style="color: green;">{{$joinTable->durum}}</b>
                                    @else
                                        {{$joinTable->durum}}
                                    @endif
                                </td>
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


    <script>


        // Parti Sayısı
        var satirSayisi = $(".satirSay").length;
        $('#toplamSatir').text(satirSayisi);
    </script>

@endsection
