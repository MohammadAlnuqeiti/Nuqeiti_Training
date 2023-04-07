@extends('publicUser.layouts.master')


@section('title')
Edit course
@endsection

@section('css')

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --}}
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  {{-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

  {{-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> --}}
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">

  <script src="https://kit.fontawesome.com/a8b56cb52b.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('userSide/css/header.css')}}">
<link rel="stylesheet" href="{{asset('userSide/css/footer.css')}}">
<style>
     .card-header{
        background-color: #07393E;
        }
    label{
        color: #07393E !important;
    }
    header{
        box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;
        }
    l, ol, ul {
        margin-top: 0;
        margin-bottom: 0 !important;
}
.nav-menu{
        gap:0 !important;
    }
    .lecture{
        background-color: red ;
        color:white ;
        font-weight:bold

    }

</style>

@endsection



@section('content')
<!-- /.row -->
<div class="row container m-auto mt-5">
    <div class="col-12 m-5">
        <div class="card card-primary">
            <div class="card-header" style="background-color:#07393E">
              <h3 class="card-title">Controls</h3>
              <div class="card-tools" >
                <div class="input-group input-group-sm" style="width: 200px;" >


                  <a href="{{route('user.lectures.show',$data->id)}}"><button type="button" class="btn btn-block  btn-sm lecture">Lectures course</button></a>


                  </div>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('user.add_course.update',$data->id)}}" method="POST" enctype="multipart/form-data">

                @method('PUT')

                @csrf

              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="course_name" value="{{$data->name}}"  class="@error('course_name') is-invalid @enderror">
                    @error('course_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail11">Short description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="short_description" value="{{$data->short_description}}"  class="@error('short_description') is-invalid @enderror">
                    @error('short_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail11">Long description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="long_description" value="{{$data->long_description}}"  placeholder="Enter Long description" class="@error('long_description') is-invalid @enderror">
                    @error('long_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">duration of the course (hour)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="duration_of_the_course" value="{{$data->duration_of_the_course}}" placeholder="Enter price"  class="@error('duration_of_the_course') is-invalid @enderror">
                    @error('duration_of_the_course')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="course_price" value="{{$data->price}}" placeholder="Enter price"  class="@error('course_price') is-invalid @enderror">
                    @error('course_price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleSelectRounded0">Category <code></code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="select"   class="@error('select') is-invalid @enderror">
                        @foreach($category as $value)
                            <option value="{{$value->id}}" {{$data->category_id == $value->id ? 'selected' : ''}}>{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('select')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="course_image" value="{{$data->image}}" class="@error('course_image') is-invalid @enderror">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                  </div>
                    @error('course_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group">
                <label for="video_course">Upload Video</label>
                <div class="input-group">
                  <div class="custom-file">
                      <input id="video_course" type="file" name="video_course" placeholder="Upload video" value="{{ old('video_course')}}" class="@error('video_course') is-invalid @enderror"><br><br>
                      <label class="custom-file-label" for="video_course">Choose file</label>
                  </div>
                  <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                  </div>
                  </div>
                    @error('video_course')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="background-color:red">Submit</button>
              </div>
              </div>
            </form>
          <!-- /.card -->
    </div>
  </div>
  </div>

  <!-- /.row -->
@endsection

@section('script')
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src=".{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
