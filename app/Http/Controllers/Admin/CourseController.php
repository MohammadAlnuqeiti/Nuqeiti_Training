<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('category')->get();
        $data = [];
        foreach ($courses as $course) {
            $data[] = [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'image' => $course->image,
                'video' => $course->video_course,
                'duration_of_the_course' => $course->duration_of_the_course,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",


            ];
        }


        return view('admin.coursesTable.show',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();

        return view('admin.coursesTable.create',['category'=>$category]);
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
            'duration_of_the_course' => ['required'],
            'course_price' => ['required'],
            'select' => ['required'],
            'video_course' => ['required'],
            'course_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);
        $user=$request->user_id;

        $photoName = $request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->storeAs('public/image', $photoName);
        // $photoName2 = $request->file('trip_image2')->getClientOriginalName();
        // $request->file('trip_image2')->storeAs('public/image', $photoName2);

        Course::create([

            'name' => $request->course_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->course_price,
            'category_id' => $request->select,
            'video_course' => $request->video_course,
            'duration_of_the_course' => $request->duration_of_the_course,
            'user_id' =>  $user,
            'image' => $photoName,
            'status' => "pending",

        ]);

        return redirect()->route('admin.courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::where('id', $id)->get();
        $data = [];
        foreach ($courses as $course) {
            $data[] = [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'image' => $course->image,
                'video' => $course->video_course,
                'duration_of_the_course' => $course->duration_of_the_course,
                'status' => $course->status,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",


            ];
        }
        if($courses->isEmpty()) {
            return redirect()->back();
        }

        return view('admin.coursesTable.details', [
            'data' =>  $data
        ]);

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

        // $trip=Trip::findOrFail($id); is emptyما بتزبط مع ال
        if($course->isEmpty()) {
            return redirect()->back();
        }

        return view('admin.coursesTable.edit', [
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
            'duration_of_the_course' => ['required'],
            'course_price' => ['required'],
            'select' => ['required'],
            'video_course' => ['required'],
            'course_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        $photoName = $request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->storeAs('public/image', $photoName);


        $data = Course::findOrfail($id);
        $data->name = $request->course_name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->price = $request->course_price;
        $data->category_id = $request->select;
        $data->video_course = $request->video_course;
        $data->image = $photoName;
        $data->status = "pending";
        $data->save();
        //-------------------------------

        return redirect()->route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::findOrfail($id)->delete();
        return redirect()->route('admin.courses.index');

    }
}
