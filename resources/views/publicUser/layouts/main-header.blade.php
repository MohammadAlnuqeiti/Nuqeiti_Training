<header class="header">

    <a href="{{route('user.index')}}">
        <img  id="logo" src="/userSide/img/logo.png" alt="">
    </a>

    <div style="width: 90%;">
        <form action="{{ route('user.search') }}" method="post" id="form" class="form">
            @csrf
            <input class="search" type="search" name="search" placeholder="Search...">
            <button type="submit" class="button">Search</button>
        </form>
        {{-- <form id="form" class="form">
            <input type="search" placeholder="Search..." required class="search">
            <input type="button" value="Search" class="button">
        </form> --}}
    </div>

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

                <a href="{{route('user.login.destroy')}}" class="nav-link">logout</a>
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
                @if(Auth::user()->role=="user" || Auth::user()->role=="admin")
                <a href="{{route('user.profile_user.index')}}"><button id="btn-nav" class="nav-link">ACCOUNT</button></a>
                @endif
                @if(Auth::user()->role=="engineer")
                <a href="{{route('user.profile_engineer.index')}}"><button id="btn-nav" class="nav-link">ACCOUNT</button></a>
                @endif
            </li>
            @endif
            {{-- <a href="{{route('user.profile.index')}}" class="btn btn-primary rounded-pill py-2 px-4">Account</a> --}}
            {{-- <li>

                <a href="{{route('user.cart')}}" class="nav-link">Cart</a>
            </li> --}}
            {{-- <li>
                <a href="{{route('user.cart')}}" >
                    <span class="fa-stack fa-2x has-badge" data-count="5">
                        <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                        <i style="" class="fa fa-shopping-cart fa-stack-2x red-cart"></i>
                      </span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{route('user.cart')}}" >
                    <span class="fa-stack fa-2x has-badge" data-count="5">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{route('user.cart')}}" >
                    <div class="cart">
                        @if(session()->has('cart') && count(session('cart'))>0)
                        <span class="count">{{count(session('cart'))}}</span>
                        @endif
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </a>
            </li> --}}
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
<header id="hidden" class="header">
<div style="width: 90%;">
    <form id="form">
        <input type="search" placeholder="Search..." required class="search">
        <input type="button" value="Search" class="button">
    </form>
</div>
</header>
