@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Chỉnh sửa liên hệ
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chỉnh sửa liên hệ
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Chỉnh sửa liên hệ </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sửa liên hệ  </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('contacts-config-edit',$editContacts->id)}}" method="post" >
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('address')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" class="form-control" name="addressContacts" required
                                       value="{!! old('address',$editContacts->address) !!}"
                                       id="exampleInputFullname" placeholder="Nhập địa chỉ...">
                            </div>
                            <div class="form-group {{ !empty($errors->first('phone')) ? 'has-warring' : '' }}">
                                <label for="">Số điện thoại</label>
                                <input type="number" class="form-control"  required name="phone" value="{!! old('phone',$editContacts->phone) !!}"
                                       placeholder="Số điện thoại...">
                            </div>
                            <div class="form-group {{ !empty($errors->first('facebook')) ? 'has-warring' : '' }}">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control"  name="facebook" value="{!! old('facebook',$editContacts->facebook) !!}"
                                       placeholder="Nhập link facebook">
                            </div>
                            <div class="form-group {{ !empty($errors->first('youtube')) ? 'has-warring' : '' }}">
                                <label for="">Youtube</label>
                                <input type="text" class="form-control"  name="youtube" value="{!! old('youtube',$editContacts->youtube) !!}"
                                       placeholder="Nhập link youtube...">
                            </div>
                            <div class="form-group {{ !empty($errors->first('linkedin')) ? 'has-warring' : '' }}">
                                <label for="">LinkedIn</label>
                                <input type="text" class="form-control"   name="linkedin" value="{!! old('linkedin',$editContacts->linkedin) !!}"
                                       placeholder="Nhập link linkedin...">
                            </div>
                            <div class="form-group {{ !empty($errors->first('twitter')) ? 'has-warring' : '' }}">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control"   name="twitter" value="{!! old('twitter',$editContacts->twitter) !!}"
                                       placeholder="Nhập link twitter...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('email')) ? 'has-warring' : '' }}">
                                <label for="">Email</label>
                                <input type="email" class="form-control"  name="email" required
                                     value="{!! old('email',$editContacts->email) !!}"
                                       placeholder="Nhập email...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('instagram')) ? 'has-warring' : '' }}">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control"  name="instagram" required
                                       value="{!! old('instagram',$editContacts->instagram) !!}"
                                       placeholder="Nhập Instagram...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ !empty($errors->first('map')) ? 'has-warring' : '' }}">
                                <label for="exampleInputEmail1">Google Map</label>
                                <textarea  name="map" rows="10" cols="80" class="form-control" placeholder="Nhúng map ...">{!! $editContacts->map !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('admin')}}" class="btn btn-default"><i class="fa fa-undo"></i> Quay Lại</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Chỉnh sửa địa chỉ
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop
