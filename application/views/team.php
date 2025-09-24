<!-- start header banner section -->
<div id="demo1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(assets/img/trainers_bg.png); background-repeat: no-repeat; background-size: cover; height:424px;">
      <div class="slider_text1">
        <h1>Trainers</h1>
      </div>
      <div class="carousel-caption1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner_page_title">
                <h2>Trainers</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end header banner section -->

<!-- start Our Trainers -->
<div class="instructors">
  <div class="container">
    <div class="row">
      <?php foreach($teams as $team) { ?>
      <div class="col-lg-3 col-md-6">
        <div class="item">
          <div class="item1">
            <div class="team-img"> <img src="<?php echo $team['image']; ?>" alt="coffer" class="img-fluid">
              <div class="team-bottom-box">
                <!-- <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div> -->
                <div class="bottom-team-border">
                  <h2><?php echo $team['name']; ?></h2>
                  <p><?php echo $team['designation']; ?></p><!-- 
                  <h4>Suspendisse sagittis urna et lorem euismod, non semper neque euismod.</h4> -->
                </div>
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
<!-- end Our Trainers -->