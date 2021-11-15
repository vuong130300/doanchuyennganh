<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/fontawesome-free-5.15.4-web/css/all.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo e(asset('public/frontend/images/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?php echo e(asset('public/frontend/images/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="<?php echo e(asset('public/frontend/images/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="<?php echo e(asset('public/frontend/images/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed"
        href="<?php echo e(asset('public/frontend/images/apple-touch-icon-57-precomposed.png')); ?>">
</head>
<!--/head-->

<body>
    <div class="wrapper">
        <header id="header">
            <!--header-->
            <div class="header_top">
                <!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> 0917889558</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> quocduong081000@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->

            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="<?php echo e(URL::to('/trang-chu')); ?>"><img
                                        src="<?php echo e(asset('public/frontend/images/logo.png')); ?>" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa"
                                        data-toggle="dropdown">
                                        USA
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canada</a></li>
                                        <li><a href="#">UK</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa"
                                        data-toggle="dropdown">
                                        DOLLAR
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canadian Dollar</a></li>
                                        <li><a href="#">Pound</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">

                                    <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>

                                    <?php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if($customer_id!=NULL && $shipping_id==NULL){ 
                                ?>
                                    <li><a href="<?php echo e(URL::to('/checkout')); ?>"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>

                                    <?php
                                    }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                ?>
                                    <li><a href="<?php echo e(URL::to('/payment')); ?>"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>
                                    <?php 
                                    }else{
                                ?>
                                    <li><a href="<?php echo e(URL::to('/login-checkout')); ?>"><i class="fa fa-crosshairs"></i> Thanh
                                            toán</a></li>
                                    <?php
                                }
                                ?>

                                    <li><a href="<?php echo e(URL::to('/show-cart')); ?>"><i class="fa fa-shopping-cart"></i> Giỏ
                                            hàng</a></li>


                                    <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){ 
                                ?>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <span class="username">
                                                <i class="fa fa-user"></i>
                                                <?php
					                    $name=Session::get('customer_name');
					                    if($name){
						                    echo $name;
					                    }
				                        ?>

                                            </span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu extended logout">
                                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                            <li><a href="<?php echo e(URL::to('/logout-checkout')); ?>"><i class="fa fa-sign-out"></i>
                                                    Đăng xuất</a></li>
                                        </ul>
                                    </li>

                                    <?php
                                }else{
                                ?>
                                    <li><a href="<?php echo e(URL::to('/login-checkout')); ?>"><i class="fa fa-user"
                                                aria-hidden="true"></i> Tài khoản</a></li>
                                    <?php 
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-middle-->

            <div class="header-bottom">
                <!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="<?php echo e(URL::to('/trang-chu')); ?>" class="active">Trang chủ</a></li>
                                    <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a
                                                    href="<?php echo e(asset(URL::to('/danh-muc-san-pham/'.$cate->category_product_slug))); ?>"><?php echo e($cate->category_name); ?></a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>

                                    </li>
                                    <!-- <li><a href="<?php echo e(URL::to('/show-cart')); ?>">Giỏ hàng</a></li> -->
                                    <li><a href="contact-us.html">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <form action="<?php echo e(URL::to('/tim-kiem')); ?>" method="GET">
                                <?php echo e(csrf_field()); ?>

                                <div class="search_box pull-right">
                                    <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"
                                        class="style-drop" />
                                    <button type="submit" class="btn-search-style">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>
        <!--/header-->

        <section id="slider">
            <!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-5">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Oh.So.Pro</h2>
                                        <p>Coming Soon</p>
                                        <button type="button" class="btn btn-default get">Learn More</button>
                                        <button type="button" class="btn btn-default get">Buy</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="<?php echo e(asset('public/frontend/images/slide/slide1.jpg')); ?>"
                                            class="girl img-responsive" alt="" />

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-7">
                                        <img src="<?php echo e(asset('public/frontend/images/slide/slide2.jpg')); ?>"
                                            class="girl img-responsive" alt="" />

                                    </div>
                                    <div class="col-sm-5">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Your new Superpower.</h2>
                                        <button type="button" class="btn btn-default get">Learn More</button>
                                        <button type="button" class="btn btn-default get">Buy</button>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-5">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Full Screen Ahead.</h2>
                                        <p>New </p>
                                        <button type="button" class="btn btn-default get">Learn More</button>
                                        <button type="button" class="btn btn-default get">Buy</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <img src="<?php echo e(asset('public/frontend/images/slide/slide3.jpg')); ?>"
                                            class="girl img-responsive" alt="" />

                                    </div>
                                </div>

                            </div>

                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--/slider-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Danh mục sản phẩm</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="<?php echo e(asset(URL::to('/danh-muc-san-pham/'.$cate->category_product_slug))); ?>"><?php echo e($cate->category_name); ?></a>
                                        </h4>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!--/category-products-->
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">

                        <?php echo $__env->yieldContent('content'); ?>

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>e</span>-shopper</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="<?php echo e(asset('public/frontend/images/iframe1.png')); ?>" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fas fa-play-circle"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="<?php echo e(asset('public/frontend/images/iframe2.png')); ?>" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fas fa-play-circle"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="<?php echo e(asset('public/frontend/images/iframe3.png')); ?>" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fas fa-play-circle"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="<?php echo e(asset('public/frontend/images/iframe4.png')); ?>" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fas fa-play-circle"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="address">
                                <img src="<?php echo e(asset('public/frontend/images/map.png')); ?>" alt="" />
                                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Service</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Online Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Order Status</a></li>
                                    <li><a href="#">Change Location</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Quock Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privecy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Billing System</a></li>
                                    <li><a href="#">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Company Information</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Store Location</a></li>
                                    <li><a href="#">Affillate Program</a></li>
                                    <li><a href="#">Copyright</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <form action="#" class="searchform">
                                    <input type="text" placeholder="Your email address" />
                                    <button type="submit" class="btn btn-default"><i class="fas fa-arrow-circle-up"></i></button>
                                    <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank"
                                    href="http://www.themeum.com">Themeum</a></span></p>
                    </div>
                </div>
            </div>

        </footer>
        <!--/Footer-->
    </div>


    <script src="<?php echo e(asset('public/frontend/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>
</body>

</html>