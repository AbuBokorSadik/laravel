@extends('layouts.master')

@section('content')
<h1>Edit a product</h1>
<form method="POST" action="{{route('products.update', ['product' => $product->id])}}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label>Title</label>
        <input class="form-control" type="text" name="title" value="{{$product->title}}" require>
    </div>
    <div class="form-row">
        <label>Description</label>
        <input class="form-control" type="text" name="description" value="{{$product->description}}" require>
    </div>
    <div class="form-row">
        <label>Price</label>
        <input class="form-control" type="text" name="price" value="{{$product->price}}" require>
    </div>
    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="text" name="stock" value="{{$product->stock}}" require>
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" require="">

            <option value="available" {{$product->status == 'available' ? 'selected':''}}>Available</option>
            <option value="unavailable" {{$product->status == 'unavailable' ? 'selected':''}}>Unavailable</option>
        </select>
    </div>
    <div class="form-row">
        <button class="btn btn-primary btn-lg" type="submit">Update Product</button>
    </div>
</form>
@endsection