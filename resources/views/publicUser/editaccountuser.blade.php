@extends('publicUser.layouts.master')


@section('title')
Update profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/editaccountuser.css')}}">

@endsection



@section('content')
<div class="update-profile">
{{-- {{dd($data[0]->name)}} --}}

    <form action="{{route('user.profile_user.update',$data[0]->id)}}" method="post" enctype="multipart/form-data">

        @method('PUT')

        @csrf
       <div class="flex">
          <div class="inputBox">
             <span>your name :</span>
             <input type="text" name="name" value="{{$data[0]->name}}" class="box" class="@error('name') is-invalid @enderror">
             @error('name')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror

             <span>your email :</span>
             <input type="email" name="email" value="{{$data[0]->email}}"  class="box" class="@error('email') is-invalid @enderror">
             @error('email')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
             <span>your phone :</span>
             <input type="text" name="phone" value="{{$data[0]->phone}}"  class="box" class="@error('phone') is-invalid @enderror">
             @error('phone')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="inputBox">
                <input type="hidden" name="old_pass" value="">
                {{-- <span>old password :</span>
                    <input type="password" name="update_pass" placeholder="enter previous password" class="box"> --}}
                <span>password :</span>
                <input type="password" name="password" placeholder="enter  password" class="box" class="@error('password') is-invalid @enderror">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                <span>upload your image :</span>
                <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" class="@error('update_image') is-invalid @enderror">
                @error('update_image')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                    {{-- <span>confirm password :</span>
             <input type="password" name="confirm_pass" placeholder="confirm new password" class="box"> --}}
          </div>
       </div>
       <input type="submit" value="update profile" name="update_profile" class="btn">
       <a href="{{route('user.profile_user.index')}}" class="delete-btn">go back</a>
    </form>

 </div>
@endsection

@section('script')

@endsection
