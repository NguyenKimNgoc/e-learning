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
                Danh Sách Thành Viên
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Danh Sách Thành Viên</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <form action="{{route('search-users')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group col-md-3">
                                  <input type="text" name="search" placeholder="Tìm kiếm..." value="{{old('search')}}" class="form-control">
                              </div>
                          </form>
                          <a href="{{route('user-add')}}" class="btn btn-primary" style="margin-bottom: 10px; float: right;"><i class="fa fa-user-plus"></i>  Thêm Thành Viên</a>
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
                      <table id="example" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>STT</th>
                          <th>Họ Và Tên</th>
                          <th>Email</th>
                          <th>Số Điện Thoại</th>
                          <th>Lĩnh Vực</th>
                          <th>Ngành Nghề</th>
                          <th>Quyền</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $n=1;?>
                        @foreach($listUser as $list)
                        <tr>
                          <td>{{$n++}}</td>
                          <td>{!! $list->full_name !!}</td>
                          <td>{!! $list->email !!}</td>
                          <td>0{!! $list->phone !!}</td>
                          <td>{!! $list->major_name !!}</td>
                          <td>{!! $list->industries_name !!}</td>
                          <td>
                            @if($list->user_group == 1)
                              <button class="btn btn-danger btn-xs">{!! $list->name !!}</button>
                            @elseif($list->user_group == 2)
                              <button class="btn btn-primary btn-xs">{!! $list->name !!}</button>
                            @elseif($list->user_group == 3)
                              <button class="btn btn-default btn-xs">{!! $list->name !!}</button>
                            @endif
                          </td>
                          <td class="text-center">
                            <a href="{{route('user-show',['id'=>$list->id,'slug_user'=>$list->slug_user])}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                            <a href="{{route('user-edit',['id'=>$list->id,'slug_user'=>$list->slug_user])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            <a onclick="deleteRow('/admin/user/delete/{{ $list->id }}', '.list-customer', '/admin/users/list')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                          @endforeach
                        <tr>
                            <td colspan="7">{!! $listUser->links() !!}</td>
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
    $(document).ready(function() {
    $('#example').dataTable({
      'searching'   : true
    })
  })
</script>
@stop
@stop
