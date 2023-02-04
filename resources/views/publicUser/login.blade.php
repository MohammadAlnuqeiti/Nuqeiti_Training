@extends('publicUser.layouts.master')


@section('title')
login
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/login.css')}}">

@endsection



@section('content')
<section>
    <div class="container">
    <h2>Login</h2>
    <form action="">
        <label for="">E-mail</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="Password">
        <p>Forgot Password?</p>
        <button type="submit">Login</button>
        <p>Don't have an account?<a href="./registerPage.html" >Sign up</a></p>
    </form>
    </div>


</section>
@endsection

@section('script')

@endsection
