<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryDiscountController extends Controller
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
            'select_category' => ['required'],
            'discount_category' => ['required'],
        ]);

        $category_id = $request->select_category;

        //  get courses by category

        $courses = Course::where('category_id', $category_id)->get();

        // update discount category

        $data = Category::findOrfail($category_id);
        $data->discount = $request->discount_category;

        $data->save();


        // update price of courses

        foreach($courses as $course){
            $data = Course::findOrfail($course->id);
            $data->discount = $request->discount_category;
            $data->new_price = $course->price* (1 - $request->discount_category / 100);

            $data->save();
        }

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
        $data = Category::where('id',$id)->first();
        if(count(Category::all()) < $id || $id < 0){
            return redirect()->back();
        }
        return view('admin.discountTable.editCategoryDiscount',['data'=>$data]);
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
            'discount_category' => ['required'],
        ]);

        $category_id = $id;
        $courses = Course::where('category_id', $category_id)->get();


        // update discount category

        $data = Category::findOrfail($category_id);
        $data->discount = $request->discount_category;
        $data->save();


        // update price of courses
        foreach($courses as $course){
            $data = Course::findOrfail($course->id);
            $data->discount = $request->discount_category;
            $data->new_price = $course->price* (1 - $request->discount_category / 100);

            $data->save();
        }

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


        $category_id = $id;
        $courses = Course::where('category_id', $category_id)->get();

        // update discount category

        $data = Category::findOrfail($category_id);
        $data->discount = 0;

        $data->save();


        // update price of courses
        foreach($courses as $course){
            $data = Course::findOrfail($course->id);
            $data->discount = 0;
            $data->new_price = 0;

            $data->save();
        }

        return redirect()->back();
    }
}
?>
