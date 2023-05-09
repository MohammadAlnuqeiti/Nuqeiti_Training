@extends('publicUser.layouts.master')


@section('title')
Course
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/singlecoarse.css')}}">
<style>
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
<section class="course-info">
{{-- {{dd(session()->has('cart'))}} --}}
    <div class="image">
        <?php
        $img=$data[0]['image']


        ?>

        <img src="{{URL::asset("storage/image/$img")}}" alt="{{$data[0]['name']}}"/>
    </div>
    <div class="info">
        <h1>{{$data[0]['name']}}</h1>
        <p>{{$data[0]['user']}}</p>
        {{-- {{route('user.cart')}} --}}
        <p>{{$data[0]['short_description']}}</p>
        <p><i class="fa-solid fa-calendar"></i> {{$data[0]['created_at']}}</p>
        <div>
{{-- {{dd($has_Sold)}} --}}
            @if(session()->has('cart') || $has_Sold == true || Auth()->user())

                @if ($has_Sold == true)

                <a href="#topic" class="btn">Show topics</a>


                @elseif ( Auth()->user() && Auth()->user()->role == "engineer")

                {{-- @if (Auth()->user()->role == "engineer") --}}

                <p></p>


                @elseif (session()->has('cart'))

                @if(array_key_exists($data[0]['id'], session('cart')))

                <a href="{{route('user.cart')}}" class="btn">Go to cart</a>

                @else

                <a href="{{route('user.cart.store', $data[0]['id'])}}" class="btn">Add to cart</a>


                @endif

                @elseif ( Auth()->user() && Auth()->user()->role == "user")

                        <a href="{{route('user.cart.store', $data[0]['id'])}}" class="btn">Add to cart</a>







                @endif

            @else

            <a href="{{route('user.cart.store', $data[0]['id'])}}" class="btn">Add to cart</a>

            @endif
            {{-- @if(session()->has('cart')&&   array_key_exists($data[0]['id'], session('cart')) )

            <a href="{{route('user.cart')}}" class="btn">Go to cart</a>
            @else
            <a href="{{route('user.cart.store', $data[0]['id'])}}" class="btn">Add to cart</a>
            @endif
            @if($has_Sold == true)
            <a href="#topic" class="btn">Show topics</a>
            @endif --}}
            {{-- <a href="./checkout.html" class="btn">Buy now</a> --}}

        </div>

    </div>
</section>
{{-- {{dd($data)}} --}}

<section>
    <div class="about" id="about">
        <!-- <h1 class="heading"><span>about</span>course</h1> -->
        <div class="row">
            <div class="content">
                <h3>Description</h3>
                <p>{{$data[0]['long_description']}}</p>
                <!-- <a href="#" class="btn">learn more</a> -->
            </div>
            <div class="video-container">
                <?php
        $video=$data[0]['video']
        ?>
                <video src="{{URL::asset("storage/video/$video")}}" controls></video>
                <!-- <h3>best courses</h3> -->
            </div>

        </div>
    </div>
</section>
<section>
    <div class="containerInfo">
        <div class="group">
            <img src="/userSide/img/time.png" alt="">
            <div class="info">
                <h3>The number of hours</h3>
                <p>{{$data[0]['duration_of_the_course']}} hours</p>
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/user.png" alt="">
            <div class="info">
                <h3>Instructor</h3>
                <p>{{$data[0]['user']}}</p>
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/price.png" alt="">
            <div class="info">
                <h3>Price</h3>
                @if($data[0]['discount'] == 0)
                <p>{{$data[0]['price']}} JD</p>
                @else
                <p><s>{{$data[0]['price']}} JD</s><span style="color:red;">  {{$data[0]['new_price']}} JD</span></p>
                @endif
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/category.png" alt="">
            <div class="info">
                <h3>Specialization</h3>
                <p>{{$data[0]['category']}}</p>
            </div>
        </div>
    </div>
</section>
<section class="instructors">
    <h2 class="heading"><span style="color: #FF0000;">About</span> the instructors</h2>
    <div class="card">
        <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
                <?php
                $img2=$data[0]['user_image']
                ?>
                <img src="{{URL::asset("storage/image/$img2")}}" alt="" class="card-img">

            </div>
        </div>
        <div class="card-content">

            <h2 class="name">{{$data[0]['user']}}</h2>
            <p class="description">{{$data[0]['education']}}</p>
            <a href="{{route('user.engineeringDetails',$data[0]['user_id'])}}"><button class="button">View more</button></a>

        </div>
    </div>
</section>
<section id="topic">
   {{-- {{ dd($lectures)}} --}}
    <h2 class="heading"><span style="color: #FF0000;">Topic</span> courses</h2>
    <div class="accordion">
        {{-- <div class="accordion-item">
          <div class="accordion-item-header">
            What is Web Development?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
            </div>
          </div>
        </div> --}}
        {{-- <div class="accordion-item">
          <div class="accordion-item-header">
            What is HTML?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything that can be viewed in a web browser.
            </div>
          </div>
        </div> --}}
    {{-- @if(Auth()->user()) --}}
        @if($has_Sold == true)
            @foreach ($lectures as $lecture)
                <div class="accordion-item">
                        <div class="accordion-item-header">
                            {{$lecture->name}}
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            <ul style="padding-left: 1rem;">
                                <li>{{$lecture->description}}</li>
                                <li><a href="{{$lecture->video_lecture}}" target="_blank">video link</a></li>
                                {{-- <li>Responsive Design</li>
                                <li>Version Control/Git</li>
                                <li>Testing/Debugging</li>
                                <li>Browser Developer Tools</li>
                                <li>Web Performance</li>
                                <li>SEO (Search Engine Optimization)</li>
                                <li>Command Line</li>
                                <li>CMS (Content Management System)</li> --}}
                            </ul>
                        </div>
                    </div>
                    </div>
            @endforeach
        @else
        <div style="display: flex;align-items: center;justify-content: center;height:100%;">

            <div class="message">

                <p>In order to be able to view the contents of the course, you must purchase it.</p>
            </div>
        </div>
        @endif
    {{-- @endif --}}

        {{-- <div class="accordion-item">
          <div class="accordion-item-header">
            What is HTTP?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands.
            </div>
          </div>
        </div> --}}
        {{-- <div class="accordion-item">
          <div class="accordion-item-header">
            What is CORS?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
            </div>
          </div>
        </div> --}}
      </div>
</section>
<section>
    <div class="reviews" id="reviews">
        <h2 class="heading"><span style="color: #FF0000;">Clients</span> review</h2>
        <!-- <h1 class="heading">clients review</h1> -->
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                @foreach($comments as $comment)
                    <div class="swiper-slide box">
<?php
$user_image =$comment['user_image'];
?>
                        <img src="{{URL::asset("storage/image/$user_image")}}" alt="">
                        <h3>{{$comment['user']}}</h3>
                        <p>{{$comment['comment']}}</p>
                        <div class="stars">
                            <i class="fa-solid fa-calendar"></i>
                            <div >{{$comment['created_at']}}</div>

                        </div>
                    </div>
                @endforeach
                {{-- <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div >
                        <ul>
                            <li><i class="fa fa-clock-o"></i> 20 - 12 - 1998 </li>

                        </ul>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">

                    </div>
                </div>
                <div  class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">

                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div> --}}



            </div>
        </div>

        @if(Auth::user())

        <div id="input">

            <input type="submit" id="comment" value="add comment">
        </div>
        @endif
    </div>
    <div id="comment_section">
        @if(Auth::user())

        <form action="{{route('user.course_details.store')}}" method="post">

            @csrf
            <label for="story">write comment:</label>
            <div >
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                <input type="hidden" name="course_id" value="{{$data[0]['id']}}"/>
                <textarea id="story" name="comment" rows="5" cols="33" class="@error('comment') is-invalid @enderror"></textarea>
                @error('comment')
                <div class="error">{{ $message }}</div>
               @enderror

            </div>
            <div id="input">
                <input type="submit" id="submit">
            </div>
        </form>
        @endif
    </div>
</section>
@endsection

@section('script')

@endsection
