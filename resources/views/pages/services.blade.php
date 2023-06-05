@extends('layouts.app')

@section('content')

    <h1>{{$title}}</h1>
    
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service_item)
               <li class="list-group-item">{{$service_item}}</li>
            @endforeach
        </ul>
    @endif

@endsection