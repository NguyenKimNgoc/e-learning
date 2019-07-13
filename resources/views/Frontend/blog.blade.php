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
                        
                        <li><strong><span itemprop="title">Tin Tức</span></strong></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-md-3 banner-left">
     @include('Frontend/Layouts/menu-left')
</div>
 <div class="list-news col-sm-6">
     @if(count($listBlog) > 0)
         @foreach($listBlog as $blog)
            <div class="news-item">
                <div class="name-author">
                    <div class="news-company">
                        <div class="thumb-company">
                            <a href="{{route('profileAuthor',['id'=>$blog->user_id,'slug_user'=>$blog->slug_user])}}">
                                <img src="{{url('/')}}{{$blog->avatar}}" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="content-company">
                            <a href="{{route('profileAuthor',['id'=>$blog->user_id,'slug_user'=>$blog->slug_user])}}" class="font-weight-bold">{{$blog->full_name}}</a>
                            <span>{{$blog->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <a href="{{route('blog-detail',['id'=>$blog->id,'slug_blog'=>$blog->slug_blog])}}" class="news-thumb">
                    <img src="{{url('/')}}{{$blog->images_blog}}" alt="" class="img-fluid object-fit-cover">
                </a>
                <p>
                    @foreach($listBlogTag as $blogTags)
                        @if($blogTags->blog_id == $blog->id)
                            <button class="btn btn-xs btn-primary">{{$blogTags->tag_name}}</button>
                        @endif
                    @endforeach
                </p>
                <h4 class="news-title font-weight-bold">
                    <a href="{{route('blog-detail',['id'=>$blog->id,'slug_blog'=>$blog->slug_blog])}}">{!! $blog->blog_title !!}</a>
                </h4>
                <p>{!! $blog->sub_title !!}...
                    <a href="{{route('blog-detail',['id'=>$blog->id,'slug_blog'=>$blog->slug_blog])}}" class="view-more">Xem
                        thêm
                    </a>
                </p>
                <div class="react-action">
                    <a href="" class="col-sm-4">
                       <i class="fa fa-thumbs-up" aria-hidden="true"></i> Thích (120)
                    </a>
                    <a href="" class="col-sm-4">
                        <p><i class="fa fa-comment" aria-hidden="true"></i> Bình Luận (22)</p>
                    </a>
                    <a href="" class="col-sm-4">
                        <p><i class="fa fa-share"></i> Chia sẻ (12)</p>
                    </a>
                </div>
                 <div class="comments">
                        <div class="thumb-company">
                            <a href="https://timcongsu.vn/companies/next-tech-339">
                                <img src="https://timcongsu.vn/upload/user_339/logo/fNWNKuifFbIS4.png" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="text-comment"><a href="">Ngoc Nguyen</a> Bài viết hay</div>

                    </div>
                    <div class="comments">
                        <div class="thumb-company">
                            <a href="https://timcongsu.vn/companies/next-tech-339">
                                <img src="https://timcongsu.vn/upload/user_339/logo/fNWNKuifFbIS4.png" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="text-comment"><a href="">Ngoc Nguyen</a> Mình mắc lỗi bạn có thể giúp mình không</div>

                    </div>
                    <div class="comments">
                        <div class="thumb-company">
                            <a href="https://timcongsu.vn/companies/next-tech-339">
                                <img src="https://timcongsu.vn/upload/user_339/logo/fNWNKuifFbIS4.png" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="text-comment"><a href="">Ngoc Nguyen</a> Very Good</div>

                    </div>
                    <div class="form-comment">
                        <div class="thumb-company">
                            <a href="https://timcongsu.vn/companies/next-tech-339">
                                <img src="https://timcongsu.vn/upload/user_339/logo/fNWNKuifFbIS4.png" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="content-comment">
                            <form action="" method="POST" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Viết bình luận...">
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
         @endforeach
     @else
         <h4 class="text-danger">Hiện không có bài viết nào</h4>
     @endif
    </div>
    @include('Frontend/Layouts/right-sidebar')
<section class="course-list col-md-12">
    <h4 class="title-course">CÁC KHÓA HỌC ƯU THÍCH NHẤT</h4>
    @include('Frontend/Layouts/course-list')
</section>
@stop