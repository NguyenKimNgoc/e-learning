@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | 503
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger">
                        <p><b>Bạn không có quyền vào trang này</b></p>
                    </div>
                    <a class=" btn btn-md btn-success" href="{{route('admin')}}"><i class="fa fa-undo"></i> Quay Lại</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <!-- /.content-wrapper -->

@stop
