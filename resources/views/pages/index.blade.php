@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
                <h1>{{$title}}</h1>
                <p>This is a laravel application developed from "Laravel from scratch" youtube series tutorials</p>
                <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>      <a class="btn btn-primary btn-lg" href="/Register" role="button">Register</a></p>
        </div>
    
@endsection
