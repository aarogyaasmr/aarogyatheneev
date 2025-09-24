<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<link rel="shortcut icon" href="<?php if(webdata()->image){?><?php echo base_url(); ?>uploads/<?php echo webdata()->icon; ?><?php }?>">
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="authentication-bg">
<div class="account-pages mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-pattern">
          <div class="card-body p-4">
            <div class="text-center w-75 m-auto"> <a href="<?php echo base_url(); ?>"  title="<?php echo webdata()->page_title; ?>"> <img  src="<?php if(webdata()->logo){?><?php echo base_url(); ?>uploads/<?php echo webdata()->logo; ?><?php }?>" alt="<?php echo webdata()->page_title; ?>"  class="img-fluid " width="150"></a> </span> </a>
              <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
            </div>
            <form id="loginform" data-parsley-validate=""  novalidate="" action="<?php echo $action; ?>" method="post">
              <div class="form-group mb-3">
                <input type="text" id="username" name="username" placeholder="Username" required="" class="form-control" />
              </div>
              <div class="form-group mb-3">
                <input type="password" id="password" name="password"   placeholder="Password" required=""  class="form-control"/>
              </div>
              <?php if ($this->session->flashdata('loginnotify')) {?>
              <div id="notifications1" class="formmsg text-danger text-center mb-2"><?php echo $this->session->flashdata('loginnotify');?></div>
              <?php }?>
              <div>
                <button type="submit" class="btn btn-primary btn-block	">Log in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer footer-alt"> <?php echo webdata()->copyright; ?> </footer>
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/vendor.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/app.min.js"></script>
</body>
</html>
