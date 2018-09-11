<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.tinyeditor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Tour</div>

                    <div>
                        <a href="<?php echo e(route('tour.create')); ?>"   class="btn btn-lg btn-success col-md-offset-10">+ Create Tour</a>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="<?php echo e(asset($tour->photo->path)); ?>" class="img-circle" height="200px" width="200px">
                        </div>
                        <div class="col-md-9">
                            <?php echo Form::model($tour,['method'=>'PATCH', 'action'=>['TourController@update',$tour->id],'files'=>true]); ?>

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <?php echo Form::label('title','Tour Title: '); ?>

                                <?php echo Form::text('title',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('content','Tour Content: '); ?>

                                <?php echo Form::textarea('content',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('type','Tour Type: '); ?>

                                <?php echo Form::text('type',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('photo_id','Tour Image: '); ?>

                                <?php echo Form::file('photo_id',['class'=>'btn ']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::submit('Edit',['class'=>'btn btn-primary']); ?>

                            </div>
                            <?php echo Form::close(); ?>

                            <div  class="form-group">
                                <?php echo Form::open(['method'=>'DELETE', 'action'=>['TourController@destroy', $tour->id]]); ?>

                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>