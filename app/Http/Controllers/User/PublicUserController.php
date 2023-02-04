<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicUserController extends Controller
{
    public function index(){


        return view('publicUser.index');


}
}
