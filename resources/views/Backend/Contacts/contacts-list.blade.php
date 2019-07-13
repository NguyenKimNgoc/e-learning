@extends('Backend.Layouts.admin-main')

@section('title')
Admin | Liên Hệ Khách Hàng
@stop

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách liên hệ
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
            <li class="active">Danh sách liên hệ</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Người liên hệ</th>
                                <th>Email</th>
                                <th>Nội dung </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $n=1;?>
                            @foreach($listContacts as $contacts)
                            <tr>
                                <td class="text-center">{!! $n++ !!}</td>
                                <td class="text-center">{{$contacts->full_name}}</td>
                                <td class="text-center">{{$contacts->email}}</td>
                                <td class="text-center">{!! $contacts->content_contacts !!}</td>
                                <td class="text-center">
                                    @if($contacts->deleted_flag == 0)
                                    <button class="btn btn-xs btn-primary open-reply-contacts"
                                            data-toggle="modal"
                                            data-id = "{{$contacts->id}}"
                                            data-email = "{{$contacts->email}}"
                                            data-full_name = "{{$contacts->full_name}}"
                                            data-content = "{!! $contacts->content_contacts !!}"
                                    ><i class="fa fa-comment-dots" ></i><i class="fa fa-paper-plane" aria-hidden="true"></i> Trả lời</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @if(count($listContacts) == 0 )
                            <tr>
                                <td colspan="5" class="text-center"><em>Không có Bài viết nào</em></td>
                            </tr>
                            @endif
                            <tr>
                                <td colspan="7">{!! $listContacts->appends($_GET)->render() !!}</td>
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
<!-- Modal -->
<div class="modal fade" id="repContacts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
        <div class="modal-content" id="postContacts">
            <div class="modal-header">
                <h5 class="modal-title ">Trả Lời Liên Hệ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('send-mail-contacts')}}" method="post">
                @csrf
                <input type="hidden" id="id" name="id" value="">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Họ Tên Khách Hàng</label>
                    <input type="text" id="full_name" name="full_name" class="form-control" readonly value="">
                </div>
                <div class="form-group">
                    <label for="">Email Khách Hàng</label>
                    <input type="text" id="email" name="email" value="" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nội Dung Liên Hệ</label>
                    <textarea name="content_contacts" class="form-control" cols="30" rows="10" id="content" readonly></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nội Dung Trả Lời</label>
                    <textarea name="replyContact"  class="form-control" cols="30" rows="10"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i> Trả lời</button>
            </div>
            </form>
        </div>
    </div>
</div>
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

    $(document).ready(function () {
        $(".open-reply-contacts").click(function () {
            $('#id').val($(this).data('id'));
            $('#full_name').val($(this).data('full_name'));
            $('#email').val($(this).data('email'));
            $('#content').val($(this).data('content'));
            $('#repContacts').modal('show');
        });
    });
</script>
@stop
@stop
