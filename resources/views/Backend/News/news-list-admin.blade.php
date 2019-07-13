@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Bài Viết
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Bài Viết
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Danh Sách Bài Viết</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <form action="{{route('search-news')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-3">
                                    <input type="text" name="searchNews" placeholder="Tìm kiếm..." value="{{old('searchNews')}}" class="form-control">
                                </div>
                            </form>
                            <a href="{{route('news-add')}}" class="btn btn-primary" style="margin-bottom: 10px; float: right;"><i class="fa fa-user-plus"></i>  Thêm Bài Viết</a>
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
                                    <th>Tên Bài viết</th>
                                    <th>Tác giả</th>
                                    <th>Khóa học</th>
                                    <th>Lĩnh vực</th>
                                    <th>Chuyên Ngành</th>
                                    <th>Tags</th>
                                    <th>Trạng thái</th>
                                    <th>Kiểm Duyệt</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n=1;?>
                                @foreach($listNews as $news)
                                    <tr>
                                        <td class="text-center">{!! $n++ !!}</td>
                                        <td class="text-center"><a href="">{!! $news->news_name !!}</a></td>
                                        <td class="text-center"><a href="">{!! $news->username !!}</a></td>
                                        <td class="text-center">{{$news->c_title}}</td>
                                        <td class="text-center">{!! $news->cateGroupName !!}</td>
                                        <td class="text-center">{!! $news->cate_name !!}</td>
                                        <td>
                                            @foreach($listTag as $tags)
                                                @if($tags->news_id == $news->id)
                                                    <button class="btn btn-xs btn-primary">{{$tags->tag_name}}</button>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            @if($news->status_news == 0)
                                                <button class="btn btn-xs btn-primary">Hiện Thị</button>
                                            @elseif($news->status_news == 1)
                                                <button class="btn btn-xs btn-danger">Ẩn</button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($news->status == 0)
                                                <form action="{{route('change-status-news',$news->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="news_name" value="{{$news->news_name}}">
                                                    <input type="hidden" name="email" value="{{$news->email}}">
                                                    <input type="hidden" name="c_title" value="{{$news->c_title}}">
                                                    <input type="hidden" name="user_name" value="{{$news->username}}">
                                                    <input type="hidden" name="route" value="{{route('news-list')}}">
                                                    <button type="submit" class="btn btn-xs btn-warning">Chờ duyệt</button>
                                                </form>
                                            @elseif($news->status == 1)
                                                <button class="btn btn-xs btn-success">Đã duyệt</button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('news-show',['id'=>$news->id,'slug_news'=>$news->slug_news])}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                            @if(Auth::user()->id == $news->author_id)
                                            <a href="{{route('news-edit',['id'=>$news->id,'slug_news'=>$news->slug_news])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteRow('/admin/news/delete/{{ $news->id }}', '.list-news', '/admin/news')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                             @endif
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    @if(count($listNews) == 0 )
                                        <td colspan="5" class="text-center"><em>Không có Bài viết nào</em></td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="7">{!! $listNews->links() !!}</td>
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
