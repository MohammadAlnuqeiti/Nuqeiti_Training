@extends('publicUser.layouts.master')


@section('title')
Register user
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/registerUser.css')}}">

@endsection



@section('content')
<section class="body">

    <div class="container">
        <div class="heading">Registration</div>
        <form action="#">
            <div class="card-details">
                <div class="card-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your first name">
                </div>
                <div class="card-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your lirst name">
                </div>
                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email name">
                </div>
                <div class="card-box">
                    <span class="details">Phone Number</span>
                    <input type="phone" placeholder="Enter your phone number">
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your  password">
                </div>
                <div class="card-box">
                    <span class="details">Confirm Name</span>
                    <input type="password" placeholder="Confirm password">
                </div>
            </div>
            <div class="circal-form">
                <span class="circal-title">Gender</span>
                <div class="category">
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>

        </form>
    </div>

</section>
@endsection

@section('script')

@endsection
