@extends('publicUser.layouts.master')


@section('title')
Profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/engineeringProfile.css')}}">
<style>

    .col_container .left_col .icon a{
        display: inline-block;
        height: 40px;
        width: 30px;
        margin: 0 10px 0 0;
        text-align: center;
        line-height: 40px ;
        border-radius: 50%;
        color: #07393E;
        transition: all 0.3s ease;
        font-size: 25px ;
        margin-top: 10px;
        cursor: pointer;
    }

    .col_container .left_col .icon a:hover{
        opacity: 0.6;
    }
    </style>
@endsection



@section('content')
<div class="header_wrapper">
{{-- {{dd($data)}} --}}
    <header></header>

    <div class="col_container">
        <div class="left_col">
            <div class="img_container">
                <img src="/userSide/img/user icon.png" alt="user" />
                <span></span>
            </div>
            <h2>{{$data[0]->name}}</h2>
            <p>{{$data[0]->education}}</p>
            <p>{{$data[0]->email}}</p>
            <div class="icon">
                <a href="#"><i class="fa-brands fa-facebook"></i> </a>
                <a href="#"><i class="fa-solid fa-square-phone"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"> </i></a>
                <a href="{{$data[0]->Linkedin_link}}"><i class="fa-brands fa-linkedin"> </i></a>
            </div>
            <!-- <div class="icon">
                <ul >
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-linkedin"> </i></li>
                    <li><i class="fa-brands fa-facebook"></i></li>
                </ul>

            </div> -->
            <ul class="about ul">
                <li style="margin: auto;"><span>4</span>courses</li>
                <!-- <li><span>4.05</span>followers</li>
                <li><span>4.05</span>followers</li> -->
            </ul>
            <div class="content">
                <p>
{{$data[0]->the_description}}                </p>
                <ul class="ul">
                    <!-- <li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li> -->
                </ul>
            </div>
        </div>
        <div class="right_col">
            <nav>
                <h3>my courses</h3>
                <ul class="ul">
                    <!-- <li><a href="#">photo</a></li>
                    <li><a href="#">photo</a></li>
                    <li><a href="#">photo</a></li>
                    <li><a href="#">photo</a></li> -->
                </ul>
                <div>

                    {{-- <button><a href="./index.html">Upload Course</a></button> --}}
                </div>
            </nav>

            <div class="photos">
    <!-- <div class="container"> -->
        <div class="card">
            <img src="/userSide/img/1215970_a5f8_11.jpg" alt=""/>
            <div class="card-body">
                <div class="row">
                    <div class="card-title">
                        <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                        <p>Nike Sneaker</p>
                    </div>
                </div>

                <div class="btn">
                    <a href="">Show course</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="/userSide/img/1215970_a5f8_11.jpg" alt=""/>
            <div class="card-body">
                <div class="row">
                    <div class="card-title">
                        <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                        <p>Nike Sneaker</p>
                    </div>
                </div>

                <div class="btn">
                    <a href="">Show course</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="/userSide/img/1215970_a5f8_11.jpg" alt=""/>
            <div class="card-body">
                <div class="row">
                    <div class="card-title">
                        <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                        <p>Show Sneaker</p>
                    </div>
                </div>

                <div class="btn">
                    <a href="">Show course</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="/userSide/img/1215970_a5f8_11.jpg" alt=""/>
            <div class="card-body">
                <div class="row">
                    <div class="card-title">
                        <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                        <p>Nike Sneaker</p>
                    </div>
                </div>

                <div class="btn">
                    <a href="">Show course</a>
                </div>
            </div>
        </div>
    </div>

        </div>
    <!-- </div> -->
</div>

@endsection

@section('script')

@endsection
