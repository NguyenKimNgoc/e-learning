<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 style="color: #ff7903">E - LEARNING THÔNG BÁO</h1>
<h3 style="color: #c12e2a">BẠN ĐÃ THANH TOÁN THÀNH CÔNG</h3>
<h4 style="color: #0b93d5">THÔNG TIN MUA HÀNG</h4>
<div class="info-customer">
    <p>Người mua: {{$dataCustomer->full_name}}</p>
    <p>Địa chỉ: {{$dataCustomer->address}}</p>
    <p>Số điện Thoại: 0{{$dataCustomer->phone}}</p>
    <p>Mã đơn hàng: #OD-{{$id}}</p>
    <p>Ngày mua: {{date_format(new DateTime($created_at),'d-m-Y H:i:s')}}</p>
</div>
<div class="info-orders">
    <table class="table" cellpadding="10" cellspacing="0" border="1px">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên khóa học</th>
            <th>Giá khóa học</th>
            <th>Tên tác giả</th>
            <th>Nội dung mua hàng</th>
        </tr>
        </thead>
        <tbody>
        <?php $n = 1;?>
        @foreach($dataSendMail as $data)
            <tr>
                <td>{{$n++}}</td>
                <td>{{$data->c_title}}</td>
                <td>@if($data->c_hot == 2) {{number_format($data->c_price_sale)}} vnđ @else{{number_format($data->c_price) }} vnđ@endif</td>
                <td>{{$data->username}}</td>
                <td>{{$data->note_order}}</td>
            </tr>
        @endforeach
            <tr>
                <td colspan="3" style="color: #1ab7ea ;font-weight: bold;">Tổng tiền thanh toán (đã bao gồm 21% VAT):</td>
                <td colspan="2" style="color: #c12e2a ;font-weight: bold ;">{{number_format($total_number)}} vnđ</td>
            </tr>
        </tbody>
    </table>
</div>
<em style="color: #c12e2a">E-Learning cám ơn quý khách !!!</em>
</body>
</html>

