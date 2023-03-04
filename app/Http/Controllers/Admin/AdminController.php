<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){


        return view('admin.index');

    }
    public function admin(){

        $data=User::all();
        return view('admin.admin.show',['data'=>$data]);

    }
    public function create()
    {
        return view('admin.admin.create');

    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'admin',

        ]);
        event(new Registered($user));


        return redirect()->route('admin.show.admin');

    }
    public function profile()
    {


        $id = Auth()->user()->id;

        $data=User::where('id',$id)->first();
        return view('admin.admin.profile',['data'=>$data]);

    }
    public function editProfile($id)
    {

        $data=User::where('id',$id)->first();
        return view('admin.admin.editProfile',['data'=>$data]);

    }
    public function updateProfile(Request $request, $id)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required'],
            'image' =>['required','image','mimes:jpg,png,jpeg,gif','max:2048'],

        ]);
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $user=User::findorFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        $user->image=$photoName;

        $user->save();
        return redirect()->route('admin.profile.admin');

    }
}
