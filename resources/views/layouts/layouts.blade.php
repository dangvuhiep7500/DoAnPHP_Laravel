<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro</title>
  
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>

    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> 0123 456 789</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i>billion@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> TP.Thủ Đức-HCM</a></li>
                </ul>
                <ul class="header-links pull-right">
                <li class="nav-item">
                    <!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
                    @if (Route::has('login'))
                @auth
                <li class="nav-item">
                  <a class="nav-link">
            
                  <x-app-layout>     
                    </x-app-layout>  
                  </a>
                </li>
                
                <!-- <li><a class="nav-link" href="{{url('dashboard')}}" ><i class="fa fa-user-o"></i>dashboard</a></li> -->
                      
                    
                    @else
                    
                    <li><a class="nav-link" href="{{ route('login') }}" ><i class="fa fa-user-o"></i>Đăng Nhập</a></li>

                    @if (Route::has('register'))
                    <li><a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-o"></i> Đăng kí</a></li>
                    @endif
                @endauth
                @endif
                </li>

                </ul>
            </div>
        </div>


                
        <!-- @if(session()->has('message'))
      
    

        <div style="float:right; width:300px" class="alert alert-success">

        <button  type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}

      </div>
      -->
      @endif
      
      
                    <!-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> -->
            
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="/" class="logo">
                                <img src="../img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="{{url('search')}}" method="">                            
                           @csrf
                                <input class="input" name="search" placeholder="Tìm kiếm tại đây...">
								<input type="submit" value="Tìm kiếm" class="search-btn" >
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                        @if (Route::has('login'))
                @auth
                 <!-- Wishlist -->
                            <div class="dropdown" >                    
                                <a class="dropdown-toggle" href="{{url('purchasehistory')}}">
                            <i class="fa fa-shopping-cart"></i>
                                Lịch sử mua 
                                </a>
                            </div>
								<!-- /Wishlist -->
                            <!-- Cart -->
                            <div class="dropdown" >                    
                                <a class="dropdown-toggle" href="{{url('showcart')}}">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="qty">{{$count}}</div>
                                Giỏ hàng
                                </a>
                            </div>
                            <!-- /Cart -->
                            @else
                            
                            <!-- Wishlist -->
                            <div class="dropdown" >                    
                                <a class="dropdown-toggle" href="{{url('login')}}">
                            <i class="fa fa-shopping-cart"></i>
                                Lịch sử mua
                                </a>
                            </div>
								<!-- /Wishlist -->
                             <!-- Cart -->
                             <div class="dropdown" >                    
                                <a class="dropdown-toggle" href="{{url('login')}}">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="qty">{{0}}</div>
                                Giỏ hàng
                                </a>
                            </div>
                            <!-- /Cart -->
                            @endauth
                            @endif
                           
                            <!-- Menu Toogle -->
                            <!-- <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div> -->
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
                
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->

         <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="/">Trang Chủ</a></li>
                    @foreach($categories as $item)

                    <li><a href="{{url('categorize', $item->id)}}">{{$item->cat_name}}</a></li>
                   
                    @endforeach 
                </ul>
                <!-- /NAV -->
            </div>
         
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    
        @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
   
        <div style="float:right; width:300px" class="alert alert-success">

        <button  type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
        </div>
        @endif
    <!-- /NAVIGATION -->

    </header>
    <!-- /HEADER -->



    @yield('content')

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Mua hàng online với nhiều ưu đãi hơn tại <strong>BILLION</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Nhập Email của bạn tại đây">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng kí</button>                  
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông Tin Cửa Hàng</h3>
                            <p></p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>TP.Thủ Đức-HCM</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>0123 456 789</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>billion@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thể Loại</h3>
                            <ul class="footer-links">
                                <li><a href="#">Máy Tính Xách Tay</a></li>
                                <li><a href="#">Điện Thoại</a></li>
                                <li><a href="#">Máy Ảnh</a></li>
                                <li><a href="#">Phụ Kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông Tin</h3>
                            <ul class="footer-links">
                                <li><a href="#">Về Chúng Tôi</a></li>
                                <li><a href="#">Liên Hệ Với Chúng Tôi</a></li>
                                <li><a href="#">Chính Sách Bảo Mật</a></li>
                                <li><a href="#">Chính Sách Ưu Đãi</a></li>
                                <li><a href="#">Điều Khoản & Điều Kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Dịch Vụ</h3>
                            <ul class="footer-links">
                                <li><a href="#">Tài Khoản Của Tôi</a></li>
                                <li><a href="#">Xem Giỏ Hàng</a></li>
                                <li><a href="#">Danh Sách Yêu Thích</a></li>
                                <li><a href="#">Theo Dõi Đơn Hàng Của Tôi</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/nouislider.min.js"></script>
    <script src="/js/jquery.zoom.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>