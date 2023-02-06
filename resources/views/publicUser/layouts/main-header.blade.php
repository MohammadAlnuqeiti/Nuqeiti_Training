<header class="header">

    <a href="{{route('user.index')}}">
        <img  id="logo" src="/userSide/img/logo.png" alt="">
    </a>

    <div style="width: 90%;">
        <form id="form" class="form">
            <input type="search" placeholder="Search..." required class="search">
            <input type="button" value="Search" class="button">
        </form>
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
