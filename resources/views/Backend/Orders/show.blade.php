@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Chi tiết đơn hàng
@stop
<style>
    h1{
        font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }
    .col-md-8 p{
        font-weight: bold;
        font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }
    .col-md-12 p {
        font-weight: bold;
        font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }
</style>
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chi tiết đơn hàng
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Chi tiết đơn hàng</li>
            </ol>
        </section>
        <!-- /.content-wrapper -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12 detail_order">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-4" style="padding-top: 50px">
                                <img src="{{url('/images/logo/elearning-logo.png')}}" alt="" style="width: 100%">
                            </div>
                            <div class="col-md-8">
                                <h1 class=" text-danger">HỆ THỐNG HỌC TRỰC TUYẾN E-LEARNING</h1>
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
                                <p>Họ và tên người mua : {{$infoOrder->full_name}}</p>
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
                                            <td colspan="2" class="text-danger text-center" style="font-weight: bold; font-size: 25px">{{$infoOrder->total_number}} vnđ</td>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{route('pdf',$infoOrder->order_code)}}" class="btn btn-md btn-success text-right" style="float: right" target="_blank"><i class="fa fa-download"></i> Download Pdf</a>
                </div>
            </div>
        </section>
    </div>

@stop