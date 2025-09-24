<!--Page Title-->
<section class="page-title" style="background-image: url(<?php echo HTTP_ASSET_PATH; ?>images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Testimonial</h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Testimonial</li>
            </ul> 
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <span class="title">HAPPY Patient</span>
            <h2>What Says Our Patients</h2>
        </div>            
        <div class="testimonial-outer">
            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial-carousel owl-carousel owl-theme">                
                <!--Testimonial Block -->
                <?php foreach($testimonials as $testi) { ?>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text"><?php echo $testi['shortdescription']; ?></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- Product Thumbs Carousel -->
            <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                    <?php foreach($testimonials as $testi) { ?>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?php echo $testi['image']; ?>" alt=""></figure>
                        <div class="author-info">
                            <span class="icon fa fa-quote-left"></span>
                            <div class="author-name"><?php echo $testi['name']; ?></div>
                            <div class="designation"><?php echo $testi['designation']; ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>