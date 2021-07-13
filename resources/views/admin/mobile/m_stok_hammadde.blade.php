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




<!--eski tablo

    <div class="row mb-4">
        <div class="col-12 data-tables-hide-filter">
            <div class="card">

                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row view-filter"><div class="col-sm-12"><div class="float-left"></div><div class="float-right"></div><div class="clearfix"></div></div></div><table class="data-table data-tables-pagination responsive nowrap dataTable no-footer dtr-inline collapsed" data-order="[[ 1, &quot;desc&quot; ]]" id="DataTables_Table_0" role="grid" style="width: 740px;">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 261px;"
                                    aria-label="Name: activate to sort column ascending">Müşteri
                                </th>
                                <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 102px;" aria-sort="descending"
                                    aria-label="Sales: activate to sort column ascending">Adet
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 104px;"
                                    aria-label="Stock: activate to sort column ascending">Miktar
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Araç Plaka
                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Nakliye Tezkere Seri/No
                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Ağaç Türü - Sınıf Kodu
                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Ürün Türü
                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Boy Kodu - Çap Kodu
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($joinTables as $parti)
                                <tr role="row" class="odd">
                                    <td tabindex="0" style="">
                                        <p class="list-item-heading">{{$parti->musteriadi}}</p>
                                    </td><td tabindex="0" style="">
                                        <p class="list-item-heading" style="text-align: center">{{$parti->adet}}</p>
                                    </td>
                                    <td class="sorting_1">
                                        <p class="text-muted">{{$parti->miktar}}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$parti->arac_plaka}}</p>
                                    </td>
                                    <td style="display: none;">
                                        <p class="text-muted">{{$parti->nakliye_seri_no}}</p>
                                    </td>
                                    <td style="display: none;">
                                        <p class="text-muted">{{$parti->agac_turu}} - {{$parti->sinif_kodu}}</p>
                                    </td>
                                    <td style="display: none;">
                                        <p class="text-muted">{{$parti->urun_turu}}</p>
                                    </td>
                                    <td style="display: none;">
                                        <p class="text-muted">{{$parti->boy_kodu}} - {{$parti->cap_kodu}}</p>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>


-->



    <div class="row mb-4">
        <div class="col-12 data-tables-hide-filter">
            <div class="card">

                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row view-filter"><div class="col-sm-12"><div class="float-left"></div><div class="float-right"></div><div class="clearfix"></div></div></div><table class="data-table data-tables-pagination responsive nowrap dataTable no-footer dtr-inline collapsed" data-order="[[ 1, &quot;asc&quot; ]]" id="DataTables_Table_0" role="grid">
                        <thead>
                        <tr role="row">
                            <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 25px;"
                                aria-label="Name: activate to sort column ascending">Blok No
                            </th><th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                     colspan="1" style="text-align: center"
                                     aria-label="Name: activate to sort column ascending">Detay
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($joinTables as $parti)
                            <tr role="row" class="odd">
                                <td tabindex="0" style="">
                                    <p class="list-item-heading" style="text-align: center">#{{$parti->id}}</p>
                                </td><td tabindex="0" style="">
                                    <i class="list-item-heading">


                                        <p class="mb-0">
                                            @if($parti->durum == "Depoda")
                                                <button class="btn btn-primary mb-1 btn-block" type="button" data-toggle="collapse" data-target="#collapseExample{{$parti->id}}" aria-expanded="true" aria-controls="collapseExample">
                                                    @else
                                                        <button class="btn btn-success   mb-1 btn-block" type="button" data-toggle="collapse" data-target="#collapseExample{{$parti->id}}" aria-expanded="true" aria-controls="collapseExample">
                                                            @endif
                                                            @if($parti->durum == "Depoda")
                                                                {{$parti->musteriadi}}  |  {{$parti->durum}}     <span class="badge badge-light"> {{$parti->miktar}} m³ x {{$parti->adet}} adet </span>
                                                            @else
                                                                  SATILDI      <span class="badge badge-light"> {{$parti->miktar}} m³ x {{$parti->adet}} adet
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
                                                    <a href="#{{$parti->id}}"><button type="button" class="btn btn-outline-primary mb-1 stok-mamul-yazdir-button">
                                                            <i class="simple-icon-printer" style="font-size: 20px"></i>
                                                        </button></a>
                                                    <button type="button" class="btn btn-outline-dark">{{$parti->miktar}} m3</button>
                                                    @if($parti->durum == 'Depoda')
                                                        <a href="#{{$parti->id}}"><button type="button" class="btn btn-danger stok-mamul-sat-button">
                                                                <i class="iconsminds-right"></i> Seçileni Sat
                                                            </button></a>
                                                    @else

                                                    @endif




                                                </p>
                                            </div>
                                        </div>


                                    </i>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

