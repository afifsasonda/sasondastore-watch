<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPageController extends Controller
{
    public function index(){
        $users = User::all();
        return view('login.register');
    }

    public function store(Request $request){
        // validasi
        $this->validate($request,[
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:6|max:15'
        ]);

        $users = $request->all();

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            // 'roles' => $request->roles,
            // 'avatar' => $request->avatar,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('Sukses Registrasi Akun');
    }
}
