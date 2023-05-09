  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color:#dddddd">
    <!-- Brand Logo -->
    <a href="{{route('user.index')}}" class="brand-link" style="padding:0;">
        <div class="user-panel  " style="display: flex;justify-content: center;">
            <div class="">
                <img src="/userSide/img/logo.png" class="" alt="User Image" style="width: 125px;height:100px">
            </div>

        </div>
      {{-- <img src="{{asset('assets/img/placeholder.png')}}" alt="AdminLTE Logo" class="brand-image  " style="opacity: .8">
      <span class="brand-text font-weight-medium" style="color:#07393E ">Dashboard</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?php

            $img = Auth()->user()->image;
            ?>
            <img src="{{URL::asset("storage/image/$img")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('admin.profile.admin')}}" class="d-block">
                {{ Auth::user()->name }}
        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          {{-- <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div> --}}
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('admin.index')}}" class="nav-link @yield('Dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                  <a href="{{route('admin.profile.admin')}}" class="nav-link  @yield('profile')">
                    <i class="nav-icon fa-solid fa-address-card"></i>
                    <p>
                      Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.show.admin')}}" class="nav-link  @yield('admin')">
                    <i class="nav-icon fa-solid fa-user"></i>                    <p>
                      Admin
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.engineering.index')}}" class="nav-link  @yield('engineer')">
                    <i class="nav-icon fa-solid fa-users"></i>
                    <p>
                      Engineering
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link  @yield('User')">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            User
                            {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.categories.index')}}" class="nav-link  @yield('Category')">
              <i class="nav-icon fa-solid fa-clipboard-list"></i>
              <p>
                Category
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.courses.index')}}" class="nav-link  @yield('Courses')">
                <i class="nav-icon fa-solid fa-film"></i>
                <p><i class=""></i>
                Courses
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.discount')}}" class="nav-link  @yield('discount')">
                <i class="nav-icon fa-solid fa-tag"></i>              <p><i class=""></i>
                Discount
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.lectures.index')}}" class="nav-link  @yield('lectures')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                lectures
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.comment.index')}}" class="nav-link  @yield('comments')">
                <i class="nav-icon fa-solid fa-comment"></i>
                {{-- <i class="nav-icon fa-solid fa-message"></i> --}}
              <p>
                Comments
              </p>
            </a>
          </li>
          <li class="nav-item">
            {{-- <a href="" class="nav-link  @yield('message')"> --}}
            <a href="{{route('admin.message')}}" class="nav-link  @yield('message')">
              <i class="nav-icon fa-solid fa-message"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.orders')}}" class="nav-link  @yield('orders')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">

              <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                            <p class="text">logout</p>

            </a>
          </form>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
