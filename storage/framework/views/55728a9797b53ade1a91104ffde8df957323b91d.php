<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật nhà cung cấp
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="<?php echo e(URL::to('/update-producer/'.$all_producer->producer_id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <?php
                                $message=Session::get('message');
                                if($message){
                                    echo '<div class="alert alert-success">' .$message. '</div>';
                                Session::put('message',null);
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                            <input type="text" name="producer_name" class="form-control" placeholder="Enter email" value="<?php echo e($all_producer->producer_name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="producer_status" class="form-control m-bot15">
                                <?php if($all_producer->producer_status==1): ?>
                                    <option selected value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                <?php else: ?>
                                    <option value="1">Hiển thị</option>
                                    <option selected value="0">Ẩn</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <button type="submit" name="edit_producer" class="btn btn-info">Cập nhật nhà cung cấp</button>
                    </form>

                </div>
            </div>
        </section>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>