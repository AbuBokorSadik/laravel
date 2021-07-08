@extends('layouts.app')

@section('content')

@empty($products)
<div class="alert alert-warning">
    The list of product is empty
</div>

@else
<div class="row">
    @foreach($products as $product)
    <div class="col-3 mt-2 ">
        @include('components.product-cart')
    </div>
    
    @endforeach
</div>

@endif

@endsection