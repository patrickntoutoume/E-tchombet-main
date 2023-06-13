<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::all();
        return view('Product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'price'=>"required|numeric",
            'description'=>'required|min:3|max:255',
            'cover'=> 'mimes:jpg,jpeg,png',
            'current_stock'=>'required',
            'publish'=>'required'
        ]);

        $product= new Product();

        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        if($request->hasFile('cover')){
            $product->cover=$request->file('cover')->store('img/products');
        }
        $product->current_stock=$request->current_stock;
        $product->publish=$request->publish;

        $product->save();
        return redirect(route ('Product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product= Product::findOrFail($id);
        return view('Product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'price'=>"required|numeric",
            'description'=>'required|min:3|max:255',
            'cover'=> 'mimes:jpg,jpeg,png',
            'current_stock'=>'required',
            'publish'=>'required'
        ]);

        $product= Product::findOrFail($id);

        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        if($request->hasfile('cover')){
            $product->cover = $request->file('cover')->store('images/posts');
         }
        $product->current_stock=$request->current_stock;
        $product->publish=$request->publish;

        $product->update();
        return redirect(route ('Product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     Product::destroy($id);
     return redirect(route ('Product.index'));
    }
}
