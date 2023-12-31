<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $users = User::all();
        $products = Product::with(['galleries','category'])->get();
        $galleries = ProductGallery::all();
        return view('dashboard-table',compact('users','products','galleries','sliders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.slider-create');
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
            'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required|min:5'
        ]);

        $sliders = $request->all();

        if ($banner = $request->file('banner')) {
            $destinationPath = 'banner/';
            $profileImage = date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($destinationPath, $profileImage);
            $sliders['banner'] = "$profileImage";
        }

        Slider::create([
            'banner' => $profileImage,
            'name' => $request->name
        ]);

        return redirect('/dashboard-table')->with('Success','Berhasil tambahkan banner');
    }
    public function delete($id){
        $sliders = Slider::find($id)->delete();

         return redirect('/dashboard-table');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
