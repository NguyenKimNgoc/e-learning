@extends('Frontend.Layouts.main')

@section('title')
    Trang Chủ
@stop

@section('content')
@include('Frontend/Layouts/option-flash')
<section class="overview container-fluid home-page">
    <div class="overview-text">
        <div class="learing-text text-center">
            <h2>TỔNG QUAN VỀ E - LEARNING</h2>
        </div>
        <div class="col-md-1"></div>
        <div class="learing-item col-md-10">
            <div class="col-md-3">
                <div class="option-icon"> <i class="fa fa-calendar-check"></i> </div>
                <div class="option-title"> 10 </div>
                <div class="option-description"> năm hình thành và phát triển </div>
            </div>
            <div class="col-md-3">
                <div class="option-icon"> <i class="fa fa-graduation-cap"></i> </div>
                <div class="option-title"> 100% </div>
                <div class="option-description"> giảng viên tốt nghiệp đại học
                </div>
            </div>
            <div class="col-md-3">
                <div class="option-icon"> <i class="fa fa-users"></i> </div>
                <div class="option-title"> 300K+ </div>
                <div class="option-description"> học viên đã lựa chọn e - learning </div>
            </div>
            <div class="col-md-3">
                <div class="option-icon"> <i class="fa fa-trophy"></i> </div>
                <div class="option-title"> 98% </div>
                <div class="option-description"> đạt điểm đầu ra kì vọng </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<section class="news col-md-3">
        @include('Frontend/Layouts/menu-left')
</section>
<section class="product-new">
    <div class="title col-md-6">
           <a href="{{route('course-list-news')}}" class="title-course">CÁC KHÓA HỌC MỚI NHẤT</a>
    </div>
    <div class="product-list-new col-md-9">
        @foreach($listCourseNew as $courseNews)
        <div class="col-md-4 product-item-new">
            <div class="item">
                <span class="sale-course">news</span>
             <a href="" class="img-course"><img src="{{url('/')}}{{$courseNews->c_images}}"></a>
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
             <a href="{{route('product-detail',['id'=>$courseNews->id,'slug_course'=> $courseNews->slug_course])}}" class="item-title"><h4>@if(strlen($courseNews->c_title) >= 70){!!substr($courseNews->c_title,0,70) !!}... @else {!! $courseNews->c_title  !!}@endif</h4></a>
             <div class="comments">
                    <div class="thumb-company">
                        <a href="{{route('profileAuthor',['id'=>$courseNews->user_id,'slug_user'=>$courseNews->slug_user])}}">
                            <img src="{{url('/')}}{{$courseNews->avatar}}" alt="" class="img-fluid object-fit-cover">
                        </a>
                    </div>
                   <div class="author"><span>{!! $courseNews->full_name !!}</span></div>
                   
                </div>
                <p class="price-course text-center">
                    <span class="price-old">@if(!empty($courseNews->c_price_sale)){{number_format($courseNews->c_price_sale)}} vnđ @endif</span>
                    <span class="price-news">{{number_format($courseNews->c_price)}} vnđ</span>
                </p>
                <form action="{{ route('addToCart') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $courseNews->id }}">
                    <input type="hidden" name="title" value="{{ $courseNews->c_title }}">
                    <input type="hidden" name="image" value="{{ $courseNews->c_images }}">
                    <input type="hidden" name="price" value="{{ $courseNews->c_price }}">
                    <input type="hidden" name="price_sale" value="{{ $courseNews->c_price_sale }}">
                    <div class="action-cart">
                        <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$courseNews->id,'slug_course'=> $courseNews->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-shopping-cart"></i> Chọn khóa học
                        </button>

                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section class="product-new">
    <div class="title col-md-6">
           <a href="{{route('course-list-sales')}}" class="title-course">CÁC KHÓA HỌC SALE</a>
    </div>
    <div class="product-list-new col-md-9">
        @foreach($listCourseSale as $courseSale)
        <div class="col-md-4 product-item-new">
            <div class="item">
                <span class="sale-course">{{\App\Helpers\Helpers::sales($courseSale->c_price,$courseSale->c_price_sale)}}%</span>
             <a href="" class="img-course">
                 @if(empty($courseSale->c_images))
                     <img src="{{url('/images/course/thumbnail.png')}}">
                 @else
                 <img src="{{url('/')}}{{$courseSale->c_images}}">
                 @endif
             </a>
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
             <a href="{{route('product-detail',['id'=>$courseSale->id,'slug_course'=> $courseSale->slug_course])}}" class="item-title"><h4>@if(strlen($courseSale->c_title) >= 70){!!substr($courseSale->c_title,0,70) !!}... @else {!! $courseSale->c_title  !!}@endif</h4></a>
             <div class="comments">
                    <div class="thumb-company">
                        <a href="{{route('profileAuthor',['id'=>$courseSale->user_id,'slug_user'=>$courseSale->slug_user])}}">
                            <img src="{{url('/')}}{{$courseSale->avatar}}" alt="" class="img-fluid object-fit-cover">
                        </a>
                    </div>
                   <div class="author"><span>{{$courseSale->full_name}}</span></div>
                   
                </div>
                <p class="price-course"><span class="price-old">{{number_format($courseSale->c_price)}} vnđ</span> <span class="price-news"> {{number_format($courseSale->c_price_sale)}} vnđ</span></p>
                <form action="{{ route('addToCart') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $courseSale->id }}">
                    <input type="hidden" name="title" value="{{ $courseSale->c_title }}">
                    <input type="hidden" name="image" value="{{ $courseSale->c_images }}">
                    <input type="hidden" name="price" value="{{ $courseSale->c_price }}">
                    <input type="hidden" name="price_sale" value="{{ $courseSale->c_price_sale }}">
                    <div class="action-cart">
                        <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$courseSale->id,'slug_course'=> $courseSale->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Chọn khóa học</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</section>
