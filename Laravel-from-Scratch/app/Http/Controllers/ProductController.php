<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except(['index','show']);
        $this->middleware('auth');
    }

    public function index()
    {
        // $products = DB::table('products')->get();
        $products = Product::all();
        // dd($products);
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
        // $rules = [
        //     'title' => ['required', 'max:255'],
        //     'description' => ['required', 'max:1000'],
        //     'price' => ['required', 'min:1'],
        //     'stock' => ['required', 'min:0'],
        //     'status' => ['required', 'in:available, unavailable'],
        // ];

        // request()->validate($rules);

        // if (request()->stock == 0 && request()->status == 'available') {
            // session()->flash('error', 'If available must have stock');
        //     return redirect()
        //     ->back()
        //     ->withInput(request()->all())
        //     ->withErrors('If available must have stock');
        // }

        $product = Product::create($request->validated());

        // session()->flash('success', "New product with id {$product->id} was created");

        return redirect()
            ->route('products.index')
            ->withSuccess("New product with id {$product->id} was created");
    }

    public function show(Product $product)
    {
        // $product = DB::table('products')->where('id',$product)->get();
        // $product = DB::table('products')->find($product);
        // $product = Product::findOrFail($product);
        // dd($product);
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product)
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {

        // $rules = [
        //     'title' => ['required', 'max:255'],
        //     'description' => ['required', 'max:1000'],
        //     'price' => ['required', 'min:1'],
        //     'stock' => ['required', 'min:0'],
        //     'status' => ['required', 'in:available, unavailable'],
        // ];

        // request()->validate($rules);

        $product->update($request->validated());
        // return redirect()->action('ProductController@index');
        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was updated");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was removed");
    }
}
