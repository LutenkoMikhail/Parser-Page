@extends('layouts.app')

@section('content')
    <div class="content">
        <h3 class="text-center">   {{ $message}} </h3>
        <div class="center">
            <div class="btn-group">
                <a href="{{ url()->previous() }}"
                   class="btn btn-sm btn btn-success">{{ __('Back') }}</a>
            </div>
        </div>

@endsection

