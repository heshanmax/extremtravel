


<?php $__env->startSection('tours'); ?>
    <div id="work" class="page">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Our Tours</h2>

                    </div>
                </div>
            </div>
            <!-- End Title Page -->

            <div class="row">
                <div class="item-thumbs span6">

                    <a class="hover-wrap img-responsive" data-fancybox-group="gallery" title="The Dark" href="<?php echo e(route('tours.single',$randtour->id)); ?>"></a>



                    <img src="<?php echo e($randtour->photo->path); ?>" alt="" class="img-responsive embed-responsive-item" height="400px">
                </div>
                <div class="span6">
                    <a href=""><h3><?php echo e($randtour->title); ?></h3></a>

                    <p><?php echo str_limit($randtour->content, 500, '...'); ?> </p>
                    <a class="button button-large" href="<?php echo e(route('tours.single',$randtour->id)); ?>" target="_blank">Read More </a>

                </div>
            </div>

            <!-- Portfolio Projects -->
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs">

                                <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="item-thumbs span4 design" data-appear-top-offset="-300" data-animated="fadeInLeft">
                                        <input type="text" id="tourid" value="<?php echo e($tour->id); ?>" class="hidden"/>
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap img-responsive" data-fancybox-group="gallery" title="The Dark" href="<?php echo e(route('tours.single',$tour->id)); ?>" target="_blank">

                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb "><h3><?php echo e($tour->title); ?></h3></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="<?php echo e(asset($tour->photo->path)); ?>" >
                                    </li>

                                    </li>
                                    <!-- End Item Project -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </section>

                    </div>
                </div>
            </div>
            <!-- End Portfolio Projects -->
        </div>
    </div>
    <!-- End Our Work Section -->
    <div class="row">
        <div class="col-sm-5 col-sm-offset-5">

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainsite', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>