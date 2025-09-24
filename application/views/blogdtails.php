  <!-- start header banner section -->
  <div id="demo1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url(assets/img/blog_detail_bg.png); height:426px;">
        <div class="slider_text1">
          <h1><?php echo $name; ?></h1>
        </div>
        <div class="carousel-caption1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="inner_page_title">
                  <h2 style="font-size: 50px;"><?php echo $name; ?></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header banner section -->

  <!-- start Blog -->
  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="search_box">
            <div class="blog_title">
              <h3>Search</h3>
              <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/border_blog.png">
            </div>
            <div id="searchbox" class="show"> <svg class="magnify" viewBox="0 0 48 48">
                <path
                  d="M31 28h-1.59l-.55-.55C30.82 25.18 32 22.23 32 19c0-7.18-5.82-13-13-13S6 11.82 6 19s5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55V31l10 9.98L40.98 38 31 28zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z">
                </path>
              </svg>
              <input id="search-input" type="text" placeholder="Search...">
            </div>
          </div>
          <div class="popular_box">
            <div class="blog_title">
              <h3>Popular Posts</h3>
              <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/border_blog.png">
            </div>
            <?php foreach($allnews as $top) { ?>
            <div class="post_item">
              <div class="post_img"> <img class="img-fluid" src="<?php echo $top['image']; ?>"> </div>
              <div class="post_con">
                <h3><?php echo $top['name']; ?></h3>
                <p><a href="<?php echo $top['href']; ?>"><?php echo $top['date_added']; ?></a></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_blog">
            <!-- <h4>Yoga dance</h4> -->
            <h3><?php echo $name; ?></h3>
            <div class="date_con">
              <div class="date_box">
                <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Today</p>
              </div>
              <div class="time_box">
                <p><i class="fa fa-user-o" aria-hidden="true"></i> By Admin</p>
              </div>
            </div>
            <div class="single_img"> <img class="img-fluid" src="<?php echo $image; ?>"> </div>
            <?php echo $shortdescription; ?>
            
            <?php echo $description; ?>
            
            <div class="bottom-box"> 
              <!-- <span class="pull-left">
                <ul>
                  <li><a href="#">Yoga Center</a></li>
                  <li><a href="#">Trainers</a></li>
                  <li><a href="#">Flow</a></li>
                </ul>
              </span> -->
              <ul class="pull-right share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="comments_from">
            <div class="blog_title">
              <h3>Leave your thought here</h3>
              <img class="img-fluid" src="<?php echo HTTP_ASSET_PATH; ?>img/border_blog.png">
            </div>
            <div class="form_com">
              <form>
                <div class="row">
                  <div class="col-lg-4">
                    <input type="text" class="contact_from" placeholder="Full Name" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="contact_from" placeholder="Your Email" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="contact_from" placeholder="Phone No." required>
                  </div>
                  <div class="col-lg-12">
                    <textarea placeholder="Message..." class="contact_mes" required></textarea>
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
    </div>
  </div>
  <!-- end Blog -->