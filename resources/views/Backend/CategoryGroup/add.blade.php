@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Nhóm Danh Mục
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Nhóm Danh Mục
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active"> Thêm Nhóm Danh Mục </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Thêm Nhóm Danh Mục </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('categoryGroup-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-10">
                            <div class="form-group {{ !empty($errors->first('name')) ? 'has-warring' : '' }}">
                                <label for="">Tên Nhóm Danh Mục</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" autofocus
                                       placeholder="Tên Nhóm Danh Mục...">
                                <span class="text-danger">{{ !empty($errors->first('name')) ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('categoryGroup-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Nhóm Danh Mục
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop
