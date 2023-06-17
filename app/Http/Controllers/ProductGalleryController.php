<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = ProductGallery::with('product')->get();
        return view('gallery-product.gallery',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('gallery-product.gallery-create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'products_id' => 'required',
            'photos' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $galleries = $request->all();

        if ($photos = $request->file('photos')) {
            $destinationPath = 'photos/';
            $profileImage = date('YmdHis') . "." . $photos->getClientOriginalExtension();
            $photos->move($destinationPath, $profileImage);
            $galleries['photos'] = "$profileImage";
        }

        ProductGallery::create([
            'products_id' => $request->products_id,
            'photos' => $profileImage
        ]);

        return redirect('/product-gallery')->with('Sukses Menyimpan!');
    }

    public function delete($id){
        $galleries = ProductGallery::find($id)->delete();
        return redirect('/product-gallery');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
