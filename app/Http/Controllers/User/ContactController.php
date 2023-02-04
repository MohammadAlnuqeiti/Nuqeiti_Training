<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('publicUser.contact');
    }
    public function show(){
        return view('admin.messages.show');
    }
}
