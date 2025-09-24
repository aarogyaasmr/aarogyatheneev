  <!-- start footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer_con">
            <img class="img-fluid" style="width:40%" src="<?php echo UPLOADFILE.webdata()->logo; ?>">
            <div class="footer_social">
              <ul>
                <li><a href="<?php echo webdata()->socialsites; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo webdata()->social1; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo webdata()->social4; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-7">
          <div class="footer_center_con">
            <ul class="footer_link">
              <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
              <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
              <li><a href="<?php echo base_url('client'); ?>">Clients</a></li>
              <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
              <li><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
            </ul>
            <div class="footer_border"></div>
            <p><?php echo webdata()->pricingtext; ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer-->

  <!-- start footer_bottom -->
  <div class="footer_bootom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copy_right">
            <p><?php echo webdata()->copyright; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer_bottom -->

  <div style="position:fixed; left:20px; bottom:50px; z-index:9999;" class="tooltip"><a href="https://wa.me/919315642177?text=I'm looking for services" target="_blank"><img src="<?php echo HTTP_ASSET_PATH; ?>img/whatspp-icon.gif" alt="WhatsApp" width="70px;"></a></div>


  <style>
    .whatsapp-button img {
      width: 20%;
      margin: 10px auto;
      display: block;
      border-radius: 12px;
      border: 2px solid #25D366;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      padding: 8px;
      animation: shake 0.5s infinite;
    }
    
    @keyframes shake {
      0%, 100% {
        transform: translateX(0);
      }
      25% {
        transform: translateX(-5px);
      }
      75% {
        transform: translateX(5px);
      }
    }
  </style>
  
  <style>
    .price-button {
      width: 100%;
      margin: 30px auto;
      display: block;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      padding: 8px;
      animation: bounce 3s infinite;
    }
    
    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }
    </style>

  <!-- JS link -->
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/jquery.js"></script>
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/bootstrap.js"></script>
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/jquery.smartmenus.js"></script>
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/owl1.js"></script>
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/slick.js"></script>
  <script src="<?php echo HTTP_ASSET_PATH; ?>js/custom.js"></script>

</body>
</html>