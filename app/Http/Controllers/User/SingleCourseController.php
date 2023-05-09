<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OrderDetails;
use App\Models\Course;
use App\Models\lecture;
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

        $request->validate([
            'comment' => ['required'],
        ]);
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

        $lectures =lecture::where('course_id', $id)->get();
        $courses = Course::where('id', $id)->get();
        $comments = Comment::where('course_id',$id)->get();
        $data_comments = [];
        foreach ($comments as $comment) {
            $data_comments[] = [
                'id' => $comment->id,
                'comment' => $comment->comment,
                'created_at' => $comment->created_at,
                'user' => isset($comment->user) ? $comment->user->name : "",
                'user_id' => isset($comment->user) ? $comment->user->id : "",
                'user_image' => isset($comment->user) ? $comment->user->image : "",


            ];
        }
        $data = [];
        foreach ($courses as $course) {
            $data[] = [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'new_price' => $course->new_price,
                'discount' => $course->discount,
                'image' => $course->image,
                'video' => $course->video_course,
                'duration_of_the_course' => $course->duration_of_the_course,
                'created_at' => $course->created_at,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",
                'user_id' => isset($course->user) ? $course->user->id : "",
                'user_image' => isset($course->user) ? $course->user->image : "",
                'education' => isset($course->user) ? $course->user->education : "",


            ];
        }
        // $has_Sold

        $orders =OrderDetails::where('course_id',$id)->get();
        $users_id = [];
        foreach ($orders as $order) {
            $users_id[$order->user_id] =$order->user_id;

        }


        if($courses->isEmpty()) {
            return redirect()->back();
        }
        // للتشييك اذا كان المستخدم اشترى الكورس او لا
        $has_Sold= false;
        $engineering_id = $data[0]['user_id'];
        if(Auth()->user()){

        if(array_key_exists(Auth()->user()->id, $users_id) || Auth()->user()->id === $engineering_id){
            $has_Sold = true;

        }
    }
        return view('publicUser.singleCourse',['data'=>$data , 'lectures'=>$lectures,'has_Sold'=>$has_Sold,'comments'=>$data_comments]);
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
?>
