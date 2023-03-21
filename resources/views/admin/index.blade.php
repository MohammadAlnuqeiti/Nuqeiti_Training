@extends('admin.layouts.master')


@section('title')
welcome
@endsection
@section('css')

@endsection
@section('Dashboard')
active
@endsection
@section('title_page')
welcome
@endsection
@section('title_page2')
welcome
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
                @if($number_of_admin >=0)
                <h3>

                  {{$number_of_admin}}
                </h3>
                @endif

              <p>Number of admin</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-user"></i>
            </div>
            <a href="{{route('admin.show.admin')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
                @if($number_of_engineer >=0)
                <h3>

                  {{$number_of_engineer}}
                </h3>
                @endif

              <p>Number of engineering</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-users"></i>
            </div>
            <a href="{{route('admin.engineering.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
                @if($number_of_users >=0)
                <h3>

                  {{$number_of_users}}
                </h3>
                @endif
              <p>Number of users</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-users"></i>
            </div>
            <a href="{{route('admin.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
                @if($number_of_majors >=0)
                <h3>

                  {{$number_of_majors}}
                </h3>
                @endif
              <p>Number of majers</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-clipboard-list"></i>
            </div>
            <a href="{{route('admin.categories.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
                @if($number_of_messages >=0)
                <h3>

                  {{$number_of_messages}}
                </h3>
                @endif
              <p>Number of messages</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-message"></i>
            </div>
            <a href="{{route('admin.message')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
                @if($number_of_courses >=0)
                <h3>

                  {{$number_of_courses}}
                </h3>
                @endif
              <p>Number of courses</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-film"></i>
            </div>
            <a href="{{route('admin.courses.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
                @if($number_of_orders >=0)
                <h3>

                  {{$number_of_orders}}
                </h3>
                @endif
              <p>Number of orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-th"></i>
            </div>
            <a href="{{route('admin.orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
                @if($number_of_courses_offered >=0)
                <h3>

                  {{$number_of_courses_offered}}
                </h3>
                @endif
              <p>Number of courses offered</p>
            </div>
            <div class="icon">
              <i class="nav-icon fa-solid fa-tag"></i>
            </div>
            <a href="{{route('admin.discount')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

          <!-- /.card -->
    </div>




@endsection
@section('script')

@endsection
