@extends('admin.layouts.master')

@section('page')
    Users Order Details
@endsection

@section('content')
    <div class="row">
        @if($orders->isEmpty())
            <h4> This user has yet to order any items </h4>
        @else
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$orders[0]->user->name}} Orders Details</h4>
                    <p class="category">List of all registered users</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Product Name</th>
                            <th>Address</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @foreach($order->OrderItems as $orderItem)
                                    <tr>
                                        <td>{{$orderItem->order_id}}</td>
                                        <td>{{$orderItem->product->name}}</td>
                                        <td>{{$orderItem->order->address}}</td>
                                        <td>{{$orderItem->quantity}}</td>
                                        <td>{{$orderItem->price}}</td>
                                        <td>{{$orderItem->order->date}}</td>
                                        <td>
                                            @if( $orderItem->order->status)
                                                <span class="label label-success">Confirmed</span>
                                            @else
                                                <span class="label label-warning">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
        @endif
    </div>
@endsection