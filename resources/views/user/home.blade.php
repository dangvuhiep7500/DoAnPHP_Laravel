@extends('layouts/layouts')

@section('content')

   
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop01.png" alt="" />
                    </div>
                    <div class="shop-body">
                        <h3>MÁY TÍNH XÁCH TAY<br /></h3>
                        <a href="#" class="cta-btn">Mua Ngay <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop03.png" alt="" />
                    </div>
                    <div class="shop-body">
                        <h3>PHỤ KIỆN<br /></h3>
                        <a href="#" class="cta-btn">Mua Ngay<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop02.png" alt="" />
                    </div>
                    <div class="shop-body">
                        <h3>MÁY ẢNH<br /></h3>
                        <a href="#" class="cta-btn">Mua Ngay <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản Phẩm Mới Nhất</h3>
                    <!-- <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1">Laptops</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab1">Điện Thoại</a></li>
                            <li><a data-toggle="tab" href="#tab1">Máy Ảnh</a></li>
                            <li><a data-toggle="tab" href="#tab1">Phụ Kiện</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- /section title -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@include('user.product')
@endsection