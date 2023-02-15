<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Comment;
use Illuminate\Http\Request;

class SingleCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        Comment::create([

            'user_id' => $request->user_id,
            'comment' => $request->comment,
            'course_id' => $request->course_id,


        ]);

        return redirect()->back();

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
                'created_at' => $course->created_at,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",
                'user_image' => isset($course->user) ? $course->user->image : "",
                'education' => isset($course->user) ? $course->user->education : "",


            ];
        }
        if($courses->isEmpty()) {
            return redirect()->back();
        }
        return view('publicUser.singleCourse',['data'=>$data]);
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
