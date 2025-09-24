
  <!-- start header banner section -->
  <div id="demo1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(assets/img/blog_bg.png); background-repeat: no-repeat; background-size: cover; height:326px;">
        <div class="slider_text1">
          <h1>Blog</h1>
        </div>
        <div class="carousel-caption1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="inner_page_title">
                  <h2>Blog</h2>
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
              <img class="img-fluid" src="assets/img/border_blog.png">
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
              <img class="img-fluid" src="assets/img/border_blog.png">
            </div>
            <?php foreach($allcurrent as $top) { ?>
            <div class="post_item">
              <div class="post_img"><a href="<?php echo $top['href']; ?>"> <img class="img-fluid" src="<?php echo $top['image']; ?>"> </a></div>
              <div class="post_con">
                <h3><a href="<?php echo $top['href']; ?>"><?php echo $top['name']; ?></a></h3>
                <p><a href="<?php echo $top['href']; ?>"><?php echo date("M j, Y", strtotime($top['date_added'])); ?></a></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-8">
          <?php foreach($allnews as $blog) { ?>
          <div class="blog_page_box">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="blog_img_inner"> <img class="img-fluid" src="<?php echo $blog['image']; ?>"> </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="blog_con_inner">
                  <!-- <h4>Kundalini</h4> -->
                  <h3><?php echo $blog['name']; ?></h3>
                  <div class="date_con">
                    <div class="date_box">
                      <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo date("M j, Y", strtotime($blog['date_added'])); ?></p>
                    </div>
                    <div class="time_box">
                      <p><i class="fa fa-user-o" aria-hidden="true"></i> By Admin</p>
                    </div>
                  </div>
                  <p><?php echo strip_tags($blog['shortdescription']); ?></p>
                  <div class="read_more_blog"> <a href="<?php echo $blog['href']; ?>" class="blog_btn">Read More <i
                        class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end Blog -->