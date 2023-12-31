<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(6)->get();
        // $products = Product::with('galleries')->take(12)->get();
        $galleries = ProductGallery::all();
        $sliders = Slider::take(3)->get();

        $approvedProducts = Product::where('status', 'Approved')->get();

        return view('landingpage',compact('categories','sliders','approvedProducts','galleries'));
    }
}
