@extends('front.layouts.master')

@section('content')
    <div class="row mt-4">

        <div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2" >User Details<a href=""  class="pull-right"><i class="fa fa-cogs"></i>Edit User</a></th>
        </tr>
    </thead>
    <tr>
        <th>Name</th>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <th>Registered At</th>
        <td>{{ $user->created_at->diffForHumans() }}</td>
    </tr>
</table>

<div class="content table-responsive table-full-width">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="6" >Orders Details</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->order as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>
                    @foreach($order->products as $item)
                        {{ $item->name }}
                    @endforeach
                </td>
                <td>
                    @foreach($order->orderItems as $item)
                        {{ $item->quantity }}
                    @endforeach
                </td>
                <td>
                    @if($order->status)
                        <span class="label label-success">Confirmed</span>
                    @else
                        <span class="label label-warning">Pending</span>
                    @endif
                </td>
                <td>
                   <a href="{{url('/user/order/') .'/'.$order->id}}" class="btn btn-outline-dark btn-sm">Details</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
        </div>
    </div>
@endsection