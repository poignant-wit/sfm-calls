@extends('templates.default')

@section('content')

    <h3>Новый заказ</h3>
    <form action="{{route('order.create')}}" method="post" role="form">
        <fieldset class="form-group {{ $errors->has('customer')? ' has-error':'' }}">
            {{--<label for="username" class="control-label">Заказчик</label>--}}
            <label for="username" class="control-label">Заказчик</label>
            <input type="text" class="form-control" id="customer" placeholder="Заказчик" name="customer">
            {{--@if($errors->has('username'))--}}
                {{--<span class="help-block">Введите верный логин</span>--}}
            {{--@endif--}}


            {{--<small class="text-muted">We'll never share your email with anyone else.</small>--}}
        </fieldset>
        <fieldset class="form-group {{ $errors->has('password')? ' has-error':'' }}">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control " id="email" placeholder="Email" name="email">
        </fieldset>

        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>

@stop