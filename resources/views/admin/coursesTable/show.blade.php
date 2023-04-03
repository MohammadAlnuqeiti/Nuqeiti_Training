@extends('admin.layouts.master')


@section('title')
Courses
@endsection

@section('section_title')
Courses Table
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
Courses
@endsection


@section('content')
 <!-- /.row -->

 <div class="row container-fluid m-auto">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Courses controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 130px;">

                {{-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><a href="{{route('admin.categories.create')}}">Add new category</a></button> --}}

         <a href="{{route('admin.courses.create')}}"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add new course</button></a>

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
                <th style="text-align: center">Feature</th>
                <th style="text-align: center">Status</th>
                <th style="text-align: center">Edit status</th>
                <th style="text-align: center">More details</th>
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
               @foreach ($data as $value)

                <tr>
                    <td style="text-align: center">{{$value['id']}}</td>
                    <td style="text-align: center">{{$value['name']}}</td>
                    @if ($value['feature']==1)

                    <td style="text-align: center"><a href="{{route('admin.RemoveFeatue',$value['id'])}}"><i class="fa-solid fa-star" style="color: #07393e;"></i></a></td>

                    @else

                    <td style="text-align: center"><a href="{{route('admin.AddFeatue',$value['id'])}}"><i class="fa-regular fa-star" style="color: #07393e;"></i></a></td>
                    @endif
                    @if ($value['status']	=="accepted")
                    <td style="text-align: center"><span class="badge bg-success">Accepted</span></td>
                    @elseif ($value['status']	=="rejected")
                    <td style="text-align: center"><span class="badge bg-danger">Rejected</span></td>
                    @else
                    <td style="text-align: center"><span class="badge bg-warning">Pending</span></td>
                    @endif

                    <td style="text-align: center"><a href="{{Route('admin.editStatus.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit status</button>
                    </a></td>
                    <td style="text-align: center"><a href="{{Route('admin.courses.show',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-info btn-sm">more details</button>



                    <td style="text-align: center"><a href="{{Route('admin.courses.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td style="text-align: center">

                        <form action="{{Route('admin.courses.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-block  bg-gradient-danger  show_confirm"  data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                    </td>

                </tr>

                @endforeach

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
