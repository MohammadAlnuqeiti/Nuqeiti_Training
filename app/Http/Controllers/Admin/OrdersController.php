<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $orders = Order::all();

// $data = [];
// foreach ($comments as $comment) {
//     $data[] = [
//         'id' => $comment->id,
//         'comment' => $comment->comment,
//         'course' => isset($comment->course) ? $comment->course->name : "",
//         'user' => isset($comment->user) ? $comment->user->name : "",


//     ];
// }
// dd($data);

return view('admin.orders.show',['orders'=>$orders]);
    }
}
