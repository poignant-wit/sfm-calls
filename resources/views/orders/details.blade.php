@extends('templates.default')

@section('content')
    <h3>Заказ № {{ $order_id }}</h3>
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">ЗАКАЗЧИК</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-6">

                    <h4><strong>Имя: </strong> {{ $order[0]->name }}</h4>
                    <h4><strong>Email: </strong> {{ $order[0]->email }}</h4>
                    <h4><strong>Телефон: </strong> {{ $order[0]->telephone }}</h4>
                    <h4><strong>Skype: </strong> {{ $order[0]->skype }}</h4>
                </div>

            </div>
        </div>
    </div>
    <hr>





<div class="row">
    <div class="col-md-6">


    <div class="list-group">
        @foreach($actions as $action)

            <div class="list-group-item">
                <div class="row-content">
                    <div class="least-content">{{ $action->created_at }}</div>
                    <h4 class="list-group-item-heading" style="margin-top: 10px">{{ $action->username }}</h4>
                    <span class="label label-{{ $action->type }}">{{ $action->action }}</span>
                    <p class="list-group-item-text">{{ $action->comment }}</p>
                </div>
            </div>
            <div class="list-group-separator"></div>
        @endforeach
            </div>
            </div>
    </div>













@stop

