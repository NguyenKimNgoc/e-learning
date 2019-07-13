@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Khóa Học
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Khóa Học
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thêm Khóa Học </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Khóa Học </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('course-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('c_title')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Tên Khóa Học</label>
                                <input type="text" class="form-control "  name="c_title"
                                       value="{!! old('c_title') !!}"
                                       @if($errors->has('c_price')) autofocus
                                       @elseif($errors->has('c_price_sale'))
                                       @elseif($errors->has('c_images'))
                                       @elseif($errors->has('c_type_course'))
                                       @elseif($errors->has('c_hot'))
                                       @elseif($errors->has('c_desciption'))
                                       @endif
                                       id="exampleInputFullname" placeholder="Nhập Tên Khóa Học...">
                                <span class="text-danger">{{ !empty($errors->first('c_title')) ? $errors->first('c_title') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('c_type_course')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Lĩnh Vực</label>
                                <select name="c_type_course" id="onChangeCateGroup" class="form-control select-major"
                                        @if($errors->has('c_type_course')) autofocus @endif  multiple="multiple">
                                    @foreach($listCateGroup as $cateGroup)
                                    <option value="{!! $cateGroup->id !!}" {{ $cateGroup->id == old('c_type_course') ? "selected" : ""}}>{!! $cateGroup->name !!}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('c_type_course')) ? $errors->first('c_type_course') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('cate_id')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Danh mục</label>
                                <select name="cate_id" id="changeCate" class="form-control select-cate"
                                        @if($errors->has('cate_id')) autofocus @endif  multiple="multiple">
                                    @foreach($listCate as $cate)
                                        <option value="{!! $cate->id !!}" {{ $cate->id == old('cate_id') ? "selected" : ""}}>{!! $cate->cate_name !!}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('cate_id')) ? $errors->first('cate_id') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('c_price')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Giá Khóa Học</label>
                                <input type="text" class="form-control"
                                       @if($errors->has('c_price')) autofocus @endif value="{!! old('c_price') !!}"
                                       name="c_price" placeholder="Nhập Giá khóa học">
                                <span class="text-danger">{{ !empty($errors->first('c_price')) ? $errors->first('c_price') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('c_images')) ? 'has-warring' : '' }}">
                                <label for="">Hình Ảnh Khóa Học</label>
                                <input type="file" class="form-control"  onchange='openFile(event)' name="c_images"
                                       @if($errors->has('c_images')) autofocus @endif value="{!! old('c_images') !!}"
                                       placeholder="Nhập hình ảnh...">
                                <img id="output" src="" style="margin-top: 15px" />
                                <span class="text-danger">{{ !empty($errors->first('c_images')) ? $errors->first('c_images') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('c_price_sale')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Giá Sale</label>
                                <input type="text" class="form-control"
                                       @if($errors->has('c_price_sale')) autofocus @endif value="{!! old('c_price_sale') !!}"
                                       name="c_price_sale" placeholder="Nhập Giá Sale">
                                <span class="text-danger">{{ !empty($errors->first('c_price_sale')) ? $errors->first('c_price_sale') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('c_hot')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Hot</label>
                                <select name="c_hot" id="input" class="form-control"
                                        @if($errors->has('c_hot')) autofocus @endif >
                                        <option value="" >--Trạng Thái--</option>
                                        <option value="1"  {{ old('c_hot') == 1 ? 'selected' : '' }}>News</option>
                                        <option value="2"  {{ old('c_hot') == 2 ? 'selected' : '' }}>Sale</option>

                                </select>
                                <span class="text-danger">{{ !empty($errors->first('c_hot')) ? $errors->first('c_hot') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('c_description')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Mô Tả Khóa Học</label>
                                <textarea name="c_description" id="" cols="30" rows="10" class="form-control">{{ old('c_description') }}</textarea>
                                <span class="text-danger">{{ !empty($errors->first('c_description')) ? $errors->first('c_description') : '' }}</span>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('course-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Khóa Học
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@section('addScript')
    <script type="text/javascript">
        $('#onChangeCateGroup').change(function () {
            var _token = $('input[name="_token"]').val();
            var id = $('#onChangeCateGroup').val();
            $.ajax({
                url: "{{route('changeCate')}}",
                data: {id: id ,_token:_token},
                dataType: "json",
                type: "POST",
                success: function (data) {
                    if(data.success == true){
                        $('#changeCate').html(data.html);
                    }else{
                        alert('Lỗi !!!')
                    }

                }
            });
        });
    </script>
@stop
@stop
