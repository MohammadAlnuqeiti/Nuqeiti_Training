@extends('publicUser.layouts.master')


@section('title')
Cart
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/cart.css')}}">

@endsection



@section('content')
<section class="cart">

    <table>
        <tr>
            <th>course</th>
            <th>Remove</th>
            <th>price</th>
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
            <td> <a href="">remove</a></td>
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
        </tr>
    </table>


    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>200.00 JD</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>00.00 JD</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>200.00 JD</td>
            </tr>
            <tr >
                <td colspan="2"><a href="./checkout.html" class="primary-btn">Proceed to checkout</a></td>
            </tr>

        </table>
    </div>

</section>
@endsection

@section('script')

@endsection
