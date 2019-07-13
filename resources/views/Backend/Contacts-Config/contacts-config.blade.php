@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Cài đặt liên hệ
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Cài đặt liên hệ</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Địa chỉ </th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th >Link Youtube</th>
                                    <th>Link Facebook</th>
                                    <th>Link LinkedIn</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{$contactsConfig->address}}</td>
                                        <td class="text-center">{{$contactsConfig->phone}}</td>
                                        <td class="text-center">{{$contactsConfig->email}}</td>
                                        <td class="text-center" >{!! $contactsConfig->youtube !!}</td>
                                        <td class="text-center">{!! $contactsConfig->facebook !!}</td>
                                        <td class="text-center">{!! $contactsConfig->linkedin !!}</td>
                                        <td class="text-center"><a href="{{route('contacts-config-edit',$contactsConfig->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <!-- /.content-wrapper -->
@section('addScript')
    <script>
        $(function () {
            $('#example2').DataTable({
                'paging'      : false,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : false
            })
        })
    </script>
@stop
@stop
