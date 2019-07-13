@extends('Frontend.Layouts.main')

@section('title')
    Liên Hệ
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
                            <li><strong><span itemprop="title">Liên Hệ</span></strong></li>
                        </ul>
                        <div class="title-page ">Liên Hệ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="login-fontend">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="page-login">
                    <div id="login">

                        <div class="col-md-6">
                            <span class="color-red">Hãy liên hệ với chúng tôi để được giải đáp các thắc mắc về khóa học</span>
                            <form  action="{{route('contacts')}}"  method="post">
                                @csrf
                                <div class="form-signup clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('full_name')) ? 'has-warring' : '' }}">
                                                <label>Họ và Tên</label>
                                                <input type="text" class="form-control form-control-lg" value="{{old('full_name')}}"
                                                       @if($errors->has('full_name')) autofocus
                                                       @elseif($errors->has('email'))
                                                       @elseif($errors->has('phone'))
                                                       @elseif($errors->has('city_id'))
                                                       @elseif($errors->has('district_id'))
                                                       @elseif($errors->has('content_contacts'))
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
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('phone')) ? 'has-warring' : '' }}">
                                                <label>Số Điện Thoại </label>
                                                <input type="number" class="form-control form-control-lg" @if($errors->has('phone')) autofocus @endif  value="{{old('phone')}}" name="phone" placeholder="Nhập số điện thoại..." >
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('phone')) ? $errors->first('phone') : '' }}</span>
                                            <span class="text-danger">{{session('error')}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group {{ !empty($errors->first('city_id')) ? 'has-warring' : '' }}">
                                                <label>Tỉnh/Thành </label>
                                                <select name="city_id" id="onChangeDistrict" class="form-control select-provincial"   multiple="multiple" >
                                                    @foreach($cities as $city)
                                                        <option  value="{{$city->id}}" {{old('city_id') == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                            <span class="text-danger">{{ !empty($errors->first('city_id')) ? $errors->first('city_id') : '' }}</span>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-group {{ !empty($errors->first('district_id')) ? 'has-warring' : '' }}">
                                                <label>Quận/Huyện </label>
                                                <select name="district_id"  id="changeDistrict" class="form-control select-county"  multiple="multiple" >
                                                    @foreach($district as $dis)
                                                        <option value="{{$dis->id}}" {{old('district_id') == $dis->id ? 'selected' : ''}}>{{ $dis->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{ !empty($errors->first('district_id')) ? $errors->first('district_id') : '' }}</span>
                                            </fieldset>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{ !empty($errors->first('content_contacts')) ? 'has-warring' : '' }}">
                                            <label for="exampleInputPassword1">Nội dung liên hệ</label>
                                            <textarea name="content_contacts" id="" cols="30" rows="10" class="form-control"></textarea>
                                            <span class="text-danger">{{ !empty($errors->first('content_contacts')) ? $errors->first('content_contacts') : '' }}</span>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 text-xs-left" style="margin-top:30px; padding: 0">
                                        <button type="submit"  class="btn-color btn btn-lg btn-style btn-dark" >Liên Hệ</button>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                          {!! $mapContactsConfig->map !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@section('addScript')
    <script type="text/javascript">
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