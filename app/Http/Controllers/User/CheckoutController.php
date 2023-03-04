<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Checkout;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

      public function __construct()
    {
        $this->middleware('CheckLogin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(session('total_price'));
        if(session('total_price')!=0){

            return view('publicUser.checkout');
        }else{
            return redirect()->back();

        }
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
            'user_name' => ['required'],
            'email' => ['required','string', 'email', 'max:255'],
            'address' => ['required'],
            'city' => ['required'],
            'card_name' => ['required'],
            'card_number' => ['required'],
            'exp_date' => ['required','numeric'],
            'cvv' => ['required','numeric'],

        ]);
        $user_id = Auth()->user()->id;
        $total_price=session('total_price');

        $last_order = Order::create([

            'user_id' => $user_id,
            'total_price' => $total_price,


        ]);

        $last_order_id = $last_order->id;

        $data_cart = Cart::where('user_id', $user_id)->get();

        $data = [];
        foreach ($data_cart as $value) {
            $data[] = [

                'course_id' => isset($value->course) ? $value->course->id : "",
                // 'course_name' => isset($value->course) ? $value->course->name : "",
                'course_price' => isset($value->course) ? $value->course->price : "",
                'course_new_price' => isset($value->course) ? $value->course->new_price : "",
                'course_discount' => isset($value->course) ? $value->course->discount : "",
                // 'course_category' => isset($value->course) ? $value->course->category->name : "",
                // 'course_image' => isset($value->course) ? $value->course->image : "",

            ];
        }

        Checkout::create([

            'user_name' => $request->user_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'card_name' => $request->card_name,
            'card_number' => $request->card_number,
            'exp_date' => $request->exp_date,
            'cvv' => $request->cvv,
            'order_id' => $last_order_id,


        ]);
        foreach($data as $value){

            if($value['course_discount']>0){
                $price= $value['course_new_price'];
            }else{
                $price= $value['course_price'];
            }
            OrderDetails::create([

                'order_id' => $last_order_id,
                'course_id' => $value['course_id'],
                'quantity' => 1,
                'price' =>$price,


            ]);
        }

        Cart::where('user_id', $user_id)->delete();
        session()->forget('cart');
        session()->forget('total_price');




        return redirect()->route('user.profile_user.index');








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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
