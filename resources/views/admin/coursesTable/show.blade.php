@extends('admin.layouts.master')


@section('title')
Trips
@endsection

@section('section_title')
Trips Table
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('Courses')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Trips
@endsection


@section('content')
 <!-- /.row -->

 <div class="row container-fluid m-auto" >
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Trips controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 100px;">

                {{-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><a href="{{route('admin.categories.create')}}">Add new category</a></button> --}}

         <a href=""><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add new trip</button></a>
         {{-- <a href="{{route('admin.trips.create')}}"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add new trip</button></a> --}}

              {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">more details</th>
                {{-- <th>Short description</th>
                <th>Long description</th>
                <th>image one</th>
                <th>image two</th>
                <th>Category</th>
                <th>Guest number</th>
                <th>price</th> --}}
                <th style="text-align: center">edit</th>
                <th style="text-align: center">delete</th>
              </tr>
            </thead>
            <tbody>

                {{-- @foreach ($data as $value) --}}


                <tr>
                    <td style="text-align: center">1111</td>
                    {{-- <td style="text-align: center">{{$value['id']}}</td> --}}
                    <td style="text-align: center">55555</td>
                    {{-- <td style="text-align: center">{{$value['name']}}</td> --}}
                    {{-- <td style="text-align: center"><a href=""><button type="button" class="btn btn-block bg-gradient-info btn-sm">more details</button> --}}
                    <td style="text-align: center"><a href="{{Route('admin.courses.show',1)}}"><button type="button" class="btn btn-block bg-gradient-info btn-sm">more details</button>



                    <td style="text-align: center"><a href=""><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    {{-- <td style="text-align: center"><a href="{{Route('admin.trips.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button> --}}
                    </a></td>
                    <td style="text-align: center">
                        <form action="" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                        {{-- <form action="{{Route('admin.trips.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form> --}}
                    </td>

                </tr>

                {{-- @endforeach --}}

              {{-- </tr> <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="tag tag-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>
                    <button href="" type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                  </td>
                <td>
                    <button href="" type="button" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                </td> --}}

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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
