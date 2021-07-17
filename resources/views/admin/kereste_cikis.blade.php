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
                        <label for="blok_no" class="col-form-label">Blok Seç</label>
                        <select name="blok_no" id="blok_no" class="form-control">
                            <option value="" selected="selected">Seçiniz</option>
                            @foreach($joinTables->sortBy('id') as $joinTable)
                                <option value="{{$joinTable->id}}"  @if($secilenParti_id != null) @foreach($secilenParti_id as $aaa) @if($aaa->id == $joinTable->id) selected="selected" @endif @endforeach @endif>
                                   @if($joinTable->durum != 'Depoda') {{$joinTable->blok_no}} - {{$joinTable->musteriadi}} - {{$joinTable->toplam_dm3}}dm3 - {{$joinTable->durum}}
                                   @else {{$joinTable->blok_no}} - {{$joinTable->musteriadi}} - {{$joinTable->toplam_dm3}}dm3 - {{$joinTable->durum}} @endif
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="arac_plaka" class="col-form-label">Araç Plaka: </label>
                        <input type="text" class="form-control " name="arac_plaka" id="arac_plaka" value="" style="">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="fatura_no" class="col-form-label">İrsaliye/Fatura No: </label>
                        <input type="text" class="form-control" name="fatura_no" id="fatura_no" value="" style="">
                    </div>


                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-check-square"></i> Çıkışı Yap
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

@endsection
