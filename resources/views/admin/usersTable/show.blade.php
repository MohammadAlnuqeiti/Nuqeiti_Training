@extends('admin.layouts.master')


@section('title')
user
@endsection

@section('section_title')
Users Table
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('User')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
user
@endsection

@section('content')
 <!-- /.row -->
 <div class="row container-fluid m-auto">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 90px;">




                {{-- <a href="{{route('admin.users.create')}}"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add admin</button></a> --}}


              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap" style="text-align: center;">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                {{-- <th>is_admin</th> --}}
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1?>

                @foreach ($data as $value)
                @if($value->role=='user')

                <tr>
                    {{-- <td>1</td>
                    <td>mohammad</td>
                    <td>mohammad@gmail.com</td>
                    <td>0790369501</td> --}}
                    {{-- <td>0</td> --}}
                    <td> {{$i}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email	}}</td>
                    <td>{{$value->phone	}}</td>

                    <td>
                        {{-- <form action="" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form> --}}
                        <form action="{{Route('admin.users.destroy',$value->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-block  bg-gradient-danger  show_confirm"  data-toggle="tooltip" title='Delete'>Delete</button>
                </form>
                    </td>

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
