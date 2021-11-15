<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê sản phẩm
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <?php
          $message=Session::get('message');
          if($message){
              echo '<div class="alert alert-success">' .$message. '</div>';
          Session::put('message',null);
          }
        ?>
        <div class="table-responsive">

            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Slug sản phẩm</th>
                        <th>Sô lượng sản phẩm trong kho</th>
                        <th>Hình sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Nhà cung cấp</th>
                        <th>Danh mục sản phẩm</th>
                        <!-- <th>Tóm tắt sản phẩm</th>
                        <th style="table-layout: fixed;">Nội dung sản phẩm</th> -->
                        <th>Hiển thị</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pro -> product_name); ?></td>
                        <td><?php echo e($pro->product_slug); ?></td>
                        <td><?php echo e($pro->product_quantity); ?></td>
                        <td><img class="img-fluid" src="public/uploads/product/<?php echo e($pro -> product_image); ?>" alt=""></td>
                        <td><?php echo e(number_format($pro -> product_price).'₫'); ?></td>
                        <td><?php echo e($pro -> producer -> producer_name); ?></td>

                        <td><?php echo e($pro -> category_product -> category_name); ?></td>
                        <!-- <td><?php echo $pro -> product_desc; ?></td>
                        <td>
                            <textarea rows="4" cols="10">
                                <?php echo e($pro -> product_content); ?>

                            </textarea>
                        </td> -->
                        <td>
                            <span class="text-ellipsis">
                                <?php
                                    if($pro -> product_status==1){
                                ?>
                                <a href="<?php echo e(URL::to('/active-product/'.$pro -> product_id)); ?>"><span
                                        class="fa-styling fa fa-eye"></span></a>
                                <?php
                                    }else{
                                ?>
                                <a href="<?php echo e(URL::to('/unactive-product/'.$pro -> product_id)); ?>"><span
                                        class="fa-styling fa fa-eye-slash"></span></a>
                                <?php        
                                    }
                                ?>
                            </span>
                        </td>
                        <td>
                            <a href="<?php echo e(URL::to('edit-product/'.$pro -> product_id)); ?>" class="active style-edit"
                                ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm?')"
                                href="<?php echo e(URL::to('delete-product/'.$pro -> product_id)); ?>" class="active style-edit"
                                ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <?php echo $all_product->links(); ?>

                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>