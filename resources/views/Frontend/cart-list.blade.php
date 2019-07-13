@extends('Frontend.Layouts.main')

@section('title')
    Giỏ hàng 
@stop
@section('addStylesheet')
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/Frontend/cart-list.css') }}">
@stop
@section('content')
<section class="bread-crumb container-fluid">
    <span class="crumb-border"></span>
	    <div class="col-md-12 a-left">
	        <div class="breadcrumb-container">
	            <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">                   
	                <li class="home">
	                    <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>    
	                    <i class="fa fa-angle-right" aria-hidden="true"></i>
	                </li>
	                
	              	 <li><strong><span itemprop="title">Giỏ hàng</span></strong>
	              	 </li>   
	            </ul>
	        </div>
    </div>
</section>
<section class="cart-list">
	<div class="container">
		<div class="row">
			<h4>GIỞ HÀNG <em>( {{ \Cart::count() }} sản phẩm )</em></h4>
			<div class="cart-body">
				<div class="col-md-9">
					<form action="" method="POST">
						@if(\Cart::count() > 0)
							@foreach(\Cart::content() as $item)
								<div class="item-cart col-md-12">
									<div class="col-md-2 img-thumnail-custom">
										<p class="image">
											<img class="img-responsive" src="{{url('/')}}{{ $item->model->c_images }}" alt="Ghế bong bóng">
										</p>
									</div>
									<div class="col-md-3 box-info-product">
										<p class="name"><a href="/ghe-bong-bong" target="_blank">{{ $item->model->c_title }}</a></p>
										<p class="seller-by hidden" style="display: none;">Default Title</p>
										<p class="action"><a href="{{route('cart-delete',$item->rowId)}}" class="btn btn-link btn-item-delete remove-item-cart" data-id="17948460">Xóa</a></p>
									</div>
									<div class="col-md-3 box-price">
										<p class="price">{{number_format($item->subtotal)}} vnđ</p>
									</div>
									<div class="col-md-2 quantity-right">
										<div class="quantity-block">
											<div class="input-group bootstrap-touchspin">
												<div class="input-group-btn">
													<input type="text" maxlength="12" min="1" readonly class="form-control" style="width: 40px" name="Lines" size="4" value="{{$item->qty}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</form>
				</div>
			<div class="col-md-3 cart-collaterals cart_submit">
				<div id="right-affix">
					<div class="each-row">
						<div class="box-style fee">
							<div class="total2 clearfix">
								<div class="amount"><p><span class="text-label">Thuê VAT: </span> <strong class="totals_price">{{\Cart::tax()}} vnđ</strong></p>
								</div>
							</div>
						</div>
						<div class="box-style fee">
							<p class="list-info-price">
								<span>Tạm tính: </span>
								<strong class="totals_price price _text-right text_color_right1">{{\Cart::total()}} vnđ</strong>
							</p>
						</div>
						<a class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"  type="button" @if(\Cart::count() > 0) href="{{route('check-out')}}"  title="Thanh toán ngay" @else data-toggle="tooltip" data-placement="top" title="Hãy chọn khóa khọc" @endif >Thanh toán ngay</a>
						<a class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" href="{{route('trang-chu')}}">Tiếp tục mua hàng</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
@stop