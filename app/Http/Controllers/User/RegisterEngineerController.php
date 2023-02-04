<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterEngineerController extends Controller
{
    public function index()
    {
        return view('publicUser.registerEngineering');

    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
    //         'password' => ['required', 'min:8'],
    //     ]);
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'password' => Hash::make($request->password),
    //         // 'password' => Hash::make($request->password),
    //         'is_admin' => false,

    //     ]);
    //     return redirect()->route('user.login');

    // }
}
