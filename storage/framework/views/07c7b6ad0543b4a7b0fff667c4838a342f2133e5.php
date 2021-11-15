<?php $__env->startSection('content'); ?>
<section class="breadcrumb-blog set-bg" data-setbg="<?php echo e(asset('public/frontend/img/breadcrumb-bg.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Danh Mục</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <a href="<?php echo e(URL::to('/bai-viet/'.$pst->post_slug)); ?>">
                        <div class="blog__item__pic set-bg"
                            data-setbg="<?php echo e(asset('public/uploads/post/'.$pst->post_image)); ?>"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5><?php echo e($pst->post_title); ?></h5>
                            <a href="#">Read More</a>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Blog Section End -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_not_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>