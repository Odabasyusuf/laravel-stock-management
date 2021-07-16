<!-- MAMÜL SAYFASI  -->

<div class="row mb-4">
    <div class="col-12 data-tables-hide-filter">
        <div class="card">

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row view-filter">
                    <div class="col-sm-12">
                        <div class="float-left"></div>
                        <div class="float-right"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <table
                    class="data-table data-tables-pagination nowrap dataTable no-footer dtr-inline collapsed"
                    data-order="[[ 1, &quot;asc&quot; ]]" id="DataTables_Table_0" role="grid">
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
                                                            {{$parti->musteriadi}}  |  {{$parti->durum}}     <span class="badge badge-light"> {{$parti->toplam_dm3}} dm3 </span>
                                                        @else
                                                              SATILDI  |  {{substr($parti->updated_at, 0, 10)}}     <span class="badge badge-light"> {{$parti->toplam_dm3}} dm3
                                                        @endif
                                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample{{$parti->id}}" style="">
                                        <div class="p-4 border mt-4">
                                            <p class="mb-0">
                                                <strong>Blok No :</strong> {{$parti->id}} <br /> <br />
                                                <strong>Müşteri Adı :</strong> {{$parti->musteriadi}} <br /> <br />
                                                <strong>Ağaç Türü :</strong> {{$parti->agac_turu}} <br /> <br />
                                                <strong>Ürün Kalitesi :</strong> {{$parti->urun_kalitesi}} <br /> <br />
                                                <a href="{{url('/')}}/mobile/stokmamul/yazdir/{{$parti->id}}"><button type="button" class="btn btn-outline-primary mb-1 stok-mamul-yazdir-button">
                                                        <i class="simple-icon-printer" style="font-size: 20px"></i>
                                                    </button></a>
                                                @if($parti->durum != 'Depoda')
                                                    <strong>Gönderilen Araç Plakası :</strong> {{$parti->arac_plaka}} <br /> <br />
                                                    <strong>Çıkış  :</strong> {{$parti->arac_plaka}} <br /> <br />
                                                @endif
                                                <button type="button" class="btn btn-outline-dark">{{$parti->toplam_dm3}} dm3</button>
                                                @if($parti->durum == 'Depoda')
                                                    <a href="{{url('/')}}/mobile/particikis/{{$parti->id}}"><button type="button" class="btn btn-danger stok-mamul-sat-button">
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



----------------


<!-- HAMMADDE SAYFASI  -->




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
                                                              Çıkış Yapıldı      <span class="badge badge-light"> {{$parti->miktar}} m³ x {{$parti->adet}} adet
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
                                                <a href="#{{$parti->id}}"><button type="button" class="btn btn-outline-primary mb-1 stok-hammadde-yazdir-button">
                                                        <i class="simple-icon-printer" style="font-size: 20px"></i>
                                                    </button></a>
                                                <button type="button" class="btn btn-outline-dark">{{$parti->miktar}} m3</button>
                                                @if($parti->durum == 'Depoda')
                                                    <a href="{{url('/')}}/mobile/hammaddecikis/{{$parti->id}}"><button type="button" class="btn btn-danger stok-mamul-sat-button">
                                                            <i class="iconsminds-right"></i> Çıkışını Yap
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



-----------------




<!--hammadde stok en eski tablo

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

