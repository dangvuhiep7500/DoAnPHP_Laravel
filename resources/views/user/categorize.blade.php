@extends('layouts/layouts')
@section('content')

<div class="latest-products">
    <div class="container">
        <div class="row"> 
               
            <!-- section title -->
        
            <!-- section title -->
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
                        <img src="../img/shop01.png" alt="" />
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
                        <img src="../img/shop03.png" alt="" />
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
                        <img src="../img/shop02.png" alt="" />
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
<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">Sản Phẩm</h3>
    </div>
</div>
@foreach($category->products as $product) 
                            <div class="col-md-3" style = "padding-bottom:40px">
                                <div class="product">
                                    <div class="product-img">
                                    <a href="{{url('productdetail', $product->id)}}"><img  src={{$product->image}} alt="" />
                                        <div class="product-label">                                           
                                            <span class="new">NEW</span>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="product-body" style = "text-align: -webkit-center">
                                        <p class="product-category">{{$product->category->cat_name}}</p>
                                        <h3 class="product-name">
                                            <a href="{{url('productdetail', $product->id)}}">{{$product->title}}</a>
                                        </h3>
                                        <h4 class="product-price">
                                            {{number_format($product->price, 0, '', ',');}}đ <del class="product-old-price">{{number_format($product->priceNsale, 0, '', ',');}}đ</del>
                                        </h4>
                                        <form action="{{url('addcart', $product->id)}}" method="POST">

                                        @csrf
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" value="1" step="1" min="1" max="99" name="quantity" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                    </div>
                                    
                                    <div class="add-to-cart" value="Add Cart">
                                        <button class="add-to-cart-btn">
                                            <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach

                @if(method_exists($category->products,'links'))
                <div class="d-flex justify-content-center">
                {!! $category->products->links() !!}
                </div>
                @endif
        </div>
             
    </div>
                
</div>

    


@endsection