<header>
    <nav class="navbar navbar-default menu-top" id="menu-top-screen" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-7">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand col-md-3 logo-edu" href="{{route('trang-chu')}}"><img src="{{url('/images/logo/elearning-logo.png')}}"></a>
                <form class="navbar-form navbar-left navbar-right" role="search" action="{{route('search-frontend')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control col-md-12" name="searchName" value="{{old('searchName')}}" placeholder="Tìm kiếm khóa học ">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse col-md-5 navbar-right">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="action-menu-top">
                        <a href="{{route('cart-list')}}">
                            <i class="fa fa-shopping-cart"></i>
                            @if(\Cart::instance('default')->count() > 0)
                                {{ \Cart::instance('default')->count() }}
                            @endif
                        </a>
                    </li>
                    @if(\Auth::guard('l_customers')->check())
                    <li class="action-menu-top" data-toggle="tooltip" data-placement="bottom" title="Lịch sử mua hàng"><a href="{{route('list-history',\Auth::guard('l_customers')->user()->slug_customer)}}"><i class="fas fa-history"></i> {{\App\Helpers\Helpers::countOrderByCustomer()}}</a></li>
                    @endif
                    @if(\Auth::guard('l_customers')->check())
                        <li class="dropdown ">
                            <a class="dropdown-toggle username" data-toggle="dropdown" href="#">{{ \Auth::guard('l_customers')->user()->full_name }}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu user-drop">
                                <li><a href="{{route('profile', ['id'=>\Auth::guard('l_customers')->user()->id,'slug_customer'=> \Auth::guard('l_customers')->user()->slug_customer])}}"><i class="fas fa-user"></i> Trang cá nhân</a></li>
                                <li><a href="{{route('logoutFrontend')}}"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{route('loginFrontend')}}" class="username"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<section class="banner">
    <div class="row">
            <div class="slick-banner">
                <div class="item-banner">
                    @foreach(\App\Helpers\Helpers::getListBannerBig() as $bannerBig)
                        <div class="item">
                            <img alt="First slide"  src="{{url('/')}}{{$bannerBig->images}}">
                        </div>
                    @endforeach
                </div>

            </div>
    </div>
</section>
