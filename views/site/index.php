<?php include ROOT . '/views/layouts/header.php'; ?>

		<div class="clearfix"> </div>
			<!---pop-up-box---->
					<link href="/template/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="/template/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

							</form>
						</div>
						<p>	Shopping</p>
					</div>
				</div>
				 <script>
$(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
				</script>
	<!---->
		</div>
	</div>
</div>
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="/template/images/1.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	       			 </li>
			 		 <li>
	          			<img src="/template/images/3.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	       			 </li>
					 <li>
	          			<img src="/template/images/2.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	        		</li>
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
				</div>
				<div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<div class="col-md3">
						<div class="up-t">
							<h3>New products on BravoShop</h3>
						</div>
					</div>
				</div>
                <div class="clearfix"> </div>
			</div>

            <?php foreach ($latestProducts as $product):?>

			<div class="content-top1">

				<div class="col-md-3 col-md2 animated wow fadeInDown animated" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="/product/<?php echo $product['id'];?>">
                            <img class="img-responsive" src="<?php echo $product['image'];?>" alt=""/>
						</a>
						<h3>
                            <a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?>
                            </a>
                        </h3>

						<div class="price">
								<h5 class="item_price"><?php echo $product['price'];?> $</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"></div>
						</div>
					</div>
				</div>
                <?php endforeach;?>


			<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!--//content-->
	<div class="con-tp">
		<div class="container">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="products.html">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="/template/images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>30%offer</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<a href="products.html">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="/template/images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>45%offer</h4>
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
				<a href="products.html">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="/template/images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>50%offer</h4>
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="/template/images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>25%offer</h4>
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="/template/images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>50%offer</h4>
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="products.html">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="/template/images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>35%offer</h4>
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="c-btm">
		<div class="content-top1">
			<div class="container">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/template/images/pi9.png" alt="" />
						</a>
						<h3><a href="single.html">Trousers</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/template/images/pi10.png" alt="" />
						</a>
						<h3><a href="single.html">Formal</a></h3>
						<div class="price">
								<h5 class="item_price">$450</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/template/images/pi11.png" alt="" />
						</a>
						<h3><a href="single.html">Trousers</a></h3>
						<div class="price">
								<h5 class="item_price">$350</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/template/images/pi12.png" alt="" />
						</a>
						<h3><a href="single.html">Formal</a></h3>
						<div class="price">
								<h5 class="item_price">$400</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <?php include ROOT . '/views/layouts/footer.php'; ?>