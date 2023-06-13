<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $products= Product::all();
        return view('pages.index', compact('products'));
    }

    public function panier($id){
       $product= Product::findOrFail($id);
        return view('pages.panier', compact('product'));
    }
}
