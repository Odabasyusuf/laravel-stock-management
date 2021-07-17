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
        <label for="blok_no" class="col-form-label">Müşteri Seç</label>
        <select name="musteri_id" id="musteri_id" class="form-control"  onchange="location = this.value;">
            <option value="" selected="selected">Seçiniz</option>
            @foreach($musteriler->sortBy('id') as $musteri)
                <option value="{{url('/')}}/mobile/particikis/musteri/{{$musteri->id}}">{{$musteri->musteriadi}}</option>
            @endforeach
        </select>
    </div>


    </form>

@endsection

