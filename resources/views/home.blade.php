@extends('layouts.app')

@section('content')

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @foreach($Makale as $makales)
                    <ul><li>{{ $makales->title }}</li></ul>
                    <ul><li>{{ $makales->icerik }}</li></ul>     
                @endforeach           
                </div>
            </div>
        </div>

@endsection
