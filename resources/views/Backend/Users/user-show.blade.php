@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Thành Viên
@stop
@section('addStylesheet')
    <link rel="stylesheet" href="{{url('css/Backend/users.css')}}">
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thông Tin Thành Viên
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Thông Tin Thành Viên</li>
            </ol>
        </section>
        <!-- /.content-wrapper -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body profile">
                            <div class="col-md-12 header-profile">
                            </div>
                            <div class="col-md-5"></div>
                            @if($showUser->id == Auth::user()->id)
                                <a class="text-danger" style="float: right; font-size: 20px; padding: 20px" href="{{route('user-edit',['id'=>$showUser->id,'slug_user'=>$showUser->slug_user])}}"><i class="fa fa-edit"></i></a>
                            @endif
                            <div class="col-md-2">
                                <img style="width: 200px" src="{{url('/')}}{{$showUser->avatar}}" alt="" class="img-responsive img-circle img-profile">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-12 info-basic">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <b>POST</b>
                                    <p>20</p>
                                </div>
                                <div class="col-md-2">
                                    <b>HỌ VÀ TÊN</b>
                                    <P>{{$showUser->full_name}}</P>
                                </div>
                                <div class="col-md-2">
                                    <b>EMAIL</b>
                                    <p>{{$showUser->email}}</p>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="col-md-12 infomation">
                                <h3 class="title-infomation">Thông Tin Chi Tiết </h3>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Họ và Tên:</th>
                                            <td>{{$showUser->full_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Số Điện Thoại:</th>
                                            <td>{{$showUser->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Địa Chỉ:</th>
                                            <td>{{$showUser->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày Sinh:</th>
                                            <td>{{date('d-m-Y',strtotime($showUser->birthday))}}</td>
                                        </tr>
                                        <tr>
                                            <th>Lĩnh Vực:</th>
                                            <td><button class="btn btn-xs btn-primary">{{$showUser->industries_name}}</button></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Skype:</th>
                                            <td>{{$showUser->skype}}</td>
                                        </tr>
                                        <tr>
                                            <th>Facebook:</th>
                                            <td>{{$showUser->facebook}}</td>
                                        </tr>
                                        <tr>
                                            <th>Linkedin:</th>
                                            <td>{{$showUser->linkedin}}</td>
                                        </tr>
                                        <tr>
                                            <th>Youtube:</th>
                                            <td>{{$showUser->youtube}}</td>
                                        </tr>
                                        <tr>
                                            <th>Chuyên Ngành:</th>
                                            <td><button class="btn  btn-xs btn-warning">{{$showUser->major_name}}</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if(count($listCourseInUser)>0)
                    <div class="box box-info collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Danh sách các khóa học <b>({{count($listCourseInUser)}})</b></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Khóa Học</th>
                                        <th>Tên Khóa Học</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n=1; ?>
                                    @foreach($listCourseInUser as $listCourse)
                                        <tr>
                                            <td>{{$n++}}</td>
                                            <td>NEWS-{{$listCourse->id}}</td>
                                            <td><a href="{{route('course-show',['id'=>$listCourse->id,'slug_course'=>$listCourse->slug_course])}}">{{$listCourse->c_title}}</a></td>
                                            <td>
                                                @if($listCourse->status == 1)
                                                    <span class="label label-success">Đã duyệt</span></td>
                                            @elseif($listCourse->status == 0)
                                                <span class="label label-success">Chờ duyệt</span></td>
                                            @endif
                                            <td>
                                                <a href="{{route('course-show',['id'=>$listCourse->id,'slug_course'=>$listCourse->slug_course])}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                                @if($listCourse->c_author_id == Auth::user()->id)
                                                    <a href="{{route('course-edit',['id'=>$listCourse->id,'c_author_id'=>$listCourse->c_author_id,'slug_course'=>$listCourse->slug_course])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                                    <a onclick="deleteRow('/admin/user/delete/{{ $listCourse->id }}', '.list-customer', '/admin/users/list')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-footer -->
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@section('addScript')
    <script type="text/javascript">
        $(function () {
            var colors = ['#2b9e05', '#c10565', '#f39c12','#00c0ef','#dd4b39'];
            var random_color = colors[Math.floor(Math.random() * colors.length)];
            $('.header-profile').css('background-color', random_color);
        });
    </script>
@stop
@stop