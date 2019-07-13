@extends('Frontend.Layouts.main')

@section('title')
    Trang Cá Nhân
@stop
@section('addStylesheet')
    <link rel="stylesheet" type="text/css" href="{{ url('css/Frontend/profile-customer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/Frontend/login.css') }}">
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
                            <li><strong><span itemprop="title">Chỉnh sửa trang cá nhân</span></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="container" id="login-fontend">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="page-login">
                        <div id="login">
                            <form  action="{{route('editProfile',['id'=>$editCustomer->id,'slug_customer'=>$editCustomer->slug_customer])}}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-signup clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('full_name')) ? 'has-warring' : '' }}">
                                                <label>Họ và Tên</label>
                                                <input type="text" class="form-control form-control-lg" value="{{old('full_name',$editCustomer->full_name)}}"
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
                                                <input type="email" class="form-control form-control-lg" @if($errors->has('email')) @endif  value="{{old('email',$editCustomer->email)}}"  name="email" readonly="readonly" placeholder="Nhập email..." >
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('email')) ? $errors->first('email') : '' }}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('phone')) ? 'has-warring' : '' }}">
                                                <label>Số Điện Thoại </label>
                                                <input type="number" class="form-control form-control-lg" @if($errors->has('phone')) @endif  value="{{old('phone',$editCustomer->phone)}}"  name="phone" placeholder="Nhập Số điện thoại..." >
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('phone')) ? $errors->first('phone') : '' }}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('address')) ? 'has-warring' : '' }}">
                                                <label>Địa chỉ </label>
                                                <input type="text" class="form-control form-control-lg" @if($errors->has('address')) @endif  value="{{old('address',$editCustomer->address)}}"  name="address" placeholder="Nhập địa chỉ..." >
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('address')) ? $errors->first('address') : '' }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group  {{ !empty($errors->first('password')) ? 'has-warring' : '' }}">
                                                <label>Mật Khẩu</label>
                                                <input type="password" class="form-control form-control-lg" @if($errors->has('password')) autofocus @endif  value="{{old('password',$editCustomer->password)}}" name="password"  placeholder="Nhập mật khẩu....">
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('password')) ? $errors->first('password') : '' }}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Thành Phố</label>
                                                <select name="city_id"  class="form-control select-city" @if($errors->has('city_id')) autofocus @endif  multiple="multiple">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->id}}" {{old('city_id',$editCustomer->city_id) == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group ">
                                                <label>Avatar </label>
                                                <input type="file" class="form-control form-control-lg" onchange='openFile(event)'  value="{{old('avatar',$editCustomer->avatar)}}" name="avatar" placeholder="Nhập email..." >
                                                    <img id="output" src="{{url('/')}}{{$editCustomer->avatar}}" @if(!empty($editCustomer->avatar))style="margin-top: 15px;width: 100%;height: 300px" @endif/>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label>Mô Tả Công Việc</label>
                                                <textarea id="editor1" name="description" rows="10" cols="80" placeholder="Nhập nội dung...">{{$editCustomer->description}}</textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-xs-12 text-xs-left" style="margin-top:30px; padding: 0">
                                        <button type="submit"  class="btn-color btn btn-lg btn-style btn-dark">Cập Nhật</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop