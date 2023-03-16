<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\OrderDetails;
use App\Models\Category;

use App\Models\User;
use App\Models\Cart;



use Illuminate\Http\Request;

class PublicUserController extends Controller
{
    public function index(){

        if(session()->has('cart')){
            if(Auth()->user()){

                if(Auth()->user()->role=="engineer"){

                    session()->forget('cart');

                }else{

                    $user_id = Auth()->user()->id;
                    $cart = session()->get('cart');
                    //
                    $orders =OrderDetails::where('user_id',$user_id)->get();
                    $course_id = [];
                    foreach ($orders as $order) {
                        $course_id[$order->course_id] =$order->course_id;

                    }
                    //
                    foreach ($cart as $key => $value ) {

                        // dd(array_key_exists($key, $course_id));
                        if(array_key_exists($key, $course_id)){

                            unset($cart[$key]);
                            session()->put('cart', $cart);
                        }else{

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
                    $data = Cart::where('user_id',$user_id)->get();
                    session()->forget('cart');
                    $cart = session()->get('cart');
                    if(count($data)!=0){
                        foreach ($data as $value ) {

                            $cart[$value->course_id] =[];


                        }

                        // dd($cart);
                        session()->put('cart', $cart);
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

                    // dd($cart);
                    session()->put('cart', $cart);                }



        }
    }

        //
        $courses = Course::where('feature',1)->get();
        $engineering = User::where('role','engineer')->where('status','accepted')->get();
        $category = Category::all();

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


        return view('publicUser.index',['data'=>$data,'engineering'=>$engineering,'category'=>$category]);


}
        public function engineeringDetails($id){

            $courses = Course::where('user_id',$id)->get();
            $data_courses = [];
            foreach ($courses as $course) {
                $data_courses[]= [
                    'id' => $course->id,
                    'name' => $course->name,
                    'short_description' => $course->short_description,
                    'long_description' => $course->long_description,
                    'price' => $course->price,
                    'image' => $course->image,
                    'video' => $course->video_course,
                    'category' => isset($course->category) ? $course->category->name : "",
                    'user' => isset($course->user) ? $course->user->name : "",


                ];
            }
            $data=User::where('id',$id)->get();
            return view('publicUser.engineeringdetails',['data'=>$data,'data_courses'=>$data_courses]);



        }
}
?>
