@extends('publicUser.layouts.master')


@section('title')
Checkout
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/checkout.css')}}">

@endsection



@section('content')
<div class="container">

    <div class="form">
    <form action="">
        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter full name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Enter your city">
                </div>

                <!-- <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Enter your state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div> -->

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="userSide/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr.">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <!-- <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div> -->

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="20323">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>

        </div>
    </div>

        <!-- <input type="submit" value="proceed to checkout" class="submit-btn"> -->

    <!-- </form> -->
    <div class="total-price">

        <table>
            <tr>
                <td><h3 class="title" >Summary</h3>
                </td>
            </tr>
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
                <td colspan="2"><button type="submit" class="btn-popup" onclick="openPopup(event)">Submit</button></td>
            </tr>


        </table>
    </div>
</form>


</div>

<!-- <div class="container-popup"> -->
    <!-- <button type="submit" class="btn-popup" onclick="openPopup()">Submit</button> -->
    <div class="popup" id="popup">
        <img src="userSide/img/404-tick.png" alt="">
        <h2>Thank You!</h2>
        <p>Your details has been successfully.</p>
        <button type="button"  onclick="closePopup()">OK</button>
    </div>

<!-- </div>  -->
@endsection

@section('script')
<script>
    let submit_btn=document.getElementById("submit_btn");
    let popup = document.getElementById("popup");
    submit_btn.addEventListener('click' , openPopup);
    function openPopup(event){
        event.preventDefault();
        popup.classList.add('open-popup');
    }
    function closePopup(){
        popup.classList.remove('open-popup');
    }
</script>
@endsection