<section class="product-new">
    <div class="title col-md-6">
           <a href="{{route('course-list-all')}}"  class="title-course">CÁC KHÓA HỌC</a>
    </div>
        <div class="product-list-new col-md-9">
            @foreach($listCourse as $courses)
            <div class="col-md-4 product-item-new">
                <div class="item">
                    <span class="sale-course">@if($courses->c_hot == 2){{\App\Helpers\Helpers::sales($courses->c_price,$courses->c_price_sale)}}% @else News @endif</span>
                    <a href="" class="img-course">
                        @if(empty($courses->c_images))
                            <img src="{{url('/images/course/thumbnail.png')}}">
                        @else
                            <img src="{{url('/')}}{{$courses->c_images}}">
                        @endif
                    </a>
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
                    <a href="{{route('product-detail',['id'=>$courses->id,'slug_course'=> $courses->slug_course])}}" class="item-title"><h4>@if(strlen($courses->c_title) >= 70){!!substr($courses->c_title,0,70) !!}... @else {!! $courses->c_title  !!}@endif</h4></a>
                    <div class="comments">
                        <div class="thumb-company">
                            <a href="{{route('profileAuthor',['id'=>$courses->user_id,'slug_user'=>$courses->slug_user])}}">
                                <img src="{{url('/')}}{{$courses->avatar}}" alt="" class="img-fluid object-fit-cover">
                            </a>
                        </div>
                        <div class="author"><span>{{$courses->full_name}}</span></div>

                    </div>
                    <p class="price-course"><span class="price-old">{{number_format($courses->c_price)}} vnđ</span> <span class="price-news"> {{number_format($courses->c_price_sale)}} vnđ</span></p>
                    <form action="{{ route('addToCart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $courses->id }}">
                        <input type="hidden" name="title" value="{{ $courses->c_title }}">
                        <input type="hidden" name="image" value="{{ $courses->c_images }}">
                        <input type="hidden" name="price" value="{{ $courses->c_price }}">
                        <input type="hidden" name="price_sale" value="{{ $courses->c_price_sale }}">
                        <div class="action-cart">
                            <a class=" btn btn-primary" href="{{route('product-detail',['id'=>$courses->id,'slug_course'=> $courses->slug_course])}}"><i class="fa fa-eye"></i>Xem chi tiết</a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Chọn khóa học</button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

</section>
<section class="course-list col-md-12">
    <h4 class="title-course">CÁC KHÓA HỌC ĐƯỢC ƯU THÍCH NHẤT</h4>
    @include('Frontend/Layouts/course-list')
</section>
@include('Frontend/Layouts/registerMail')
@stop