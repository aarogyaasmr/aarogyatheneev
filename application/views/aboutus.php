<!-- start header banner section -->
<div id="demo1" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active" style="background-image:url(assets/img/about_bg.png); background-repeat: no-repeat; background-size: cover; height:426px;">
    <div class="slider_text1">
      <h1>About Us</h1>
    </div>
    <div class="carousel-caption1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner_page_title">
              <h2>About Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end header banner section -->

<!-- start about -->
<div class="main_about">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="about-img"> <img class="img-fluid" src="<?php echo UPLOADFILE.$aboutinfo->aboutimg; ?>"> </div>
    </div>
    <div class="col-lg-6">
      <div class="about_page_con">
        <h2><?php echo $aboutinfo->aboutheading; ?></h2>
        <p><?php echo $aboutinfo->abouttext; ?></p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end about -->

<!-- start number -->
<div class="counter">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="counter">
        <div class="achievements_box"> <i class="flaticon-smiling-emoticon-square-face"></i>
          <div class="counter-value" data-count="<?php echo webdata()->comvalue1; ?>"><?php echo webdata()->comvalue1; ?>+</div>
          <p><?php echo webdata()->com1; ?></p>
        </div>
        <div class="achievements_box"><i class="flaticon-notepad"></i>
          <div class="counter-value" data-count="<?php echo webdata()->comvalue2; ?>"><?php echo webdata()->comvalue2; ?>+</div>
          <p><?php echo webdata()->com2; ?></p>
        </div>
        <div class="achievements_box"><i class="flaticon-coffee-cup"></i>
          <div class="counter-value" data-count="<?php echo webdata()->comvalue3; ?>"><?php echo webdata()->comvalue3; ?>+</div>
          <p><?php echo webdata()->com3; ?></p>
        </div>
        <div class="achievements_box"><i class="flaticon-small-calendar"></i>
          <div class="counter-value" data-count="<?php echo webdata()->comvalue4; ?>"><?php echo webdata()->comvalue4; ?>+</div>
          <p><?php echo webdata()->com4; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end number -->

<!-- start what we do -->
<div class="what_we_do">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>Mission & Vision</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="about_con">
            <h3>Mission</h3>
            <p><?php echo $aboutinfo->aboutmission; ?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about_con">
            <h3>Vision</h3>
            <p><?php echo $aboutinfo->aboutvision; ?></p>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- start what we do -->

<!-- start Testimonials -->
<div id="testimonial" class="testimonials">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="row justify-content-center">
        <div class="col-xs-12 col-md-8 col-lg-5 text-center">
          <div class="slider slider-nav">
            <?php foreach($testimonials as $testi) { ?>
            <div class="client-thumbnail"> <img src="<?php echo $testi['image']; ?>" alt="BWmedia" class="img-fluid"> </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 testimonials_col">
          <div class="slider slider-for">
            <?php foreach($testimonials as $testi) { ?>
            <div class="client-feedback-text text-center">
              <div class="client-name text-center">
                <h5><?php echo $testi['name']; ?></h5>
                <h6><?php echo $testi['designation']; ?></h6>
              </div>
              <div class="testimonials-content">
                <p><?php echo $testi['shortdescription']; ?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end Testimonials -->