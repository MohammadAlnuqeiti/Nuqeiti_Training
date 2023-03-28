<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Response;
// use Response;

class PdfController extends Controller
{

    // All routes and controllers should return a response to be sent back to the user's browser. Laravel provides several different ways to return responses. The most basic response is returning a string from a route or controller. The framework will automatically convert the string into a full HTTP response:

    public function download(Request $request, $file){

        return response()->download(public_path('storage\cv\\'.$file));

    }
    public function view(Request $request, $file){

        return Response::make(file_get_contents('storage\cv\\'.$file), 200, [
                       'content-type'=>'application/pdf',
                   ]);
   }
}
?>
