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
                                    aria-label="Sales: activate to sort column ascending">Toplam dm3
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 104px;"
                                    aria-label="Stock: activate to sort column ascending">Durum
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Ağaç Türü
                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 149px; display: none;"
                                    aria-label="Category: activate to sort column ascending">Blok No
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($joinTables as $parti)
                                <tr role="row" class="odd">
                                    <td tabindex="0" style="">
                                        <p class="list-item-heading">{{$parti->musteriadi}}</p>
                                    </td><td tabindex="0" style="">
                                        <p class="list-item-heading" style="text-align: center">{{$parti->toplam_dm3}}</p>
                                    </td>
                                    <td class="sorting_1">
                                        <p class="text-muted">{{$parti->durum}}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$parti->agac_turu}}</p>
                                    </td>
                                    <td style="display: none;">
                                        <p class="text-muted">{{$parti->id}}</p>
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

