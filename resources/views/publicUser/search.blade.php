@extends('publicUser.layouts.master')


@section('title')
Search
@endsection


@section('css')


<link rel="stylesheet" href="{{asset('userSide/css/header.css')}}">
<link rel="stylesheet" href="{{asset('userSide/css/footer.css')}}">
<link rel="stylesheet" href="{{asset('userSide/css/search.css')}}">


@endsection



@section('content')
<div class="contact_body">

    <h2> Research results </h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="container">
        @if(!$results == [])
        @foreach ($results as $result)
        <?php
        $img=$result['image']
        ?>

            <div class="card">
                <img src="{{URL::asset("storage/image/$img")}}" alt="{{$result['name']}}"/>
                <div class="card-body">
                    <div class="row">
                        <div class="card-title">
                            <h3>{{$result['name']}}</h3><br>
                            <p>{{$result['user']}}</p>
                            <h3>{{$result['price']}} JD</h3><br>
                        </div>
                    </div>

                    <div class="btn">
                        <a href="{{route('user.course_details.show',$result['id'])}}">More details</a>
                    </div>
                </div>
            </div>




            @endforeach
            @else
                <p>Results not found ...</p>
            @endif
    </div>
 </div>
 @endsection

@section('script')




@endsection
