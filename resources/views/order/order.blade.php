@extends('templates.default')

@section('content')

    <h3>Новый заказ</h3>
    <hr>



    <div class="panel panel-default">

        <div class="panel-body">


    <form action="{{route('order.create')}}" method="post" role="form">
        <h4>Заказчик</h4>
        <div class="row">
            <div class="col-md-6">
                <fieldset class="form-group label-floating {{ $errors->has('customer-name')? ' has-error':'' }}">
                    {{--<label for="username" class="control-label">Заказчик</label>--}}
                    <label for="customer-name" class="control-label">Имя</label>
                    <input type="text" class="form-control" id="customer-name" name="customer-name" value="{{ Request::old('customer-name')?: '' }}">
                    {{--@if($errors->has('username'))--}}
                    {{--<span class="help-block">Введите верный логин</span>--}}
                    {{--@endif--}}


                    {{--<small class="text-muted">We'll never share your email with anyone else.</small>--}}
                </fieldset>
                <fieldset class="form-group label-floating {{ $errors->has('customer-email')? ' has-error':'' }}">
                    <label for="customer-email" class="control-label">Email</label>
                    <input type="email" class="form-control " id="customer-email" name="customer-email">
                </fieldset>
            </div>

            <div class="col-md-6">
                <fieldset class="form-group label-floating {{ $errors->has('customer-telephone')? ' has-error':'' }}">
                    {{--<label for="username" class="control-label">Заказчик</label>--}}
                    <label for="customer-telephone" class="control-label">Телефон</label>
                    <input type="text" class="form-control" id="customer-telephone"
                           name="customer-telephone">
                    {{--@if($errors->has('username'))--}}
                    {{--<span class="help-block">Введите верный логин</span>--}}
                    {{--@endif--}}


                    {{--<small class="text-muted">We'll never share your email with anyone else.</small>--}}
                </fieldset>
                <fieldset class="form-group label-floating {{ $errors->has('customer-skype')? ' has-error':'' }}">
                    <label for="customer-skype" class="control-label">Skype</label>
                    <input type="text" class="form-control " id="customer-skype" name="customer-skype">
                </fieldset>
            </div>
        </div>




        <h4 style="margin-top: 40px">Заказ</h4>

            <div class="row">
            <div class="col-md-6">

                <div class="form-group label-floating">
                    <label for="order-type" class="control-label">Тип заказа</label>
                    <select class="form-control" name="order-type" title="ORDER TYPES">


                            <option class="hidden"></option>
                        @foreach($order_types as $order_type)
                            <option value="{{ $order_type->id }}">{{ $order_type->title }}</option>
                        @endforeach
                    </select>


                </div>



            </div>
                <div class="col-md-6">
        <fieldset class="form-group label-floating">
            <label for="order-comment" class="control-label">Комментарии</label>
            <textarea class="form-control " id="order-comment" name="order-comment" rows="5"></textarea>
        </fieldset>
                </div>
            </div>


    <button type="submit" class="btn btn-primary btn-raised">Добавить</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>

        </div>
    </div>

@stop