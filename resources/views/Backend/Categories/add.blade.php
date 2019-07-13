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
                Thêm Danh Mục
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active"> Thêm Danh Mục </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Thêm Danh Mục </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('category-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-10">
                            <div class="form-group {{ !empty($errors->first('cate_name')) ? 'has-warring' : '' }}">
                                <label for="">Tên Danh Mục</label>
                                <input type="text" class="form-control" name="cate_name" value="{{old('cate_name')}}" autofocus
                                       placeholder="Tên Danh Mục...">
                                <span class="text-danger">{{ !empty($errors->first('cate_name')) ? $errors->first('cate_name') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('cate_group_id')) ? 'has-warring' : '' }}">
                                <label for="">Nhóm Danh Mục</label>
                                <select name="cate_group_id" class="form-control select-cate-group" multiple="multiple">
                                    @foreach($listCateGroup as $cateGroup)
                                    <option value="{{$cateGroup->id}}" {{$cateGroup->id == old('cate_group_id') ? 'selected' : ''}}>{{$cateGroup->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('cate_group_id')) ? $errors->first('cate_group_id') : '' }}</span>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('categoryGroup-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Danh Mục
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop
