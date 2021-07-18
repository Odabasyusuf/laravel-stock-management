@extends('layouts.admin.amaster')

@section('title','Parti Detayı')

@section('h4baslik','')

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
        <!-- Parti Listesi -->
        <div class="col-md-2">
            <a href="{{url('/')}}/admin/stok/kereste/musteri/{{$musteriDetay[0]->musteri_id}}"><button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    <i class="dripicons-arrow-thin-left"></i> Geri</button>
            </a>
        </div>

        <!-- Parti Detayı -->
        <div class="col-md-8">
            <div class="card-box">

                <div style="position: absolute; right: 40px;">
                    <a href="{{url('/')}}/mobile/stokmamul/yazdir/{{$partiID}}"><button type="button" class="btn btn-outline-primary btn-md">
                            <i class="fe-printer" style="font-size: 18px"></i>  Yazdır
                        </button></a>
                    @if($satisKontrol->durum == 'Depoda')
                        <a type="button" href="{{url('/')}}/admin/particikis/{{$partiID}}"
                                class="btn btn-primary btn-lg">
                            <i class="fe-minus"></i> Seçileni Sat
                        </a>
                    @elseif($satisKontrol->durum == 'Satıldı')

                        <a type="button" href="{{url('/')}}/admin/stok/kereste/geri/{{$partiID}}"
                                class="btn btn-primary btn-md">
                            <i class="mdi mdi-autorenew"></i> Geri al
                        </a>
                        <a type="button" href="{{url('/')}}/admin/stok/kereste/sil/{{$partiID}}"
                                class="btn btn-danger btn-md sil-onay">
                            <i class="fas fa-trash-alt"></i> Tamamen Sil
                        </a>
                    @endif
                </div>

                <div style="">
                    <h4 class="header-title" style="margin-bottom: 20px">Parti Detayı</h4>

                </div>
                <div class="col-md" style="">

                </div>
                <p class="sub-header">
                    @include('admin.flash-message')
                    <br>
                    @foreach($musteriDetay as $musteri)
                        <strong>Müşteri: </strong> {{$musteri->musteriadi}}&emsp;&emsp;
                        <strong>Müşteri Tel: </strong> {{$musteri->tel}}&emsp;&emsp;<br /><br />
                        <strong>Ağaç Türü: </strong> {{$musteri->agac_turu}}&emsp;
                        <strong>Ürün Kalitesi: </strong> {{$musteri->urun_kalitesi}}&emsp;&emsp;<br /><br />
                    @if($musteri->durum != 'Depoda')
                        <strong>Çıkış Araç Plaka: </strong> {{$musteri->arac_plaka}}&emsp;&emsp;
                        <strong>Çıkış Fatura No: </strong> {{$musteri->fatura_no}}&emsp;&emsp;
                        @endif
                    @endforeach
                </p>
                <div class="col-4">

                </div>

                <div class="table-responsive">
                    <table id="demo-foo-filtering2" class="table table-striped toggle-circle mb-0"
                           data-page-size="50">
                        <thead>
                        <tr class="titlerow">
                            <th width="">#</th>
                            <th data-toggle="true">Kln</th>
                            <th data-hide="">En</th>
                            <th data-hide="">Boy</th>
                            <th data-hide="">Dm3</th>
                        </tr>
                        </thead>


                        <tbody>
                        @for ($i = 0; $i < count($datas); $i++)
                            <tr>
                                <td>{{$datas[$i]['sira']}}</td>
                                <td>{{$datas[$i]['kln']}}</td>
                                <td>{{$datas[$i]['en']}}</td>
                                <td>{{$datas[$i]['boy']}}</td>
                                <td class="satir_dm3" style="color: #0026ff">
                                    <strong>{{$datas[$i]['toplam_dm']}}</strong></td>
                            </tr>
                        @endfor
                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="5">
                                <div class="" style="margin-right: 20px">
                                    <ul class="pagination pagination-split justify-content-end footable-pagination">
                                        <strong>Toplam : <label id="toplam_dm3"
                                                                style="font-size:16px ;margin: 0px 10px; color: #0026ff"> </label>
                                            dm3 </strong></ul>
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
        $(document).ready(function () {
            $('table thead th').each(function (i) {
                calculateColumn(i);
            });
        });

        function calculateColumn(index) {
            var total = 0;
            $('#demo-foo-filtering2 tr').each(function () {
                var value = parseInt($('.satir_dm3', this).eq(index).text());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            $('table tfoot #toplam_dm3').eq(index).text(' ' + total);
        }

        // Parti Sayısı
        var satirSayisi = $(".satirSay").length;
        $('#toplamSatir').text(satirSayisi);
    </script>



    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="{{url('/')}}/assets/admin/adminox/js/sweetalert-self.js"></script>
    <script>



        $('.sil-onay').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
                title: 'Kalıcı olarak silinecek',
                text: "Emin Misiniz?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sil!',
                cancelButtonText: 'Vazgeç'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })

        });
    </script>


@endsection
