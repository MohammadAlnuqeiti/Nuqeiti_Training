<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lecture;

use Illuminate\Http\Request;

class LectureUserController extends Controller
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
        //
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
            'name' => ['required'],
            'description' => ['required'],
            'video_lecture' => ['required'],
        ]);
        $user_id=$request->user_id;
        $course_id=$request->course_id;

        // $photoName = $request->file('course_image')->getClientOriginalName();
        // $request->file('course_image')->storeAs('public/image', $photoName);


        Lecture::create([

            'name' => $request->name,
            'description' => $request->description,
            'video_lecture' => $request->video_lecture,
            'user_id' =>  $user_id,
            'course_id' => $course_id,

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
        $lectures = Lecture::where('course_id',$id)->get();

        //لحتى ما يقدر المهندس يعدل على دورة مهندس اخر

        $courses_user = Course::where('user_id', Auth()->user()->id)->get();
        $id_courses_user=[];
        foreach ($courses_user as  $value) {
            array_push($id_courses_user, $value->id);
        }

        if($lectures->isEmpty() || !in_array($id, $id_courses_user)) {
            return redirect()->back();
        }
        // dd($lectures);
        return view('publicUser.lectureCourse',['lectures'=>$lectures,'course_id'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecture = Lecture::where('id', $id)->get();
        $courses_user = Course::where('user_id', Auth()->user()->id)->get();
        $id_courses_user=[];
        foreach ($courses_user as  $value) {
            array_push($id_courses_user, $value->id);
        }
        $id_lecture_courses="";
        foreach ($lecture as  $value) {
            // array_push($id_lecture_courses, $value->course_id);
            $id_lecture_courses=$value->course_id;
        }
        // dd($id_lecture_courses);

        if($lecture->isEmpty() || !in_array($id_lecture_courses, $id_courses_user)) {
            return redirect()->back();
        }

        return view('publicUser.editLecture', [
            'data' => Lecture::findOrFail($id)
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
            'name' => ['required'],
            'description' => ['required','string'],
            'video_lecture' => ['required'],
            // 'course_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        // $photoName = $request->file('course_image')->getClientOriginalName();
        // $request->file('course_image')->storeAs('public/image', $photoName);


        $data = Lecture::findOrfail($id);
        $data->name = $request->name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->description = $request->description;
        $data->video_lecture = $request->video_lecture;

        // $data->image = $photoName;
        $data->save();
        //-------------------------------

        return redirect()->route('user.lectures.show',$data->course_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lecture::findorFail($id)->delete();
        return redirect()->back();
    }
}
?>
