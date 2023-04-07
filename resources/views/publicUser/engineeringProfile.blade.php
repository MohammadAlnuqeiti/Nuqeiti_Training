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
    .message{
        border: 1px solid;
        margin: 10px 0px;
        padding: 15px 10px 15px 15px;
        background-repeat: no-repeat;
        background-position: 10px center;
        width: 100%;
        height: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #D8000C;
        background-color: #FFBABA;
        text-align: center;
    }
    .message p {
        font-size: 18px
    }
    </style>
@endsection




@section('content')
<div class="header_wrapper">
    <header></header>
    <?php $img=$data[0]->image ?>
    <div class="col_container">
        <div class="left_col">
            <div class="img_container">
                <img src="{{URL::asset("storage/image/$img")}}" alt="user" />
                <span></span>
            </div>
            <h2>{{$data[0]->name}}</h2>
            <p>{{$data[0]->education}}</p>
            <p>{{$data[0]->email}}</p>
            <div class="icon">
                {{-- <a href="#"><i class="fa-brands fa-facebook"></i> </a> --}}
                <a href="http://wa.me/+962{{$data[0]->phone}}" target="_blank"><i class="fa-solid fa-square-phone"></i></a>
                <a href="mailto:{{$data[0]->email}}"><i class="fa-solid fa-envelope"> </i></a>
                <a href="{{$data[0]->Linkedin_link}}" target="_blank"><i class="fa-brands fa-linkedin"> </i></a>
            </div>
            <!-- <div class="icon">
                <ul >
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-linkedin"> </i></li>
                    <li><i class="fa-brands fa-facebook"></i></li>
                </ul>

            </div> -->
            <ul class="about ul">
                <li style="margin: auto;"><span>{{count($Data)}}</span>courses</li>
                <!-- <li><span>4.05</span>followers</li>
                <li><span>4.05</span>followers</li> -->
            </ul>
            <div class="content">
                <p>
                    {{$data[0]->the_description}}
                </p>
                <ul class="ul">
                <!--<li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li>
                    <li><i class="fap fa-twitter"></i></li> -->
                    @if(Auth()->user()->status=='accepted')

                    <button><a href="{{route('user.profile_engineer.edit',$data[0]->id)}}">Edit account</a></button>
                    @endif
                </ul>
            </div>
        </div>
        <div class="right_col">

            @if(Auth()->user()->status=='accepted')

                <nav>
                    <h3>my courses</h3>
                    <ul class="ul">
                        <!-- <li><a href="#">photo</a></li>
                            <li><a href="#">photo</a></li>
                            <li><a href="#">photo</a></li>
                            <li><a href="#">photo</a></li> -->
                        </ul>
                    <div>

                        <button><a href="{{route('user.add_course.index')}}">Upload Course</a></button>
                    </div>
                </nav>

                <div class="photos">

                    @foreach($Data as $value)

                        <div class="card">
                            <?php $img=$value['image']?>
                            <img src="{{URL::asset("storage/image/$img")}}" alt="{{$img}}"/>
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h3>{{$value['name']}}</h3><br>
                                        <p>status : {{$value['status']}}</p>
                                        <p>{{$value['category']}}</p>
                                    </div>
                                </div>

                                <div class="btn">
                                    <a href="{{route('user.add_course.edit',$value['id'])}}">Edit course</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                </div>

            @else
                <div style="display: flex;align-items: center;justify-content: center;height:100%;">

                    <div class="message">

                        <p>Dear engineer, you cannot modify your account or enjoy the privillages of an engineer on the site unless you obtain the approval of the administration.</p>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>

@endsection

@section('script')

@endsection
