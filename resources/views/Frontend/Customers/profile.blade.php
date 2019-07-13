@extends('Frontend.Layouts.main')

@section('title')
   Trang Cá Nhân
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
                            <li><strong><span itemprop="title">Trang cá nhân</span></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container profile-customer">
        @if(session('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('error')}}
            </div>
        @endif
        <div class="col-md-5">
            <div class="img-customer">
                @if(empty($customer->avatar))
                    <img src="{{url('/images/course/thumbnail.png')}}" alt="" class="img-responsive img-circle">
                @else
                    <img src="{{url('/')}}{{$customer->avatar}}" alt="" class="img-responsive img-circle">
                @endif
            </div>
        </div>
        <div class="col-md-7">
            <div class="detail-customer">
                <h1 class="name-customer">{{$customer->full_name}} @if($customer->id == \Auth::guard('l_customers')->user()->id)<a href="{{route('editProfile',['id'=>$customer->id,'slug_customer'=>$customer->slug_customer])}}"><i class="fas fa-user-edit"></i></a>@endif</h1>
                <p><i class="fas fa-map-marker-alt"></i> {{$customer->name}}</p>
                <p>{!! $customer->description!!}</p>
            </div>
        </div>
    </div>
@stop