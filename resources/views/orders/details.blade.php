@extends('templates.default')

@section('content')
    <h3>Заказ № {{ $order_id }}</h3>
    <hr>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Заказчик</h4>
                    <h5><strong>Имя: </strong> {{ $order[0]->name }}</h5>
                    <h5><strong>Email: </strong> {{ $order[0]->email }}</h5>
                    <h5><strong>Телефон: </strong> {{ $order[0]->telephone }}</h5>
                    <h5><strong>Skype: </strong> {{ $order[0]->skype }}</h5>
                </div>
                <div class="col-md-6">
                    <h4>Оплата</h4>
                    <h5>Статус:</h5>

                </div>
            </div>
        </div>
    </div>
    <hr>





    <div class="list-group">
        @foreach($actions as $action)

            {{--<div class="panel panel-{{ $action->type }}">--}}

            {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title">{{ $action->action }}</h3>--}}
            {{--</div>--}}

            {{--<div class="panel-body">--}}

            {{--<h5><strong>Дата:</strong> {{ $action->created_at }}</h5>--}}
            {{--<h5><strong>Комментарий:</strong> {{ $action->comment }}</h5>--}}



            {{--</div>--}}
            {{--</div>--}}






            <div class="list-group-item">
                {{--<div class="row-action-primary">--}}
                {{--<i class="material-icons">folder</i>--}}
                {{--<span class="label label-danger">ВСЕ ПРОПАЛО</span>--}}
                {{--</div>--}}
                <div class="row-content">
                    <div class="least-content">{{ $action->created_at }}</div>
                    <span class="label label-{{ $action->type }}">{{ $action->action }}</span>
                    <h4 class="list-group-item-heading" style="margin-top: 10px">{{ $action->username }}</h4>
                    <p class="list-group-item-text">{{ $action->comment }}</p>
                </div>
            </div>
            <div class="list-group-separator"></div>









        @endforeach
    </div>

@stop

