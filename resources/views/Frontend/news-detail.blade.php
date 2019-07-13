@extends('Frontend.Layouts.main')

@section('title')
    Chi tiết bài viết
@stop
@section('addStylesheet')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/Frontend/product-detail.css') }}">
@stop
@section('content')
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="col-md-12 a-left">
            <div class="breadcrumb-container">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </li>

                    <li><strong><span itemprop="title"></span>{{$course->c_title}}</strong>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </li>
                    <li><strong class="text-danger"><span itemprop="title"></span>{{$getNewsFind->news_name}}</strong></li>

                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="col-md-12 container news-detail">
            <div class="col-md-12">
                <img src="{{url('/')}}{{$getNewsFind->new_image}}" alt="">
            </div>
            <div class="col-md-12 title-news">
                <h1>{{$getNewsFind->news_name}}</h1>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="col-md-4">
                        <b><i class="fas fa-users"></i> Học viên : {{$countCustomersPayment}}</b>
                    </div>
                    <div class="col-md-4">
                        <b class="author-news"><i class="fas fa-marker"></i> Tác giả : <a href="{{route('profileAuthor',['id'=>$getNewsFind->idUser,'slug_user'=>$getNewsFind->slug_user])}}">{{$getNewsFind->full_name}}</a></b>
                    </div>
                    <div class="col-md-4">
                        <b class="type_cate"><i class="fas fa-book-open"></i> Thể loại : <a href="{{route('courses-cate-list',['slug_cate_group'=>$getNewsFind->slug_cate_group,'slug_cate'=>$getNewsFind->slug_cate])}}">{{$getNewsFind->cate_name}}</a></b>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-12 content-detail-news">
                <h1 class="text-success">NỘI DUNG BÀI HỌC </h1>
                <div class="col-md-9">
                    @if(!empty($getNewsFind->video_news))
                        <video controls autoplay style="width:100%">
                            <source src="{{url('/')}}{{$getNewsFind->video_news}}" type="video/mp4">
                        </video>
                    @endif
                    {!! $getNewsFind->content !!}
                </div>
                <div class="col-md-3" id="fixed-scroll">
                    <h4 class="text-danger">Danh sách bài viết</h4>
                    <?php $n = 1 ?>
                    @foreach($listNewsInCourse as $list)
                    <div class="news-in-course @if($list->id == $getNewsFind->id) active @endif">
                           <p><b>{{$n++}}</b>  <a href="{{route('news-in-course',['id'=>$list->id,'slug_news'=>$list->slug_news])}}">{{$list->news_name}}</a></p>
                    </div>
                    @endforeach
                    <div class="images-banner">
                        <img src="{{url('/')}}{{$Banner->images}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(!empty($listCourseOrders))
        <section class="course-list col-md-12">
            <h4 class="title-course">CÁC KHÓA HỌC LIÊN QUAN</h4>
            <div class="col-md-12 slick-course">
                <div class="item-course">
                    @foreach($listCourseOrders as $listCountOrders)
                        <div class="item product-item-new">
                            <span class="sale-course">@if(!empty($listCountOrders->c_hot) == 1 ) News @elseif( !empty($listCountOrders->c_hot) == 2) Sales @else @endif </span>
                            <a href="" class="img-course"><img src="{{url('/')}}{{$listCountOrders->c_images}}"></a>
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
                            <a href="{{route('product-detail',['id'=>$listCountOrders->id,'slug_course'=> $listCountOrders->slug_course])}}" class="item-title"><h4>{!! $listCountOrders->c_title !!}</h4></a>
                            <div class="comments">
                                <div class="thumb-company">
                                    <a href="{{route('profileAuthor',['id'=>$listCountOrders->user_id,'slug_user'=>$listCountOrders->slug_user])}}">
                                        <img src="{{url('/')}}{{$listCountOrders->avatar}}" alt="" class="img-fluid object-fit-cover">
                                    </a>
                                </div>
                                <div class="author"><span>{!! $listCountOrders->full_name !!}</span></div>

                            </div>
                            <p class="price-course text-center">
                                <span class="price-old">@if(!empty($listCountOrders->c_price_sale)){{number_format($listCountOrders->c_price_sale)}} vnđ @endif</span>
                                <span class="price-news">{{number_format($listCountOrders->c_price)}} vnđ</span>
                            </p>
                            <div class="action-cart">
                                <form action="{{ route('addToCart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $listCountOrders->id }}">
                                    <input type="hidden" name="title" value="{{ $listCountOrders->c_title }}">
                                    <input type="hidden" name="image" value="{{ $listCountOrders->c_images }}">
                                    <input type="hidden" name="price" value="{{ $listCountOrders->c_price }}">
                                    <input type="hidden" name="price_sale" value="{{ $listCountOrders->c_price_sale }}">
                                    <div class="action-cart">
                                        <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$listCountOrders->id,'slug_course'=> $listCountOrders->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Chọn khóa học</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
    @endif
@stop