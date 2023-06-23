<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Slider;
use Illuminate\Http\Request;

use Illuminate\Http\Request\Admin\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['galleries','category'])->get();
        $galleries = ProductGallery::all();

        return view('product.product',compact('products','galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = ProductGallery::all();
        $categories = Category::all();

        return view('product.product_create',[
            'galleries' => $galleries,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $this->validate($request,[
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:200',
            'categories_id' => 'required',
            'status' => 'required'

        ]);

        $products = $request->all();

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'categories_id' => $request->categories_id,
            'status' => $request->status
        ]);
        return redirect('/product')->with('Sukses',' Data Product berhasil disimpan!');
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
        $products = Product::where('id',$id)->first();
        $galleries = ProductGallery::all();
        $categories = Category::all();

        return view('product.product_edit',compact('products','galleries','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'categories_id' => 'required',
            'status' => 'required'
        ]);

        $products = Product::where('id',$request->id)->first();

        $products->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'categories_id' => $request->categories_id,
            'status' => $request->status
        ]);


        return redirect('/product')->with('Data berhasil diUpdate!');

    }

    public function filter(Request $request){
        $categories = Category::take(6)->get();
        // $products = Product::with('galleries')->take(12)->get();
        $sliders = Slider::take(3)->get();
        $galleries = ProductGallery::all();

        $query = Product::query();

        // filter berdasarkan nama
        if($request->has('name')){
            $query->where('name','like','%'.$request->input('name').'%');
        }
        if($request->has('min_price')){
            $query->where('price', '>=', $request->input('min_price'));
        }
        // if($request->has('max_price')){
        //     $query->where('price', '<=', $request->input('max_price'));
        // }


        $filterProducts = $query->get();

        return view('/filter',compact('filterProducts','galleries','sliders','categories'));
    }


    public function delete($id){
       $products = Product::find($id)->delete();

        return redirect('/product');
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
