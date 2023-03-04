<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Course;

use Illuminate\Support\Facades\Hash;

use App\Models\User;


class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckUser');
    }

    public function index()
    {
        $id = Auth()->user()->id;
        // dd($id);
        $data = User::where('id', $id)->get();
        $orders = OrderDetails::where('user_id',$id)->get();
        $course_id = [];
        foreach ($orders as $order) {
            $course_id[$order->course_id] =$order->course_id;

        }

        $courses = Course::all();
        $data_courses = [];
        foreach ($courses as $course) {

            if(array_key_exists($course->id, $course_id)){

                $data_courses[] = [

                    'id' => $course->id,
                    'name' => $course->name,
                    'short_description' => $course->short_description,
                    'long_description' => $course->long_description,
                    'price' => $course->price,
                    'image' => $course->image,
                    'video' => $course->video_course,
                    'discount' => $course->discount,
                    'new_price' => $course->new_price,
                    'status' => $course->status,
                    'duration_of_the_course' => $course->duration_of_the_course,
                    'category' => isset($course->category) ? $course->category->name : "",
                    'user' => isset($course->user) ? $course->user->name : "",
                ];
            }





        }
        // dd( $data_courses);
        return view('publicUser.userProfile',['data'=>$data,'courses'=> $data_courses]);
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
        $data = User::where('id', $id)->get();
        return view('publicUser.editaccountuser',['data'=>$data]);

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


        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', 'min:8'],
            'update_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        $photoName = $request->file('update_image')->getClientOriginalName();
        $request->file('update_image')->storeAs('public/image', $photoName);


        $data->name = $request->name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        if($email !==$request->email){

            $data->email = $request->email;
        }
        $data->password = Hash::make($request->password);
        $data->phone = $request->phone;
        $data->image = $photoName;
        $data->status = "accepted";
        $data->save();
        //-------------------------------

        return redirect()->route('user.profile_user.index');
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
