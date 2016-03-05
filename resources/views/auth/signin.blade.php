@extends('templates.default')

@section('content')

    <div class="col-md-4 col-md-offset-4">
        <h3>Вход в систему</h3>
        <form action="{{route('auth.signin')}}" method="post" role="form">
            <fieldset class="form-group label-floating {{ $errors->has('username')? ' has-error':'' }}">
                <label for="username" class="control-label">Логин</label>
                <input type="text" class="form-control" id="username" name="username"
                       value="{{ Request::old('username')?: '' }}">
                @if($errors->has('username'))
                    <span class="help-block">Введите логин</span>
                @endif


                {{--<small class="text-muted">We'll never share your email with anyone else.</small>--}}
            </fieldset>
            <div class="form-group label-floating {{ $errors->has('password')? ' has-error':'' }}">
                <label for="password" class="control-label">Пароль</label>
                <input type="password" class="form-control " id="password" name="password">
                @if($errors->has('password'))
                    <span class="help-block">Введите пароль</span>
                @endif
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"><span class="checkbox-material"></span> Запомнить меня
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-raised">Войти</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>

@stop