@extends('Frontend.Layouts.main')

@section('title')
    Chi tiết sản phẩm 
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
                        
                      	 <li><strong><span itemprop="title">{{$getCourseDetail->type_course}}</span></strong>
                      	 	 <i class="fa fa-angle-right" aria-hidden="true"></i>
                      	 </li>
                         <li><strong><span itemprop="title">{{$getCourseDetail->c_title}}</span></strong></li>
                        
                    </ul>
                </div>
    </div>
</section>
<section class="producr-detail col-md-12">
	<div class="col-md-4 img-course">
        @if(empty($getCourseDetail->c_images))
            <img src="{{url('/images/course/thumbnail.png')}}">
        @else
            <img src="{{url('/')}}{{$getCourseDetail->c_images}}">
        @endif
	</div>
	<div class="col-md-4 info-detail">
		<h4 class="title-course-detail">{{$getCourseDetail->c_title}}</h4>
		<div class="author-detail">
			<p><b>Tác giả :</b> <a href="{{route('profileAuthor',['id'=>$getCourseDetail->user_id,'slug_user'=>$getCourseDetail->slug_user])}}">{{$getCourseDetail->full_name}}</a></p>
			<p class="category"><b> Thể loại : </b> <a href="{{route('courses',$getCourseDetail->slug_cate_group)}}">{{$getCourseDetail->type_course}}</a></p>
		</div>
		<div class="reviews_details_product">
			<b class="vote-star">
            	<i class="fas fa-star"></i>
            	<i class="fas fa-star"></i>
            	<i class="fas fa-star"></i>
            	<i class="fas fa-star"></i>
            	<i class="fas fa-star"></i>
	        </b>
		</div>
		<div class="price-course">
            <span class="price-old" style="float: left;padding-top:10px">@if(!empty($getCourseDetail->c_hot == 2 )){{number_format($getCourseDetail->c_price)}} vnđ </span> @endif
			@if($getCourseDetail->c_hot == 2)
			<p class="price" style="float: left;">{{number_format($getCourseDetail->c_price_sale)}} vnđ</p>
				@else
				<p class="price" style="float: left;">{{number_format($getCourseDetail->c_price)}} vnđ</p>
			@endif
		</div>
		<div class="action-cart-detail" style="width: 100%">
        <form action="{{ route('addToCart') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $getCourseDetail->id }}">
            <input type="hidden" name="title" value="{{ $getCourseDetail->c_title }}">
            <input type="hidden" name="image" value="{{ $getCourseDetail->c_images }}">
            <input type="hidden" name="price" value="{{ $getCourseDetail->c_price }}">
            <input type="hidden" name="price_sale" value="{{$getCourseDetail->c_price_sale }}">
			<button type="submit"  class="btn btn-warning add-to-cart" style="float: left;"><i class="fas fa-shopping-cart"></i> CHỌN KHÓA HỌC</button>
        </form>
		<form action="{{ route('paymentNow') }}" method="post">
			@csrf
			<input type="hidden" name="id" value="{{ $getCourseDetail->id }}">
			<input type="hidden" name="title" value="{{ $getCourseDetail->c_title }}">
			<input type="hidden" name="image" value="{{ $getCourseDetail->c_images }}">
			<input type="hidden" name="price" value="{{ $getCourseDetail->c_price }}">
			<input type="hidden" name="price_sale" value="{{$getCourseDetail->c_price_sale }}">
		<button class="btn btn-danger payment-now" style="float: left; margin-left: 10px;" @if(\Auth::guard('l_customers')->check() && count(\App\Helpers\Helpers::checkOrder($getCourseDetail->id)) > 0) data-toggle="tooltip" data-placement="top" title="Khóa học đã được mua rồi" @else type="submit" @endif>MUA NGAY</button>
		</form>
		</div>
			<div class="social-sharing col-md-12">
			<div class="social-media" data-permalink="https://halumart.bizwebvietnam.net/man-hinh-lg-24mp88hv-s-24inch-fullhd">
				<label>Chia sẻ: </label>
				
				<a target="_blank" href="//www.facebook.com/sharer.php?u=https://halumart.bizwebvietnam.net/man-hinh-lg-24mp88hv-s-24inch-fullhd" class="share-facebook" title="Chia sẻ lên Facebook">
					<i class="fab fa-facebook"></i>
				</a>

				<a target="_blank" href="//twitter.com/share?text=Màn hình LG 24MP88HV-S 24inch FullHD&amp;url=https://halumart.bizwebvietnam.net/man-hinh-lg-24mp88hv-s-24inch-fullhd" class="share-twitter" title="Chia sẻ lên Twitter">
					<i class="fab fa-twitter"></i>
				</a>

				<a target="_blank" href="//pinterest.com/pin/create/button/?url=https://halumart.bizwebvietnam.net/man-hinh-lg-24mp88hv-s-24inch-fullhd&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/318/207/products/f5f3ac20e04def435321cd85e4e72a.jpg?v=1530066752530&amp;description=Màn hình LG 24MP88HV-S 24inch FullHD" class="share-pinterest" title="Chia sẻ lên pinterest">
					<i class="fab fa-pinterest"></i>
				</a>
				<a target="_blank" href="//plus.google.com/share?url=https://halumart.bizwebvietnam.net/man-hinh-lg-24mp88hv-s-24inch-fullhd" class="share-google" title="+1">
					<i class="fab fa-google-plus"></i>
				</a>
			</div>
		</div>
