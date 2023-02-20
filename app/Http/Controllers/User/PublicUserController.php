<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Cart;



use Illuminate\Http\Request;

class PublicUserController extends Controller
{
    public function index(){

        if(session()->has('cart')){
            if(Auth()->user()){

                $user_id = Auth()->user()->id;
                $cart = session()->get('cart');
                foreach ($cart as $key => $value ) {
                    $data = Cart::where('course_id',$key)->where('user_id',$user_id)->get();
                    // dd($data);
                    if(count($data)==0){
                        // dd(session()->has('cart'));

                    Cart::create([

                        'course_id' => $key,
                        'user_id' => $user_id,
                        'quantity' => 1,


                    ]);
                }

                }
            }


        }else{
            if(Auth()->user()){

                $user_id = Auth()->user()->id;
                $data = Cart::where('user_id',$user_id)->get();
                $cart = session()->get('cart');
                if(count($data)!=0){
                    foreach ($data as $value ) {

                        $cart[$value->course_id] =[];


                    }

                    session()->put('cart', $cart);                }



        }
    }

        //
        $courses = Course::where('feature',1)->get();

        // dd($courses);
        $data = [];
        foreach ($courses as $course) {
            $data[] = [
                'id' => $course->id,
                'name' => $course->name,
                'short_description' => $course->short_description,
                'long_description' => $course->long_description,
                'price' => $course->price,
                'image' => $course->image,
                'discount' => $course->discount,
                'new_price' => $course->new_price,
                'category' => isset($course->category) ? $course->category->name : "",
                'user' => isset($course->user) ? $course->user->name : "",


            ];
        }


        return view('publicUser.index',['data'=>$data]);


}
}
