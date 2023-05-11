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
        return view('publicUser.shop',['data'=>$courses,'category'=>$category]);

    }

    public function showCategory($id){

        $courses = Course::where('category_id',$id)->where('status','accepted')->paginate(12);
        $category = Category::all();


        return view('publicUser.shop',['data'=>$courses ,'category'=>$category]);



    }
}
?>
