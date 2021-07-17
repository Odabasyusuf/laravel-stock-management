@extends('layouts.admin.amaster')

@section('title','Müşteri Seç')

@section('h4baslik','')

@section('content')

    <style>
        .text-danger{
            color: #6c757d !important;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });

    </script>


    <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="text-center">
                    <h3 class="text-uppercase text-danger mt-3">Müşteri Seç</h3>
                    <p class="text-muted mt-3">
                        <i class="mdi mdi-arrow-down-bold" style="font-size: 20px"></i>
                            Detay görmek istediğin müşteriyi seç
                        <i class="mdi mdi-arrow-down-bold" style="font-size: 20px"></i> </p>
                    <select class="form-control btn-outline-secondary" data-width="100%" tabindex="-1" onchange="location = this.value;">
                        <option label="&nbsp;">&nbsp;</option>
                        @foreach($musteriler->sortBy('id') as $musteri)
                            <option value="{{url('/')}}/admin/stok/kereste/musteri/{{$musteri->id}}">{{$musteri->musteriadi}}</option>
                        @endforeach
                    </select>
                </div>

            </div><!-- end col -->
        </div>
        <!-- end row -->


@endsection
