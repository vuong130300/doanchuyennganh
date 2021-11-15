<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
            <div class="panel-body">
                <?php $__currentLoopData = $edit_category_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="position-center">
                    <form role="form" action="<?php echo e(URL::to('/update-category-product/'.$edit_value->category_id)); ?>"
                        method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="<?php echo e($edit_value->category_name); ?>" name="category_product_name"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug danh mục</label>
                            <input type="text" value="<?php echo e($edit_value->category_product_slug); ?>"
                                name="category_product_slug" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea name="category_product_desc" style="resize:none" rows=8 class="form-control"
                                id="exampleInputPassword1"><?php echo e($edit_value->category_desc); ?>

                                    </textarea>
                        </div>


                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh
                            mục</button>
                    </form>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>