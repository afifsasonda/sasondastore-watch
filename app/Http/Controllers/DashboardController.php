<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $galleries = ProductGallery::all();

        return view('dashboard',compact('galleries'));
    }
}
