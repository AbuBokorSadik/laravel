@extends('layouts.app')

@section('content')
<h1>Edit a product</h1>
<form method="POST" action="{{route('products.update', ['product' => $product->id])}}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label>Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ?? $product->title}}" require>
    </div>
    <div class="form-row">
        <label>Description</label>
        <input class="form-control" type="text" name="description" value="{{old('description') ?? $product->description}}" require>
    </div>
    <div class="form-row">
        <label>Price</label>
        <input class="form-control" type="text" name="price" value="{{old('price') ?? $product->price}}" require>
    </div>
    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="text" name="stock" value="{{old('stock') ?? $product->stock}}" require>
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" require="">

            <option value="available" {{old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected':'')}}>Available</option>
            <option value="unavailable" {{old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected':'')}}>Unavailable</option>
        </select>
    </div>
    <div class="form-row">
        <button class="btn btn-primary btn-lg mt-3" type="submit">Update Product</button>
    </div>
</form>
@endsection