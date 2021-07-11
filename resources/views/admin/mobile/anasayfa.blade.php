@extends('layouts.admin.mobile.mobile_master')

@section('title','Yenorsan')

@section('h1baslik','Yenorsan')
@section('h4baslik','Yenorsan')

@section('content')


    <div class="row" >
        <div class="col-6 mb-2">
            <a href="#" class="card mb-2">
                <div class="card-body text-center anasayfa-cards" >
                    <i class="simple-icon-plus anasayfa-cards-icon" style=""></i>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Hammadde Giriş</p>
                </div>
            </a>
        </div>
        <div class="col-6 mb-2">
            <a href="#" class="card mb-2">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-minus anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Hammadde Çıkış</p>
                </div>
            </a>
        </div>
    </div>

 <div class="row">
        <div class="col-6 mb-2">
            <a href="{{route('admin.mobile.partigiris')}}" class="card mb-4">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-plus anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Mamül Giriş</p>
                </div>
            </a>
        </div>
        <div class="col-6 mb-2">
            <a href="{{route('admin.mobile.keresteparticikis')}}" class="card mb-2">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-minus anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Mamül Çıkış</p>
                </div>
            </a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <a href="#" class="card mb-2">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-list anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Tomruk Listesi</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12 col-xl-12">
            <a href="#" class="card mb-2">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-list anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Kereste Listesi</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12 col-xl-12">
            <a href="{{route('admin.mobile.musterilistesi')}}" class="card mb-2">
                <div class="card-body text-center anasayfa-cards">
                    <i class="simple-icon-user anasayfa-cards-icon" style=""></i><br/>
                    <p class="card-text mt-2 anasayfa-cards-text"  style="">Müşteri Listesi</p>
                </div>
            </a>
        </div>
    </div>





@endsection

