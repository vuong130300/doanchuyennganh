<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="<?php echo e(URL::to('/update-product/'.$all_product->product_id)); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group" style="text-align:center;">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="<?php echo e($all_product->product_name); ?>" name="product_name"
                                class="form-control" placeholder="Enter email" id="slug" onkeyup="ChangeToSlug();">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="product_slug" class="form-control" id="convert_slug"
                                value="<?php echo e($all_product->product_slug); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                            <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng"
                                name="product_quantity" class="form-control" id="convert_slug"
                                value="<?php echo e($all_product->product_quantity); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            <img class="img-fluid"
                                src="<?php echo e(asset('public/uploads/product/'.$all_product->product_image)); ?>" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" value="<?php echo e($all_product->product_price); ?>" name="product_price"
                                class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea name="product_desc" class="form-control" id="ckeditor3"><?php echo e($all_product->product_desc); ?>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea name="product_content" class="form-control" id="ckeditor4"><?php echo e($all_product->product_content); ?>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhà cung cấp</label>
                            <select name="producer_id" class="form-control m-bot15">
                                <?php $__currentLoopData = $all_producer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($all_product->producer_id == $producer->producer_id ? 'selected' : ''); ?>

                                    value="<?php echo e($producer->producer_id); ?>"><?php echo e($producer->producer_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="category_id" class="form-control m-bot15">
                                <?php $__currentLoopData = $cate_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($all_product->category_id == $cate->category_id ? 'selected' : ''); ?>

                                    value="<?php echo e($cate->category_id); ?>"><?php echo e($cate->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="product_status" class="form-control m-bot15">
                                <?php if($all_product->product_status==1): ?>
                                    <option selected value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                <?php else: ?>
                                    <option value="1">Hiển thị</option>
                                    <option selected value="0">Ẩn</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <button type="submit" name="edit_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>