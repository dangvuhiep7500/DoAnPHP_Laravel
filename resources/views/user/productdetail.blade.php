@extends('layouts/layouts')
@section('content')

   <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="{{$product->image}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->

					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$product->title}}</h2>
							<br>
							<div>
							<p>✔ Tình trạng: Mới 100% </p>	
							<br>
							<p>✔ Hỗ trợ đổi mới trong 7 ngày. </p>
							<br>
							<p>✔ Bảo hành chính hãng 24 tháng. </p>
							<br>
							</div>
							<div>
								<h3 class="product-price">{{number_format($product->price, 0, '', ',');}}đ <del class="product-old-price">{{number_format($product->priceNsale, 0, '', ',');}}đ</del></h3>
							</div>
							<br>
							<form action="{{url('addcart', $product->id)}}" method="POST">
							@csrf
							<div class="add-to-cart"  value="Add Cart">
								<div class="qty-label">
									<div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" value="1" step="1" min="1" max="99" name="quantity" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                                <input type="button" value="+" class="plus">
                                    </div>
								</div>
								<br>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
							</div>
							</form>
									


						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{$product->description}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@endsection