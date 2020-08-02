@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <h3>{{ Session::get('success') }}</h3>
        </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            PARSER
        </div>

        <div class="links">
            <a href="{{route('load')}}">Load page</a>
{{--            <a href="{{route('parsing')}}">Parsing page</a>--}}
            <a href="https://laravel-news.com">View perort</a>
        </div>
    </div>
@endsection


