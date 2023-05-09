@extends('publicUser.layouts.master')


@section('title')
Checkout
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/checkout.css')}}">
<style>
    .error{
  color: red;
  font-size: 15px;
  margin-top: -1px;
}

</style>
@endsection



@section('content')
<div class="container">

    <div class="form">
    <form action="{{route('user.checkout.store')}}" method="post">

        @csrf
        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter full name" name="user_name" value="{{ old('user_name')}}" class="@error('user_name') is-invalid @enderror" autofocus>
                    @error('user_name')
                    <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="street - locality" name="address" value="{{ old('address')}}" class="@error('address') is-invalid @enderror">
                    @error('address')
                    <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Enter your city" name="city" value="{{ old('city')}}" class="@error('city') is-invalid @enderror">
                    @error('city')
                    <div class="error">{{ $message }}</div>
                   @enderror
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
                    <img src="/userSide/img/card_img.png" alt="cards">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr." name="card_name" value="{{ old('card_name')}}" class="@error('card_name') is-invalid @enderror">
                    @error('card_name')
                    <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="card_number" value="{{ old('card_number')}}" class="@error('card_number') is-invalid @enderror">
                    @error('card_number')
                    <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <!-- <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div> -->

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="20323" name="exp_date" value="{{ old('exp_date')}}" class="@error('exp_date') is-invalid @enderror">
                        @error('exp_date')
                        <div class="error">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" name="cvv" value="{{ old('cvv')}}" class="@error('cvv') is-invalid @enderror">
                        @error('cvv')
                        <div class="error">{{ $message }}</div>
                       @enderror
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
                <td>{{session('total_price')}} JD</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>00.00 JD</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{session('total_price')}} JD</td>
            </tr>
            <tr >
                <td colspan="2"><button type="submit" class="btn-popup">Submit</button></td>
                {{-- <td colspan="2"><button type="submit" class="btn-popup" onclick="openPopup(event)">Submit</button></td> --}}
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
        <a href="{{route('user.profile_user.index')}}"><button type="button"  onclick="closePopup()">OK</button></a>
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
