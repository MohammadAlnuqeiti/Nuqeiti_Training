<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('CheckLogin');
    // }
    public function index(){
        return view('publicUser.contact');
    }
    public function show(){
        $data=Contact::all();
        return view('admin.messages.show',['data'=>$data]);
    }
    public function store(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'max:10'],
            'message' => ['required','string'],
        ]);
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phoneNumber' => $request->phone,
            'message' => $request->message,

        ]);
        return redirect()->route('user.contact')->with('success','Reservation Successful,thank you for booking.');

    }
}
?>
