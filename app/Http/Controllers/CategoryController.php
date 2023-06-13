<?php

namespace App\Http\Controllers;

use App\Models\Category;
use COM;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('Category.index', compact('categories')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
         'name'=>'required|min:3',
         'cover'=> 'mimes:jpg,jpeg,png'
       ]);

       $category= new Category();

       $category->name=$request->name;
       if($request->hasFile('cover')){
        $category->cover = $request->file('cover')->store('img/category');
     }
       $category->save();
       return redirect(route('Category.index'));

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
        $category= Category::findOrFail($id);
        return view('Category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'cover'=> 'mimes:jpg,jpeg,png'
          ]);
   
          $category=  Category::findOrFail($id);
   
          $category->name=$request->name;
          if($request->hasfile('cover')){
           $category->cover = $request->file('cover')->store('images');
        }
          $category->update();
          return redirect(route('Category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Category::destroy($id);
       return redirect(route('Category.index'));
    }
}
