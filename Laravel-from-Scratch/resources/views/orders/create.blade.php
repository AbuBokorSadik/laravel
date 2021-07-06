@extends('layouts.app')

@section('content')

<h1>Order Details</h1>

<div class="text-right mr-5">
    <form class="d-inline" method="POST" action="{{ route('orders.store') }}">

        @csrf

        <button class="btn btn-success" type="submit">Confirm Order</button>

    </form>
</div>
<br>
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-light">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach($cart->products as $product)
            <tr>
                <td>
                    <img src="{{ asset($product->images->first()->path) }}" width="100" height="100">
                    {{$product->title}}
                </td>
                <td>${{$product->price}}</td>
                <td>{{$product->pivot->quantity}}</td>
                <td>${{$product->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h4 class="text-right mr-5"><strong>Grand Total: </strong>${{ $cart->total }}</h4>
</div>

@endsection