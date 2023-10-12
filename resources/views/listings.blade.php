@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <h1>{{$heading}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <p>
                @foreach ($meniu as $m)
                    <ul>{{ $m->name }}</ul>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection