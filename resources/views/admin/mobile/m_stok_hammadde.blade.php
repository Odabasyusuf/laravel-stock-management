@extends('layouts.admin.mobile.mobile_master')

@section('title','Yenorsan')

@section('h1baslik','Yenorsan')
@section('h4baslik','Yenorsan')

@section('content')

    @include('admin.flash-message')


    <div class="row">
        <div class="col-12">
            <div class="top-right-button-container">
                <div class="btn-group">
                    <!-- asd -->
                </div>
            </div>
            <div class="col-12 mb-3">

            <!--
                <div class="col-sm-6">
                    <label>Müşteri Seç</label>
                    <select class="form-control select2-single" data-width="100%" tabindex="-1" aria-hidden="true">
                        <option label="&nbsp;">&nbsp;</option>
                        @foreach($musteriler->sortBy('id') as $musteri)
                        <option value="{{$musteri->id}}">{{$musteri->musteriadi}}</option>
                        @endforeach
                    </select>
                </div>
                -->
            </div>
        </div>
    </div>



    <!--
       eski tablo . blade . php

    -->





    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1></h1>




                <div class="mb-2">

                    <div class="d-block d-md-inline-block stok-tablo-arama-button">
                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input class="form-control" placeholder="Ara" id="searchDatatable">
                        </div>
                    </div>
                    <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                        <span class="text-muted text-small">Displaying 1-20 of 40 items</span>
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="" aria-expanded="false">10</button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1099px, -71px, 0px);">
                            <a class="dropdown-item active" href="#">10</a>
                            <a class="dropdown-item" href="#">20</a>
                            <a class="dropdown-item" href="#">50</a>
                        </div>
                    </div>

                </div>
                <div class="separator"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                <div id="datatableRows_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                    <table id="datatableRows" class="data-table nowrap dataTable no-footer dtr-inline"
                           data-order="[[ 1, &quot;asc&quot; ]]" role="grid" style="width: 1245px;">
                        <thead>
                        <tr role="row">
                            <th style="display:none;" class="" tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1"
                                aria-label="Name: activate to sort column ascending">Blok No
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="datatableRows" rowspan="1" colspan="1"
                                style="width: 144px;" aria-label="Sales: activate to sort column ascending"
                                aria-sort="descending">Detay
                            </th>
                            <th style="display:none;">
                            </th>
                            <th style="display:none;">
                            </th>
                            <th style="display:none;">
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($joinTables as $parti)
                            <tr role="row" class="odd">
                                <td tabindex="0" style="display:none;">
                                    <p class="list-item-heading" style="text-align: center">#{{$parti->id}}</p>
                                </td><td tabindex="0">
                                    <i class="list-item-heading">


                                        <p class="mb-0">
                                            @if($parti->durum == "Depoda")
                                                <button class="btn btn-primary mb-1 btn-block" type="button" data-toggle="collapse" data-target="#collapseExample{{$parti->id}}" aria-expanded="true" aria-controls="collapseExample">
                                                    @else
                                                        <button class="btn btn-success   mb-1 btn-block" type="button" data-toggle="collapse" data-target="#collapseExample{{$parti->id}}" aria-expanded="true" aria-controls="collapseExample">
                                                            @endif
                                                            @if($parti->durum == "Depoda")
                                                                <div style="float: left;margin-left: -10px;margin-right: 5px"> <strong>#{{$parti->id}} </strong></div> {{$parti->musteriadi}}  |  {{$parti->durum}}     <span class="badge badge-light"> {{$parti->miktar}} m³ x {{$parti->adet}} adet </span>
                                                            @else
                                                                <div style="float: left;margin-left: -10px;margin-right: 5px"> <strong>#{{$parti->id}} </strong></div>   Çıkış Yapıldı      <span class="badge badge-light"> {{$parti->miktar}} m³ x {{$parti->adet}} adet
                                                            @endif
                                                        </button>
                                        </p>
                                        <div class="collapse" id="collapseExample{{$parti->id}}" style="">
                                            <div class="p-4 border mt-2">
                                                <p class="mb-0">
                                                    <strong>Blok No :</strong> {{$parti->id}} <br /> <br />
                                                    <strong>Müşteri Adı :</strong> {{$parti->musteriadi}} <br /> <br />
                                                    <strong>Miktar x Adet :</strong> {{$parti->miktar}}m³ x {{$parti->adet}} adet   <br /> <br />
                                                    <strong>Ürün Türü :</strong> {{$parti->urun_turu}} <br /> <br />
                                                    <strong>Ağaç Türü - Sınıf :</strong> {{$parti->agac_turu}} <br /> <br />
                                                    <strong>Ürün Kalitesi :</strong> {{$parti->sinif_kodu}} <br /> <br />
                                                    <strong>Boy - Çap :</strong> {{$parti->boy_kodu}} - {{$parti->cap_kodu}}<br /> <br />
                                                    <strong>Gelen Araç Plaka :</strong> {{$parti->arac_plaka}}<br /> <br />
                                                    <a href="#{{$parti->id}}"><button type="button" class="btn btn-outline-primary mb-1 stok-hammadde-yazdir-button">
                                                            <i class="simple-icon-printer" style="font-size: 20px"></i>
                                                        </button></a>
                                                    @if($parti->durum != 'Depoda')
                                                        <strong>Gönderilen Araç Plaka :</strong> {{$parti->cikis_arac_plaka}} <br /> <br />
                                                        <strong>Çıkış Fatura No  :</strong> {{$parti->cikis_fatura_no}} <br /> <br />
                                                    @endif
                                                    <button type="button" class="btn btn-outline-dark">{{$parti->miktar}} m3 x {{$parti->adet}} adet</button>
                                                    @if($parti->durum == 'Depoda')
                                                        <a href="{{url('/')}}/mobile/hammaddecikis/{{$parti->id}}"><button type="button" class="btn btn-success stok-mamul-sat-button">
                                                                <i class="iconsminds-right"></i> Çıkışını Yap
                                                            </button></a>
                                                    @else
                                                        <a href="{{url('/')}}/mobile/hammadde/sil/{{$parti->id}}"><button type="button" class="btn btn-danger stok-mamul-sat-button" onclick="return confirm('Tamamen silinecek emin misiniz?')">
                                                                <i class="iconsminds-right"></i> SİL
                                                            </button></a>
                                                    @endif




                                                </p>
                                            </div>
                                        </div>


                                    </i>
                                </td><td style="display:none;"></td>
                                <td style="display:none;"></td>
                                <td style="display:none;"></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table></div>
            </div>
        </div>



@endsection

