@extends('admin.layouts.master')


@section('title')
Courses
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('section_title')
Create new Course
@endsection


@section('Courses')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Course
@endsection


@section('content')
 <!-- /.row -->
 <div class="row container m-auto">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="course_name" placeholder="Enter name" value="{{ old('course_name')}}" class="@error('course_name') is-invalid @enderror">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" name="user_id"  value="1" >
                  @error('course_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail11">Short description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="short_description" placeholder="Enter Long description" value="{{ old('short_description')}}" class="@error('short_description') is-invalid @enderror">
                  @error('short_description')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail11">Long description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="long_description" placeholder="Enter Long description" value="{{ old('long_description')}}" class="@error('long_description') is-invalid @enderror">
                  @error('long_description')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Video</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="video_course" placeholder="Enter video source" value="{{ old('video_course')}}" class="@error('video_course') is-invalid @enderror">
                  @error('video_course')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">duration of the course (hour)</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="duration_of_the_course" placeholder="Enter duration" value="{{ old('duration_of_the_course')}}" class="@error('duration_of_the_course') is-invalid @enderror">
                  @error('duration_of_the_course')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="course_price" placeholder="Enter price" value="{{ old('course_price')}}" class="@error('course_price') is-invalid @enderror">
                  @error('course_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Category <code></code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="select" class="@error('select') is-invalid @enderror">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
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
                        {{-- <input id="trip_image" type="file" name="trip_image" placeholder="Upload Image" value="{{ old('trip_image')}}" class="@error('trip_image') is-invalid @enderror"><br><br> --}}
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="course_image" value="{{ old('course_image')}}" class="@error('course_image') is-invalid @enderror">
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
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

          </div>
        </form>
          <!-- /.card -->
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
