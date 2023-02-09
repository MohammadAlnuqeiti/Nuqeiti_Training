@extends('admin.layouts.master')


@section('title')
Engineering details
@endsection

@section('css')
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
@endsection

@section('title_page1')
admin
@endsection

@section('engineer')
active
@endsection

@section('title_page2')
engineering details
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
          <div class="row">
                        <div class="col-md-3">
{{-- {{dd($data->id);}}                        <!-- Profile Image --> --}}
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{asset('storage/image/'.$data->image)}}"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$data->name}}</h3>

                                <p class="text-muted text-center">{{$data->email}}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                    <b>Phone number:</b> <a class="float-right">{{$data->phone}}</a>
                                    </li>
                                    {{-- <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                    </li> --}}
                                    <li class="list-group-item">
                                    <b>Status:</b> <a class="float-right">{{$data->status}}</a>
                                    </li>
                                </ul>

                                <a href="{{$data->Linkedin_link}}" target="_blank" class="btn btn-primary btn-block"><b>Linkedin</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>


                        <div class="card card-primary col-md-9">
                            <div class="card-header">
                            <h3 class="card-title">About</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    {{$data->education}}                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">{{$data->address}} </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> experience</strong>

                                <p class="text-muted">{{$data->experience}}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                <p class="text-muted">
                                    {{$data->skills}}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Certificates and credits</strong>

                                <p class="text-muted">
                                    {{$data->certificates_and_credits}}
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> The description</strong>

                                <p class="text-muted">{{$data->the_description}}</p>
                            </div>
                        <!-- /.card-body -->
                </div>
                </div>

             </div>
        </div>
    </section>
@endsection

@section('script')
<!-- jQuery -->

<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('assets/js/demo.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
@endsection
