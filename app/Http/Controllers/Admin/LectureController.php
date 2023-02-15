<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;

use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures = Lecture::all();

        $data = [];
        foreach ($lectures as $lecture) {
            $data[] = [
                'id' => $lecture->id,
                'title' => $lecture->name,
                'description' => $lecture->description,
                'video' => $lecture->video_lecture,
                'course' => isset($lecture->course) ? $lecture->course->name : "",
                'engineering' => isset($lecture->user) ? $lecture->user->name : "",


            ];
        }
        // dd($data);

        return view('admin.lecturesTable.show',['data'=>$data]);

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
        $lecture = Lecture::where('id', $id)->get();

        if($lecture->isEmpty()) {
            return redirect()->back();
        }

        return view('admin.lecturesTable.edit', [
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

        return redirect()->route('admin.lectures.index');
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
        return redirect()->route('admin.lectures.index');
    }
}
