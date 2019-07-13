@extends('Frontend.Layouts.main')

@section('title')
    Tác Giả
@stop
@section('addStylesheet')
    <link rel="stylesheet" type="text/css" href="{{ url('css/Frontend/profile-customer.css') }}">
@stop
@section('content')
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container ">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <div class="breadcrumb-container">
                        <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="home">
                                <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li><strong>Tác Giả</strong>  <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><strong><span itemprop="title">{{$getProfile->full_name}}</span></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container profile-customer">
        @if (session('success'))
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('success')}}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('error')}}
            </div>
        @endif
        <div class="col-md-5">
            <div class="img-customer">
                @if(empty($getProfile->avatar))
                    <img src="{{url('/images/course/thumbnail.png')}}" alt="" class="img-responsive img-circle">
                @else
                    <img src="{{url('/')}}{{$getProfile->avatar}}" alt="" class="img-responsive img-circle">
                @endif
            </div>
        </div>
        <div class="col-md-7">
            <div class="detail-customer">
                <h1 class="name-customer">{{$getProfile->full_name}}</h1>
                <p><i class="fas fa-map-marker-alt"></i> {{$getProfile->address}}</p>
                <p>{!! $getProfile->description!!}</p>
            </div>
        </div>
    </div>
    <div class="container course-list-author product-list-new">
        <div class="row">
            <div class="title col-md-12">
                <h4 class="title-course"><i class="fas fa-book"></i> CÁC KHÓA HỌC </h4>
            </div>
            @foreach($cousesForAuthor as $courseAuthor)
                <div class="col-md-3 product-item-new">
                    <div class="item">
                        <span class="sale-course">@if($courseAuthor->c_hot == 2){{\App\Helpers\Helpers::sales($courseAuthor->c_price,$courseAuthor->c_price_sale)}}% @else News @endif</span>
                        <a href="" class="img-course">
                            @if(empty($courseAuthor->c_images))
                                <img src="{{url('/images/course/thumbnail.png')}}">
                            @else
                                <img src="{{url('/')}}{{$courseAuthor->c_images}}">
                            @endif</a>
                        <div class="star-rating">
                            <div class="back-stars">
                                <i aria-hidden="true" class="fa fa-star"></i>
                                <i aria-hidden="true" class="fa fa-star"></i>
                                <i aria-hidden="true" class="fa fa-star"></i>
                                <i aria-hidden="true" class="fa fa-star"></i>
                                <i aria-hidden="true" class="fa fa-star"></i>
                            </div>
                            <b style="padding-left:5px; padding-right:5px;">5.0</b>
                            (3)
                        </div>
                        <a href="" class="item-title"><h4>@if(strlen($courseAuthor->c_title) >= 70){!!substr($courseAuthor->c_title,0,70) !!}... @else {!! $courseAuthor->c_title  !!}@endif</h4></a>
                        <div class="comments">
                            <div class="thumb-company">
                                <a href="#">
                                    <img src="{{url('/')}}{{$courseAuthor->avatar}}" alt="" class="img-fluid object-fit-cover">
                                </a>
                            </div>
                            <div class="author"><span>{!! $courseAuthor->full_name !!}</span></div>

                        </div>
                        <p class="price-course text-center">
                            <span class="price-old">@if(!empty($courseAuthor->c_price_sale)){{number_format($courseAuthor->c_price_sale)}} vnđ @endif</span>
                            <span class="price-news">{{number_format($courseAuthor->c_price)}} vnđ</span>
                        </p>
                        <div class="action-cart">
                            <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$courseAuthor->id,'slug_course'=> $courseAuthor->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                            <a class="btn btn-danger" href=""><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12 text-right" >
                {!! $cousesForAuthor->links() !!}
            </div>
        </div>

    </div>
@stop