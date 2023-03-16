<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Course::query()
            ->where('name', 'like', '%'.$search.'%')
            ->orWhere('long_description', 'like', '%'.$search.'%')
            ->get();
        // return view('publicUser.search', ['results' => $results]);

        $data = [];
        foreach ($results as $course) {
            $data[] = [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'image' => $course->image,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",


            ];
        }
        // if($results->isEmpty()) {
        //     return redirect()->back();
        // }
        return view('publicUser.search',['results'=>$data]);
    }
}
?>
