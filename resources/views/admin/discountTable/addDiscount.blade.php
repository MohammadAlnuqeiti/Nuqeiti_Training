@extends('admin.layouts.master')


@section('title')
Discount
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('section_title')
Add Discount
@endsection


@section('discount')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Add discount
@endsection



@section('content')
<!-- /.row -->
<div class="row container m-auto">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Controls</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.category_discount.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="card-body">
                <div class="form-group">
                    <label for="exampleSelectRounded0">Category name<code></code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="select"   class="@error('select') is-invalid @enderror">
                        @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('select')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Discount mount %</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter  discount" name="discount"  class="@error('discount') is-invalid @enderror">
                    @error('discount')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
    </div>
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Controls</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.course_discount.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="card-body">
                <div class="form-group">
                    <label for="exampleSelectRounded0">Courses name<code></code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="select"   class="@error('select') is-invalid @enderror">
                        @foreach($courses as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('select')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">Discount mount %</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter  discount" name="discount"  class="@error('discount') is-invalid @enderror">
                    @error('discount')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
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
