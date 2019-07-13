<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course New</title>

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
<h3 STYLE="color: #c12e2a">KHÓA HỌC MỚI TẠI E-LEARNG</h3>
<div>
    <h3 style="font-weight: bold;color: #0b3e6f">Hiện Tại E-LEARNING Đang Có Khóa học <b style="color: #c12e2a">{{$course->c_title}}</b></h3>
    <p><b style="color: #c12e2a">Giá khóa học :</b> @if(!empty($course->c_price_sale) == null) {{ number_format($course->c_price)}} vnđ @else {{number_format($course->c_price_sale)}} vnđ @endif</p>
    <p><b style="color: #c12e2a">Tác giả:</b> {{$username}}</p>
    <p><b style="color: #c12e2a">Thể loại:</b> {{$cate_group}}</p>
    <p><b style="color: #c12e2a">Link khóa học:</b> {!! $urlCourse !!}</p>

    <h4 style="color: #c12e2a ;font-weight: bold">Thanks you !!!</h4>
</div>
</body>
</html>

