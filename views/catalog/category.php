<?php include ROOT . '/views/layouts/header.php'; ?>
</div>
</div>
</div>
<div class="breadcrumbs">
        <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active"><?php foreach ($categories as $categoryItem):
                   if ($categoryItem['id'] == $categoryId) echo $categoryItem['name'];
                   endforeach;?>
            </li>
        </ol>

    </div>
</div>
<!--content-->
<div class="products">
    <div class="container">
        <h2><?php foreach ($categories as $categoryItem):
                if ($categoryItem['id'] == $categoryId) echo $categoryItem ['name'];
            endforeach;?></h2>
        <div class="col-md-9">
            <div class="content-top1">
                <?php foreach ($categoryProducts as $product ): ?>
                    <div class="col-md-4 col-md4">
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

            </div>
        </div>

        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Other Categories</h3>
                <ul class="cute"><?php foreach ($categories as $categoryItem): ?>
                        <li class="item1"><a href="/category/<?php echo $categoryItem['id'];?>"><?php  if ($categoryItem['id'] != $categoryId) echo $categoryItem['name'];?></a>
                        <!--c   <ul class="cute">
                            <li class="subitem1"><a href="single.html">#</a></li>
                            <li class="subitem2"><a href="single.html">#</a></li>
                            <li class="subitem3"><a href="single.html">#</a></li>
                        </ul>-->
                        </li><?php endforeach;?>

                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu-drop > li > ul'),
                        menu_a  = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!--//menu-->
            <!--seller
            <div class="product-bottom">
                <h3 class="cate">Best Sellers</h3>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            //seller-->
            <!--tag--
            <div class="tag">
                <h3 class="cate">Tags</h3>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>-->

        </div>
    </div>
    <!--Постраничная навигация-->
    <div class="container">
        <?php echo $pagination->get(); ?>
    </div>
    <!--//content-->
    <?php include ROOT . '/views/layouts/footer.php'; ?>
