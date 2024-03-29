<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class RegisterEngineerController extends Controller
{

    public function __construct()
    {
        $this->middleware('RedirectHome');
    }

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
            'job_position' => ['required','string'],
            'address' => ['required','string'],
            'skills' => ['required','string'],
            'Linkedin_link' => ['required','string'],
            'education' => ['required','string'],
            'certificates_and_credits' => ['required','string'],
            'experience' => ['required','string'],
        ]);

/////////////////////
        // $file = time().'.'.$request->file->extension();
        // $request->file->move(public_path('uploads'), $file);
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        // $file = $request->file('cv_pdf')->getClientOriginalName();
        // $request->file('cv_pdf')->store('/public/cv',  $file);

        $file = $request->file('cv_pdf');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file('cv_pdf')->storeAs('/public/cv',$filename);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'engineer',
            'image' => $photoName,
            'cv_pdf' => $filename,
            'education' => $request->education,
            'the_description' => $request->the_description,
            'Linkedin_link' => $request->Linkedin_link,
            'job_position' => $request->job_position,
            'address' => $request->address,
            'skills' => $request->skills,
            'certificates_and_credits' => $request->certificates_and_credits,
            'experience' => $request->experience,
            'status' => 'pending',

        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {

            return redirect()->route('user.index');

        }
        // return redirect()->route('user.login');

    }
}
?>
