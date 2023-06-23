<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('User.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.user-create');
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
            'name' => 'required|min:5|max:20',
            'email' => 'required',
            'roles' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'required',
            'password' => 'required|min:6|max:15'
        ]);

        $users = $request->all();

        if ($avatar = $request->file('avatar')) {
            $destinationPath = 'avatar/';
            $profileImage = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileImage);
            $users['avatar'] = "$profileImage";
        }

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'roles'=> $request->roles,
            'avatar'=> $profileImage,
            'alamat'=> $request->alamat,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/user')->with('Sukses',' User Berhasil disimpan');
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
        $users = User::where('id',$id)->first();

        return view('User.user-edit',compact('users'));
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
        // validasi
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'roles' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'required',
            'password' => 'required|min:6'
        ]);

        $users = User::where('id', $request->id)->first();

        if ($avatar = $request->file('avatar')) {
            $destinationPath = 'avatar/';
            $profileImage = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileImage);
            $users['avatar'] = "$profileImage";
        }
        else{
            unset($users['avatar']);
        }

        $users->update([
            'name' =>$request->name,
            'email' => $request->email,
            'roles'=>$request->roles,
            'avatar' => $profileImage,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password)
        ]);



        return redirect('/user')->with('Sukses',' User Berhasil diUpdate');
    }

    public function delete($id){
        $users = User::find($id)->delete();

        return redirect('/user');
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
