@extends('templates.default')

@section('content')


    <div class="row">
        <div class="col-md-2">
        <ul class="nav">
        @foreach($action_types as $action_type)

           <li> <a id="{{ $action_type->id }}" data-type="{{ $action_type->type }}"
               class="btn btn-{{ $action_type->type }} btn-xs btn-raised action-btn">{{ $action_type->action }}</a></li>
        @endforeach
        </ul>
    </div>
        <div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-body">
            {{--<ul class="nav nav-pills" style="display: flex; justify-content:center">--}}
            {{--<li class="active"><a href="javascript:void(0)">Все</a></li>--}}
            {{--<li><a href="">Невыполненные</a></li>--}}
            {{--<li><a href="">Нет ответа</a></li>--}}
            {{--<li><a href="">Невыполненные</a></li>--}}

            {{--</ul>--}}


            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--@foreach($action_types as $action_type)--}}

                        {{--<a id="{{ $action_type->id }}" data-type="{{ $action_type->type }}"--}}
                           {{--class="btn btn-{{ $action_type->type }} btn-xs btn-raised action-btn">{{ $action_type->action }}</a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}

            <table class="table table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th></th>--}}
                    <th>№ заказа</th>
                    <th>Принял</th>
                    <th>Дата</th>
                    <th>Заказчик</th>
                    <th>Этап</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td id="order-id">{{ sprintf("%06d", $order->order_id) }}</td>
                        <td>{{ $order->creator }}</td>
                        <td>{{ $order->created_date }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td id="order-action" class="last-action-cell vert-align">
                            <span class="label label-{{ $order->last_action_type }}"
                                  data-type="{{ $order->last_action_type }}">{{ $order->last_action }}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


@stop