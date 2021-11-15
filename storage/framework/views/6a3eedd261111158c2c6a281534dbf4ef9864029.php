<?php $__env->startSection('content'); ?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?php echo e(URL::to('/trang-chu')); ?>">Trang chủ</a></li>
                <li class="active">Giỏ hàng của bạn</li>
            </ol>
        </div>
        <?php
			$content = Cart::content();
        ?>    
        <?php if($content->count()>0): ?>
        <?php
        $total = 0;
        ?>
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo session()->get('message'); ?>

            </div>
        <?php elseif(session()->has('error')): ?>
             <div class="alert alert-danger">
                <?php echo session()->get('error'); ?>

            </div>
        <?php endif; ?>
        <div class="table-responsive cart_info">

            <table class="table table-condensed ">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $subtotal = $v_content->price * $v_content->qty;
                    $total+=$subtotal;
                    ?>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="<?php echo e(URL::to('public/uploads/product/'.$v_content->options->image)); ?>"
                                    width="90" alt="" /></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href=""><?php echo e($v_content->name); ?></a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p><?php echo e(number_format($v_content->price,0,',','.').'₫'); ?></p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="<?php echo e(URL::to('/update-cart-quantity')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input class="cart_quantity_input" type="number" min="1" name="cart_quantity"
                                        value="<?php echo e($v_content->qty); ?>">
                                    <input type="hidden" value="<?php echo e($v_content->rowId); ?>" name="rowId_cart"
                                        class="form-control">
                                    <input type="submit" value="Cập nhật" name="update_qty"
                                        class="btn-style btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                
								<?php echo e(number_format($subtotal,0,',','.')); ?>₫
								
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm?')" class="cart_quantity_delete"
                                href="<?php echo e(URL::to('/delete-to-cart/'.$v_content->rowId)); ?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tạm tính: <span><?php echo e(number_format($total,0,',','.')); ?>₫</span></li>
                        
                        <?php if(Session::get('coupon')): ?>
                        
                        <li>
                            <?php $__currentLoopData = Session::get('coupon'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($cou['coupon_condition']==1): ?>
                                    Loại mã giảm giá:<span><?php echo e($cou['coupon_number']); ?>%</span>
                           
                                <?php
                                    $total_coupon = ($total*$cou['coupon_number'])/100;
                                ?>
                        
                        <li>Tổng tiền:<span><?php echo e(number_format($total-$total_coupon,0,',','.')); ?>₫</span></li>
                        
                                <?php elseif($cou['coupon_condition']==2): ?>
                                    Loại mã giảm giá :<span><?php echo e(number_format($cou['coupon_number'],0,',','.')); ?>₫</span>
                        
                                <?php
                                    $total_coupon = $total - $cou['coupon_number'];
                                ?>

                        <li>Tổng tiền :<span><?php echo e(number_format($total_coupon,0,',','.')); ?>₫</span></li>
                        
                        
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </li>
                        <?php else: ?>
                        <li>
                            <form method="POST" action="<?php echo e(url('/check-coupon')); ?>" class="couponform">
                                <?php echo e(csrf_field()); ?>

                                <input type="text" class="coupon-input" name="coupon" placeholder="Nhập mã giảm giá">
                                <button type="submit" class="btn btn-default">Áp dụng<i class="fas fa-check check_coupon"
                                        name="check_coupon"></i></button>

                            </form>
                        </li>
                        <li>Giảm Giá :<span>0₫</span></li>
                        <li>Tổng tiền :<span><?php echo e(number_format($total,0,',','.')); ?>₫</span></li>
                        <?php endif; ?>

                    </ul>
                    <?php if(Session::get('coupon')): ?>
                    <a class="btn btn-default update" href="<?php echo e(url('/unset-coupon')); ?>">Xóa mã khuyến mãi</a>
                    <?php endif; ?>

                    <?php if(Session::get('customer_id')): ?>
                    <a class="btn btn-default check_out" href="<?php echo e(URL::to('/checkout')); ?>">Thanh toán</a>
                    <?php else: ?>
                    <a class="btn btn-default check_out" href="<?php echo e(URL::to('/login-checkout')); ?>">Thanh toán</a>
                    <?php endif; ?>
                    
                </div>
            </div>

            <?php else: ?>

            <div class="container text-center">
                <div class="cart-empty">
                    <i class="fas fa-cart-plus"></i>
				    <p>Không có sản phẩm nào trong giỏ hàng</p>
                    <h4><a href="<?php echo e(URL::to('/trang-chu')); ?>">VỀ TRANG CHỦ</a></h4>
                    <h5>Khi cần trợ giúp vui lòng gọi 0917889558 hoặc 0943705326 (7h30 - 22h)</h5>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</section>
<!--/#do_action-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_not_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>