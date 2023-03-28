<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (Auth()->user()) {

            $user_id = Auth()->user()->id;

            $DATA = Cart::where('user_id', $user_id)->get();

            $data = [];
            foreach ($DATA as $value) {
                $data[] = [
                    'id' => $value->id,
                    'course_id' => isset($value->course) ? $value->course->id : "",
                    'course_name' => isset($value->course) ? $value->course->name : "",
                    'course_price' => isset($value->course) ? $value->course->price : "",
                    'course_new_price' => isset($value->course) ? $value->course->new_price : "",
                    'course_discount' => isset($value->course) ? $value->course->discount : "",
                    'course_category' => isset($value->course) ? $value->course->category->name : "",
                    'course_image' => isset($value->course) ? $value->course->image : "",


                ];
            }
            return view('publicUser.cart', ['data' => $data]);
        } else {
            $cart = session()->get('cart');
            $array_id = [];
            if ($cart) {

                foreach ($cart as $key => $value) {
                    array_push($array_id, $key);
                }

                // Retrieving data from the course schedule according to the ID stored in the session

                $data = [];
                foreach ($array_id as $value) {
                    $DATA = Course::where('id', $value)->get();
                    foreach ($DATA as $course) {
                        $data[] = [
                            'course_id' => $course->id,
                            'course_name' => $course->name,
                            'short_description' => $course->short_description,
                            'long_description' => $course->long_description,
                            'course_price' => $course->price,
                            'course_image' => $course->image,
                            'course_discount' => $course->discount,
                            'course_new_price' => $course->new_price,
                            'course_category' => isset($course->category) ? $course->category->name : "",
                            'user' => isset($course->user) ? $course->user->name : "",

                        ];
                    }
                }
                return view('publicUser.cart', ['data' => $data]);
            }else{

                $data = [];

                return view('publicUser.cart', ['data' => $data]);
            }
        }
    }
    public function addToCart($id)
    {

        // dd(session('cart'));
        // session()->forget('cart');
        // return redirect()->back();


        // $user_id = Auth()->user()->id;
        // $course = Course::find($id);
        // if(!$course) {
        //     abort(404);
        // }

        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [$id => []];
            session()->put('cart', $cart);

            // Store in the cart table also if the user is logged in
            
            if (Auth()->user()) {

                $user_id = Auth()->user()->id;

                Cart::create([

                    'course_id' => $id,
                    'user_id' => $user_id,
                    'quantity' => 1,


                ]);
            }


            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            dd('dzdvdvvs');
            return redirect()->back()->with('failed', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        if ($cart) {

            $cart[$id] = [];
            session()->put('cart', $cart);

            if (Auth()->user()) {

                $user_id = Auth()->user()->id;

                Cart::create([

                    'course_id' => $id,
                    'user_id' => $user_id,
                    'quantity' => 1,


                ]);
            }

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $cart = session()->get('cart');
            // dd($cart);
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
                if (Auth()->user()) {
                    $user_id = Auth()->user()->id;

                    Cart::where('course_id', $id)->where('user_id', $user_id)->delete();
                }
            }else{
                $user_id = Auth()->user()->id;

                Cart::where('course_id', $id)->where('user_id', $user_id)->delete();
            }
            return redirect()->back();
            // session()->flash('success', 'Product removed successfully');
        }
    }
}
?>
