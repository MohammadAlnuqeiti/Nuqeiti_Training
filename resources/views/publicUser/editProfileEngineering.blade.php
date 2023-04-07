@extends('publicUser.layouts.master')


@section('title')
Update profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/registerEngineering.css')}}">

@endsection



@section('content')
<section class="body">
    <div class="container">
        <div class="heading">Update Account</div>
        <form action="{{route('user.profile_engineer.update',$data[0]->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-details">

                <div class="card-box">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter your  name" name="name" value="{{$data[0]->name}}" class="@error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email name" name="email" value="{{$data[0]->email}}" class="@error('email') is-invalid @enderror">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Phone Number</span>
                    <input type="phone" placeholder="Enter your phone number" name="phone" value="{{$data[0]->phone}}" class="@error('phone') is-invalid @enderror">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">the description</span>
                    <input type="text" placeholder="the description" name="the_description" value="{{$data[0]->the_description}}" class="@error('the_description') is-invalid @enderror">
                        @error('the_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Linkedin link</span>
                    <input type="text" placeholder="Linkedin link" name="Linkedin_link" value="{{$data[0]->Linkedin_link}}" class="@error('Linkedin_link') is-invalid @enderror">
                        @error('Linkedin_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Education</span>
                    <input type="text" placeholder="education" name="education" value="{{$data[0]->education}}" class="@error('education') is-invalid @enderror">
                        @error('education')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Job position</span>
                    <input type="text" placeholder="the job position" name="job_position" value="{{$data[0]->job_position}}" class="@error('job_position') is-invalid @enderror">
                        @error('job_position')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Certificates and credits</span>
                    <input type="text" placeholder="Certificates and credits" name="certificates_and_credits" value="{{$data[0]->certificates_and_credits}}" class="@error('certificates_and_credits') is-invalid @enderror">
                        @error('certificates_and_credits')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Experience</span>
                    <input type="text" placeholder="Of experience" name="experience" value="{{$data[0]->experience}}" class="@error('experience') is-invalid @enderror">
                        @error('experience')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Skills</span>
                    <input type="text" placeholder="Of skills" name="skills" value="{{$data[0]->skills}}" class="@error('skills') is-invalid @enderror">
                        @error('skills')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="address" name="address" value="{{$data[0]->address}}" class="@error('address') is-invalid @enderror">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your  password" name="password"  class="@error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Upload Cv As PDF</span>
                    <input type="file" placeholder="Upload Image" class="file" name="cv_pdf" value="{{$data[0]->cv_pdf}}" class="@error('cv_pdf') is-invalid @enderror">
                    <small style="color: #07393E;">Please attach certificates and credits to the same file.</small>
                        @error('cv_pdf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="card-box">
                    <span class="details">Upload Image</span>
                    <input type="file" placeholder="Upload Image" class="file" name="image" value="{{$data[0]->image}}" class="@error('image') is-invalid @enderror">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

            </div>
    
            <div class="button">
                <input type="submit" value="Update">
            </div>

        </form>
    </div>

</section>
@endsection

@section('script')

@endsection
