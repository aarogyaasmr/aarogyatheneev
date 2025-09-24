<!-- start header banner section -->
<div id="demo1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(assets/img/trainers_bg.png); background-repeat: no-repeat; background-size: cover; height:424px;">
      <div class="slider_text1">
        <h1>Videos</h1>
      </div>
      <div class="carousel-caption1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner_page_title">
                <h2>Videos</h2>
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
      <?php foreach($videos as $video) { ?>
      <div class="col-lg-4 col-md-6">
        <div class="item">
          <div class="item1">
            <div class="team-img"> 
              <iframe width="100%" height="330" src="<?php echo $video['videourl']; ?>" title="Aarogya fitness. Fat to fit. Pcod solution.Migraine.Joint pain. Digestion #trending #shorts #viral" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <div class="team-bottom-box">
                <div class="bottom-team-border">
                  <h2><?php echo $video['name']; ?></h2>
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