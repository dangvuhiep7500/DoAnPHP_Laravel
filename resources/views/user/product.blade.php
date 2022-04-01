
<div class="latest-products">
    <div class="container">
        <div class="row">
            @foreach ($data as $product)     
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
                                
                                
                                
        </div>
                @if(method_exists($data,'links'))
                <div class="d-flex justify-content-center">
                {!! $data->links() !!}

                </div>
                @endif
    </div>
                
</div>


                                