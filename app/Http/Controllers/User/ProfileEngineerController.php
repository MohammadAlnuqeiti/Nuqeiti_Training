<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;


use App\Models\User;

use Illuminate\Http\Request;

class ProfileEngineerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckEngineering');
    }

    public function index()
    {
        $id = Auth()->user()->id;
        // dd($id);
        $data = User::where('id', $id)->get();
        $courses = Course::where('user_id', $id)->get();

        // dd($courses);
        $Data = [];
        foreach ($courses as $course) {
            $Data[]= [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'image' => $course->image,
                'status' => $course->status,
                'video' => $course->video_course,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",


            ];
        }
        // dd($Data);

        return view('publicUser.engineeringProfile',['data'=>$data,'Data'=>$Data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data=User::where('id',$id)->get();
        // return view('publicUser.engineeringdetails',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::where('id',$id)->get();
        return view('publicUser.editProfileEngineering',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = User::findOrfail($id);
        $email=$data->email;
        $phone=$data->phone;




        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
            // 'password' => ['required', 'min:8'],
            // 'image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
            // 'cv_pdf' => ['required','mimes:pdf,xlx,csv','max:511998'],
            'the_description' => ['required','string'],
            'job_position' => ['required','string'],
            'address' => ['required','string'],
            'skills' => ['required','string'],
            'Linkedin_link' => ['required','string'],
            'education' => ['required','string'],
            'certificates_and_credits' => ['required','string'],
            'experience' => ['required','string'],
        ]);



        $data->name = $request->name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->the_description = $request->the_description;
        $data->job_position = $request->job_position;
        $data->address = $request->address;
        $data->skills = $request->skills;
        $data->Linkedin_link = $request->Linkedin_link;
        $data->education = $request->education;
        $data->certificates_and_credits = $request->certificates_and_credits;
        $data->experience = $request->experience;
        if($email !==$request->email){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],

            ]);

            $data->email = $request->email;
        }
        if($phone !=$request->phone){
            $request->validate([
                'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],

            ]);

            $data->phone = $request->phone;
        }
        if ( $request->file('image')) {
            $photoName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/image', $photoName);
            $data->image = $photoName;

        }
        if ( $request->password) {
            $data->password = Hash::make($request->password);
        }
        if ( $request->file('cv_pdf')) {
            $file = $request->file('cv_pdf')->getClientOriginalName();
            $request->file('cv_pdf')->store('/public/cv');
            $data->cv_pdf = $file;

        }
        $data->save();


        return redirect()->route('user.profile_engineer.index');

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
