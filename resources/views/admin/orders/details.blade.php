
@extends('admin.layouts.master')

@section('page')
    Order Details
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Orders</h4>
                    <p class="category">List of all orders</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order_items as $item)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->date }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                @if($order->status)
                                    <span class="label label-success">Confirmed</span>
                                @else
                                    <span class="label label-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                @if($order->status)
                                    {{ link_to_route('order.pending', 'Pending', $order->id, ['class'=>'btn btn-warning btn-sm']) }}
                                @else
                                    {{ link_to_route('order.confirm', 'Confirm', $order->id, ['class'=>'btn btn-success btn-sm']) }}
                                @endif
                                {{ link_to_route('products.show', 'Details', $item->product_id, ['class'=>'btn btn-success btn-sm']) }}
                            </td>
                        </tr>
                        @endforeach
                       </tbody>
                    </table>

                </div>
            </div>
        </div>
@endsection