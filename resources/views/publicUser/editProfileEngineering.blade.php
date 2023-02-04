@extends('publicUser.layouts.master')


@section('title')
Update profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/registerEngineering.css')}}">

@endsection



@section('content')
<section class="body">

    <div class="container">
        <div class="heading">Update Account</div>
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
                    <span class="details">the description</span>
                    <input type="text" placeholder="the description">
                </div>
                <div class="card-box">
                    <span class="details">Facebook link</span>
                    <input type="text" placeholder="Facebook link">
                </div>
                <!-- <div class="card-box">
                    <span class="details">Linkedin link</span>
                    <input type="text" placeholder="Linkedin link">
                </div>
                <div class="card-box">
                    <span class="details">Instagram link</span>
                    <input type="text" placeholder="Instagram link">
                </div> -->
                <div class="card-box">
                    <span class="details">the work</span>
                    <input type="text" placeholder="the work">
                </div>
                <div class="card-box">
                    <span class="details">Certificates and credits</span>
                    <input type="text" placeholder="Certificates and credits">
                </div>
                <div class="card-box">
                    <span class="details">Of experience</span>
                    <input type="text" placeholder="Of experience">
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password">
                </div>
                <div class="card-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm password">
                </div>
                <div class="card-box">
                    <span class="details">Upload Image</span>
                    <input type="file" placeholder="Upload Image" class="file">
                </div>

            </div>

            <div class="button">
                <input type="submit" value="Update">
            </div>

        </form>
    </div>

</section>
@endsection

@section('script')

@endsection
