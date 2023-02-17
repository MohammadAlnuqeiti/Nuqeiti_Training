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
    l, ol, ul {
        margin-top: 0;
        margin-bottom: 0 !important;
    }
    .nav-menu{
        gap:0 !important;
    }

</style>

@endsection



@section('content')
<!-- /.row -->

<div class="row container-fluid" style="margin: 50px auto 50px auto">
    <div class="col-9 m-auto">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="color: white">Lectures</h3>

        </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Video</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>
{{-- {{dd($data)}} --}}
<?php   $course_id = $course_id  ?>
<?php $i = 1 ?>
                @foreach ($lectures as $value)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->video_lecture}}</td>



                <td>
                    <a href="{{Route('user.lectures.edit',$value->id)}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button></a>
                </td>
                <td>
                    <form action="{{Route('user.lectures.destroy',$value->id)}}" method="post">
                        @method('delete')
                        @csrf

                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-block  bg-gradient-danger  show_confirm"  data-toggle="tooltip" title='Delete'>Delete</button>
                      </form>

</td>

</tr>
<?php $i++ ?>
@endforeach


</tbody>
</table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
{{-- {{dd( $course_id)}} --}}



    </div>
  </div>
  <!-- /.row -->
<!-- /.row -->
<div class="row container m-auto mt-5">
    <div class="col-12 m-auto">
        <div class="card card-primary">
            <div class="card-header" style="background-color:#07393E">
              <h3 class="card-title">Add new lecture</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('user.lectures.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" name="user_id"  value="{{Auth::user()->id}}">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" name="course_id"  value="{{$course_id}}">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail11">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="description" placeholder="Enter  description" value="{{ old('description')}}" class="@error('description') is-invalid @enderror">
                  @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail11">Video lecture</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="video_lecture" placeholder="Enter Long description" value="{{ old('video_lecture')}}" class="@error('video_lecture') is-invalid @enderror">
                  @error('video_lecture')
                  <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>



                {{-- <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
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
                </div> --}}

              <div class="card-footer">
                <button type="submit" class="btn btn-danger" style="background-color:red">Submit</button>
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

      {{-- sweet alert --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      <script type="text/javascript">

           $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    form.submit();
                  }
                });
            });

      </script>
@endsection
