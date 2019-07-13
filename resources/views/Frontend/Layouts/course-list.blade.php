@if(count($listCourseOrders) >0)
    <div class="col-md-12 slick-course">
        <div class="item-course">
            @foreach($listCourseOrders as $listCountOrders)
            <div class="item product-item-new">
                <span class="sale-course">@if($listCountOrders->c_hot == 2){{\App\Helpers\Helpers::sales($listCountOrders->c_price,$listCountOrders->c_price_sale)}}% @else News @endif </span>
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
                <a href="{{route('product-detail',['id'=>$listCountOrders->id,'slug_course'=> $listCountOrders->slug_course])}}" class="item-title"><h4>@if(strlen($listCountOrders->c_title) >= 70){!!substr($listCountOrders->c_title,0,70) !!}... @else {!! $listCountOrders->c_title  !!}@endif</h4></a>
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
@endif