<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile.index',[
            'auth' =>  Auth::user() 
        ]);
    }

    public function update(ProfileRequest $request)
    {
        Auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return back()->with('success', 'Informasi akun berhasil diubah!');
    }
}
