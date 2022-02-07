
<!DOCTYPE html>
<html>
<head>
    <title>BravoShop</title>
    <link href="/template/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/template/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/simpleCart.min.js"> </script>
    <!-- slide -->
    <script src="/template/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- animation-effect -->
    <link href="/template/css/animate.min.css" rel="stylesheet">
    <script src="/template/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="/">Bravo<span>Shop</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="/cart">
                        <h3>
                            <div class="total">
                              <span id="cart-count"><?php echo Cart::countItems(); ?></span>
                                <span class="simpleCart_total"></span>)
                                                         </div>
                             <img src="/template/images/cart.png" alt=""/>
                         </h3>
                     </a>
                     <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                 </div>
             </div>
             <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                 <span><i class="glyphicon glyphicon-phone"></i>8-800-555-35-35</span>
                 <p>Call us</p>
             </div>
             <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                 <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
             </div>
             <div class="clearfix"> </div>
         </div>
     </div>
     <div class="container">
         <div class="head-top">
             <div class="n-avigation">

                 <nav class="navbar nav_bottom" role="navigation">

                     <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="/">Home</a></li>

                            <li class="dropdown mega-dropdown active">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Categories<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">

                                        <!-- Tab panes -->
                                       <div class="tab-content">
                                            <div class="tab-pane active" id="men">
                                                <ul class="nav-list list-inline"> <?php foreach ($categories as $categoryItem): ?>
                                                    <li>
                                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                                            <img src="<?php echo $categoryItem['img'];?>" class="img-responsive" alt=""/>
                                                            <?php echo $categoryItem ['name'];?>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>

                                                  </ul>
                                              </div>

                                          </div>
                                      </div>
                                      <!-- Nav tabs -->

                                </div>
                            </li>
                            <li><a href="/catalog/page-1">Shop All</a></li>
                            <li class="last"><a href="contact.html">About Us</a></li>

                      <?php if (User::isGuest()): ?>
                            <li><a href="/user/login/">Login</a></li>
                            <?php else: ?>

                            <li><a href="/cabinet/">Account</a></li>
                            <li><a href="/user/logout/">Logout</a></li>
                            <?php endif; ?>

                        </ul>
                    </div><!-- /.navbar-collapse -->
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

                </nav>
            </div>
        </div>
    </div>
</div>
