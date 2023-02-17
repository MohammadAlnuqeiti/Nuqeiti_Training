@extends('publicUser.layouts.master')


@section('title')
Add course
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

</style>

@endsection



@section('content')
<!-- /.row -->
<div class="row container m-auto mt-5">
    <div class="col-12 m-auto">
        <div class="card card-primary">
            <div class="card-header" style="background-color:#07393E">
              <h3 class="card-title">Edit lecture</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('user.lectures.update',$data->id)}}" method="POST" enctype="multipart/form-data">

                @method('PUT')

                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->name}}"  class="@error('name') is-invalid @enderror">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail11">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="description" value="{{$data->description}}"  class="@error('description') is-invalid @enderror">
                  @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                <div class="form-group">
                  <label for="exampleInputEmail1">Video source</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="video_lecture" value="{{$data->video_lecture}}" placeholder="Enter video url"  class="@error('video_lecture') is-invalid @enderror">
                  @error('video_lecture')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>

                  {{-- <div class="form-group">
                    <label for="exampleInputFile">Video</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="video_lecture" value="{{$data->video_lecture	}}" class="@error('video_lecture	') is-invalid @enderror">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                  </div>
                  @error('video_lecture	')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
              </div> --}}


              <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="background-color:red">Submit</button>
              </div>
              </div>
            </form>
          </div>
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
