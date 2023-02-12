<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories=Category::all();
        $products=Product::all();
        return view('admin.product.index',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
              
        $image=$request->file('image')->store('public/images');
        $product=Product::create([
            'title'=>$request->title,
            'image'=>$image,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'description'=>$request->description,

           
            
        ]);
        if($request->has('categories')){
            $product->categories()->attach($request->categories);
        }
          return redirect()->back()->with('success','product created succefully');
        
    

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        $categories=Category::all();
    return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $image=$product->image;
        if($request->hasFile('image')){
            Storage::delete([$product->image]);
            $image=$request->file('image')->store('public/images');

        }
       $product->update([
        'title'=>$request->title,
        'image'=>$image,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
        'discount_price'=>$request->discount_price,
        'description'=>$request->description,
       ]);
       if($request->has('categories')){
        $product->categories()->sync($request->categories);
       }
       return redirect()->back()->with('success','product updated succefully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();        
        return redirect()->back()->with('success','product created succefully');


    }
}
