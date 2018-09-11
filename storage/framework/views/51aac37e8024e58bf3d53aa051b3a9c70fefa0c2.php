<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>All Tours</h2></div>

                    <div class="panel-body">


                        <table class="table table-responsive table-striped">

                            <a href="<?php echo e(route('tour.create')); ?>"   class="btn btn-lg btn-success col-md-offset-10">+ Create Tour</a>

                            <thead>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Type</th>
                            <th>Action</th>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="font-size: medium; font-weight: bold;"><?php echo e($tour->title); ?></td>
                                    <td><img src="<?php echo e(asset($tour->photo->path)); ?>" width="100px" height="100px" class="img-circle"></td>
                                    <td><?php echo str_limit($tour->content, $limit = 50); ?></td>
                                    <td style="font-size: medium; font-weight: bold;"><?php echo e($tour->yupr); ?></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(route('tour.edit', $tour->id)); ?>">Edit</a>



                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-5">
            <?php echo e($tours->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>