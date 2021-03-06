@extends('templates.default')

@section('content')
    <h3>Регистрация</h3>
    <form action="{{route('auth.signup')}}" method="post" role="form">
        <fieldset class="form-group {{ $errors->has('username')? ' has-error':'' }}">
            <label for="username" class="control-label">Логин</label>
            <input type="text" class="form-control" id="username" placeholder="Введите логин" name="username" value="{{ Request::old('username')?: '' }}">
            @if($errors->has('username'))
                <span class="help-block">Введите верный логин</span>
            @endif


            {{--<small class="text-muted">We'll never share your email with anyone else.</small>--}}
        </fieldset>
        <fieldset class="form-group {{ $errors->has('password')? ' has-error':'' }}">
            <label for="password" class="control-label">Пароль</label>
            <input type="password" class="form-control " id="password" placeholder="Пароль" name="password">
        </fieldset>

        <button type="submit" class="btn btn-primary btn-raised">Готово</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>



@stop