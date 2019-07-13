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
                Thêm Quảng Cáo
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active"> Thêm Quảng Cáo </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Thêm Quảng Cáo </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('banner-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('name')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Tên quảng cáo</label>
                                <input type="text" class="form-control" name="name"
                                       value="{!! old('name') !!}"
                                       @if($errors->has('banner_type')) autofocus
                                       @elseif($errors->has('url_banner'))
                                       @elseif($errors->has('point'))
                                       @elseif($errors->has('images'))
                                       @endif
                                        placeholder="Tên quảng cáo...">
                                <span class="text-danger">{{ !empty($errors->first('name')) ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('images')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Hình ảnh</label>
                                <input type="file" class="form-control"  onchange='openFile(event)' name="images"
                                       @if($errors->has('images')) autofocus @endif value="{!! old('images') !!}"
                                       placeholder="Nhập hình ảnh...">
                                <img id="output" src="" style="margin-top: 15px" />
                                <span class="text-danger">{{ !empty($errors->first('images')) ? $errors->first('images') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('banner_type')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Thể Loại</label>
                                <select name="banner_type" id="" class="form-control">
                                    <option value="">--Vui lòng chọn thể loại--</option>
                                    @foreach($typeBanner as $typeList)
                                        <option value="{{$typeList->id}}" {{ $typeList->id == old('banner_type') ? "selected" : ""}}>{{$typeList->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('banner_type')) ? $errors->first('banner_type') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('point')) ? 'has-warring' : '' }}">
                                <label for="">Vị Trí</label>
                                <select name="point" id="" class="form-control">
                                    <option value="">--Chọn Vị Trí--</option>
                                    <option value="1" {{old('point') == 1 ? 'selected' : '' }}>Ngang</option>
                                    <option value="2" {{old('point') == 2 ? 'selected' : '' }}>Đứng</option>
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('point')) ? $errors->first('point') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('banner-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Quảng Cáo
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop
