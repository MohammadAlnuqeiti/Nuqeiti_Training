<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['CheckEngineering','CheckEngineerStatus']);
    }

    public function index()
    {
        $category=Category::all();
        return view('publicUser.addcourse',['category'=>$category]);
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
        $request->validate([
            'course_name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'duration_of_the_course' => ['required','numeric'],
            'course_price' => ['required','numeric'],
            'select' => ['required'],
            'video_course' => ['required','mimetypes:video/avi,video/mpeg,video/mp4','max:102400'],
            'course_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);
        $user=$request->user_id;

        $photoName = $request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->storeAs('public/image', $photoName);
        $videooName = $request->file('video_course')->getClientOriginalName();
        $request->file('video_course')->storeAs('public/video', $videooName);

        Course::create([

            'name' => $request->course_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->course_price,
            'category_id' => $request->select,
            'video_course' => $videooName,
            'duration_of_the_course' => $request->duration_of_the_course,
            'user_id' =>  $user,
            'image' => $photoName,
            'status' => "pending",

        ]);

        return redirect()->route('user.profile_engineer.index');
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
        $category=Category::all();
        $course = Course::where('id', $id)->get();

        //لحتى ما يقدر المهندس يعدل على دورة مهندس اخر

        $courses_user = Course::where('user_id', Auth()->user()->id)->get();
        $id_courses_user=[];
        foreach ($courses_user as  $value) {
            array_push($id_courses_user, $value->id);
        }

        // $course=Course::findOrFail($id); is emptyما بتزبط مع ال

        if($course->isEmpty() || !in_array($id, $id_courses_user)) {
            return redirect()->back();
        }

        return view('publicUser.editCourse', [
            'data' => Course::findOrFail($id),'category'=>$category
        ]);
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

        $request->validate([
            'course_name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'duration_of_the_course' => ['required','numeric'],
            'course_price' => ['required','numeric'],
            'select' => ['required'],
        ]);



        $data = Course::findOrfail($id);
        $data->name = $request->course_name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->price = $request->course_price;
        $data->category_id = $request->select;
        $data->duration_of_the_course = $request->duration_of_the_course;

        if ( $request->file('course_image')) {
            $photoName = $request->file('course_image')->getClientOriginalName();
            $request->file('course_image')->storeAs('public/image', $photoName);
            $data->image = $photoName;

        }
        if (  $request->file('video_course')) {
            $videooName = $request->file('video_course')->getClientOriginalName();
            $request->file('video_course')->storeAs('public/video', $videooName);
            $data->video_course = $videooName;

        }
        $data->status = "pending";
        $data->save();
        //-------------------------------

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
?>
