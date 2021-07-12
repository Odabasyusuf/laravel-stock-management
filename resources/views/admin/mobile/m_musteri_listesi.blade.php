@extends('layouts.admin.mobile.mobile_master')

@section('title','Yenorsan')

@section('h1baslik','Yenorsan')
@section('h4baslik','Yenorsan')

@section('content')

    @include('admin.flash-message')

    @foreach($musteriler->sortBy('id') as $musteri)

    <div class="card d-flex flex-row mb-4"><img alt="" src="{{asset('assets/admin/mobile/img/musteri-icon.png')}}" class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
    <div class="d-flex flex-grow-1 min-width-zero">
            <div
                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                <div class="min-width-zero"> <a href="{{url('/')}}/mobile/stokmamul/{{$musteri->id}}"><p class="list-item-heading mb-1 truncate">{{$musteri->musteriadi}}</p></a>
                    <p class="mb-2 text-muted text-small">{{$musteri->adres}}</p>
                    <p class="mb-2 text-muted text-small">{{$musteri->tel}}</p>
                    <a href="{{url('/')}}/mobile/musteri/edit/{{$musteri->id}}"><button type="button" class="btn btn-xs btn-outline-primary">Düzenle</button></a>
                    <a href="{{url('/')}}/mobile/musteri/sil/{{$musteri->id}}"> <button type="button" class="btn btn-xs btn-outline-danger">Sil</button></a>
                    @if($musteri->tel != null)
                        <a href="tel:{{$musteri->tel}}"><i class="simple-icon-call-out musteri-call-icon"></i></a>
                    @endif

                </div>
            </div>
        </div>
        <div class="d-flex flex-grow-2 ">
            <div
                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                <!-- asd -->
            </div>
        </div>
    </div>

    @endforeach








@endsection

