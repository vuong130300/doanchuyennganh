<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/bootstrap.min.css')); ?>">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('public/backend/css/style.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('public/backend/css/style-responsive.css')); ?>" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/font.css')); ?>" type="text/css" />
    <link href="<?php echo e(asset('public/backend/css/font-awesome.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/morris.css')); ?>" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/monthly.css')); ?>">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="<?php echo e(asset('public/backend/js/jquery2.0.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/raphael-min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/morris.js')); ?>"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo e(asset('public/backend/images/2.png')); ?>">
                            <span class="username">
                                <?php
                    $name=Session::get('admin_name');
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
                            <li><a href="<?php echo e(URL::to('/logout')); ?>"><i class="fa fa-key"></i> ????ng xu???t</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="<?php echo e(URL::to('/dashboard')); ?>">
                                <i class="fa fa-dashboard"></i>
                                <span>T???ng quan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>????n h??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/manage-order')); ?>">Qu???n l?? ????n h??ng</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh s??ch kh??ch h??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-customer')); ?>">Qu???n l?? kh??ch h??ng</a></li>
                                <li><a href="<?php echo e(URL::to('/list-customer')); ?>">Li???t k?? kh??ch h??ng</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh s??ch nh?? cung c???p</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-producer')); ?>">Th??m nh?? cung c???p</a></li>
                                <li><a href="<?php echo e(URL::to('/list-producer')); ?>">Li???t k?? nh?? cung c???p</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh m???c s???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-category-product')); ?>">Th??m danh m???c s???n ph???m</a></li>
                                <li><a href="<?php echo e(URL::to('/all-category-product')); ?>">Li???t k?? danh m???c s???n ph???m</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>S???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-product')); ?>">Th??m s???n ph???m</a></li>
                                <li><a href="<?php echo e(URL::to('/all-product')); ?>">Li???t k?? s???n ph???m</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>M?? gi???m gi??</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/insert-coupon')); ?>">Qu???n l?? m?? gi???m gi??</a></li>
                                <li><a href="<?php echo e(URL::to('/list-coupon')); ?>">Li???t k?? m?? gi???m gi??</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh m???c b??i vi???t</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-category-post')); ?>">Qu???n l?? danh m???c b??i vi???t</a></li>
                                <li><a href="<?php echo e(URL::to('/list-category-post')); ?>">Li???t k?? danh m???c b??i vi???t</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>B??i vi???t</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo e(URL::to('/add-post')); ?>">Qu???n l?? b??i vi???t</a></li>
                                <li><a href="<?php echo e(URL::to('/list-post')); ?>">Li???t k?? b??i vi???t</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //market-->
                <!-- <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h4>Visitors</h4>
                    <h3>13,500</h3>
                    <p>Other hand, we denounce</p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                    <h4>Users</h4>
                        <h3>1,250</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Sales</h4>
                        <h3>1,500</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Orders</h4>
                        <h3>1,500</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>   -->
                <?php echo $__env->yieldContent('admin_content'); ?>;


            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>?? 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="<?php echo e(asset('public/backend/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/jquery.dcjqaccordion.2.7.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/jquery.nicescroll.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/jquery-validation.js')); ?>"></script>
    <script type="text/javascript">
    function ChangeToSlug() {
        var slug;

        //L???y text t??? th??? input title 
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //?????i k?? t??? c?? d???u th??nh kh??ng d???u
        slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
        slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
        slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
        slug = slug.replace(/??|???|???|???|???/gi, 'y');
        slug = slug.replace(/??/gi, 'd');
        //X??a c??c k?? t??? ?????t bi???t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
        slug = slug.replace(/ /gi, "-");
        //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
        //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox c?? id ???slug???
        document.getElementById('convert_slug').value = slug;
    }
    </script>

    <!-- <script type="text/javascript">
    $(document).ready(function() {

        fetch_delivery();

        function fetch_delivery() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '<?php echo e(url(' / select - feeship ')); ?>',
                method: 'POST',
                data: {
                    _token: _token
                },
                success: function(data) {
                    $('#load_delivery').html(data);
                }
            });
        }
        $(document).on('blur', '.fee_feeship_edit', function() {

            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            // alert(feeship_id);
            // alert(fee_value);
            $.ajax({
                url: '<?php echo e(url(' / update - delivery ')); ?>',
                method: 'POST',
                data: {
                    feeship_id: feeship_id,
                    fee_value: fee_value,
                    _token: _token
                },
                success: function(data) {
                    fetch_delivery();
                }
            });
        });
        $('.add_delivery').click(function() {
            var city = $('.city').val();
            var province = $('.province').val();
            var wards = $('.wards').val();
            var fee_ship = $('.fee_ship').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: '<?php echo e(url(' / insert - delivery ')); ?>',
                method: 'POST',
                data: {
                    city: city,
                    province: province,
                    _token: _token,
                    wards: wards,
                    fee_ship: fee_ship
                },
                success: function(data) {
                    fetch_delivery();
                    // alert('Th??m ph?? v???n chuy???n th??nh c??ng')
                }
            });
        });
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '<?php echo e(url(' / select - delivery ')); ?>',
                method: 'POST',
                data: {
                    action: action,
                    ma_id: ma_id,
                    _token: _token
                },
                success: function(data) {
                    $('#' + result).html(data);
                }
            });
        });
    })
    </script> -->

    <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

    <script type="text/javascript">
    $.validate({

    });
    </script>
    <script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
    </script>

    <script type="text/javascript">
    $('.order_details').change(function() {
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        //L???y ra s??? l?????ng
        quantity = [];
        $("input[name='product_sales_quantity']").each(function() {
            quantity.push($(this).val());
        });
        //L???y ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function() {
            order_product_id.push($(this).val());
        });
        j = 0;
        for (i = 0; i < order_product_id.length; i++) {
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                j = j + 1;
                if (j == 1) {
                    alert('S??? l?????ng b??n trong kho kh??ng ?????');
                }
                $('.color_qty_' + order_product_id[i]).css('background', '#000');
            }
        }
        if (j == 0) {
            $.ajax({
                url: '<?php echo e(url('/update-order-qty ')); ?>',
                method: 'POST',
                data: {
                    _token: _token,
                    order_status: order_status,
                    order_id: order_id,
                    quantity: quantity,
                    order_product_id: order_product_id
                },
                success: function(data) {
                    alert('Thay ?????i t??nh tr???ng ????n h??ng th??nh c??ng');
                    location.reload();
                }
            });
        }
    });
    </script>

    <script type="text/javascript">
    $('.update_quantity_order').click(function() {
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_' + order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();
        
        $.ajax({
            url: '<?php echo e(url('/update-qty')); ?>',
            method: 'POST',
            data: {
                _token: _token,
                order_product_id: order_product_id,
                order_qty: order_qty,
                order_code: order_code
            },
            // dataType:"JSON",
            success: function(data) {
                alert('C???p nh???t s??? l?????ng th??nh c??ng');
                location.reload();
            }
        });

    });
    </script>

    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo e(asset('public/backend/js/jquery.scrollTo.js')); ?>"></script>
    <!-- morris JavaScript -->
    <script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [{
                    period: '2015 Q1',
                    iphone: 2668,
                    ipad: null,
                    itouch: 2649
                },
                {
                    period: '2015 Q2',
                    iphone: 15780,
                    ipad: 13799,
                    itouch: 12051
                },
                {
                    period: '2015 Q3',
                    iphone: 12920,
                    ipad: 10975,
                    itouch: 9910
                },
                {
                    period: '2015 Q4',
                    iphone: 8770,
                    ipad: 6600,
                    itouch: 6695
                },
                {
                    period: '2016 Q1',
                    iphone: 10820,
                    ipad: 10924,
                    itouch: 12300
                },
                {
                    period: '2016 Q2',
                    iphone: 9680,
                    ipad: 9010,
                    itouch: 7891
                },
                {
                    period: '2016 Q3',
                    iphone: 4830,
                    ipad: 3805,
                    itouch: 1598
                },
                {
                    period: '2016 Q4',
                    iphone: 15083,
                    ipad: 8977,
                    itouch: 5185
                },
                {
                    period: '2017 Q1',
                    iphone: 10697,
                    ipad: 4470,
                    itouch: 2038
                },

            ],
            lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="<?php echo e(asset('public/backend/js/monthly.js')); ?>"></script>
    <script type="text/javascript">
    $(window).load(function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
    </script>
    <!-- //calendar -->
</body>

</html>