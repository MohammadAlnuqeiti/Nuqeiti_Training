<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $category=Category::all();

        $courses=Course::all();



        return view('admin.discountTable.show',['category'=>$category,'courses'=>$courses]);

    }
    public function addDiscount(){
        $category=Category::all();

        $courses=Course::all();



        return view('admin.discountTable.addDiscount',['category'=>$category,'courses'=>$courses]);

    }

}
