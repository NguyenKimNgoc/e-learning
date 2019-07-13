@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Khóa Học
@stop
@section('addStylesheet')
    <link rel="stylesheet" href="{{url('css/Backend/courses.css')}}">
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thông Tin Khóa Học
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thông Tin Khóa Học</li>
            </ol>
        </section>
        <!-- /.content-wrapper -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-12 background-course">
                                @if($showCourse->c_images == null)
                                    <img src="{{url('/images/course/thumbnail.png')}}" alt="">
                                @else
                                    <img src="{{url('/')}}{{$showCourse->c_images}}" alt="">
                                @endif
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="course-title">{{$showCourse->c_title}}</h2>
                            </div>
                            <div class="col-md-12 infomation">
                                <h3 class="title-infomation">Thông Tin Chi Tiết</h3>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Tên Khóa Học:</th>
                                            <td>{{$showCourse->c_title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Giá Khóa Học:</th>
                                            <td>{{$showCourse->c_price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày Đăng:</th>
                                            <td>{{date('d-m-Y',strtotime($showCourse->created_at))}}</td>
                                        </tr>
                                        <tr>
                                            <th>Lĩnh Vực:</th>
                                            <td><button class="btn btn-xs btn-primary">{{$showCourse->type_course}}</button></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Giá Sales:</th>
                                            <td>{{$showCourse->c_price_sale}}</td>
                                        </tr>
                                        <tr>
                                            <th>Trạng Thái:</th>
                                            <td>
                                                @if($showCourse->c_hot ==1 )
                                                    <button class="btn btn-xs btn-danger">News</button>
                                                @elseif($showCourse->c_hot == 2)
                                                    <button class="btn btn-xs btn-primary">Sales</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mô tả về khóa học:</th>
                                            <td>{{$showCourse->c_description}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($showNewsInCourse)>0)
                    <div class="box box-info collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Danh sách các bài viết thuộc khóa học <b>({{count($showNewsInCourse)}})</b></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>Mã bài viết</th>
                                        <th>Tên bài viết</th>
                                        <th>Trạng thái</th>
                                        <th>Kiểm duyệt</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($showNewsInCourse as $news)
                                    <tr>
                                        <td>NEWS-{{$news->id}}</td>
                                        <td><a href="{{route('news-show',['id'=>$news->id,'slug_news'=>$news->slug_news])}}">{{$news->news_name}}</a></td>
                                        <td>
                                            @if($news->status == 1)
                                                <span class="label label-success">Hiện Thị</span>
                                            @elseif($news->status == 0)
                                                <span class="label label-warning">Ẩn</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($news->status_news == 1)
                                                <span class="label label-success">Đã duyệt</span>
                                            @elseif($news->status_news == 0)
                                                <span class="label label-warning">Chờ duyệt</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('news-show',['id'=>$news->id,'slug_news'=>$news->slug_news])}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                            @if(Auth::user()->id == $news->author_id)
                                            <a href="{{route('news-edit',['id'=>$news->id,'slug_news'=>$news->slug_news])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteRow('/admin/news/delete/{{ $news->id }}', '.list-news', '/admin/news')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </div>
                    @endif

                </div>
            </div>
        </section>
    </div>

@stop