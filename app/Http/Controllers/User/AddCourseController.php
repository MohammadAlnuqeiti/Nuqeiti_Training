<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
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
