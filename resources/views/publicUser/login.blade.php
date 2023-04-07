@extends('publicUser.layouts.master')


@section('title')
login
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/login.css')}}">
<style>
    .error{
  color: red;
  font-size: 15px;
  margin-top: -10px;
}

</style>
@endsection



@section('content')
<section>
    <div class="container">
    <h2>Login</h2>
    <form action="{{route('user.login.check')}}" method="post">
        @method('GET')

        @csrf
        <label for="">E-mail</label>
        <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email')}}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        <label for="">Password</label>
        <input type="password" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        {{-- <p>Forgot Password?</p> --}}
        <button type="submit">Login</button>
        <p>Don't have an account?<a href="{{route('user.register')}}" >Sign up</a></p>
    </form>
    </div>


</section>
@endsection

@section('script')

@endsection
