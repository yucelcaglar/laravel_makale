@extends('layouts.app')
@section('content')

<h2>MAKALELER</h2>

@if( !$Makaleler->isEmpty() )
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
                @foreach($Makaleler as $makale)

                    <div class="panel-body">

                        <a href="makale/{{ $makale->slug }}"> {{ $makale->title }} </a>
                        <a class="" href="makale-duzenle/{{ $makale->id }}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>

                    </div>

                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="alert alert-warning" role="alert">
        <strong>Şuan makale bulunmamaktadır !</strong>
    </div>
@endif

@endsection
