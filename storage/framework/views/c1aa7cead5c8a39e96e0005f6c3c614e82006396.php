<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Sri Lanka Extream Travels </title>

    <meta name="description" content="Insert Your Site Description" />

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">

    <!-- Supersized -->
    <link href="<?php echo e(asset('css/supersized.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/supersized.shutter.css')); ?>" rel="stylesheet">

    <!-- FancyBox -->
    <link href="<?php echo e(asset('css/fancybox/jquery.fancybox.css')); ?>" rel="stylesheet">

    <!-- Font Icons -->
    <link href="<?php echo e(asset('css/fonts.css')); ?>" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="<?php echo e(asset('css/shortcodes.css')); ?>" rel="stylesheet">

    <!-- Responsive -->
    <link href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">

    <!-- Supersized -->
    <link href="<?php echo e(asset('css/supersized.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/supersized.shutter.css')); ?>" rel="stylesheet">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>

    <!-- Analytics -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'Insert Your Code']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->

<!-- End of Splash Screen -->


<!-- Homepage Slider -->
<?php echo $__env->yieldContent('slider'); ?>


<!-- Header -->


<!-- Header -->



<!-- Tour Section-->

<!-- Our Work Section -->

<?php echo $__env->make('includes.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('tours'); ?>


<!-- End Our Work Section -->
<!-- About Section -->
<?php echo $__env->yieldContent('services'); ?>

<!-- Contact Section -->
<?php echo $__env->yieldContent('contact'); ?>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script> <!-- Bootstrap -->
<script src="<?php echo e(asset('js/supersized.3.2.7.min.js')); ?>"></script> <!-- Slider -->
<script src="<?php echo e(asset('js/waypoints.js')); ?>"></script> <!-- WayPoints -->
<script src="<?php echo e(asset('js/waypoints-sticky.js')); ?>"></script> <!-- Waypoints for Header -->
<script src="<?php echo e(asset('js/jquery.isotope.js')); ?>"></script> <!-- Isotope Filter -->
<script src="<?php echo e(asset('js/jquery.fancybox.pack.js')); ?>"></script> <!-- Fancybox -->
<script src="<?php echo e(asset('js/jquery.fancybox-media.js')); ?>"></script> <!-- Fancybox for Media -->
<script src="<?php echo e(asset('js/jquery.tweet.js')); ?>"></script> <!-- Tweet -->
<script src="<?php echo e(asset('js/plugins.js')); ?>"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>