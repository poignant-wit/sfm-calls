@extends('templates.default')

@section('content')

    @if(Auth::check())

@include('templates.partials.table')

        @else
<h2>HOME PAGE</h2>
    <h6>hello</h6>

        @endif




    @stop