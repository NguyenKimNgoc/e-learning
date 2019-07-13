@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Đơn Hàng
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Đơn Hàng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Danh Sách Đơn Hàng</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <form action="{{route('search-order')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-3">
                                    <input type="text" name="searchOrder" placeholder="Tìm kiếm..." value="{{old('searchOrder')}}" class="form-control">
                                </div>
                            </form>
                                <div class="col-md-4" style="float: right">
                                    <form action="{{route('export')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-md-8">
                                            <select name="export" id="" class="form-control" required>
                                                <option value="">--Chọn loại xuất--</option>
                                                <option value="1">Tất Cả</option>
                                                <option value="2">Theo Ngày</option>
                                                <option value="3">Theo Tuần</option>
                                                <option value="4">Theo Tháng</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success " style="float: right ;font-weight: bold" ><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Xuất Excel</button>
                                    </form>
                                </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="ListOrder" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Người Mua</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Tiền</th>
                                    <th>Địa Chỉ</th>
                                    <th>Nội Dung</th>
                                    <th>Hình Thức Thanh Toán</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Mua</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n=1;
                                ?>

                                @foreach($listOrder as $list)
                                    <tr>
                                        <td class="text-center">{!! $n++ !!}</td>
                                        <td class="text-center">{!! $list->full_name !!}</td>
                                        <td class="text-center">{{$list->qty}}</td>
                                        <td class="text-center text-danger"> {{number_format($list->total_number)}} vnđ </td>
                                        <td class="text-center">{{$list->address}}</td>
                                        <td class="text-center">{!! $list->note_order !!}</td>
                                        <td class="text-center"><button class="btn btn-xs btn-primary">@if($list->payment == 'CAD') Online @else Hình thức khác @endif </button></td>
                                        <td class="text-center">
                                            @if($list->status == 0)
                                                <form action="{{route('orders-change')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{$list->id}}">
                                                    <button class="btn btn-xs btn-warning" type="submit">Đang chờ</button>
                                                </form>
                                            @elseif($list->status == 1)
                                                <button class="btn btn-xs btn-success">Đã Thanh Toán</button>
                                            @endif
                                        </td>
                                        <td> {{ date_format(new DateTime($list->created_at),'d-m-Y')}}</td>
                                        <td class="text-center">
                                            <a href="{{route('orders-show',$list->order_code)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    @if(count($listOrder) == 0 )
                                        <td colspan="5" class="text-center"><em>Không có đơn hàng nào</em></td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="7">{!! $listOrder->links() !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <!-- /.content-wrapper -->
@section('addScript')
    <script>
        $(function () {
            $('#ListOrder').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
@stop
