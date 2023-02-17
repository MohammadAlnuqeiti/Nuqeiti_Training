<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'select_course' => ['required'],
            'discount_course' => ['required'],
        ]);
        $course_id = $request->select_course;
        // $courses = Course::where('id', $course_id)->get();

        $data = Course::findOrfail($course_id);
        $data->discount = $request->discount_course;
        $data->new_price = $data->price * (1 - $request->discount_course / 100);

        $data->save();
        return redirect()->route('admin.discount');



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
        $data = Course::findOrfail($id);
        return view('admin.discountTable.editCoursesDiscount',['data'=>$data]);
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
            'discount_course' => ['required'],
        ]);

        $course_id = $id;
        // $courses = Course::where('id', $course_id)->get();

        $data = Course::findOrfail($course_id);
        $data->discount = $request->discount_course;
        $data->new_price = $data->price * (1 - $request->discount_course / 100);

        $data->save();
        return redirect()->route('admin.discount');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Course::findOrfail($id);
        $data->discount = 0;
        $data->new_price = 0;

        $data->save();
        return redirect()->route('admin.discount');
    }
}
