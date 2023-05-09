@extends('publicUser.layouts.master')


@section('title')
Register page
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/registerPage.css')}}">

@endsection



@section('content')

<div class="containers">
    <div>
        <h2>Choose your account type</h2>

    </div>
    <section class="body">
        <a href="{{route('user.register_engineer')}}">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <h4>Teacher</h4>
                <p>Click to see register page</p>
            </div>
        </a>
        <a href="{{route('user.register_user')}}">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-user-alt"></i>
                </div>
                <h4>Student</h4>
                <p>Click to see register page</p>
            </div>
        </a>
    </section>
    <div class="login">
        <p>Don't have an account?<a href="{{route('user.login')}}" > <span style="color: #FF0000;">Sign in</span> </a></p>

    </div>
</div>
@endsection

@section('script')

@endsection
