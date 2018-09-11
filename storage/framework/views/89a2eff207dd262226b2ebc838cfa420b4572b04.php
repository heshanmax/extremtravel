<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Sri Lanka Extream Travels</title>

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
<div id="home-slider">
    <div class="overlay"></div>

    <div class="slider-text">
        <div id="slidecaption"></div>
    </div>

    <div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>

        <a id="nextsection" href="#destinations"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->




<!-- Destinations Section -->
<div id="destinations" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Destinations</h2>
                    <h3 class="title-description">Learn About our Destinations &amp; Culture.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <div class="span12">
            <div class="row">
                <section id="projects">
                    <ul id="thumbs">


                        <?php $__currentLoopData = $postsindex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item-thumbs span3 design">
                                <input type="text" id="postid" value="<?php echo e($post->id); ?>" class="hidden"/>
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap img-responsive" data-fancybox-group="gallery" title="The Dark" href="<?php echo e(route('tours.single',$post->id)); ?>">

                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb "><h3><?php echo e($post->title); ?></h3></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo e(asset($post->photo->path)); ?>" >
                            </li>

                            </li>
                            <!-- End Item Project -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </ul>
                </section>
                <div class="span12 pagination-centered">
                    <a class="button button-large" href="<?php echo e(url('/'.'destination')); ?>">Click for More Destinations!!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Projects -->


    
    
    

</div>
</div>
<!-- End Destinations Section -->




<!-- Our Tours Section -->
<div id="tours" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Our Tours</h2>
                    <h3 class="title-description">Check Out Our <a href="">Tours</a>.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Portfolio Projects -->
        <div class="row">
            <div class="span3">
                <!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Type of Our Tours</li>
                        <li><a href="#filter" data-option-value="*" class="selected">All Tours</a></li>
                        <li><a href="#filter" data-option-value=".Adventure">Adventure</a></li>
                        <li><a href="#filter" data-option-value=".Classic">Classic</a></li>
                        <li><a href="#filter" data-option-value=".Heritage">Heritage</a></li>
                        <li><a href="#filter" data-option-value=".Wild">Wild</a></li>
                        <li><a href="#filter" data-option-value=".Romantic">Romantic</a></li>
                        <li><a href="#filter" data-option-value=".Special">Special</a></li>
                        <li><a href="#filter" data-option-value=".Custom">Custom</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="span9">
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs">
                            <?php $__currentLoopData = $toursindex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 <?php echo e($tour->type); ?>">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap img-responsive" data-fancybox-group="gallery" title="The Dark" href="<?php echo e(route('tours.single',$tour->id)); ?>">

                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb "><h3><?php echo e($tour->type); ?></h3></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo e(asset($tour->photo->path)); ?>" >
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
<!-- End Our Tour Section -->






<!-- Services Section -->
<div id="services" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Our Services</h2>
                    <h3 class="title-description">Learn About our Services.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- People -->
        <div class="row">

            <!-- Start Profile -->
            <div class="span3 profile">
                <div class="image-wrap">

                    <img src="<?php echo e(asset('images/spa.jpg')); ?>" alt="Ayurveda & Yoga">
                </div>
                <h3 class="profile-name">Ayurveda & Yoga</h3>
                <p class="profile-description"><a>Boutique Hotels, luxury spa retreats on the beach and in rural settings can be a part of your Sri Lanka holiday. These are provide Ayurvedic therapeutic care, Yoga and meditation practice and lessons.</a></p>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span3 profile">
                <div class="image-wrap">

                    <img src="<?php echo e(asset('images/diving.jpg')); ?>" alt="Diving & Snorekling">
                </div>
                <h3 class="profile-name">Diving & Snorekling</h3>
                <p class="profile-description"><a>Sri Lanka being an island nation, and the fact that it lies in a central location as far as the ancient trade routes were concerned, is littered so to speak of wrecks from many different era’s. </a></p>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span3 profile">
                <div class="image-wrap">

                    <img src="<?php echo e(asset('images/watersports.jpg')); ?>" alt="Water Sports">
                </div>
                <h3 class="profile-name">Water Sports</h3>
                <p class="profile-description">
                    <a>indsurfing, Surfing, Waterskiing, Wakeboarding, body boarding, banana ride, tube ride, jet-ski, Deep Sea Fishing, River Fishing, Snorkeling, diving, river cruises available in here with  well-trained and experienced instructors.</a></p>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span3 profile">
                <div class="image-wrap">

                    <img src="<?php echo e(asset('images/yala.jpg')); ?>" alt="Wild Safari">
                </div>
                <h3 class="profile-name">Wild Safari</h3>
                <p class="profile-description">
                    <a>A wide range of National Parks, nature reserves and safari lodges and camps have been established throughout Sri Lanka, covering vast areas of bio-diverse terrain, all the way from the north of the country, to south with many others in between.</a></p>
            </div>
            <!-- End Profile -->

        </div>
        <!-- End People -->
    </div>
