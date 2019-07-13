@extends('Frontend.Layouts.main')

@section('title')
    Tin Tức
@stop
@section('addStylesheet')
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/Frontend/blog.css') }}">
@stop
@section('content')
    <!-- Slider banner -->
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <div class="breadcrumb-container">
                        <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="home">
                                <a itemprop="url" href="{{route('trang-chu')}}" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li class="home">
                                <a itemprop="url" href="{{route('blog')}}" title="Tin tức"><span itemprop="title">Tin Tức</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li><strong><span itemprop="title">{{$detailBlog->blog_title}}</span></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-1 banner-left">

    </div>
    <div class="list-news col-md-10">
        <div class="news-item">
            <a href="{{route('blog-detail',['id'=>$detailBlog->id,'slug_blog'=>$detailBlog->slug_blog])}}" class="news-thumb" style="height: 400px !important;">
                <img src="{{url('/')}}{{$detailBlog->images_blog}}" alt="" class="img-fluid object-fit-cover" >
            </a>
            <p>
                @foreach($listBlogTag as $detailBlogTags)
                    @if($detailBlogTags->blog_id == $detailBlog->id)
                        <button class="btn btn-xs btn-primary">{{$detailBlogTags->tag_name}}</button>
                    @endif
                @endforeach
            </p>
            <h3 class="news-title font-weight-bold text-danger" style="font-weight: bold">
                {!! $detailBlog->blog_title !!}
            </h3>
            <div class="name-author">
                <div class="news-company">
                    <div class="thumb-company">
                        <a href="{{route('profileAuthor',['id'=>$detailBlog->user_id,'slug_user'=>$detailBlog->slug_user])}}">
                            <img src="{{url('/')}}{{$detailBlog->avatar}}" alt="" class="img-fluid object-fit-cover">
                        </a>
                    </div>
                    <div class="content-company">
                        <a href="{{route('profileAuthor',['id'=>$detailBlog->user_id,'slug_user'=>$detailBlog->slug_user])}}" class="font-weight-bold">{{$detailBlog->full_name}}</a>
                        <span>{{$detailBlog->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
            <p>{!! $detailBlog->content_blog !!}</p>
        </div>
    </div>
    <div class="col-md-1">

    </div>
    <section class="course-list col-md-12">
        <h4 class="title-course">CÁC KHÓA HỌC ƯU THÍCH NHẤT</h4>
        @include('Frontend/Layouts/course-list')
    </section>
@stop