<!-- start header banner section -->
<div id="demo1" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active" style="background-image:url(assets/img/about_bg.png); background-repeat: no-repeat; background-size: cover; height:426px;">
    <div class="slider_text1">
      <h1><?php echo $name; ?></h1>
    </div>
    <div class="carousel-caption1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner_page_title">
              <h2><?php echo $name; ?></h2>
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
      <div class="about-img"> <img class="img-fluid" src="<?php echo $image; ?>"> </div>
    </div>
    <div class="col-lg-6">
      <div class="about_page_con ser_page_con con_ser">
        <h2><?php echo $name; ?></h2>
        <?php echo $shortdescription; ?>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end about -->

<!-- start what we do -->
<div class="what_we_do" style="padding-top: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="about_con">
             <?php echo $description; ?>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
          <form id="contact-us-form" style="background-color: #285b4d; padding: 30px 30px;">
            <div class="row">
              <h3 style="margin: 0px 0px 30px 0px; font-weight: bold; text-align: center; color: #fff;">Enter Your Details</h3>
              <div class="col-lg-12">
                <input type="text" class="contact_from" name="name" placeholder="Name" required>
              </div>
              <div class="col-lg-12">
                <input type="text" class="contact_from" name="phone" placeholder="Phone no." required>
              </div>
              <div class="col-lg-12">
                <input type="text" class="contact_from" name="email" placeholder="Email" required>
              </div>
              <div class="col-lg-12">
                <textarea placeholder="Message..." name="message" class="contact_mes" required></textarea>
              </div>
              <div class="col-lg-12">
                <div class="submit_btn1">
                  <button type="submit" class="submit_btn">Submit Now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- start what we do -->

<!-- start what we do -->
<div class="what_we_do" style="padding-top: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
          <?php
            foreach($allotherproduct as $service) {
          ?>
          <div class="gallery_product col-lg-3 col-md-4 filter hdpe">
            <div class="portfolio_box">
              <div class="portfolio_img"> <img class="img-fluid" style="width:100%; <?php echo $service['style']; ?>" src="<?php echo $service['image']; ?>"> </div>
              <div class="portfolio_con">
                <div class="add_sign"> <a href="<?php echo $service['linkname']; ?>" class="add_sign_btn"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                <div class="portfolio_con space">
                  <!-- <h4>Kundalini</h4> -->
                  <h3><a href="<?php echo $service['linkname']; ?>"><?php echo $service['name']; ?></a></h3>
                  <p><?php echo $service['shortdescription']; ?></p>
                </div>
                <!-- <div class="date_con">
                  <div class="date_box">
                    <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Mon, Tue, Wed</p>
                  </div>
                  <div class="time_box">
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 am - 11:00 am</p>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <?php } ?>
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