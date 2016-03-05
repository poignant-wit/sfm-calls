@extends('templates.default')

@section('content')

    @if(Auth::check())

@include('orders.table')

        @else
        <div class="text-center">

<h2>Привет, хорошего рабочего дня:)</h2>
    <h6>Войдите, чтобы начать работу</h6>
        </div>

        @endif




    @stop