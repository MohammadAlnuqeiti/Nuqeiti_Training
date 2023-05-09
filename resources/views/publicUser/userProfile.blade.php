@extends('publicUser.layouts.master')


@section('title')
Profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/userprofile.css')}}">
<style>

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 20px;
  border-radius: 3px 3px 3px 3px;
}

.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
</style>
@endsection



@section('content')
<div class="header_wrapper">
    <?php $img=$data[0]['image'] ?>
    <header></header>
    <div class="col_container">
        <div class="left_col">
            <div class="img_container">
                <img src="{{URL::asset("storage/image/$img")}}" alt="user" />
                <span></span>
            </div>
            <h2>{{ Auth::user()->name }}</h2>
            <p>user</p>
            <p>{{ Auth::user()->email }}</p>
            <ul class="about ul">
                <li style="margin: auto;"><span>{{count($courses)}}</span>course</li>
            </ul>
            <div class="content">
                <ul class="ul">
                    <button><a href="{{route('user.profile_user.edit',Auth::user()->id)}}">Edit account</a></button>
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
                <button><a href="{{route('user.shop')}}">Show all courses</a></button>
            </nav>

            @if(session()->get('success'))
                <div class="success-msg">
                    <i class="fa fa-check"></i>

                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="photos">

                @foreach($courses as $course)


                    <div class="card">
                        <?php $img=$course['image'] ?>
                        <img src="{{URL::asset("storage/image/$img")}}" alt=""/>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-title">
                                    <h3>{{$course['name']}}</h3><br>
                                    <p>{{$course['user']}}</p>
                                </div>
                            </div>

                            <div class="btn">
                                <a href="{{route('user.course_details.show',$course['id'])}}">Show course</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
</div>

@endsection

@section('script')

@endsection
