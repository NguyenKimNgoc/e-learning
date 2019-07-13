@extends('Frontend.Layouts.main')

@section('title')
    Thanh Toán 
@stop
@section('addStylesheet')
   <link rel="stylesheet" type="text/css" href="{{ url('/css/Frontend/check-out.css') }}">
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
	                
	              	 <li><strong><span itemprop="title">Thanh Toán</span></strong>
	              	 </li>   
	            </ul>
	        </div>
    </div>

</section>
<section class="checkout">
	<div class="col-md-12 container">
		<div class="col-md-1"></div>
		<form action="{{ route('check-out') }}" method="POST" accept-charset="UTF-8" id="payment-form" role="form" enctype="multipart/form-data">
			{{ csrf_field() }}
		<div class="col-md-4">
			<h3>Thông Tin Thanh Toán </h3>
			<div class="info-checkout">
					<div class="form-group">
						<label for="">Họ Và Tên</label>
						<input type="text" class="form-control" value="{{Auth::guard('l_customers')->user()->full_name}}" readonly placeholder="Nhập họ và tên.... ">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="" value="{{Auth::guard('l_customers')->user()->email}}" readonly name="email" placeholder="Nhập email.... ">
					</div>
					<div class="form-group">
						<label for="">Số Điện Thoại</label>
						<input type="text" class="form-control" value="{{old('phone',Auth::guard('l_customers')->user()->phone)}}" readonly placeholder="Nhập số điện thoại.... ">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" value="{{old('address',Auth::guard('l_customers')->user()->address)}}" readonly placeholder="Nhập số điện thoại.... ">
					</div>
					<div class="form-group">
						<label for="">Tỉnh Thành</label>
						<select name="city_id" id="onChangeDistrict" class="form-control select-provincial" required  multiple="multiple" >
							@foreach($cities as $city)
                            <option  value="{{$city->id}}" {{old('city_id') == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">Quận / Huyện</label>
						<select name="district_id"  id="changeDistrict" class="form-control select-county"  multiple="multiple" required="required">
							@foreach($district as $dis)
                            <option value="{{$dis->id}}" {{old('district_id') == $dis->id ? 'selected' : ''}}>{{ $dis->name }}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">Phương Thức Thanh Toán</label>
						<select name="payment" id="input" class="form-control " >
							<option value="CAD" selected >Thanh Toán Online</option>
						</select>
					</div>
					<div class="form-row">
						<label for="card-element">
							Credit or debit card
						</label>
						<div id="card-element">
							<!-- A Stripe Element will be inserted here. -->
						</div>
						<!-- Used to display form errors. -->
						<div id="card-errors" role="alert"></div>
					</div>
					<div class="form-group">
						<label for="">Ghi Chú</label>
						<textarea name="note_order" id="input" class="form-control" rows="3"  placeholder="Ghi Chú..."></textarea>
					</div>
			</div>
		</div>
		<div class="col-md-6 info-cart">
			<div class="title-cart">
				<h3>Đơn Hàng ( {{ \Cart::count() }} )</h3>
			</div>
			@if(\Cart::count() > 0)
				@foreach(\Cart::content() as $item)
			<div class="item-cart-checkout col-md-12">
				<div class="col-md-3 img-responsive img-product">
					<img style="height: 45px" src="{{url('/')}}{{$item->model->c_images}}">
				</div>
				<div class="name-product col-md-6">
					<p>{{ $item->model->c_title }}</p>
				</div>
				<div class="col-md-3 price-product">
					<b>{{number_format($item->subtotal)}} vnđ</b>
				</div>
			</div>
				@endforeach
			@endif
			<div class="provisional">
				<div class="col-md-5">
					<b>Tạm Tính</b>
				</div>
				<div class="col-md-7 text-right">
					<b>{{\Cart::subtotal()}}</b>
				</div>
				<div class="col-md-5">
					<b>Thuế</b>
				</div>
				<div class="col-md-7 text-right">
					<b>{{\Cart::tax()}}</b>
				</div>
			</div>
			<div class="total-payment">
				<div class="col-md-5">
					<b>Tổng Tiển</b>
				</div>
				<div class="col-md-7 text-right">
					<b>{{(\Cart::total())}}</b>
				</div>
			</div>
			<div class="action-payment">
				<div class="col-md-6">
					<a href="{{route('cart-list')}}" class="btn btn-default"><i class="fas fa-undo-alt"></i> Quay về giỏ hàng</a>
				</div>
				<div class="col-md-6 text-right">
                    @if(\Cart::count() > 0)
					<button type="submit" id="complete-order" class="btn btn-danger"  ><i class="fas fa-money-bill-alt"></i> Thanh Toán</button>
                    @else
                        <a href="{{route('trang-chu')}}" class="btn btn-md btn-warning"><i class="fas fa-home"></i> Hãy mua hàng khi thanh toán</a>
                    @endif
                </div>
			</div>
		</div>
	</form>
		<div class="col-md-1"></div>
	</div>
</section>
@section('addScript')
	<script type="text/javascript">
		$(document).ready(function(){
			// Create a Stripe client.
			var stripe = Stripe('pk_test_N0s46YPuYcwQGbBQtIM1c57v00ZYveh2qP');

			// Create an instance of Elements.
			var elements = stripe.elements();

			// Custom styling can be passed to options when creating an Element.
			// (Note that this demo uses a wider set of styles than the guide below.)
			var style = {
				base: {
					color: '#32325d',
					fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
					fontSmoothing: 'antialiased',
					fontSize: '16px',
					'::placeholder': {
						color: '#aab7c4'
					}
				},
				invalid: {
					color: '#fa755a',
					iconColor: '#fa755a'
				}
			};

			// Create an instance of the card Element.
			var card = elements.create('card', {
				style: style,
				hidePostalCode: true
			});

			// Add an instance of the card Element into the `card-element` <div>.
			card.mount('#card-element');

			// Handle real-time validation errors from the card Element.
			card.addEventListener('change', function(event) {
				var displayError = document.getElementById('card-errors');
				if (event.error) {
					displayError.textContent = event.error.message;
				} else {
					displayError.textContent = '';
				}
			});

			// Handle form submission.
			var form = document.getElementById('payment-form');
			form.addEventListener('submit', function(event) {
				event.preventDefault();
				document.getElementById('complete-order').disable = true;
				stripe.createToken(card).then(function(result) {
					if (result.error) {
						// Inform the user if there was an error.
						var errorElement = document.getElementById('card-errors');
						errorElement.textContent = result.error.message;
						document.getElementById('complete-order').disable = false;
					} else {
						// Send the token to your server.
						stripeTokenHandler(result.token);
					}
				});
			});

			// Submit the form with the token ID.
			function stripeTokenHandler(token) {
				// Insert the token ID into the form so it gets submitted to the server
				var form = document.getElementById('payment-form');
				var hiddenInput = document.createElement('input');
				hiddenInput.setAttribute('type', 'hidden');
				hiddenInput.setAttribute('name', 'stripeSource');
				hiddenInput.setAttribute('value', token.id);
				form.appendChild(hiddenInput);

				// Submit the form
				form.submit();
			}
		});
		// js change district
		$('#onChangeDistrict').change(function () {
			var _token = $('input[name="_token"]').val();
			var id = $('#onChangeDistrict').val();
			$.ajax({
				url: "{{route('changeDistrict')}}",
				data: {id: id ,_token:_token},
				dataType: "json",
				type: "POST",
				success: function (data) {
					if(data.success == true){
						$('#changeDistrict').html(data.html);
					}else{
						alert('Lỗi !!!')
					}

				}
			});
		});
	</script>
@stop
@stop
