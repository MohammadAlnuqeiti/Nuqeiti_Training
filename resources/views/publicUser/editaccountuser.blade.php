@extends('publicUser.layouts.master')


@section('title')
Update profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/editaccountuser.css')}}">

@endsection



@section('content')
<div class="update-profile">


    <form action="" method="post" enctype="multipart/form-data">
       <div class="flex">
          <div class="inputBox">
             <span>first name :</span>
             <input type="text" name="firstname" value="" class="box">
             <span>last name :</span>
             <input type="text" name="lastname" value="" class="box">
             <span>your email :</span>
             <input type="email" name="update_email" value="" class="box">
             <span>upload your image :</span>
             <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">

          </div>
          <div class="inputBox">
             <input type="hidden" name="old_pass" value="">
             <span>old password :</span>
             <input type="password" name="update_pass" placeholder="enter previous password" class="box">
             <span>new password :</span>
             <input type="password" name="new_pass" placeholder="enter new password" class="box">
             <span>confirm password :</span>
             <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
          </div>
       </div>
       <input type="submit" value="update profile" name="update_profile" class="btn">
       <a href="./userprofile.html" class="delete-btn">go back</a>
    </form>

 </div>
@endsection

@section('script')

@endsection
