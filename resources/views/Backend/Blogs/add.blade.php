@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Tin Tức
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Tin Tức
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thêm Tin Tức </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Tin Tức </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('blog-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('blog_title')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Tên Tin Tức</label>
                                <input type="text" class="form-control" name="blog_title"
                                       value="{!! old('blog_title') !!}"
                                       @if($errors->has('sub_title')) autofocus
                                       @elseif($errors->has('content_blog'))
                                       @elseif($errors->has('images_blog'))
                                       @elseif($errors->has('cate_group_id'))
                                       @endif
                                       id="exampleInputFullname" placeholder="Nhập Tên Tin Tức...">
                                <span class="text-danger">{{ !empty($errors->first('blog_title')) ? $errors->first('blog_title') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('images_blog')) ? 'has-warring' : '' }}">
                                <label for="">Hình Ảnh Tin Tức</label>
                                <input type="file" class="form-control"  onchange='openFile(event)' name="images_blog"
                                       @if($errors->has('images_blog')) autofocus @endif value="{!! old('images_blog') !!}"
                                       placeholder="Nhập hình ảnh...">
                                <img id="output" src="" style="margin-top: 15px" />
                                <span class="text-danger">{{ !empty($errors->first('images_blog')) ? $errors->first('images_blog') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('sub_title')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Mô Tả Tin Tức</label>
                                <textarea name="sub_title" id="" cols="10" rows="5" class="form-control">{{old('sub_title')}}</textarea>
                                <span class="text-danger">{{ !empty($errors->first('sub_title')) ? $errors->first('sub_title') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('cate_group_id')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Lĩnh Vực</label>
                                <select name="cate_group_id" id="input" class="form-control select-industries"
                                        @if($errors->has('cate_group_id')) autofocus @endif  multiple="multiple">
                                    @foreach($listCateGroup as $cateGroup)
                                        <option value="{{$cateGroup->id}}" {{$cateGroup->id == old('cate_group_id') ? "selected" : ''}}>{{$cateGroup->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('cate_group_id')) ? $errors->first('cate_group_id') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('tagID')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Thẻ Tags</label>
                                <select name="tagID[]" id="input" class="form-control select-tags"
                                        @if($errors->has('tagID')) autofocus @endif  multiple="multiple">
                                    @foreach($listTags as $tags)
                                        <option value="{{$tags->id}}" {{$tags->id == old('tagID') ? "selected" : ''}}>{{$tags->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('tagID')) ? $errors->first('tagID') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{ !empty($errors->first('content_blog')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Nội Dung</label>
                                <textarea id="editor1" name="content_blog" rows="10" cols="80" placeholder="Nhập nội dung..."></textarea>
                                <span class="text-danger">{{ !empty($errors->first('content_blog')) ? $errors->first('content_blog') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('blog-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Tin Tức
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop
