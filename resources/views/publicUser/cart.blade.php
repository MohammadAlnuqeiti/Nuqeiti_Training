@extends('publicUser.layouts.master')


@section('title')
Cart
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/cart.css')}}">

@endsection



@section('content')
<section class="cart">
{{-- {{dd($data)}} --}}
    <table>
        <tr>
            <th>course</th>
            <th>Remove</th>
            <th>price</th>
            {{-- <th>New Price</th> --}}
        </tr>
        <?php $total_price=0 ?>
@if(count($data)==0)
<tr>
    <td colspan="3" style="text-align: center; font-size:20px">Cart is empty...</td>
</tr>

@else
@foreach ($data as $value)

<tr>
    <td>
        <?php
        $img=$value['course_image']
        ?>

        <div class="cart-info">
            <img src="{{URL::asset("storage/image/$img")}}" alt="{{$value['course_name']}}">
            <div>
                <p style="max-width:250px;">{{$value['course_name']}}</p>
                <small> {{$value['course_category']}}</small><br>


            </div>
        </div>
    </td>
    <td>
        {{-- <form action="{{Route('user.cart.destroy',$value['course_id'])}}" method="get">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-sm btn-block  bg-gradient-danger  show_confirm"  data-toggle="tooltip" title='Delete'>Delete</button>
        </form> --}}
         <a href="{{Route('user.cart.destroy',$value['course_id'])}}">remove</a>


    </td>
    @if($value['course_discount']>0)
    <td>{{$value['course_new_price']}} JD</td>
    <?php $total_price+=$value['course_new_price'] ?>

    @else

    <td>{{$value['course_price']}} JD</td>
    <?php $total_price+=$value['course_price'] ?>
    @endif
</tr>

@endforeach
@endif
        {{-- <tr>
            <td>
                <div class="cart-info">
                    <img src="userSide/img/1215970_a5f8_11.jpg" alt="">
                    <div>
                        <p style="max-width:250px;">The Comprehensive ETABS Professional Course (RCC and Steel)</p>
                        <small>Nike Sneaker</small><br>


                    </div>
                </div>
            </td>
            <td>   <a href="">remove</a></td>
            <td>50.00 JD</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="userSide/img/1215970_a5f8_11.jpg" alt="">
                    <div>
                        <p style="max-width:250px;">The Comprehensive ETABS Professional Course (RCC and Steel)</p>
                        <small>Nike Sneaker</small><br>


                    </div>
                </div>
            </td>
            <td>    <a href="">remove</a></td>
            <td>50.00 JD</td>
        </tr> --}}
    </table>


    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>{{$total_price}} JD</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>00.00 JD</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{$total_price}}JD</td>
                {{session()->put('total_price', $total_price);}}

            </tr>
            <tr >
                <td colspan="2"><a href="{{route('user.checkout.index')}}" class="primary-btn">Proceed to checkout</a></td>
            </tr>

        </table>
    </div>

</section>
@endsection

@section('script')
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>

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
