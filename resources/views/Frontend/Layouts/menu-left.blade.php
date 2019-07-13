 <div class="col-md-12 menu-right">
        <ul>
            <li>
                <a href="{{route('course-list-all')}}"><i class="far fa-list-alt"></i> Tất cả các khóa học</a>
            </li>
            @foreach(\App\Helpers\Helpers::getListCateGroup() as $cateGroup)
            <li id="{{$cateGroup->id}}" class="menu-01">
                <a href="{{route('courses',$cateGroup->slug_cate_group)}}">{{$cateGroup->name}}</a>
                <div class="sub-menu {{$cateGroup->id}}">
                    <ul>
                        <li class="title-sub-menu">{{$cateGroup->name}}</li>
                       @foreach(\App\Helpers\Helpers::getListCate() as $cate)
                           <?php
                            $route = url('product/cate').'/'.$cateGroup->slug_cate_group.'/'.$cate->slug_cate;
                            if (isset($cate->cate_group_id) && $cateGroup->id == $cate->cate_group_id) {
                                echo '<li>'.'<a href='.$route.'>'.$cate->cate_name.'</a>'.'</li>';
                            }
                            ?>

                        @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
            <li>
                <a href="{{route('blog')}}"><i class="far fa-newspaper"></i> Tin Tức</a>
            </li>
            <li>
                <a href="{{route('contacts')}}"><i class="far fa-envelope"></i> Liên Hệ</a>
            </li>

        </ul>
 </div>
 @foreach(\App\Helpers\Helpers::getListBanner() as $banners)
 <div class="col-md-12 banner-left">
     <a href=""><img src="{{url('/')}}{{$banners->images}}"></a>
 </div>
@endforeach
 <div class="fb-page" style="margin-top: 20px;"
      data-href="https://www.facebook.com/%C4%90%C3%A0o-T%E1%BA%A1o-Tr%E1%BB%B1c-Tuy%E1%BA%BFn-E-Learning-2359564160951561/?modal=admin_todo_tour"
      data-width="380"
      data-hide-cover="false"
      data-show-facepile="false"></div>
