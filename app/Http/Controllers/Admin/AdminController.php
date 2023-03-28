<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        // To display the stats on the home page

        $number_of_admin =User::where('role','admin')->count();
        $number_of_engineer =User::where('role','engineer')->count();
        $number_of_users =User::where('role','user')->count();
        $number_of_majors =Category::all()->count();
        $number_of_messages =Contact::all()->count();
        $number_of_courses =Course::all()->count();
        $number_of_orders =Order::all()->count();
        $number_of_courses_offered =Course::where('discount' , '>' , 0)->count();

        return view('admin.index',['number_of_admin'=>$number_of_admin ,'number_of_users'=>$number_of_users , 'number_of_engineer'=>$number_of_engineer,'number_of_majors'=>$number_of_majors,'number_of_messages'=>$number_of_messages,'number_of_courses'=>$number_of_courses,'number_of_orders'=>$number_of_orders,'number_of_courses_offered'=>$number_of_courses_offered]);


    }
    public function admin(){

        // To display the admin in the table

        $data=User::all();
        return view('admin.admin.show',['data'=>$data]);

    }

    public function create()
    {

        return view('admin.admin.create');

    }
    public function store(Request $request){


        // To create a new admin

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'admin',

        ]);
        event(new Registered($user));


        return redirect()->route('admin.show.admin');

    }
    public function profile()
    {


        // To display admin information on his personal page

        $id = Auth()->user()->id;
        $data=User::where('id',$id)->first();
        return view('admin.admin.profile',['data'=>$data]);

    }
    public function editProfile($id)
    {

        $data=User::where('id',$id)->first();
        return view('admin.admin.editProfile',['data'=>$data]);

    }
    public function updateProfile(Request $request, $id)
    {

        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],

        ]);

        $user=User::findorFail($id);
        $email=$user->email;
        $user->name=$request->name;
        $user->phone=$request->phone;

        
        if($email !==$request->email){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],

            ]);

            $user->email = $request->email;
        }
        if ( $request->file('image')) {
            $photoName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/image', $photoName);
            $user->image=$photoName;

        }
        if ( $request->password) {
              $request->validate([
                'password' => ['required', Rules\Password::defaults()],

            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('admin.profile.admin');

    }
}
?>
