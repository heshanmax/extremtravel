<?php $__env->startSection('tours'); ?>
    <div id="work" class="page">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title"><?php echo e($post->title); ?></h2>

                    </div>
                </div>
            </div>
            <!-- End Title Page -->

            <div>
                <div style="float:left;">
                    <img width="400px" src="<?php echo e($post->photo->path); ?>" alt="" class="item-thumbs" style="padding-right: 20px;" >
                </div>
                <?php echo $post->content; ?>

            </div>


           

                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                     var disqus_config = function () {
                     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };
                     */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://srilankaextreamtravels.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                <script id="dsq-count-scr" src="//srilankaextreamtravels.disqus.com/count.js" async></script>

            </div>

        </div>
    </div>
    <!-- End Our Work Section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainsite', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>