@extends('layout')

@section('content')

<h1>{{$heading}}</h1>

    <ul>
        @foreach ($meniu as $m)
            <li>{{ $m->name }}</li>
        @endforeach
    </ul>


@endsection