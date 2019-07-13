@extends('Frontend.Layouts.main')

@section('title')
    Đăng ký
@stop
@section('addStylesheet')
   <link rel="stylesheet" type="text/css" href="{{ url('css/Frontend/login.css') }}">
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
                        <li><strong><span itemprop="title">Đăng ký tài khoản</span></strong></li>
                    </ul>
                    <div class="title-page ">Đăng ký tài khoản</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container" id="login-fontend">
    <h1 class="title-head"><a href="#">Đăng ký tài khoản</a></h1>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="page-login">
                <div id="login">
                    <span class="color-red">Nếu chưa có tài khoản vui lòng đăng ký tại đây</span>
                    <form  action="{{route('registerFrontend')}}"  method="post">
                        @csrf
                    <div class="form-signup clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group {{ !empty($errors->first('full_name')) ? 'has-warring' : '' }}">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control form-control-lg" value="{{old('full_name')}}"
                                           @if($errors->has('full_name')) autofocus
                                           @elseif($errors->has('email'))
                                           @elseif($errors->has('password'))
                                           @elseif($errors->has('city_id'))
                                           @endif name="full_name"  placeholder="Nhập họ và tên ...">
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('full_name')) ? $errors->first('full_name') : '' }}</span>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group {{ !empty($errors->first('email')) ? 'has-warring' : '' }}">
                                    <label>Email </label>
                                    <input type="email" class="form-control form-control-lg" @if($errors->has('email')) autofocus @endif  value="{{old('email')}}" name="email" placeholder="Nhập email..." >
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('email')) ? $errors->first('email') : '' }}</span>
                                <span class="text-danger">{{session('error')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group {{ !empty($errors->first('phone')) ? 'has-warring' : '' }}">
                                    <label>Số Điện Thoại</label>
                                    <input type="number" class="form-control form-control-lg" @if($errors->has('phone')) autofocus @endif  value="{{old('phone')}}" name="phone" placeholder="Nhập số điện thoại..." >
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('phone')) ? $errors->first('phone') : '' }}</span>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group  {{ !empty($errors->first('password')) ? 'has-warring' : '' }}">
                                    <label>Mật Khẩu</label>
                                    <input type="password" class="form-control form-control-lg" @if($errors->has('password')) autofocus @endif  value="{{old('password')}}" name="password"  placeholder="Nhập mật khẩu....">
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('password')) ? $errors->first('password') : '' }}</span>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group  {{ !empty($errors->first('address')) ? 'has-warring' : '' }}">
                                    <label>Địa Chỉ</label>
                                    <input type="text" class="form-control form-control-lg" @if($errors->has('address')) autofocus @endif  value="{{old('address')}}" name="address"  placeholder="Nhập địa chỉ....">
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('address')) ? $errors->first('address') : '' }}</span>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group {{ !empty($errors->first('city_id')) ? 'has-warring' : '' }}">
                                    <label>Thành Phố</label>
                                    <select name="city_id"  class="form-control select-city" @if($errors->has('city_id')) autofocus @endif  multiple="multiple">
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}" {{old('city_id')== $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                                <span class="text-danger">{{ !empty($errors->first('city_id')) ? $errors->first('city_id') : '' }}</span>
                            </div>
                        </div>


                        <div class="col-xs-12 text-xs-left" style="margin-top:30px; padding: 0">
                            <button type="submit"  class="btn-color btn btn-lg btn-style btn-dark">Đăng ký</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop