<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        $courses = Course::where('status','accepted')->paginate(12);
        $category = Category::all();
        // $data = [];
        // foreach ($courses as $course) {
        //     $data[] = [
        //         'id' => $course->id,
        //         'name' => $course->name,
        //         'short_description' => $course->short_description,
        //         'long_description' => $course->long_description,
        //         'price' => $course->price,
        //         'image' => $course->image,
        //         'discount' => $course->discount,
        //         'new_price' => $course->new_price,
        //         'category' => isset($course->category) ? $course->category->name : "",
        //         'user' => isset($course->user) ? $course->user->name : "",


        //     ];
        // }
        // dd($data);

        // $data=$data->paginate(15);
        return view('publicUser.shop',['data'=>$courses,'category'=>$category]);

    }

    public function showCategory($id){

        $courses = Course::where('category_id',$id)->where('status','accepted')->paginate(12);
        $category = Category::all();


        return view('publicUser.shop',['data'=>$courses ,'category'=>$category]);



    }
}
