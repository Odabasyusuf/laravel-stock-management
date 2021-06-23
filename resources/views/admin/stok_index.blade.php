@extends('layouts.admin.amaster')

@section('title','Stok Durumu')

@section('h4baslik','Stok Durumu')

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
        <div class="col-md-6">
            <div class="card-box" style="overflow: hidden">

                <a href="">
                    <img src="{{url('/')}}/assets/admin/adminox/images/2.png" alt="Tomruk Stok"
                                  style="height: 100%; width: 100%;">
                </a>


            </div>
        </div>


        <div class="col-md-6">
            <div class="card-box" style="overflow: hidden">

                <a href="{{route('admin.stok_kereste')}}">
                    <img src="{{url('/')}}/assets/admin/adminox/images/1.png" alt="Kereste Stok"
                                  style="height: 100%; width: 100%;">
                </a>

            </div>

        </div>
    </div>


@endsection
