@extends('layouts.admin.amaster')

@section('title','Mamül Çıkışı')

@section('h4baslik','Mamül Çıkışı')

@section('content')



    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card-box">

                <p class="sub-header">
                    @include('admin.flash-message')
                </p>
                <div class="col-4">

                </div>

                <form action="{{ route('admin.kereste_parti_cikis') }}" method="post"
                      enctype="multipart/form-data"
                      class="form-horizontal">
                @csrf

                    <div class="form-group col-md-12">
                        <label for="musteri_id" class="col-form-label">Müşteri Seç</label>
                        <select name="musteri_id" id="musteri_id" class="form-control"  onchange="location = this.value;">
                            <option value="" selected="selected">Seçiniz</option>
                            @foreach($musteriler->sortBy('id') as $musteri)
                                <option value="{{url('/')}}/admin/particikis/musteri/{{$musteri->id}}">{{$musteri->musteriadi}}</option>
                            @endforeach
                        </select>
                    </div>

                </form>
            </div>
        </div>
    </div>
   <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

@endsection
