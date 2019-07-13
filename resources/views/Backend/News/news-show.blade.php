@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Bài Viết
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
                Thông Tin Bài Viết
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thông Tin Bài Viết</li>
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
                                @if(empty($getShowNews->c_images))
                                    <img src="{{url('/images/course/thumbnail.png')}}" alt="">
                                @else
                                    <img src="{{url('/')}}{{$getShowNews->new_image}}" alt="">
                                @endif
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="course-title">{{$getShowNews->news_name}}</h2>
                            </div>
                            <div class="col-md-12 infomation">
                                <h3 class="title-infomation">Thông Tin Chi Tiết</h3>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th   width="25%">Tên Bài Viết:</th>
                                            <td>{{$getShowNews->news_name}}</td>
                                        </tr>
                                        <tr>
                                            <th   width="25%">Tên Tác Giả:</th>
                                            <td><a href="{{route('user-show',['id'=>$getShowNews->author_id,'slug_user'=>$getShowNews->slug_user])}}">{{$getShowNews->full_name}}</a></td>
                                        </tr>
                                        <tr>
                                            <th   width="25%">Ngày Đăng:</th>
                                            <td>{{date('d-m-Y',strtotime($getShowNews->created_at))}}</td>
                                        </tr>
                                        <tr>
                                            <th  width="25%">Thuộc Khóa Học:</th>
                                            <td>{{$getShowNews->c_title}}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th  width="25%">Lĩnh Vực:</th>
                                            <td><button class="btn btn-xs btn-primary">{{$getShowNews->cateGroupName}}</button></td>
                                        </tr>
                                        <tr>
                                            <th  width="25%">Chuyên Ngành:</th>
                                            <td><button class="btn btn-xs btn-warning">{{$getShowNews->cate_name}}</button></td>
                                        </tr>
                                        <tr>
                                            <th  width="25%">Tags:</th>
                                            <td>
                                                @foreach($listTags as $tags)
                                                <button class="btn btn-xs btn-success">{{$tags->tag_name}}</button>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th  width="25%">Trạng Thái:</th>
                                            <td>
                                                @if($getShowNews->status_news ==0 )
                                                    <button class="btn btn-xs btn-primary">Hiện Thị</button>
                                                @elseif($getShowNews->status_news == 1)
                                                    <button class="btn btn-xs btn-danger">Ẩn</button>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <table class="table-hover table">
                                        <tr>
                                            <th width="15%">Nội dung bài viết:</th>
                                            <td>{!! $getShowNews->content !!}</td>
                                        </tr>
                                    </table>
                                </div>
                                @if(!empty($getShowNews->video_news))
                                <div class="col-md-12">
                                    <table class="table-hover table">
                                        <tr>
                                            <th width="15%">Video Bài Viết:</th>
                                            <td>
                                                <video controls width="100%" >
                                                    <source src="{{url('/')}}{!! $getShowNews->video_news !!}">
                                                </video>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop