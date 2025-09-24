  <!-- start header banner section -->
  <div id="demo" class="carousel slide home-banner" data-ride="carousel">
    <div class="carousel-inner">
     <video id="videobanner" style="width:100%;" autoplay loop muted playsinline poster="assets/video/websiteimgbgnew.jpg">
        <source src="<?php echo HTTP_ASSET_PATH; ?>video/bhumika_website.mp4" type="video/mp4">
        <source src="<?php echo HTTP_ASSET_PATH; ?>video/bhumika_website.mp4" type="video/ogg">
        <source src="<?php echo HTTP_ASSET_PATH; ?>video/bhumika_website.mp4" type="video/webm">
      </video>
      <!-- <div class="carousel-item active"
        style="background-image:url(assets/img/back_bg.jpg); height:826px; background-position:bottom; overflow: hidden;"> -->
        <!-- <div class="slider_text">
          <h1>Getting Better Everyday</h1>
        </div> -->
        <!-- <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-5">
                <div class="slider_img"> <img class="img-fluid" src="assets/img/sliderimg.png"> </div>
              </div>
              <div class="col-xl-6 col-lg-7">
                <div class="carousel-caption1s">
                  <h3>Getting Better
                    Everyday</h3>
                  <p>Life is not measured by the number of breath we take,
                    but by the moments that take our breath away.</p>
                  <a href="#" class="sliderbtn">Explore More</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
    </div>
  </div>
  <!-- end header banner section -->

  <!-- start about us -->
  <div class="about_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>About <img class="img-fluid" style="width: 13%;" src="<?php echo HTTP_ASSET_PATH; ?>img/aarogya.png"></h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-xxl-5 col-xl-5 col-lg-5">
          <div class="about_con">
            <h3><?php echo webdata()->feaheading; ?></h3>
            <?php echo webdata()->fax; ?>
            <div class="about_btn home"> <a href="<?php echo base_url('about'); ?>" class="aboutbtn home">Read More</a> </div>
          </div>
        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex justify-content-around flex-column flex-sm-row">
          <div class="about_img"> <img class="img-fluid" src="<?php echo UPLOADFILE.webdata()->aboutimage; ?>"> </div>
          <!-- <div class="about_img_1"> <img class="img-fluid" src="assets/img/about_2.jpg">
            <div class="overlay">
              <h1 class="headline"> Relax,
                Renew,
                Revitalize. </h1>
              <span class="description"> Suspendisse leo ipsum, pulvinar sed ullamcorper eu, sodales quis enim. </span>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->

  <!-- start about us -->
  <!-- <div class="about_us">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="about_img" style="margin: 0px 0px 50px 0px;"> <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/service/yoga.png"> </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="about_img" style="margin: 0px 0px 50px 0px;"> <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/service/corporate yoga workshops.png"> </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="about_img"> <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/service/redefine yourself.png"> </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="about_img"> <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/service/spt.png"> </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- end about us -->

  <!-- start yoga way -->
  <!-- <div class="yoga_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>Yoga as a way of life</h2>
            <img class="img-fluid" src="assets/img/title_line1.png">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="first_col">
            <div class="yoga_box">
              <div class="yoga_con">
                <h3>Fiex of your body</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
              <div class="yoga_img">
                <div class="icon_box"><i class="flaticon-yoga-1"></i></div>
              </div>
            </div>
            <div class="yoga_box">
              <div class="yoga_con">
                <h3>Boost your willpower</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
              <div class="yoga_img">
                <div class="icon_box"> <i class="flaticon-yoga-5"></i></div>
              </div>
            </div>
            <div class="yoga_box">
              <div class="yoga_con">
                <h3>Enjoy your life</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
              <div class="yoga_img">
                <div class="icon_box"> <i class="flaticon-relax"></i></div>
              </div>
            </div>
          </div>
          <div class="first_col2">
            <div class="yoga_img_box"> <img class="img-fluid" src="assets/img/yoga.png"> </div>
          </div>
          <div class="first_col3">
            <div class="yoga_box">
              <div class="yoga_img">
                <div class="icon_box"><i class="flaticon-yoga-4"></i></div>
              </div>
              <div class="yoga_con">
                <h3>Energy the whole body</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
            </div>
            <div class="yoga_box">
              <div class="yoga_img">
                <div class="icon_box"><i class="flaticon-yoga-3"></i></div>
              </div>
              <div class="yoga_con">
                <h3>Get rid of stress</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
            </div>
            <div class="yoga_box">
              <div class="yoga_img">
                <div class="icon_box"><i class="flaticon-yoga-2"></i></div>
              </div>
              <div class="yoga_con">
                <h3>Create cool mind</h3>
                <p>Nam eu neque a diam consectetur feugiat quis vel tortor. Etiam vel dui at dui pretium dignissim.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- end yoga end-->
  
  <!--<div class="container" style="margin-top:50px; margin-bottom: 50px;">-->
  <!--  <div class="row">-->
  <!--      <div class="col-lg-12">-->
  <!--        <div class="title_box">-->
  <!--          <h2>Our Clients</h2>-->
  <!--          <img class="img-fluid" src="assets/img/title_line.png">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  <div class="row">-->
  <!--      <?php // foreach ($clientshome as $client) { ?>-->
  <!--      <div class="col-lg-2 col-6">-->
  <!--        <img style="width:100%;" src="<?php // echo $client['image']; ?>" />-->
  <!--      </div>-->
  <!--      <?php // } ?>-->
  <!--  </div>-->
  <!--</div>-->
  
  <!-- start Instructors -->
  <div class="instructors">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>Our Clients</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme ss_carousel" id="clnt">
            <?php foreach ($clientshome as $client) { ?>
            <div class="item">
              <div class="item1">
                <div class="team-imvg">
                    <img src="<?php echo $client['image']; ?>" alt="coffer" class="img-fluid">
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Instructors -->

  <!-- start Testimonials -->
  <div id="testimonial" class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row justify-content-center">
            <div class="col-xs-12 col-md-8 col-lg-5 text-center">
              <div class="slider slider-nav">
                <?php foreach($testimonialshome as $testimonial) { ?>
                <div class="client-thumbnail">
                  <img src="<?php echo $testimonial['image']; ?>" alt="BWmedia" class="img-fluid">
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <div class="slider slider-for">
                <?php foreach($testimonialshome as $testimonial) { ?>
                <div class="client-feedback-text text-center">
                  <div class="client-name text-center">
                    <h5><?php echo $testimonial['name']; ?></h5>
                    <h6><?php echo $testimonial['designation']; ?></h6>
                  </div>
                  <div class="testimonials-content">
                    <p><?php echo $testimonial['shortdescription']; ?></p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <iframe width="329" height="386" src="https://www.youtube.com/embed/jFzZT-JC3zc" title="Acid reflux issue resolved &amp; 5 days 5 kg challenge achieved. #yoga #yogaeverywhere #motivation" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- end Testimonials -->

  <!-- start Instructors -->
  <div class="instructors">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>OUR INSTRUCTORS</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme ss_carousel" id="carousel">
            <?php foreach ($teamhome as $team) { ?>
            <div class="item">
              <div class="item1">
                <div class="team-img"> <img src="<?php echo $team['image']; ?>" alt="coffer" class="img-fluid">
                  <div class="team-bottom-box">
                    <!-- <div class="social_icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      </ul>
                    </div> -->
                    <div class="bottom-team-border">
                      <h2><?php echo $team['name']; ?></h2>
                      <p><?php echo $team['designation']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Instructors -->


  <!-- start Testimonials -->
  <div id="testimonial" class="testimonials">
    <div class="container">
      <div class="row">
          <div class="row justify-content-center">
            <div class="col-xs-12 col-md-8 col-lg-5 text-center">
              <div class="slider slider-nav">
                <?php foreach($feedbackshome as $feedbacks) { ?>
                <div class="client-thumbnail">
                  <img src="<?php echo $feedbacks['image']; ?>" alt="BWmedia" class="img-fluid">
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <div class="slider slider-for">
                <?php foreach($feedbackshome as $feedbacks) { ?>
                <div class="client-feedback-text text-center">
                  <div class="testimonials-content">
                    <p><?php echo $feedbacks['shortdescription']; ?></p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- end Testimonials -->


  <!-- start choose your class -->
  <div class="choose_class vdos" style="    background: #fff;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2 style="    color: #000;">Latest Session</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php foreach($videoshome as $videos) { ?>
        <div class="gallery_product col-lg-4 col-md-6 filter hdpe">
          <div class="portfolio_box">
            <div class="portfolio_img"> 
              <iframe width="100%" height="250" src="<?php echo $videos['videourl']; ?>" title="Aarogya fitness. Fat to fit. Pcod solution.Migraine.Joint pain. Digestion #trending #shorts #viral" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="portfolio_con">
              <div class="portfolio_con space">
                <h3><?php echo $videos['name']; ?></h3>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- <a href="">View More</a> -->
      </div>
    </div>
  </div>
  
  <!-- end choose your class -->
  <?php if($serviceblog) { ?>
  <!-- start Blog -->
  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>latest news</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme ss_carousel" id="blog_slider">
            <?php foreach($serviceblog as $blog) { ?>
            <div class="item">
              <div class="blog_box">
                <div class="zoom-effect-container">
                  <div class="image-card">
                    <img class="img-fluid zoom image" src="<?php echo $blog['image']; ?>">
                  </div>
                </div>
                <div class="date_box_blog ">
                  <p><?php echo date('j', strtotime($blog['startdate'])); ?> <br><span><?php echo date('M', strtotime($blog['startdate'])); ?></span></p>
                </div>
                <div class="blog_con">
                  <h3><?php echo $blog['name']; ?></h3>
                  <p><?php echo $blog['shortdescription']; ?></p>
                  <div class="read_more_blog">
                    <a href="<?php echo $blog['href']; ?>" class="blog_btn home">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- end Blog -->
 