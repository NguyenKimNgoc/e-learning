@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Quảng Cáo
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Quảng Cáo
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Danh Sách Quảng Cáo</li>
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
                                <a href="{{route('banner-add')}}" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-user-plus"></i>  Thêm Quảng Cáo</a>
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Quảng Cáo</th>
                                    <th>Thể Loại</th>
                                    <th>Vị Trí</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n=1;?>
                                @foreach($listBanner as $banner)
                                    <tr>
                                        <td class="text-center">{{$n++}}</td>
                                        <td class="text-center">{!! $banner->name !!}</td>
                                        <td class="text-center">{!! $banner->type_banner !!}</td>
                                        <td class="text-center">
                                            @if($banner->point == 1)
                                                Ngang
                                            @elseif($banner->point == 2)
                                                Đứng

                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a onclick="deleteRow('/admin/banner/delete/{{ $banner->id }}', '.list-customer', '/admin/banner')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>

                                    @if(count($listBanner) == 0 )
                                        <td colspan="5" class="text-center"><em>Không có quảng cáo nào</em></td>
                                     @endif
                                </tr>
                                <tr>
                                    <td colspan="7">{!! $listBanner->appends($_GET)->render() !!}</td>
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
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
@stop
