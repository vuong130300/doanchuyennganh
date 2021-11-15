<?php $__env->startSection('content'); ?>
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="<?php echo e(URL::to('/trang-chu')); ?>">Home</a>
                        <span>Chi tiết sản phẩm</span>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $product_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="product__thumb__pic set-bg"
                                    data-setbg="<?php echo e(URL::to('/public/uploads/product/'.$value->product_image)); ?>">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="<?php echo e(URL::to('/public/uploads/product/'.$value->product_image)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4><?php echo e($value->product_name); ?></h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span> - 5 Reviews</span>
                        </div>
                        <h3><?php echo e(number_format($value->product_price),0,',','.'); ?>₫</h3>
                        <p>Coat</p>
                        <!-- <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" id="sp-1">
                                    </label>
                                    <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label>
                                </div>
                            </div> -->
                        <form>
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" value="<?php echo e($value->product_id); ?>"
                                class="cart_product_id_<?php echo e($value->product_id); ?>">

                            <input type="hidden" value="<?php echo e($value->product_name); ?>"
                                class="cart_product_name_<?php echo e($value->product_id); ?>">

                            <input type="hidden" value="<?php echo e($value->product_image); ?>"
                                class="cart_product_image_<?php echo e($value->product_id); ?>">

                            <input type="hidden" value="<?php echo e($value->product_quantity); ?>"
                                class="cart_product_quantity_<?php echo e($value->product_id); ?>">

                            <input type="hidden" value="<?php echo e($value->product_price); ?>"
                                class="cart_product_price_<?php echo e($value->product_id); ?>">
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input name="qty" type="number" min="1" value="1"
                                            class="cart_product_qty_<?php echo e($value->product_id); ?>" />
                                        <input name="productid_hidden" type="hidden"
                                            value="<?php echo e($value->product_id); ?>" /><br>
                                    </div>
                                </div>
                                <button type="button" class="primary-btn add-to-cart"
                                    data-id_product="<?php echo e($value->product_id); ?>" name="add-to-cart">
                                    <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                                </button>

                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> Yêu thích</a>
                                <a href="#"><i class="fas fa-exchange-alt"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Phương thức thanh toán</span></h5>
                                <img src="<?php echo e(asset('public/frontend/img/shop-details/details-payment.png')); ?>" alt="">
                                <ul>
                                    <li><span>Danh mục:</span> <?php echo e($value->category_name); ?></li>
                                    <li><span>Mã sản phẩm:</span> <?php echo e($value->product_id); ?></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Additional
                                    information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Customer Previews(5)</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <p class="note"><?php echo $value->product_desc; ?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-6" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <p class="note"></p>
                                    <div class="product__details__tab__content__item">
                                        <p><?php echo $value->product_content; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-7" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <div class="product__details__tab__content__item">
                                        <h5>Products Infomation</h5>
                                        <p>A Pocket PC is a handheld computer, which features many of the same
                                            a touchscreen and touchpad.</p>
                                        <p>As is the case with any new technology product, the cost of a Pocket PC
                                            $350.00, a new Pocket PC can now be purchased.</p>
                                    </div>
                                    <div class="product__details__tab__content__item">
                                        <h5>Material used</h5>
                                        <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                            worn all year round.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Sản phẩm liên quan</h3>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lienquan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="<?php echo e(URL::to('public/uploads/product/'.$lienquan->product_image)); ?>">
                        <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="<?php echo e(asset('public/frontend/img/icon/heart.png')); ?>" alt=""></a></li>
                            <li>
                                <a href="#"><img src="<?php echo e(asset('public/frontend/img/icon/compare.png')); ?>" alt="">
                                    <span>Compare</span>
                                </a>
                            </li>
                            <li><a href="<?php echo e(URL::to('/chi-tiet-san-pham/'.$lienquan->product_slug)); ?>">
                                    <img src="<?php echo e(asset('public/frontend/img/icon/search.png')); ?>" alt="">
                                </a></li>
                        </ul>
                    </div>
                    <form>
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" value="<?php echo e($lienquan->product_id); ?>"
                            class="cart_product_id_<?php echo e($lienquan->product_id); ?>">

                        <input type="hidden" value="<?php echo e($lienquan->product_name); ?>"
                            class="cart_product_name_<?php echo e($lienquan->product_id); ?>">

                        <input type="hidden" value="<?php echo e($lienquan->product_quantity); ?>"
                            class="cart_product_quantity_<?php echo e($lienquan->product_id); ?>">

                        <input type="hidden" value="<?php echo e($lienquan->product_image); ?>"
                            class="cart_product_image_<?php echo e($lienquan->product_id); ?>">

                        <input type="hidden" value="<?php echo e($lienquan->product_price); ?>"
                            class="cart_product_price_<?php echo e($lienquan->product_id); ?>">

                        <input type="hidden" value="1" class="cart_product_qty_<?php echo e($lienquan->product_id); ?>">

                        <div class="product__item__text">
                            <h6><?php echo e($lienquan->product_name); ?></h6>
                            <a type="button" data-id_product="<?php echo e($lienquan->product_id); ?>" name="add-to-cart"
                                class="add-cart add-to-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><?php echo e(number_format($lienquan->product_price).' '.'VNĐ'); ?></h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Related Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_not_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>