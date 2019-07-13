@extends('Backend.Layouts.admin-main')

@section('title')
    Admin | Tin Tức
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Tin Tức
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li class="active">Danh Sách Tin Tức</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <form action="{{route('search-blog')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-3">
                                    <input type="text" name="searchBlog" placeholder="Tìm kiếm..." value="{{old('searchBlog')}}" class="form-control">
                                </div>
                            </form>
                            <a href="{{route('blog-add')}}" class="btn btn-primary" style="margin-bottom: 10px; float: right;"><i class="fa fa-user-plus"></i>  Thêm Tin Tức</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Tin Tức</th>
                                    <th>Tác giả</th>
                                    <th>Lĩnh vực</th>
                                    <th>Tags</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n=1;?>
                                @foreach($listBlog as $blog)
                                    <tr>
                                        <td class="text-center">{!! $n++ !!}</td>
                                        <td><a href="">{!! $blog->blog_title !!}</a></td>
                                        <td class="text-center"><a href="">{!! $blog->full_name !!}</a></td>
                                        <td class="text-center">{!! $blog->name !!}</td>
                                        <td>
                                            @foreach($listTagsBlog as $tags)
                                                @if($tags->blog_id == $blog->id)
                                                    <button class="btn btn-xs btn-primary">{{$tags->tag_name}}</button>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('blog-edit',['id'=>$blog->id,'slug_blog'=>$blog->slug_blog])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteRow('/blog/delete/{{ $blog->id }}', '.list-blog', '/admin/blog/list')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    @if(count($listBlog) == 0 )
                                        <td colspan="5" class="text-center"><em>Không có Bài viết nào</em></td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="7">{!! $listBlog->links() !!}</td>
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
