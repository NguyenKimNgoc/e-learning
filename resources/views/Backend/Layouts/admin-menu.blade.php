 <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('/')}}{!! Auth::User()->avatar !!}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{!! Auth::User()->full_name !!}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                @if(Auth::user()->user_group == 1)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Quản Lý Thành Viên</span>
                        <span class="pull-right-container">
                           <span class="label label-danger pull-right">{!! \App\Helpers\Helpers::countUser() !!}</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{route('admin-users-list')}}"><i class="fa fa-circle-o"></i>Danh Sách Thành Viên</a></li>
                        <li><a href="{{route('user-add')}}"><i class="fa fa-circle-o"></i>Thêm Thành Viên</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->user_group != 2)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Quản Lý Khóa Học </span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right">
                              @if(Auth::user()->id ==1){!! \App\Helpers\Helpers::countCoursesAdmin() !!}
                              @else
                                  {!! \App\Helpers\Helpers::countCourses() !!}
                              @endif</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('course-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Khóa Học</a></li>
                        <li><a href="{{route('course-add')}}"><i class="fa fa-circle-o"></i> Thêm Khóa Học</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->user_group == 1)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Quản Lý Danh Mục</span>
                        <span class="pull-right-container">
                        <span class="label label-danger pull-right">{!! \App\Helpers\Helpers::countCategories() !!}</span>
                        </span>
                    </a>
                     <ul class="treeview-menu">
                        <li><a href="{{route('categoryGroup-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Nhóm Danh Mục</a></li>
                        <li><a href="{{route('categoryGroup-add')}}"><i class="fa fa-circle-o"></i> Thêm Nhóm Danh Mục</a></li>
                         <li><a href="{{route('category-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Danh Mục</a></li>
                         <li><a href="{{route('category-add')}}"><i class="fa fa-circle-o"></i> Thêm  Danh Mục</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->user_group == 1)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Quản Lý Quảng Cáo</span>
                        <span class="pull-right-container">
                        <span class="label label-success pull-right">{!! \App\Helpers\Helpers::countBanner() !!}</span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('banner-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Quảng Cáo</a></li>
                        <li><a href="{{route('banner-add')}}"><i class="fa fa-circle-o"></i> Thêm Quảng Cáo</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->user_group == 1 || Auth::user()->user_group == 2 )
                <li class="">
                    <a href="{{route('orders-list')}}">
                        <i class="fa fa-edit"></i> <span>Quản Lý Đơn Hàng</span>
                        <span class="pull-right-container">
                            <span class="pull-right-container">
                                <span class="label label-danger pull-right">{{\App\Helpers\Helpers::countOrders()}}</span>
                            </span>
                        </span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->user_group != 2)
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Quản Lý Bài Viết</span>
                        <span class="pull-right-container">
                            <span class="label label-primary pull-right">
                                @if(Auth::user()->id ==1){!! \App\Helpers\Helpers::countNewsAdmin() !!}
                                @else
                                    {!! \App\Helpers\Helpers::countNews() !!}
                                @endif
                            </span>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('news-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Bài Viết</a></li>
                        <li><a href="{{route('news-add')}}"><i class="fa fa-circle-o"></i> Thêm Bài Viết</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->user_group == 1 || Auth::user()->user_group == 2)
                <li class="">
                    <a href="{{route('contacts-list')}}">
                        <i class="fa fa-comments"></i><span>Quản Lý Liên Hệ</span>
                        <span class="label label-primary pull-right">{!! \App\Helpers\Helpers::countContacts() !!}</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->user_group ==1 )
                    <li class="">
                        <a href="{{route('contacts-config')}}">
                            <i class="fa fa-comments"></i> <span>Dữ Liệu Liên Hệ</span>
                        </a>
                    </li>
                @endif
                @if(Auth::user()->user_group ==1 )
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Quản Lý Tin Tức</span>
                            <span class="pull-right-container">
                            <span class="label label-primary pull-right">10
                            </span>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('blog-list')}}"><i class="fa fa-circle-o"></i> Danh Sách Tin Tức</a></li>
                            <li><a href="{{route('blog-add')}}"><i class="fa fa-circle-o"></i> Thêm Tin Tức</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>