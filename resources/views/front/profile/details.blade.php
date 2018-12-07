
@extends('front.layouts.master')

@section('content')
      <div class="row mt-4">

        <div class="col-md-12">
                <div class="header">
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th colspan="8">Order Details</th>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <th>Delivery Address</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            @foreach($order->OrderItems as $orderItem)
                        <tr>
                            <td>{{ $orderItem->order->date }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $orderItem->product->name }}</td>
                            <td>{{ $orderItem->quantity }}</td>
                            <td>${{ $orderItem->price }}</td>
                            <td>
                                <a href="{{ url('uploads/', $orderItem->product->image) }}" target="_blank"><img src="{{ url('uploads/', $orderItem->product->image) }}" alt="{{ url('uploads/', $orderItem->product->image)}} " class="img-thumbnail" style="width: 100px"/></a>
                            </td>
                            <td>
                                @if($orderItem->order->status)
                                    <span class="badge badge-success">Confirmed</span>
                                @else
                                    <span class="badge badge-warning">Pending</span>
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
@endsection