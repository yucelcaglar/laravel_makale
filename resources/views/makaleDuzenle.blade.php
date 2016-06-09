@extends('layouts.app')
@section('content')

    @include('_flush')

        <div class="row">

{!! Form::open(array('action' => array('MakaleController@makaleGuncelle',$Makale->id),'method' => 'post')) !!}
               <fieldset class="form-group">
                    <label for="Baslik">Başlık</label>
                    <input type="text" name="title" class="form-control" id="title" value=" {{ old('title',$Makale->title) }} " placeholder="Başlık">
                </fieldset>
                <fieldset class="form-group">
                    <label for="Icerik">İçerik</label>
                    <textarea class="form-control" name="icerik" rows="10" cols="30" placeholder="Lütfen metin giriniz">{{ old('icerik',$Makale->icerik) }}</textarea>
                </fieldset>
                <fieldset class="form-group">
                  <button  type="submit" class="btn btn-success">Kaydet</button>
                </fieldset>
{!! Form::close() !!}
        </div>
@endsection
