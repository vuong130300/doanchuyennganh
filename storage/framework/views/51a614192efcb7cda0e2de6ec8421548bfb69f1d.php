<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê nhà cung cấp
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
                        <th>Mã nhà cung cấp</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Hiển thị</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $all_producer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producer -> producer_id); ?></td>
                        <td><?php echo e($producer -> producer_name); ?></td>
                        <td>
                            <span class="text-ellipsis">
                                <?php if($producer -> producer_status==1): ?>
                                    <a href="<?php echo e(URL::to('/active-producer/'.$producer -> producer_id)); ?>"><span
                                            class="fa-styling fa fa-eye"></span></a>
                                <?php else: ?>
                                    <a href="<?php echo e(URL::to('/unactive-producer/'.$producer -> producer_id)); ?>"><span
                                            class="fa-styling fa fa-eye-slash"></span></a>
                                <?php endif; ?>

                            </span>
                        </td>

                        <td>
                            <a href="<?php echo e(URL::to('edit-producer/'.$producer -> producer_id)); ?>" class="active style-edit"
                                ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa nhà cung cấp?')"
                                href="<?php echo e(URL::to('delete-producer/'.$producer -> producer_id)); ?>" class="active style-edit"
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
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>