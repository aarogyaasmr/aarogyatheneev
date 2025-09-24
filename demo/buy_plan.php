<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aarogya The Neev</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/img/favicon.svg" rel="shortcut icon" type="image/x-icon" />
  <!-- css here -->
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootsnav.css">
  <link rel="stylesheet" href="assets/css/owl.carousal.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.css">
  <link rel="stylesheet" href="assets/css/sm-clean.css">
  <link rel="stylesheet" href="assets/css/sm-core-css.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/fonts/flaticon.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- loader start -->
  <div class="page_loader">
    <img src="assets/img/loader.svg" alt="img">
  </div>
  <!-- loader end -->
  <!-- header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="main-nav" role="navigation">
            <!-- Mobile menu toggle button (hamburger/x icon) -->
            <input id="main-menu-state" type="checkbox">
            <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> Toggle main
              menu visibility </label>
            <h2 class="nav-brand"><a href="./"><img src="assets/img/newlogo.png" style="width:50%" alt="Gymfit" class="img-fluid"></a></h2>
            <!-- Sample menu definition -->
            <ul id="main-menu" class="sm sm-clean" data-smartmenus-id="1559366433783545">
              <li><a href="./">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Trainers</a></li>
              <li><a href="#">Classes</a></li>
              <li class="last_menu"><a href="#">Call Now: +91 9315363694</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->

  <!-- start header banner section -->
  <div id="demo1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url(assets/img/contact_bg.png); height:526px;">
        <div class="slider_text1">
          <h1>Buy Plan</h1>
        </div>
        <div class="carousel-caption1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="inner_page_title">
                  <h2>Buy Plan</h2>
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
  <div class="contact_form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="title_box">
            <h2>Get In Touch</h2>
            <img class="img-fluid" src="assets/img/title_line.png">
          </div>
        </div>
        <div class="col-lg-10">
          <form id="contact-us-form">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="name" placeholder="Name" required>
              </div>
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="lname" placeholder="Age" required>
              </div>
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="phone" placeholder="Weight" required>
              </div>
              <div class="col-lg-6">
                <input type="text" class="contact_from" name="email" placeholder="Height" required>
              </div>
              <div class="col-lg-12">
                <textarea placeholder="Health Issues (if any):" name="message" class="contact_mes" required></textarea>
              </div>
              <div class="col-lg-12" style="padding: 0px 0px 30px 10px;">
                <label style="margin:0px 0px 20px 0px">Fitness Goal:</label>
                <div class="row">
                <div class="col-lg-6 col-6">
                    <input type="radio" style="float: left; margin: -10px 10px; width: 5%;" class="contact_from" name="email" placeholder="Height" required> Weight Loss/Gain
                </div>
                <div class="col-lg-6 col-6">
                    <input type="radio" style="float: left; margin: -10px 10px; width: 5%;" class="contact_from" name="email" placeholder="Height" required> Addressing Health Issues
                </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding: 0px 0px 50px 10px;">
                <label style="margin:0px 0px 20px 0px">Mental Wellness:</label>
                <div class="row">
                <div class="col-lg-3 col-6">
                <input type="radio" class="contact_from" style="float: left; margin: -10px 10px; width: 10%;" name="email" placeholder="Height" required> Stress
                </div>
                <div class="col-lg-3 col-6">
                <input type="radio" class="contact_from" style="float: left; margin: -10px 10px; width: 10%;" name="email" placeholder="Height" required> Anxiety
                </div>
                <div class="col-lg-3 col-6">
                <input type="radio" class="contact_from" style="float: left; margin: -10px 10px; width: 10%;" name="email" placeholder="Height" required> Insomnia
                </div>
                <div class="col-lg-3 col-6">
                <input type="radio" class="contact_from" style="float: left; margin: -10px 10px; width: 10%;" name="email" placeholder="Height" required> Depression
                </div>
                </div>
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

  <?php include_once("foot.php"); ?>

  <!-- Bootstrap -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  <!-- menu -->
  <script src="assets/js/jquery.smartmenus.js"></script>
  <!-- carousel slider -->
  <script src="assets/js/owl1.js"></script>
  <script src="assets/js/slick.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from netizensstore.com/gymfit_theme/html/multipage_7/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Feb 2023 08:30:38 GMT -->
</html>