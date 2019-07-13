@extends('Frontend.Layouts.main')

@section('title')
    Lịch sử mua hàng
@stop
@section('addStylesheet')

@stop
@section('content')
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <div class="breadcrumb-container">
                        <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="home">
                                <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>

                            <li><strong><span itemprop="title">Lịch sử mua hàng</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="col-md-3">
        @include('Frontend/Layouts/menu-left')
    </section>
    <section class="col-md-9">
        <div class="col-md-12">
            <div class="title col-md-8">
                <a href="" class="title-history">LỊCH SỬ MUA HÀNG</a>
            </div>
            <form action="{{route('searchHistory')}}" method="POST">
                @csrf
                <div class="form-group col-md-4 form-search-history">
                    <input type="text" class="form-control" name="searchHis" placeholder="Tìm kiếm..." value="{{old('searchHis')}}">
                </div>
            </form>
            <div class="list-history">
                <table class="table hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên Khóa Học</th>
                            <th>Tác Giả</th>
                            <th>Giá Khóa Học</th>
                            <th>Ngày Mua</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $n = 1 ;?>
                    @foreach($listHistory as $list)
                        <tr>
                            <td style="width: 20px  " class="text-center text-danger">{{$n++}}</td>
                            <td>
                                <img src="{{url('/')}}{{$list->c_images}}" alt="" style="width:60px">
                            </td>
                            <td>
                                <a href="{{route('product-detail',['id'=>$list->course_id,'slug_course'=>$list->slug_course])}}">{{$list->c_title}}</a>
                            </td>
                            <td>
                                <a href="{{route('profileAuthor',['id'=>$list->userID,'slug_user'=>$list->slug_user])}}">{{$list->full_name}}</a>
                            </td>
                            <td>
                                @if(!empty($list->c_hot == 2 ))
                                    {{number_format($list->c_price_sale)}} vnđ
                                @else
                                    {{number_format($list->c_price)}} vnđ
                                @endif
                            </td>
                            <td>
                                {{ date_format(new DateTime($list->created),'d-m-Y')}}
                            </td>
                        </tr>
                        @endforeach
                       <tr>
                           <td colspan="6" class="text-right"> {!! $listHistory->links() !!}</td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop