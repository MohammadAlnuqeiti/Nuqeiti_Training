<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class RegisterUserController extends Controller
{
    public function index()
    {
        return view('publicUser.registerUser');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required' , 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', 'min:8'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 'accepted',


        ]);


        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {

            return redirect()->route('user.index');

        }



        // return redirect()->route('user.login');

    }
}
?>
