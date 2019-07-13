@extends('Frontend.Layouts.main')

@section('title')
    Các khóa học
@stop
@section('addStylesheet')

@stop
@section('content')
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <div class="breadcrumb-container">
                        <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="home">
                                <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>

                            <li><strong><span itemprop="title">{{$cate_group->name}}</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="col-md-3">
        @include('Frontend/Layouts/menu-left')
    </section>
    <section class="product-new">
        <div class="product-list-new col-md-9">
            @if(!empty($listCourseByCateGroup) == null)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Không có khóa học nào !!!
                </div>
            @endif
            @foreach($listCourseByCateGroup as $courseByCateGroup)
                <div class="col-md-4 product-item-new">
                    <div class="item">
                        <span class="sale-course">@if($courseByCateGroup->c_hot == 2){{\App\Helpers\Helpers::sales($courseByCateGroup->c_price,$courseByCateGroup->c_price_sale)}}% @else News @endif</span>
                        <a href="" class="img-course"><img src="{{url('/')}}{{$courseByCateGroup->c_images}}"></a>
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
                        <a href="{{route('product-detail',['id'=>$courseByCateGroup->id,'slug_course'=> $courseByCateGroup->slug_course])}}" class="item-title"><h4>@if(strlen($courseByCateGroup->c_title) >= 70){!!substr($courseByCateGroup->c_title,0,70) !!}... @else {!! $courseByCateGroup->c_title  !!}@endif</h4></a>
                        <div class="comments">
                            <div class="thumb-company">
                                <a href="{{route('profileAuthor',['id'=>$courseByCateGroup->user_id,'slug_user'=>$courseByCateGroup->slug_user])}}">
                                    <img src="{{url('/')}}{{$courseByCateGroup->avatar}}" alt="" class="img-fluid object-fit-cover">
                                </a>
                            </div>
                            <div class="author"><span>{!! $courseByCateGroup->full_name !!}</span></div>

                        </div>
                        <p class="price-course text-center">
                            <span class="price-old">@if(!empty($courseByCateGroup->c_price_sale)){{number_format($courseByCateGroup->c_price_sale)}} vnđ @endif</span>
                            <span class="price-news">{{number_format($courseByCateGroup->c_price)}} vnđ</span>
                        </p>
                        <form action="{{ route('addToCart') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $courseByCateGroup->id }}">
                            <input type="hidden" name="title" value="{{ $courseByCateGroup->c_title }}">
                            <input type="hidden" name="image" value="{{ $courseByCateGroup->c_images }}">
                            <input type="hidden" name="price" value="{{ $courseByCateGroup->c_price }}">
                            <input type="hidden" name="price_sale" value="{{ $courseByCateGroup->c_price_sale }}">
                            <div class="action-cart">
                                <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$courseByCateGroup->id,'slug_course'=> $courseByCateGroup->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Chọn khóa học</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
                <div class="col-md-12">
                    <div class="text-right">
                        {!! $listCourseByCateGroup->links() !!}
                    </div>
                </div>
        </div>
    </section>

    <section class="course-list col-md-12">
        <h4 class="title-course">CÁC KHÓA HỌC LIÊN QUAN</h4>
        @include('Frontend/Layouts/course-list')
    </section>
@stop