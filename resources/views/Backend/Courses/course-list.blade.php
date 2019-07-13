@extends('Backend.Layouts.admin-main')

@section('title')
  Admin | Khóa Học
@stop

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Khóa Học
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
        <li class="active">Danh Sách Khóa Học</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <form action="{{route('search-course')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-3">
                  <input type="text" name="searchCourse" placeholder="Tìm kiếm..." value="{{old('searchCourse')}}" class="form-control">
                </div>
              </form>
              <a href="{{route('course-add')}}" class="btn btn-primary" style="margin-bottom: 10px;float: right;"><i class="fa fa-user-plus"></i>  Thêm Khóa Học</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (session('success'))
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{session('success')}}
                </div>
              @elseif(session('error'))
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{session('error')}}
                </div>
              @endif
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Khóa Học</th>
                  <th>Lĩnh Vực</th>
                  <th>Giá Khóa Học</th>
                  <th>Giá Sale</th>
                  <th>Loại Hàng</th>
                  <th>Trạng Thái</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $n=1;?>
                @foreach($listCourse as $courses)
                  <tr>
                    <td class="text-center">{!! $n++ !!}</td>
                    <td style="width: 350px;"><a href="{{route('course-show',['id'=>$courses->id,'slug_course'=>$courses->slug_course])}}">{!! $courses->c_title !!}</a></td>
                    <td class="text-center">{!! $courses->type_course !!}</td>
                    <td class="text-center text-danger">{!! number_format($courses->c_price) !!} vnđ</td>
                    <td class="text-center text-warning">{!! number_format($courses->c_price_sale) !!} vnđ</td>
                    <td class="text-center">
                      @if($courses->c_hot == 1)
                        <button class="btn btn-xs btn-danger">News</button>
                      @elseif($courses->c_hot == 2)
                        <button class="btn btn-xs btn-primary">Sales</button>
                      @endif
                    </td>
                    <td class="text-center">
                      @if($courses->status == 0)
                        <button class="btn btn-xs btn-warning">Chờ duyệt</button>
                      @elseif($courses->status == 1)
                        <button class="btn btn-xs btn-success">Đã duyệt</button>
                      @endif
                    </td>
                    <td class="text-center">
                      <a href="{{route('course-show',['id'=>$courses->id,'slug_course'=>$courses->slug_course])}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                      <a href="{{route('course-edit',['id'=>$courses->id,'c_author_id'=>$courses->c_author_id,'slug_course'=>$courses->slug_course])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                      <a onclick="deleteRow('/admin/course/delete/{{ $courses->id }}', '.list-course', '/admin/courses')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
                <tr>
                  @if(count($listCourse) == 0 )
                    <td colspan="5" class="text-center"><em>Không có Khóa Học nào</em></td>
                  @endif
                </tr>
                <tr>
                  <td colspan="7">{!! $listCourse->links() !!}</td>
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
      $('#example2').DataTable({
        'paging'      : false,
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
