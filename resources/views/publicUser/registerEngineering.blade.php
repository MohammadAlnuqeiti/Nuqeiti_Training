@extends('publicUser.layouts.master')


@section('title')
Register engineering
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/registerEngineering.css')}}">

@endsection



@section('content')
<section class="body">

    <div class="container">
        <div class="heading">Registration as engineering</div>
        <form action="{{route('user.register_engineer.store')}}" method="post" enctype="multipart/form-data">
            @method('HEAD')
            @csrf
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter your first name" name="name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                {{-- <div class="card-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your lirst name">
                </div> --}}
                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email name" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Phone Number</span>
                    <input type="phone" placeholder="Enter your phone number" name="phone" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">the description</span>
                    <input type="text" placeholder="the description" name="the_description" value="{{ old('the_description')}}" class="@error('the_description') is-invalid @enderror">
                    @error('the_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Linkedin link</span>
                    <input type="text" placeholder="Linkedin link" name="Linkedin_link" value="{{ old('Linkedin_link')}}" class="@error('Linkedin_link') is-invalid @enderror">
                    @error('Linkedin_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Education</span>
                    <input type="text" placeholder="education" name="education" value="{{ old('education')}}" class="@error('education') is-invalid @enderror">
                    @error('education')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <!-- <div class="card-box">
                    <span class="details">Linkedin link</span>
                    <input type="text" placeholder="Linkedin link">
                </div>
                <div class="card-box">
                    <span class="details">Instagram link</span>
                    <input type="text" placeholder="Instagram link">
                </div> -->
                <div class="card-box">
                    <span class="details">Job position</span>
                    <input type="text" placeholder="the job position" name="job_position" value="{{ old('job_position')}}" class="@error('job_position') is-invalid @enderror">
                    @error('job_position')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Certificates and credits</span>
                    <input type="text" placeholder="Certificates and credits" name="certificates_and_credits" value="{{ old('certificates_and_credits')}}" class="@error('certificates_and_credits') is-invalid @enderror">
                    @error('certificates_and_credits')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Experience</span>
                    <input type="text" placeholder="Of experience" name="experience" value="{{ old('experience')}}" class="@error('experience') is-invalid @enderror">
                    @error('experience')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Skills</span>
                    <input type="text" placeholder="Of skills" name="skills" value="{{ old('skills')}}" class="@error('skills') is-invalid @enderror">
                    @error('skills')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="address" name="address" value="{{ old('address')}}" class="@error('address') is-invalid @enderror">
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your  password" name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                {{-- <div class="card-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm password">
                </div> --}}
                <div class="card-box">
                    <span class="details">Upload Cv As PDF</span>
                    <input type="file" placeholder="Upload Image" class="file" name="cv_pdf" value="{{ old('cv_pdf')}}" class="@error('cv_pdf') is-invalid @enderror">
                    <small style="color: #07393E;">Please attach certificates and credits to the same file.</small>
                    @error('cv_pdf')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="card-box">
                    <span class="details">Upload Image</span>
                    <input type="file" placeholder="Upload Image" class="file" name="image" value="{{ old('image')}}" class="@error('image') is-invalid @enderror">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>

            </div>
            {{-- <div class="circal-form">
                <span class="circal-title">Gender</span>
                <div class="category">
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                </div>
            </div> --}}
            <div class="button">
                <input type="submit" value="Register">
            </div>

        </form>
    </div>

</section>
@endsection

@section('script')

@endsection
