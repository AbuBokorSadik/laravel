<?php
namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProductRequest;
use App\Models\PanelProduct;
use App\Scopes\AvailableScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = PanelProduct::without('images')->get();
        // @dd($products);
        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create ');
    }

    public function store(ProductRequest $request)
    {
        $product = PanelProduct::create($request->validated());

        return redirect()
            ->route('products.index')
            ->withSuccess("New product with id {$product->id} was created");
    }

    public function show(PanelProduct $product)
    {
        // @dd($product, asset($product->images->first()->path));
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function edit(PanelProduct $product)
    {
        return view('products.edit')->with([
            'product' => $product,
        ]);
    }

    public function update(ProductRequest $request, PanelProduct $product)
    {

        $product->update($request->validated());
        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was updated");
    }

    public function destroy(PanelProduct $product)
    {
        $product->delete();
        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was removed");
    }
}
