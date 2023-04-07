@extends('publicUser.layouts.master')


@section('title')
Courses
@endsection

@section('css')

  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --}}
  {{-- <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}"> --}}


<link rel="stylesheet" href="{{asset('userSide/css/shop.css')}}">
<style>
.pagenation_center{
    display: flex;
    margin: 40px auto 80px;

}
.pagenation_center nav{
    display: flex;
    flex-direction: row
}
.pagenation_center.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagenation_center nav dl, ol, ul {
    margin-top: 0;
    /* margin-bottom: 1rem; */
    display: flex;
}
.pagenation_center li {
    list-style: none;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #07393E;
    border-color: #07393E;
}
.page-link {
    position: relative;
    display: block;
    padding: 0.7rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #07393E;
    background-color: #fff;
    border: 1px solid #07393E;
}
.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}
</style>
@endsection



@section('content')
<section id="landpage">
    <h1> ALL COURSES</h1>
</section>
<!-- body -->

<section id="body">

    <h2 class="title1">THE COURSES</h2>
    <hr>

    <div class="row">
        <h2 class="title2">all product</h2>
        <select name="" id="" onchange="location = this.value">
            
            <option value="">Select category</option>

            <option value="{{route('user.shop')}}">ALL COURSE</option>

            @foreach ($category as $value)
                <option value="{{route('user.shop.category',$value->id)}}">{{strtoupper($value->name)}}</option>
            @endforeach

        </select>
    </div>
    <div class="row_1">
        <div>
            <a href="{{route('user.shop')}}">ALL COURSE</a>
        </div>
        @foreach ($category as $value)
            <div>
                <a href="{{route('user.shop.category',$value->id)}}">{{strtoupper($value->name)}}</a>
            </div>
        @endforeach
    </div>
    <div class="row_2">
        @foreach ($data as $value)
            <div class="card">
                <?php $img=$value['image'] ?>

                <img src="{{URL::asset("storage/image/$img")}}" alt="{{$value['name']}}"/>
                <div class="card-body">
                    <div class="row">
                        <div class="card-title">
                            <h3>{{$value['name']}}</h3><br>
                            <p>{{$value['user']->name}}</p>
                            @if($value['discount'] == 0)
                            <h3>{{$value['price']}} JD</h3><br>
                            @else
                            <h3><s>{{$value['price']}} JD</s><span style="color:red;font-size:1.125em;">  {{$value['new_price']}} JD</span></h3><br>
                            @endif
                        </div>
                    </div>

                    <div class="btn">
                        <a href="{{route('user.course_details.show',$value['id'])}}">More details</a>
                    </div>
                </div>
            </div>
        @endforeach





    </div>

    @if($data->hasPages())
        <div class="pagenation_center">

            {{ $data->links() }}

        </div>
    @endif



</section>







@endsection

@section('script')

@endsection
