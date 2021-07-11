@extends('layouts.admin.mobile.mobile_master')

@section('title','Yenorsan')

@section('h1baslik','Yenorsan')
@section('h4baslik','Yenorsan')

@section('content')

    @include('admin.flash-message')


    <form action="{{ route('admin.mobile.keresteparticikis') }}" method="post"
          enctype="multipart/form-data"
          class="form-horizontal">
        @csrf

    <div class="form-group">
        <label for="blok_no" class="col-form-label">Blok Seç</label>
        <select name="blok_no" id="blok_no" class="form-control">
            <option value="" selected="selected">Seçiniz</option>
            @foreach($joinTables->sortBy('id') as $joinTable)
                <option value="{{$joinTable->id}}">{{$joinTable->id}} - {{$joinTable->musteriadi}} - {{$joinTable->toplam_dm3}}dm3 - {{$joinTable->durum}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="arac_plaka" class="col-form-label">Araç Plaka: </label>
        <input type="text" class="form-control " name="arac_plaka" id="arac_plaka" value="" style="">
    </div>

    <div class="form-group">
        <label for="fatura_no" class="col-form-label">İrsaliye/Fatura No: </label>
        <input type="text" class="form-control" name="fatura_no" id="fatura_no" value="" style="">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-success  btn-block mb-1">
            <i class="simple-icon-check"></i> Çıkış
        </button>
    </div>
    </form>

@endsection

