@extends('admin.layouts.master')


@section('title')
Profile
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('section_title')

@endsection


@section('admin')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Profile
@endsection


@section('content')

 <!-- /.row -->
 <div class="row container-fluid m-auto" style="text-align: center;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 90px;">




                {{-- <a href=""><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add admin</button></a> --}}
                <a href="{{route('admin.create.admin')}}"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add admin</button></a>


              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 "  style="height: 300px;">
          <table class="table table-head-fixed text-nowrap" style="justify-content: center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>

                {{-- <th>is_admin</th> --}}
                {{-- <th>Delete</th> --}}
              </tr>
            </thead>
            <tbody>
                <?php $i=1?>
                @foreach ($data as $value)
                @if($value->role=='admin')
                <tr>
                    <td> {{$i}}</td>
                        {{-- <td>{{$value->id}}</td> --}}
                        <td>{{$value->name}}</td>
                        <td>{{$value->email	}}</td>
                        <td>{{$value->phone	}}</td>

                        {{-- <td>{{$value->is_admin	}}</td> --}}

                        {{-- <td>
                            <form action="{{Route('admin.users.destroy',$value->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                            </form>
                        </td> --}}

                    </tr>

                    <?php ++$i?>
                    @endif
                    @endforeach


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
