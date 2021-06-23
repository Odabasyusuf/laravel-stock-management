@extends('layouts.admin.amaster')

@section('title','Kereste Stok Durumu')

@section('h4baslik','Kereste Stok Durumu')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });

    </script>


    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <div style="float:left;">
                    <h4 class="header-title"> Parti Seç
                    </h4>
                </div>
                <div class="col-4" style="float:left; margin-left: 25px;">


                </div>
                <p class="sub-header">
                    <br /><br /><strong>Depodaki Parti Sayısı :  <label id="toplamSatir" style="font-size:16px ;margin: 0px 10px;"> </label>  </strong>
                </p>
                <div class="col-4">

                </div>

                <!-- <div class="mb-3">
                          <div class="row">
                             <div class="col-12 text-sm-center form-inline">
                                 <div class="form-group mr-2">
                                     <select id="demo-foo-filter-status" class="custom-select">
                                         <option value="">Tümünü Göster</option>
                                         <option value="active">Aktif</option>
                                         <option value="disabled">Pasif</option>
                                         <option value="suspended">Suspended</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <input id="demo-foo-search" type="text" placeholder="Müşteri Ara" class="form-control"
                                            autocomplete="on">
                                 </div>
                             </div>
                         </div>
                    </div>-->
                <div class="table-responsive">
                    <table id="demo-foo-filtering" class="table table-hover table-striped toggle-circle mb-0"
                           data-page-size="50">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th data-toggle="true">Müşteri Adı</th>
                            <th data-hide="">Kalite Kodu</th>
                            <th data-hide="">Ürün Kalitesi</th>
                            <th data-hide="">Toplam Dm3</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($joinTables->sortBy('id') as $joinTable)
                            <tr class='clickable-row satirSay' data-href='{{url('/')}}/admin/stok/kereste/{{$joinTable->id}}'>
                                <td>{{$joinTable->id}}</td>
                                <td>{{$joinTable->musteriadi}}</td>
                                <td>{{$joinTable->urun_kalitesi}}</td>
                                <td>{{$joinTable->kalite_adi}}</td>
                                <td>{{$joinTable->toplam_dm3}}</td>
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

        <div class="col-md-6">

                    @if(\Session::has('message'))
                        <div class="alert alert-danger">
                            <p>{{ \Session::get('message') }}</p>
                        </div>
                    @endif

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p><br><strong>{{ \Session::get('success') }}</strong></p>
                        </div>
                    @endif

        </div>

    </div>


    <script>


        // Parti Sayısı
        var satirSayisi = $(".satirSay").length;
        $('#toplamSatir').text(satirSayisi);
    </script>

@endsection
