@extends('layouts.app')

@section('content')

<h1>Your Cart</h1>

@if(!isset($cart) || $cart->products->isEmpty())
<div class="alert alert-warning">
    Your cart is empty
</div>

@else
<div class="text-right mr-5">
    <a href="{{route('orders.create')}}" class="btn btn-success mb-3">Start Order</a>
</div>

<div class="row">
    @foreach($cart->products as $product)
    <div class="col-3">
        @include('components.product-cart')
    </div>
    @endforeach
</div>
@endif

@endsection