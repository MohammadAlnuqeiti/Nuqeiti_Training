@extends('publicUser.layouts.master')


@section('title')
About
@endsection

@section('css')

<link rel="stylesheet" href="{{asset('userSide/css/about.css')}}">

@endsection



@section('content')

<section id="landpage">
    <h1> ABOUT US</h1>
</section>


{{-- start section one section --}}

<section>
    <div class="about" >
        <div class="row">
            <div class="content">

                <h2><span style="color: #FF0000;">Who</span> are we</h2>

                <p>In engineering, we work hard towards providing a Jordanian engineering platform that raises competencies and develops their skills and knowledge. We believe that realistic challenges make continuous learning an urgent necessity, and at the same time puts Jordanian competencies under pressure of limited time, and for this reason the solution with us in this platform was to provide engineering courses that qualify Engineers for the labor market and develop their skills with modern modern means so that you can continue your learning at the right time for you without the need to adhere to the appointments of others.</p>

            </div>

            <div class="image">
                <img src="/userSide/img/aboutimage.jpg" alt="aboutimage">
            </div>
            <!-- <div class="video-container">
                <video src="./video/SampleVideo_1280x720_20mb.mp4" loop autoplay muted></video>
                <h3>best courses</h3>
            </div> -->
        </div>
    </div>
</section>

{{-- end section one section --}}

<!-- <section id="aboutus">
    <div class="container">
        <div class="info">
            <h2>who are we</h2>
            <p>In engineering, we work hard towards providing a Jordanian engineering platform that raises competencies and develops their skills and knowledge. We believe that realistic challenges make continuous learning an urgent necessity, and at the same time puts Jordanian competencies under pressure of limited time, and for this reason the solution with us in this platform was to provide engineering courses that qualify Engineers for the labor market and develop their skills with modern modern means so that you can continue your learning at the right time for you without the need to adhere to the appointments of others.</p>
        </div>
        <div class="image">
            <img src="./image/aboutimage.jpg" alt="">
        </div>
    </div>
</section> -->


{{-- start our-vision section --}}

<section id="our-vision">

    <h2>OUR VISION</h2>
    <p>In engineering, we work hard towards providing a Jordanian engineering platform that raises<br> competencies and develops their skills and knowledge. We believe that realistic challenges make continuous<br> learning an urgent necessity, and at the same time puts Jordanian competencies under pressure of limited time,<br> and for this reason the solution with us in this platform was to provide engineering courses that qualify Engineers for <br>the labor market and develop their skills with modern modern means so that you can continue your<br> learning at the right time for you without the need to adhere to the appointments of others.</p>

</section>

{{-- end our-vision section --}}

{{-- start follow-us section --}}

<section id="follow-us">
    <div class="follow">

        <h2>Follow Us</h2>

        <div>
            <a href="mailto:tnuqeiti@gmail.com"  target="_blank"><i class="fa-solid fa-envelope"></i></a>
            <a href="http://wa.me/+962790369501"><i class="fa-solid fa-square-phone" target="_blank"></i></a>
            <a href="https://www.linkedin.com/in/nuqeiti-training-974739275/"  target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100092625304668" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
        </div>

    </div>
</section>
{{-- end follow-us section --}}

{{-- start feature section --}}

<section id="feature">

    <div class="container">

        <div id="featurecard">
            <img src="/userSide/img/certificates.png" alt="certificates">
            <div class="body">
                <h4>Certified certificates</h4>
                <p>To enhance your chances of launching or developing your career.<br>  </p>
            </div>
        </div>
        <div id="featurecard">
            <img src="/userSide/img/Highquality.png" alt="Highquality">
            <div class="body">
                <h4>High quality content</h4>
                <p>Acquire the skills required in the labor market with a selection of the best experts and trainers.</p>
            </div>
        </div>
        <div id="featurecard">
            <img src="/userSide/img/Flexiblelearning.png" alt="Flexiblelearning">
            <div class="body">
                <h4>Flexible learning</h4>
                <p>Learn wherever you are and at any time, via your personal computer or mobile phone.</p>
            </div>
        </div>
        <div id="featurecard">
            <img src="/userSide/img/Efficienttrainers.png" alt="Efficienttrainers">
            <div class="body">
                <h4>Efficient trainers</h4>
                <p>Learn with the most qualified trainers to hone your professional and practical skills.</p>
            </div>
        </div>
        <div id="featurecard">
            <img src="/userSide/img/Professionalreadiness.png" alt="Professionalreadiness">
            <div class="body">
                <h4>Professional readiness</h4>
                <p>Stand out in the job market with your skills and passion for learning and development.</p>
            </div>
        </div>
    </div>
</section>

{{-- start feature section --}}

@endsection

@section('script')

@endsection