</div>

<!-- End Services Section -->

<!-- Services Section -->
<div id="testimonials" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Testimonials</h2>
                    <h3 class="title-description">Things our best customers told about us.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- People -->
        <div class="row">

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <img src="<?php echo e(asset('images/testi1.jpg')); ?>"  alt="">
                </div>
                <h3 class="profile-name">Mark Hallen</h3>
                <p class="profile-description">"Absolute Travel packed our trip with hidden secrets, insider experiences, and top notch local guides--transforming our vacation into a a once-in-a-lifetime trip. Superb!" </p>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <img src="<?php echo e(asset('images/testi2.jpg')); ?>"  alt="">
                </div>
                <h3 class="profile-name">Jane & Melani</h3>
                <p class="profile-description">"AMAZING experience. There is no way that we wouldâ€™ve had the same experience if we planned this trip ourselves. Absolute Travel treated us better than we wouldâ€™ve treated ourselves!"</p>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <img src="<?php echo e(asset('images/testi3.jpg')); ?>"  alt="">
                </div>
                <h3 class="profile-name">Josh Insa</h3>
                <p class="profile-description">"I cannot thank you enough for arranging a seamless itinerary for us. Everything was perfect...I have great pictures and wonderful memories to last forever."</p>
            </div>
            <!-- End Profile -->

        </div>
        <!-- End People -->
    </div>
</div>
<!-- End Services Section -->



<!-- Services Section -->
<div id="about" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">About us</h2>
                    <h3 class="title-description">Learn About us.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- People -->
        <div class="row">
            <!-- Start Profile -->
            <div class="span12 profile">
                <div class="image-wrap">
                    <img src="<?php echo e(asset('images/about.jpg')); ?>"  alt="">
                </div>
                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
            <!-- End Profile -->



        </div>
        <!-- End People -->
    </div>
</div>
<!-- End Services Section -->




<!-- Contact Section -->
<div id="contact" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Get in Touch</h2>
                    <h3 class="title-description">"We’re currently accepting new client projects. We look forward to serving you.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Contact Form -->
        <div class="row">
            <div class="span9">

                <form id="contact-form" class="contact-form" action="#">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p class="contact-submit">
                        <a id="contact-submit" class="submit" href="#">Send Your Email</a>
                    </p>

                    <div id="response">

                    </div>
                </form>

            </div>

            <div class="span3">
                <div class="contact-details">
                    <h3>Contact Details</h3>
                    <ul>
                        <li><a href="#">Sri Lanka Extream Travels</a></li>
                        <li>info@srilankaextreamtravels.com</li>
                        <li>(+94) 34-2298969 </li>
                        <li>(+94) 77-9234178 </li>
                        <li>
                            <nav id="social-area">
                                <ul>
                                    <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
                                        <a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a>
                                        <a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                                </ul>
                            </nav>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</div>
<!-- End Contact Section -->

<!-- Socialize -->
<div id="social-area" class="page">
    <div class="container">
        <div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
    <p class="credits">&copy;2017 Sri Lanka Extream Travels. <a href="" title=""></a><br/>
        by <img src="" alt="" class="responsive"><a href="http://demiurgics.com" title="demiurgics"></a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
    <i class="font-icon-arrow-simple-up"></i>


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
