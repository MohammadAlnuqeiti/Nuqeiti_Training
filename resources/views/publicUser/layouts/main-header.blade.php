<!-- start header  -->

<header class="header">

    <a href="{{route('user.index')}}">
        <img  id="logo" src="/userSide/img/logo.png" alt="logo">
    </a>
<!-- search  -->

    <div style="width: 90%;">
        <form action="{{ route('user.search') }}" method="post" id="form" class="form">
            @csrf
            <input class="search" type="search" name="search" placeholder="Search...">
            <button type="submit" class="button">Search</button>
        </form>
    </div>

<!-- search  -->
    <div class="navbar">

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.shop')}}" class="nav-link">COURSES </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.about')}}" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.contact')}}" class="nav-link">CONTACT</a>
            </li>
            @if(!Auth::user())
            <li class="nav-item">
                <a href="{{route('user.login')}}" class="nav-link">LOGIN</a>
            </li>
            @endif
            @if(Auth::user())
            <li>
                <a href="{{route('logout')}}" class="nav-link">logout</a>
                {{-- <a href="{{route('user.login.destroy')}}" class="nav-link">logout</a> --}}
            </li>
            @endif
            @if(!Auth::user())
            <li class="nav-item">
                <!-- <div class="dropdown">
                    <button class="dropbtn">REGISTER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="./register.html">REGISTER AS STUDENT</a>
                        <a href="./registerEngineering.html">REGISTER AS ENGINEERING</a>
                    </div>
                </div> -->
                <a href="{{route('user.register')}}"><button id="btn-nav" class="nav-link">REGISTER</button></a>
            </li>
            @endif
            @if(Auth::user())
            <li class="nav-item">
                @if(Auth::user()->role=="user")
                <a href="{{route('user.profile_user.index')}}"><button id="btn-nav" class="nav-link">ACCOUNT</button></a>
                @endif
                @if(Auth::user()->role=="admin")
                <a href="{{route('admin.index')}}"><button id="btn-nav" class="nav-link">DASHBOARD</button></a>
                @endif
                @if(Auth::user()->role=="engineer")
                <a href="{{route('user.profile_engineer.index')}}"><button id="btn-nav" class="nav-link">ACCOUNT</button></a>
                @endif
            </li>
            @endif
        </ul>
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="navbar">
        <li style="list-style:none">
            <a href="{{route('user.cart')}}" >
                <div class="cart">
                    @if(session()->has('cart') && count(session('cart'))>0)
                        <span class="count">{{count(session('cart'))}}</span>
                    @endif
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </a>
        </li>
    </div>
    </div>


</header>
<!-- end header  -->
<!-- start header search responsive -->

<header id="hidden" class="header">
    <div style="width: 90%;">
        <form action="{{ route('user.search') }}" method="post" id="form">
            @csrf
            <input class="search" type="search" name="search" placeholder="Search...">
            <button type="submit" class="button">Search</button>
        </form>
    </div>
</header>

<!-- end header search responsive -->
