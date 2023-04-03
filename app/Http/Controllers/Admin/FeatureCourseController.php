<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class FeatureCourseController extends Controller
{
    public function AddFeatue($id){

        $course = Course::where('id',$id)->first();

        $course->feature = 1 ;

        $course->save();

        return redirect()->back();

    }
    public function RemoveFeatue($id){

        $course = Course::where('id',$id)->first();

        $course->feature = 0 ;

        $course->save();

        return redirect()->back();

    }
}
