@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Thành Viên
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm Thành Viên
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thêm Thành Viên</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Thành Viên</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('user-add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('full_name')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Họ Và Tên</label>
                                <input type="text" class="form-control" name="full_name"
                                       value="{!! old('full_name') !!}" 
                                       @if($errors->has('full_name')) autofocus
                                       @elseif($errors->has('u_fullname'))
                                       @elseif($errors->has('email'))
                                       @elseif($errors->has('password'))
                                       @elseif($errors->has('retypepassword'))
                                       @elseif($errors->has('address'))
                                       @elseif($errors->has('phone'))
                                       @elseif($errors->has('birthday'))
                                       @elseif($errors->has('industries'))
                                       @elseif($errors->has('major'))
                                       @elseif($errors->has('user_group_id'))
                                       @endif
                                       id="exampleInputFullname" placeholder="Nhập họ và tên...">
                                <span class="text-danger">{{ !empty($errors->first('full_name')) ? $errors->first('full_name') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('email')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email"
                                       @if($errors->has('email')) autofocus @endif value="{!! old('email') !!}"
                                       id="exampleInputEmail1" placeholder="Nhập Email...">
                                <span class="text-danger">{{ !empty($errors->first('email')) ? $errors->first('email') : '' }}</span>
                                <span class="text-warning">{{session('error')}}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('password')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Mật Khẩu</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       @if($errors->has('password')) autofocus @endif value="{!! old('password') !!}"
                                       placeholder="Nhập Mật Khẩu...">
                                <span class="text-danger">{{ !empty($errors->first('password')) ? $errors->first('password') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('retypepassword')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Nhập Lại Mật Khẩu</label>
                                <input type="password" class="form-control" name="retypepassword"
                                       @if($errors->has('retypepassword')) autofocus @endif value="{!! old('retypepassword') !!}"
                                       id="retypePassword" placeholder="Nhập Lại Mật  Khẩu..." required="required">
                                <span class="text-danger messager">{{ !empty($errors->first('retypepassword')) ? $errors->first('retypepassword') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('address')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Địa Chỉ</label>
                                <input type="text" class="form-control" name="address"
                                       @if($errors->has('address')) autofocus @endif value="{!! old('address') !!}"
                                       placeholder="Nhập Địa Chỉ">
                                <span class="text-danger">{{ !empty($errors->first('address')) ? $errors->first('address') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('phone')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Số Điện Thoại</label>
                                <input type="number" class="form-control" name="phone" maxlength="11"
                                       @if($errors->has('phone')) autofocus @endif value="{!! old('phone') !!}"
                                       placeholder="Nhập Số Điện Thoại...">
                                <span class="text-danger">{{ !empty($errors->first('phone')) ? $errors->first('phone') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('avatar')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Avatar</label>
                                <input type="file" class="form-control" onchange='openFile(event)' name="avatar"
                                       @if($errors->has('avatar')) autofocus @endif  value="{!! old('avatar') !!}"
                                       placeholder="">
                                <img id="output" src="" style="margin-top: 15px" />
                                <span class="text-danger">{{ !empty($errors->first('avatar')) ? $errors->first('avatar') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('birthday')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Ngày Sinh</label>
                                <input type="text" class="form-control" id="datepicker"
                                       @if($errors->has('birthday')) autofocus @endif value="{!! old('birthday') !!}"
                                       name="birthday" placeholder="dd-mm-yyyy">
                                <span class="text-danger">{{ !empty($errors->first('birthday')) ? $errors->first('birthday') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('industries')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Lĩnh Vực</label>
                                <select name="industries" id="input" class="form-control select-industries"
                                        @if($errors->has('industries')) autofocus @endif  multiple="multiple">
                                    @foreach($listIndustries as $industries)
                                    <option value="{{$industries->id}}" {{ $industries->id == old('industries') ? "selected" : "" }}>{{$industries->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('major')) ? $errors->first('major') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('major')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Nghề Nghiệp</label>
                                <select name="major" id="input" class="form-control select-major"
                                        @if($errors->has('major')) autofocus @endif  multiple="multiple">
                                    @foreach($listMajor as $major)
                                    <option value="{{$major->id}}" {{ $major->id == old('major') ? "selected" : "" }}>{{$major->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('industries')) ? $errors->first('industries') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('skype')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Skype</label>
                                <input type="text" class="form-control" name="skype"
                                       @if($errors->has('skype')) autofocus @endif value="{!! old('skype') !!}"
                                       placeholder="Nhập Link Skype">
                                <span class="text-danger">{{ !empty($errors->first('skype')) ? $errors->first('skype') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('facebook')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Facebook</label>
                                <input type="text" class="form-control" name="facebook"
                                       @if($errors->has('facebook')) autofocus @endif  value="{!! old('facebook') !!}"
                                       placeholder="Nhập Link Facebook">
                                <span class="text-danger">{{ !empty($errors->first('facebook')) ? $errors->first('facebook') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('youtube')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Youtube</label>
                                <input type="text" class="form-control" name="youtube"
                                       @if($errors->has('youtube')) autofocus @endif value="{!! old('youtube') !!}"
                                       placeholder="Nhập Link Youtube">
                                <span class="text-danger">{{ !empty($errors->first('youtube')) ? $errors->first('youtube') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('linkedin')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin"
                                       @if($errors->has('linkedin')) autofocus @endif value="{!! old('linkedin') !!}"
                                       placeholder="Nhập Link Linkedin">
                                <span class="text-danger">{{ !empty($errors->first('linkedin')) ? $errors->first('linkedin') : '' }}</span>
                            </div>
                            <div class="form-group {{ !empty($errors->first('user_group_id')) ? 'has-warring' : '' }}">
                                <label for="exampleInputPassword1">Loại Tài khoản</label>
                                <select name="user_group_id" class="form-control "
                                        @if($errors->has('user_group_id')) autofocus @endif >
                                    <option value="">--Chọn Quyển--</option>
                                    @foreach($userGroup as $userGroupId)
                                    <option value="{{$userGroupId->id}}" {{ $userGroupId->id == old('user_group_id') ? "selected" : "" }}>{{$userGroupId->name}}</option>
                                   @endforeach
                                </select>
                                <span class="text-danger">{{ !empty($errors->first('user_group_id')) ? $errors->first('user_group_id') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('admin')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm Thành Viên
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@section('addScript')
    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy'
            });
        });
        $('#retypePassword').on('keyup', function () {
            if ($('#password').val() == $('#retypePassword').val()) {
                $('.messager').html('Mật khẩu khớp').css('color', 'green');
            } else if($('#retypePassword').val() == ''){
                $('.messager').html('Vui lòng nhập xác nhận mật khẩu').css('color', 'wanring');
            }
            else
                $('.messager').html('Mật khẩu không khớp').css('color', 'red');
        });
    </script>
@stop
@stop
