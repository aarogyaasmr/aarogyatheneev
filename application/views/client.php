<!-- start header banner section -->
<div id="demo1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(assets/img/trainers_bg.png); background-repeat: no-repeat; background-size: cover; height:424px;">
      <div class="slider_text1">
        <h1>Clients</h1>
      </div>
      <div class="carousel-caption1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner_page_title">
                <h2>Clients</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end header banner section -->

<div class="container" style="margin-top:50px; margin-bottom: 50px;">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="row">
      <?php foreach ($clients as $client) { ?>
      <div class="col-lg-3 col-6">
        <img style="width:100%;" src="<?php echo $client['image']; ?>" />
      </div>
      <?php } ?>
      </div>
    </div>
    <div class="col-lg-2">
    </div>
  </div>
</div>