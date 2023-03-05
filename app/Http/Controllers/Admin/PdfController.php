<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;

class PdfController extends Controller
{
    public function download(Request $request, $file){

        return response()->download(public_path('storage\cv\\'.$file));

    }
    public function view(Request $request, $file){

        return Response::make(file_get_contents('storage\cv\\'.$file), 200, [
                       'content-type'=>'application/pdf',
                   ]);
   }
}
