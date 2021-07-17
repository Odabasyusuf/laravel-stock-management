@extends('layouts.admin.mobile.mobile_master')

@section('title','Yenorsan')

@section('h1baslik','Yenorsan')
@section('h4baslik','Yenorsan')

@section('content')

    @include('admin.flash-message')


    <div class="row">
        <div class="col-12">

            <div class="col-12 mb-3">


                <div class="col-sm-6" style="text-align: center;">
                    <label>Müşteri Seç</label>
                    <select class="form-control" data-width="100%" tabindex="-1" onchange="location = this.value;">
                        <option label="&nbsp;">&nbsp;</option>
                        @foreach($musteriler->sortBy('id') as $musteri)
                            <option value="{{url('/')}}/mobile/stokmamul/{{$musteri->id}}">{{$musteri->musteriadi}}</option>
                        @endforeach
                    </select>

                </div>

                <br /><br />
<!--
                <div style="text-align: center" class="col-sm-6">
                    <label>veya</label> <br />

                    <a href="{{route('admin.mobile.stok_mamul')}}"> <button type="button" class="btn btn-primary btn-lg mb-1">HEPSİNİ GÖRÜNTÜLE</button></a>
                </div>
-->
            </div>
        </div>
    </div>



@endsection

