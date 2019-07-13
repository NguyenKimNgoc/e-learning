<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />
    <title>Chi Tiết Hóa Đơn</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <![endif]-->
    <!-- Google Font -->
    <style type="text/css">
        @font-face {
            font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
        body{
            font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
    </style>
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-wrapper -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12 detail_order">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-4">
                                <img src="{{url('/images/logo/elearning-logo.png')}}" alt="" style="width: 100%">
                            </div>
                            <div class="col-md-8">
                                <h1 class="text-danger">HỆ THỐNG HỌC TRỰC TUYẾN E-LEARNING</h1>
                                <p>Mã Số Thuế : 123456789</p>
                                <p>Địa Chỉ: {{$contacts->address}}</p>
                                <p>Số Điện Thoại: 0{{$contacts->phone}}</p>
                                <p>Email: {{$contacts->email}}</p>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h1 class="text-center text-danger">HÓA ĐƠN THANH TOÁN ONLINE</h1>
                            <div class="col-md-12">
                                <p>Họ và tên người mua : {!! $infoOrder->full_name !!}</p>
                                <p>Địa chỉ : {{$infoOrder->address}}</p>
                                <p>Số điện thoại: 0{{$infoOrder->phone}}</p>
                                <p>Hình thức thanh toán : @if($infoOrder->payment == 'CAD') Online @else Hình Thức Khác @endif</p>
                                <p>Mã đơn hàng : #OD-{{$infoOrder->order_id}}</p>
                                <p>Ngày mua: {{date("d-m-Y H:i:s", strtotime($infoOrder->created_at))}}</p>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Khóa Học</th>
                                        <th>Tác Giả</th>
                                        <th>Giá Khóa Học</th>
                                        <th>Nội Dung Mua Hàng</th>
                                        <th>Trạng Thái</th>
                                        <th>Số Tiền Thanh Toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n= 1;?>
                                    @foreach($listCourseForCustomer as $course)
                                        <tr>
                                            <td>{{$n++}}</td>
                                            <td>{{$course->c_title}}</td>
                                            <td>{{$course->full_name}}</td>
                                            <td>@if(!empty($course->c_price_sale)){{number_format($course->c_price_sale)}} vnđ @else {{number_format($course->c_price)}} vnđ @endif</td>
                                            <td>{{$course->note_order}}</td>
                                            <td>@if($course->status == 0 ) Đang chờ @elseif($course->status == 1 ) Đã thanh toán @endif</td>
                                            <td class="text-warning">@if(!empty($course->c_price_sale)){{number_format($course->c_price_sale)}} vnđ @else {{number_format($course->c_price)}} vnđ @endif</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="text-primary text-right" style="font-weight: bold; font-size: 25px">Tổng Tiền(đã tính 21% VAT):</td>
                                        <td colspan="2" class="text-danger text-center" style="font-weight: bold; font-size: 25px">{!! $infoOrder->total_number !!} vnđ</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- jQuery 3 -->
<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
</body>
</html>