<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterEngineerController extends Controller
{
    public function index()
    {
        return view('publicUser.registerEngineering');

    }
    public function store(Request $request)
    {

// dd('sss');

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', 'min:8'],
            'image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
            'cv_pdf' => ['required','mimes:pdf,xlx,csv','max:511998'],
            'the_description' => ['required','string'],
            'the_work' => ['required','string'],
            'facebook_link' => ['required','string'],
            'certificates_and_credits' => ['required','string'],
            'experience' => ['required','string'],
        ]);
        // dd("ggg"),

        // $fileName = $request->file->getClientOriginalName();
        // $filePath = 'uploads/' . $fileName;

        // $path = Storage::disk('public')->put($filePath, file_get_contents($request->file));
        // $path = Storage::disk('public')->url($path);

        ////////////////////////////
        // $file = $request->file('cv_pdf');
        // $filename = time() . '.' . $request->file('cv_pdf')->extension();
        // $filePath = public_path() . '/public/uploads/';
        // $file->move($filePath, $filename);
/////////////////////
        // $file = time().'.'.$request->file->extension();
        // $request->file->move(public_path('uploads'), $file);
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $file = $request->file('cv_pdf')->getClientOriginalName();
        $request->file('cv_pdf')->store('/public/cv');
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'engineer',
            'image' => $photoName,
            'cv_pdf' => $file,
            'the_description' => $request->the_description,
            'facebook_link' => $request->facebook_link,
            'the_work' => $request->the_work,
            'certificates_and_credits' => $request->certificates_and_credits,
            'experience' => $request->experience,
            'status' => 'pending',

        ]);
        return redirect()->route('user.login');

    }
}
