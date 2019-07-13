@extends('Frontend.Layouts.main')

@section('title')
    Đăng Nhập
@stop
@section('addStylesheet')
   <link rel="stylesheet" type="text/css" href="{{ url('css/Frontend/login.css') }}">
@stop
@section('content')
<!-- Slider banner -->
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
                        
                        <li><strong><span itemprop="title">Đăng nhập tài khoản</span></strong></li>
                        
                    </ul>
                    <div class="title-page ">Đăng nhập tài khoản</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container" id="login-fontend">
    <h1 class="title-head"><span>Đăng nhập tài khoản</span></h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="page-login margin-bottom-30">
                <div id="login">
                    @if(session('error'))
                        <span class="color-red text-danger">
                            {{session('error')}}
                        </span>
                    @elseif(session('success'))
                        <span class="color-red">
                            {{session('success')}}
                        </span>
                    @else
                        <span class="color-red">
                        Nếu bạn đã có tài khoản, đăng nhập tại đây.
                        </span>
                    @endif
                    <form id="customer_login" method="post">
                    @csrf
                    <div class="form-signup clearfix">
                        <fieldset class="form-group">
                            <label>Email: </label>
                            <input type="email" class="form-control form-control-lg" autofocus name="email" value="{{old('email')}}" placeholder="Email">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Mật khẩu: </label>
                            <input type="password" class="form-control form-control-lg" name="password" value="{{old('password')}}" placeholder="Mật khẩu">
                        </fieldset>
                        <div class="pull-xs-left" style="margin-top: 25px;">
                            <button class="btn-color btn btn-lg btn-style btn-dark" type="submit">Đăng nhập</button>
                            <a href="{{route('registerFrontend')}}" class="btn-link-style btn-register text-danger" style="margin-left: 20px;">Đăng ký</a>
                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@stop