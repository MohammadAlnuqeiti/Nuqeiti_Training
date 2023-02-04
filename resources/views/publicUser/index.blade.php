@extends('publicUser.layouts.master')


@section('title')
home page
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/new.css')}}">

@endsection


@section('content')
<section id="landpage">
    <h1> Aspire, learn, advance.</h1>
    <p>"Build your practical skills by joining advanced training programs,<br> and gain certificates that will help you enter the<br> labor market and develop your career."</p>
    <a href="{{route('user.shop')}}" class="btnone" onclick="">Discover courses</a>
</section>
<!-- </div> -->

<section id="newcourses">
<h2><span style="color: #FF0000;">New</span> on Alpha</h2>
<div class="container">
    <div class="card">
        <img src="userSide/img/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="./singlecoarse.html">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="userSide/img/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="userSide/img/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="userSide/img/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
</div>
</section>
<section class="category">
<h2 class="title"><span style="color: #FF0000;">Explore </span> top courses</h2>

<div class="category-body">
<div class="category-card">
    <a href="./shop.html"><img src="userSide/img/civil engineering.jpg" alt=""></a>
    <div class="intro">
        <h2>Civil Engineering</h2>
        <p>The Complete Basic Electricity & Electronics Course</p>
    </div>
</div>
<div class="category-card">
    <img src="userSide/img/Mechanical Engineering.jpg" alt="">
    <div class="intro">
        <h2>Mechanical Engineering</h2>
        <p>The Complete Basic Electricity & Electronics Course</p>
    </div>
</div>
<div class="category-card">
    <img src="userSide/img/electrical engineering..jpg" alt="">
    <div class="intro">
        <h2>Electrical Engineering</h2>
        <p>The Complete Basic Electricity & Electronics Course</p>
    </div>
</div>
</div>
</section>
<!-- <section id="explorecourses">

<h2><span style="color: #FF0000;">Explore </span> top courses</h2>
<div class="container">
    <div class="card">
        <img src="./image/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="./image/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="./image/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="./image/1215970_a5f8_11.jpg" alt=""/>
        <div class="card-body">
            <div class="row">
                <div class="card-title">
                    <h3>The Complete Basic Electricity & Electronics Course</h3><br>
                    <p>Nike Sneaker</p>
                    <h3>$120</h3><br>
                </div>
            </div>

            <div class="btn">
                <a href="">Buy Now</a>
            </div>
        </div>
    </div>

</div>
</section> -->
<section id="sectionfour">
<h1> Master key skills with<br>......... specializations</h1>
<p>"Develop a specific career skill through a series of related<br> courses and hands-on projects. Put theory into practice<br> and earn a Specialization Certificate to add to your CV."</p>
<a href="./shop.html" class="btn" onclick="">Browse courses</a>
</section>

<!-- <div class="reviews" id="reviews">
<h2 class="heading"><span style="color: #FF0000;">Our</span> distinguished staff</h2>
<div class="swiper reviews-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide coachcard">
            <img src="./image/coach.jpg" alt="">
            <div class="body">
                <h4>Mohammad Alnuqeiti</h4>
                <p>Bachelor of Civil Engineering</p>
            </div>

        </div>
        <div class="swiper-slide coachcard">
            <img src="./image/coach.jpg" alt="">
            <div class="body">
                <h4>Mohammad Alnuqeiti</h4>
                <p>Bachelor of Civil Engineering</p>
            </div>

        </div>
        <div class="swiper-slide coachcard">
            <img src="./image/coach.jpg" alt="">
            <div class="body">
                <h4>Mohammad Alnuqeiti</h4>
                <p>Bachelor of Civil Engineering</p>
            </div>

        </div>



    </div>
</div>
</div> -->
<section id="coaches">
<h2>Our distinguished staff</h2>
<div class="container coach-slider">

<div id="coachcard">
    <img src="userSide/img/coach.jpg" alt="">
    <div class="body">
        <h4>Mohammad Alnuqeiti</h4>
        <p>Bachelor of Civil Engineering</p>
    </div>
</div>
<div id="coachcard">
    <img src="userSide/img/coach.jpg" alt="">
    <div class="body">
        <h4>Mohammad Alnuqeiti</h4>
        <p>Bachelor of Civil Engineering</p>
    </div>
</div>
<div id="coachcard">
    <img src="userSide/img/coach.jpg" alt="">
    <div class="body">
        <h4>Mohammad Alnuqeiti</h4>
        <p>Bachelor of Civil Engineering</p>
    </div>
</div>
<div id="coachcard">
    <img src="userSide/img/coach.jpg" alt="">
    <div class="body">
        <h4>Mohammad Alnuqeiti</h4>
        <p>Bachelor of Civil Engineering</p>
    </div>
</div>
<div id="coachcard">
    <img src="userSide/img/coach.jpg" alt="">
    <div class="body">
        <h4>Mohammad Alnuqeiti</h4>
        <p>Bachelor of Civil Engineering</p>
    </div>
</div>
</div>
</section>
<section id="feature">
<div class="container">

    <div id="featurecard">
        <img src="userSide/img/certificates.png" alt="">
        <div class="body">
            <h4>Certified certificates</h4>
            <p>To enhance your chances of launching or developing your career.<br>  </p>
        </div>
    </div>
    <div id="featurecard">
        <img src="userSide/img/Highquality.png" alt="">
        <div class="body">
            <h4>High quality content</h4>
            <p>Acquire the skills required in the labor market with a selection of the best experts and trainers.</p>
        </div>
    </div>
    <div id="featurecard">
        <img src="userSide/img/Flexiblelearning.png" alt="">
        <div class="body">
            <h4>Flexible learning</h4>
            <p>Learn wherever you are and at any time, via your personal computer or mobile phone.</p>
        </div>
    </div>
    <div id="featurecard">
        <img src="userSide/img/Efficienttrainers.png" alt="">
        <div class="body">
            <h4>Efficient trainers</h4>
            <p>Learn with the most qualified trainers to hone your professional and practical skills.</p>
        </div>
    </div>
    <div id="featurecard">
        <img src="userSide/img/Professionalreadiness.png" alt="">
        <div class="body">
            <h4>Professional readiness</h4>
            <p>Stand out in the job market with your skills and passion for learning and development.</p>
        </div>
    </div>
</div>
</section>
@endsection

@section('script')
<script src="{{URL::asset('userSide/js/coach.js')}}"></script>

@endsection
