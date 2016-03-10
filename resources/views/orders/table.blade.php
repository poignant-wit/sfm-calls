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
                    <th></th>
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
                            <a data-toggle="modal" data-target="#myModal"><span class="label label-{{ $order->last_action_type }}"
                                  data-type="{{ $order->last_action_type }}">{{ $order->last_action }}</span></a>
                        </td>
                        <td><button class="btn btn-default btn-xs order-details">ДЕТАЛИ</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>




@stop