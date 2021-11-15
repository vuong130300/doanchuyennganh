<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb__text">
                <h4>Sản phẩm</h4>
                <div class="breadcrumb__links">
                    <a href="<?php echo e(URL::to('/trang-chu')); ?>">Trang chủ</a>
                    <span>Sản phẩm</span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Danh mục sản phẩm</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a
                                                        href="<?php echo e(asset(URL::to('/danh-muc-san-pham/'.$cate->category_product_slug))); ?>"><?php echo e($cate->category_name); ?></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1–12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="<?php echo e(URL::to('public/uploads/product/'.$product->product_image)); ?>">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="<?php echo e(asset('public/frontend/img/icon/heart.png')); ?>"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('public/frontend/img/icon/compare.png')); ?>"
                                                    alt="">
                                                <span>Compare</span></a></li>
                                        <li><a href="<?php echo e(URL::to('/chi-tiet-san-pham/'.$product->product_slug)); ?>"><img
                                                    src="<?php echo e(asset('public/frontend/img/icon/search.png')); ?>" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <form>
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" value="<?php echo e($product->product_id); ?>"
                                        class="cart_product_id_<?php echo e($product->product_id); ?>">

                                    <input type="hidden" value="<?php echo e($product->product_name); ?>"
                                        class="cart_product_name_<?php echo e($product->product_id); ?>">

                                    <input type="hidden" value="<?php echo e($product->product_quantity); ?>"
                                        class="cart_product_quantity_<?php echo e($product->product_id); ?>">

                                    <input type="hidden" value="<?php echo e($product->product_image); ?>"
                                        class="cart_product_image_<?php echo e($product->product_id); ?>">

                                    <input type="hidden" value="<?php echo e($product->product_price); ?>"
                                        class="cart_product_price_<?php echo e($product->product_id); ?>">

                                    <input type="hidden" value="1" class="cart_product_qty_<?php echo e($product->product_id); ?>">

                                    <div class="product__item__text">
                                        <h6><?php echo e($product->product_name); ?></h6>
                                        <a type="button" data-id_product="<?php echo e($product->product_id); ?>" name="add-to-cart"
                                            class="add-cart add-to-cart">+ Add To Cart</a>

                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5> <?php echo e(number_format($product->product_price).'₫'); ?></h5>
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_not_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>