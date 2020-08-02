@extends('layouts.app')

@section('content')
    <h3 class="text-center">   {{ $message}} </h3>
    <div class="content">
        <div class="title m-b-md">
            PARSER
        </div>

        <div class="links">
            <a href="{{route('report')}}">View report</a>
        </div>
    </div>
@endsection


