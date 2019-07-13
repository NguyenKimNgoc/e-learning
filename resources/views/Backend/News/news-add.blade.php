@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Bài Viết
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Bài Viết
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thêm Bài Viết </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Bài Viết  </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('news-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('news_name')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Tên Bài Viết</label>
                                <input type="text" class="form-control" name="news_name"
                                       value="{!! old('news_name') !!}"
                                       @if($errors->has('new_image')) autofocus
                                       @elseif($errors->has('content'))
                                       @elseif($errors->has('tag_id'))
                                       @elseif($errors->has('cate_id'))
                                       @elseif($errors->has('cate_group_id'))
                                       @elseif($errors->has('course_id'))
                                       @endif
                                       id="exampleInputFullname" placeholder="Nhập Tên Bài Viết...">
                                <span class="text-danger">{{ !empty($errors->first('news_name')) ? $errors->first('news_name') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('major_id')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Chuyên Ngành</label>
                                <select name="cate_id" id="onChangeCate" class="form-control select-major"
                                        @if($errors->has('cate_id')) autofocus @endif  multiple="multiple">
                                    @foreach($listCate as $cate)
                                    <option value="{{$cate->id}}" {{$cate->id == old('cate_id' ? "selected" : "")}}>{{$cate->cate_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('cate_id')) ? $errors->first('cate_id') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('new_image')) ? 'has-warring' : '' }}">
                                <label for="">Hình Ảnh Bài Viết</label>
                                <input type="file" class="form-control"  onchange='openFile(event)' name="new_image"
                                       @if($errors->has('new_image')) autofocus @endif value="{!! old('new_image') !!}"
                                       placeholder="Nhập hình ảnh...">
                                <img id="output" src="" style="margin-top: 15px" />
                                <span class="text-danger">{{ !empty($errors->first('new_image')) ? $errors->first('new_image') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group {{ !empty($errors->first('tagID[]')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Tags</label>
                                <select name="tagID[]" id="input" class="form-control select-tags"
                                        @if($errors->has('tagID')) autofocus @endif  multiple="multiple">
                                    @foreach($listTags as $tags)
                                    <option value="{{$tags->id}}" {{ $tags->id == old('tagID') ? "selected" : "" }}>{{$tags->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('tagID')) ? $errors->first('tagID') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('course_id')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Khóa Học</label>
                                <select name="course_id" id="onChangeCourse" class="form-control select-course"
                                        @if($errors->has('course_id')) autofocus @endif  multiple="multiple">
                                    @foreach($listCourse as $courses)
                                    <option value="{{$courses->id}}" {{$courses->id == old('course_id') ? 'selected' : ''}}>{{$courses->c_title}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('course_id')) ? $errors->first('course_id') : '' }}</span>
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
                            <div class="form-group {{ !empty($errors->first('video_news')) ? 'has-warring' : '' }}">
                                <label for="">Video Bài Viết</label>
                                <input type="file" class="form-control"  onchange='openFileVideos(event)' name="video_news"
                                       @if($errors->has('video_news')) autofocus @endif value="{!! old('video_news') !!}"
                                       placeholder="Nhập video...">
                                <span class="text-danger">{{ !empty($errors->first('video_news')) ? $errors->first('video_news') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{ !empty($errors->first('content_news')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Nội Dung</label>
                                <textarea id="editor1" name="content_news" rows="10" cols="80" placeholder="Nhập nội dung..."></textarea>
                                <span class="text-danger">{{ !empty($errors->first('content_news')) ? $errors->first('content_news') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('news-list')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Bài Viết
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    @section('addScript')
        <script type="text/javascript">
            // js change district
            $('#onChangeCate').change(function () {
                var _token = $('input[name="_token"]').val();
                var id = $('#onChangeCate').val();
                $.ajax({
                    url: "{{route('onChangeCourseNews')}}",
                    data: {id: id ,_token:_token},
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        if(data.success == true){
                            $('#onChangeCourse').html(data.html);
                        }else{
                            alert('Lỗi !!!')
                        }

                    }
                });
            });
        </script>
    @stop
@stop

