<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Subscribe;
use App\Models\Subscriber;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EngineeringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('admin.engineering.show',['data'=>$data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id',$id)->first();
        if($data == null){
            return redirect()->back();
        }
        // if($data->isEmpty()) {
            //     return redirect()->back();
        // }
        return view('admin.engineering.details',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id',$id)->first();

        if($data == null){
            return redirect()->back();
        }
        return view('admin.engineering.edit', ['data' => $data]);
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
        $data = User::findOrfail($id);

        $data->status = $request->status;


        $data->save();
        if($data->status == "accepted"){
            $message = "We are pleased to inform you that your membership as a coach has been approved on our platform and that you have joined our team." ;
        }else{
            $message = "We regret to inform you that we will not be able to approve your membership as a trainer on our platform." ;
        }
        Mail::to($data->email)->send(new Subscribe($message));

        //-------------------------------

        return redirect()->route('admin.engineering.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrfail($id)->delete();
        return redirect()->route('admin.engineering.index');
    }
}
?>
