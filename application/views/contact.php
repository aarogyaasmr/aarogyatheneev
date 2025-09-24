  <!-- start header banner section -->
  <div id="demo1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url(assets/img/contact_bg.png); background-repeat: no-repeat; background-size: cover; height:426px;">
        <div class="slider_text1">
          <h1>Contact Us</h1>
        </div>
        <div class="carousel-caption1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="inner_page_title">
                  <h2>Contact Us</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header banner section -->

  <!-- start contact -->
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="location_box">
            <div class="location_icon"> <img class="img-responsive hoverin" src="assets/img/location.png" alt=""> <img
                class="img-responsive hoverout" src="assets/img/locationhover.png" alt=""> </div>
            <div class="location_address">
              <p><?php echo webdata()->address; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="location_box">
            <div class="location_icon"> <img class="img-responsive hoverin" src="assets/img/phone.png" alt=""> <img
                class="img-responsive hoverout" src="assets/img/phonehover.png" alt=""> </div>
            <div class="location_address">
              <p><a href="tel:<?php echo webdata()->phone; ?>"><?php echo webdata()->phone; ?></a>
                <a href="mailto:<?php echo webdata()->email; ?>"><?php echo webdata()->email; ?></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="location_box">
            <div class="location_icon"> <img class="img-responsive hoverin" src="assets/img/time.png" alt=""> <img
                class="img-responsive hoverout" src="assets/img/timehover.png" alt=""> </div>
            <div class="location_address">
              <p><?php echo webdata()->ctime; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end contact -->

  <!-- start contact -->
  <div class="contact_form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>Get In Touch</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="col-lg-10">
          <form id="contact-us-form">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="name" placeholder="First Name" required>
              </div>
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="lname" placeholder="Last Name" required>
              </div>
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="phone" placeholder="Phone no." required>
              </div>
              <div class="col-lg-6">
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
  <!-- start contact -->

  <!--start map-->
  <div class="map">
    <div class="map_box">
      <iframe
        src="<?php echo webdata()->googlemap; ?>"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <!--end map-->