@extends('layouts.admin.amaster')

@section('title','Müşteri Listesi')

@section('h4baslik','Müşteri Listesi')

@section('content')


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card-box">
                <div style="">
                <h4 class="header-title"><a href="{{ route('admin.musteri.create') }}">
                    <!-- veya basit rota {{url('/')}}/admin/musteri/ekle/ kullanılabilir  -->
                        <button type="button" class="btn btn-primary btn-lg"><i class="mdi mdi-account-plus" style="font-size: 20px"></i>  Müşteri Ekle
                        </button>
                    </a>
                </h4>
                </div>
                <p class="sub-header">
                    @include('admin.flash-message')
                </p>
                <p class="sub-header">
                    Not: Sadece Hammadde veya Kereste bilgisi olmayan müşteriler silinebilir.
                </p>

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
                    <table id="demo-foo-filtering" class="table table-striped toggle-circle mb-0"
                           data-page-size="10">
                        <thead>
                        <tr>
                            <th width="5%">Sıra</th>
                            <th data-toggle="true">Müşteri Adı</th>
                            <th data-hide="phone">Telefon</th>
                            <th data-hide="phone">Adres</th>
                            <th data-hide="phone" width="10px">Düzenle</th>
                            <th data-hide="phone" width="10px">Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($musteriler->sortBy('id') as $musteri)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$musteri->musteriadi}}</td>
                                <td>{{$musteri->tel}}</td>
                                <td>{{$musteri->adres}}</td>
                                <td><a href="{{route('admin.musteri_duzenle', $musteri->id)}}">
                                        <button type="button" class="btn btn-outline-primary btn-sm" >Düzenle</button>
                                    </a></td>
                                <td>
                                    @if($musteriHammaddeVar[$musteri->id]==null && $musteriMamulVar[$musteri->id]==null)
                                        <a href="{{route('admin.musteri_sil', $musteri->id)}}" class="btn btn-outline-danger btn-sm button delete-confirm"> Sil
                                            <!--
                                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Tamamen silinecek emin misiniz?')">Sil</button>
                                            -->
                                        </a>
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
   <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="{{url('/')}}/assets/admin/adminox/js/sweetalert-self.js"></script>
    <script>
        $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
                title: 'Müşteri Silinecek',
                text: "Emin Misiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!',
                cancelButtonText: 'Kapat'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Başarılı!',
                        'Müşteri silindi.',
                        'success'
                    )
                    window.location.href = url;
                }
            })

        });


    </script>
@endsection
