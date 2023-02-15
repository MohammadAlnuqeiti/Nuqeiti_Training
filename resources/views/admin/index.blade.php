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
              <h3>

               55
              </h3>

              <p>Numbet of trips</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-plane-departure"></i>
            </div>
            {{-- <a href="{{route('admin.trips.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>55</h3>

              <p>Numer of reservation</p>
            </div>
            <div class="icon">
              <i class="ion fas fa-th"></i>
            </div>
            {{-- <a href="{{route('admin.reservation.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>88</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-users"></i>
            </div>
            {{-- <a href="{{route('admin.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>55</h3>

              <p>Number of message</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-message"></i>
            </div>
            {{-- <a href="{{route('user.contact.show')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

          <!-- /.card -->
    </div>




@endsection
@section('script')

@endsection
