<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm bài viết
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="<?php echo e(URL::to('/save-post')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group" style="text-align:center;">
                            <?php
                                $message=Session::get('message');
                                if($message){
                                    echo '<div class="alert alert-success">' .$message. '</div>';
                                Session::put('message',null);
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài viết</label>
                            <input type="text" name="post_title" class="form-control"
                                placeholder="Enter email" id="slug" onkeyup="ChangeToSlug();">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="post_slug" class="form-control" 
                                placeholder="Tên danh mục" id="convert_slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh bài viết</label>
                            <input type="file" name="post_image" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                            <textarea name="post_desc" class="form-control" id="ckeditor1" placeholder="Mô tả sản phẩm" style="resize:none">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung bài viết</label>
                            <textarea name="post_content" style="resize:none" rows=8 class="form-control" id="ckeditor2" placeholder="Mô tả nội dung sản phẩm">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Meta từ khóa</label>
                            <textarea name="post_meta_keywords" style="resize:none" rows=3 class="form-control" placeholder="Mô tả nội dung sản phẩm">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Meta nội dung</label>
                            <textarea name="post_meta_desc" style="resize:none" rows=3 class="form-control" placeholder="Mô tả nội dung sản phẩm">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục bài viết</label>
                            <select name="category_post_id" class="form-control m-bot15">
                                <?php $__currentLoopData = $cate_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cate->category_post_id); ?>"><?php echo e($cate->category_post_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="post_status" class="form-control m-bot15">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>

                        <button type="submit" name="add_post" class="btn btn-info">Thêm bài viết</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>