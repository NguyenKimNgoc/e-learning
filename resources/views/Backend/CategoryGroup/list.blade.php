@extends('Backend.Layouts.admin-main')

@section('title')
    Admin |  Nhóm Danh Mục
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Nhóm Danh Mục
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active"> Danh Sách Nhóm Danh Mục</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            @if (session('success'))
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{session('success')}}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{session('error')}}
                                </div>
                            @endif
                            <table id="example2" class="table table-bordered table-hover">
                                <a href="{{route('categoryGroup-add')}}" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-user-plus"></i>  Thêm Nhóm Danh Mục</a>
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Nhóm Danh Mục</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n=1;?>
                                @foreach($listCateGroup as $cateGroup)
                                    <tr>
                                        <td class="text-center">{{$n ++}}</td>
                                        <td >{!! $cateGroup->name !!}</td>
                                        <td class="text-center">
                                            <a onclick="deleteRow('/admin/category/group/delete/{{ $cateGroup->id }}', '.list-cateGroup', '/admin/categoies/group')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="7">{!! $listCateGroup->appends($_GET)->render() !!}</td>
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
                'lengthChange': true,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
@stop
