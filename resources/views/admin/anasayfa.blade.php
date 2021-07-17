@extends('layouts.admin.amaster')

@section('title','Kereste Stok Durumu')

@section('h4baslik',' ')

@section('content')


    <div class="row">



        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title" style="text-align: center">Yenorsan A.Ş.</h4>

                <p style="text-align: center;">Tel: 0546 648 1350 - Yenice/Karabük</p>

            </div>
        </div>



    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class=" far fa-address-book avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">
                        Müşteri Sayısı</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$musteriSay}}</span>
                    </h3>
                    <p class="m-0">Müşteri</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="fas fa-tree avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">
                        Hammadde (Depoda)</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$hammaddeStok}}</span>  </h3>
                    <p class="m-0">Parti</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="fe-align-justify avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">
                        Mamül (Depoda)</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$mamulStok}}</span> </h3>
                    <p class="m-0">Parti</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="fe-align-justify avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">
                        Mamül Toplam (Depoda)</p>
                    <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$mamulStokDm3}}</span> </h3>
                    <p class="m-0">dm³</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    </div>
<!-- end row -->


@endsection
