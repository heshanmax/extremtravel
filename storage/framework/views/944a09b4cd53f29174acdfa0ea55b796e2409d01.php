<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.tinyeditor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Tour</div>

                    <div class="panel-body">

                        <div class="col-md-10">
                            <?php echo Form::open(['method'=>'POST', 'action'=>'TourController@store','files'=>true]); ?>

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <?php echo Form::label('title','Tour Title: '); ?>

                                <?php echo Form::text('title',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('type','Tour Type: '); ?>

                                <?php echo Form::text('type',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('content','Tour Content: '); ?>

                                <?php echo Form::textarea('content',null,['class'=>'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('photo_id','Tour Image: '); ?>

                                <?php echo Form::file('photo_id',['class'=>'btn ']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::submit('Save',['class'=>'btn btn-primary']); ?>

                            </div>
                            <?php echo Form::close(); ?>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>