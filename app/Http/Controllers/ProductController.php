<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //

        $product = new Product();
        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->price = $request->input('price');
        $product->desc = $request->input('editor1');
        $product->user_id = auth()->user()->id;
        $product->status = 1;
        $product->save();

        if ($request->hasFile('images')) {


            $file = $request->file('images');

            foreach ($file as $item) {
                $extension = $item->getClientOriginalExtension(); // getting image extension

                $filename = time() . '.' . $extension;
                $item->move('uploads/', $filename);

                $image = new Image();
                $image->image_name = $filename;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        $products = auth()->user()->products;

        toastr()->success("Product Added Successfully");
        return redirect('/sellerproducts')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
