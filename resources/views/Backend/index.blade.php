@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Trang Chủ
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Trang Chủ
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Trang Chủ</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{\App\Helpers\Helpers::countOrders()}}</h3>

                            <p>Đơn Hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a @if(\Auth::user()->user_group == 1 || \Auth::user()->user_group == 2)href="{{route('orders-list')}}" @endif class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{!! \App\Helpers\Helpers::countNewsIndex() !!}</h3>

                            <p>Bài Viết</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a  @if(\Auth::user()->user_group == 1 || \Auth::user()->user_group == 2) href="{{route('news-list')}}" @endif  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{!! \App\Helpers\Helpers::countUser() !!}</h3>

                            <p>Thành Viên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('admin-users-list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{!! \App\Helpers\Helpers::countCoursesIndex() !!}</h3>

                            <p>Khóa Học</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a @if(\Auth::user()->user_group == 1 || \Auth::user()->user_group == 2) href="{{route('course-list')}}" @endif   class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->           
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
