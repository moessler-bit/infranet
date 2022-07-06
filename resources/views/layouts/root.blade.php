@extends('layouts.masterlayout.masterlayout')

@section('title')
    @yield('title')
@endsection

@section('body')
    <div>
        @yield('news')
    </div>
    <div>
        @yield('providers')
    </div>
@endsection
