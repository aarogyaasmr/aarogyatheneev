<!--Page Title-->
<section class="page-title" style="background-image: url(<?php echo HTTP_ASSET_PATH; ?>images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">            
            <h1><?php echo $name; ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><?php echo $name; ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?php echo $name; ?></h2>
                        <p><?php echo $description;?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->