</div>
	<div class="col-md-4 icon-right">
		<ul>
			<li>
				<p><img src="{{url('/images/icon/people.png')}}"></p> <b>Đội ngũ chuyên gia chất lượng</b>
			</li>
			<li>
				<p><img src="{{url('/images/icon/course.png')}}"></p> <b>Các khóa học mới nhất</b>
			</li>
			<li>
				<p><img src="{{url('/images/icon/srv_3.png')}}"></p> <b>Tiết kiệm thời gian</b>
			</li>
			<li>
				<p><img src="{{url('/images/icon/srv_4.png')}}"></p> <b>Tư vấn trực tiếp</b>
			</li>
		</ul>
	</div>
</section>
<section class="info-product-detail col-md-12">
	<div role="tabpanel">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active tab-link">
				<a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h3><i class="fas fa-info-circle"></i> THÔNG TIN KHÓA HỌC </h3></a>
			</li>
			<li role="presentation" class="tab-link">
				<a href="#comment" aria-controls="tab" role="tab" data-toggle="tab"> <h3><i class="fas fa-comment-alt"></i> BÌNH LUẬN</h3></a>
			</li>
			<li role="presentation" class="tab-link">
				<a href="#vote" aria-controls="tab" role="tab" data-toggle="tab"> <h3><i class="fas fa-star"></i> ĐÁNH GIÁ</h3></a>
			</li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">{!! $getCourseDetail->c_description !!}</div>
			<div role="tabpanel" class="tab-pane" id="comment">
				@foreach($listComment as $comment)
				<div class="item-comment">
					<div class="comments">
	                    <div class="thumb-company">
	                        <a href="{{route('profile',['id'=>$comment->id,'slug_customer'=>$comment->slug_customer])}}">
	                            <img src="{{url('/')}}{{$comment->avatar}}" alt="" class="img-fluid object-fit-cover">
	                        </a>
	                    </div>
	                    <div class="text-comment"><a href="{{route('profile',['id'=>$comment->id,'slug_customer'=>$comment->slug_customer])}}">{{$comment->full_name}}</a> {!! $comment->content !!}
							@if(\Auth::guard('l_customers')->check())
								@if($comment->id == \Illuminate\Support\Facades\Auth::guard('l_customers')->user()->id)
									<form action="{{route('hiddenComment',['id'=>$comment->comment_id])}}" style="float: right; margin-left: 15px" method="POST">
										@csrf
										<button  class=" btn btn-xs btn-danger"><i type="submit" class="far fa-trash-alt"></i></button>
									</form>
								@endif
							@endif
						</div>
                	</div>
				</div>
				@endforeach
				<form action="{{route('postCommentCourse')}}" method="POST" enctype="multipart/form-data" class="form-inline">
					@csrf
					<div class="form-group col-md-12">
						<input type="hidden" name="course_id" value="{{$getCourseDetail->id}}">
						<input type="text" class="form-control" style="width: 30% ;margin-top: 25px" name="comment" value="{{old('comment')}}" placeholder="Nhập bình luận....">
						<button type="submit" style="margin-top: 25px" class="btn btn-primary"><i class="far fa-paper-plane"></i></button>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane" id="vote">
				<div class="aciton-vote">
					<a href="" class="btn btn-success add-vote-product">Đánh Giá Khóa Học</a>
				</div>
					
				<div class="item-comment">
					<div class="comments">
	                    <div class="thumb-company">
	                        <a href="https://timcongsu.vn/companies/next-tech-339">
	                            <img src="https://timcongsu.vn/upload/user_339/logo/fNWNKuifFbIS4.png" alt="" class="img-fluid object-fit-cover">
	                        </a>
	                    </div>
	                    <div class="text-comment"><a href="">Ngoc Nguyen</a>  
	                    	<b class="vote-star">
		                    	<i class="fas fa-star"></i>
		                    	<i class="fas fa-star"></i>
		                    	<i class="fas fa-star"></i>
		                    	<i class="fas fa-star"></i>
		                    	<i class="fas fa-star"></i>
	                    	</b>
	                    </div>
                   
                	</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="content-course ">
	<h4 class="title-course">NỘI DUNG KHÓA HỌC</h4>
	@if(count($listNewsInCourse) > 0)
	<div class="col-md-12 container">
			<div>
				<h2>Thể Loại : <b class="text-danger">{{$getCourseDetail->type_course}}</b></h2>
			</div>
			<?php $n = 1; ?>
			@foreach($listNewsInCourse as $newInCourse)
				<div class="col-md-8 content-course-news">
					<div class="col-md-1">
						<h3 class="text-center">{{$n++}}</h3>
					</div>
					<div class="col-md-9">
						<h3><a @if(\Auth::guard('l_customers')->check()) @if(!empty($checkCourseInCustomer)) href="{{route('news-in-course',['id'=>$newInCourse->id,'slug_news'=>$newInCourse->slug_news])}}" @endif @endif>{{$newInCourse->news_name}}</a></h3>
					</div>
				</div>
			@endforeach


	</div>
	@else
		<div class="col-md-8 content-course-news">
				<h3 class="text-center">Khóa học đang update nội dung</h3>
		</div>
	@endif

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