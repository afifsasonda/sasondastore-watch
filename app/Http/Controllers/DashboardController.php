<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $galleries = ProductGallery::all();
        $galleriesCount = ProductGallery::count();
        $productsCount = Product::count();
        $userCount = User::count();
        return view('dashboard',compact('galleries','userCount','productsCount','galleriesCount'));
    }
}
