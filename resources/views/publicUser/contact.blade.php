@extends('publicUser.layouts.master')


@section('title')
Contact
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/contact.css')}}">
<style>
    .error{
  color: red;
  font-size: 15px;
  margin-top: -10px;
}

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
<section id="landpage">
    <h1> CONTACT US</h1>
</section>
</div>
<section class="contact_section">



    <div class="contact_body">

    <h2> Were here to help </h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="contact_info">
            <div>
                <span><i class="fa-solid fa-phone"></i></span>
                <span> Phone No.</span>
                <span class="text"> +962 790369501</span>
            </div>

            <div>
                <span><i class="fa-solid fa-at"></i></span>
                <span>  Email </span>
                <span class="text"> Nuqeiti@gmail.com</span>
            </div>

            <div>
                <span><i class="fa-solid fa-location-dot"></i></span>
                <span> Address </span>
                <span class="text"> Jordan </span>
            </div>

            {{-- <div>
                <span><i class="fa-solid fa-calendar"></i></span>
                <span> Opening Hours</span>
                <span class="text">  <br></span>
            </div> --}}
        </div>


        @if(session()->get('success'))
            <div class="success-msg">
                <i class="fa fa-check"></i>

                {{ session()->get('success') }}
            </div>
        @endif
        <div class="contact_form">
            <form action="{{route('user.message.create')}}" method="post">
                @method('HEAD')
				@csrf

            <div>
                <input type="text"  class="form_control" name="first_name" id="fname" placeholder="First Name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror" autofocus>
                @error('first_name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text"  class="form_control" name="last_name" id="lname" placeholder="Last Name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                @error('last_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="email" class="form_control" name="email" id="email" placeholder="Email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" class="form_control" name="phone" id="phone" placeholder="Phone" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <textarea class="form_control" name="message" id="message" cols="30" rows="5" placeholder="Message" value="{{ old('message')}}" class="@error('message') is-invalid @enderror"></textarea>
            @error('message')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="submit" class="send_btn" value="send message">
            </form>

            <div>
                <img src="/userSide/img/Contact us-bro.png" alt="contact us">
            </div>

        </div>
    </div>
<!--
   <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3794566788406!2d35.00686741138437!3d29.534441875080848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15007110deda62e5%3A0x943e07a599369d37!2z2LnZitin2K_YqSDYp9mE2K_Zg9iq2YjYsdi52KjYr9in2YTZhdis2YrYryDYtNmG2K_ZgiDZhNi32Kgg2KfZhNij2LPZhtin2YY!5e0!3m2!1sen!2sjo!4v1671968113788!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div> -->

</section>
@endsection

@section('script')

@endsection
