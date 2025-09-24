<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php if(webdata()->image){?><?php echo base_url(); ?>uploads/<?php echo webdata()->icon; ?><?php }?>">
<title>Admin Panel</title>
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/css/app.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="<?php echo HTTP_ASSET_PATH; ?>admin/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />
</head>
<body class="left-side-menu-dark">
<div id="wrapper">
<div class="navbar-custom" style="background-color: #f7b84b;">
  <ul class="list-unstyled topnav-menu float-right mb-0">
    <li class="dropdown notification-list"> <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <img src="<?php if(webdata()->image){?><?php echo base_url(); ?>uploads/<?php echo webdata()->icon; ?><?php }?>" alt="user-image" class="rounded-circle"> <span class="pro-user-name ml-1"> <?php echo webdata()->user_name; ?> <i class="mdi mdi-chevron-down"></i> </span> </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown "> 
        <!-- item-->
        <div class="dropdown-header noti-title">
          <h6 class="text-overflow m-0">Welcome ! </h6>
        </div>
        <a href="<?php echo base_url(adminpath.'/dashboard'); ?>" class="dropdown-item notify-item"> <i class="fe-user"></i> <span>Dashboard</span> </a> <a href="<?php echo base_url(adminpath.'/setting');?>" class="dropdown-item notify-item"> <i class="fe-settings"></i> <span>Settings</span> </a> <a href="<?php echo base_url(adminpath.'/passwordreset'); ?>" class="dropdown-item notify-item"> <i class="fe-lock"></i> <span>Password Reset</span> </a>
        <div class="dropdown-divider"></div>
        <a href="<?php echo base_url(adminpath.'/login/logout'); ?>" class="dropdown-item notify-item"> <i class="fe-log-out"></i> <span>Logout</span> </a> </div>
    </li>
  </ul>
  <div class="logo-box"> <a href="<?php echo base_url(adminpath.'/dashboard'); ?>"  title="<?php echo webdata()->page_title; ?>"  class="logo text-center"> <img  src="<?php if(webdata()->logo){?><?php echo base_url(); ?>uploads/<?php echo webdata()->logo; ?><?php }?>" alt="<?php echo webdata()->page_title; ?>" style="    width: 15%;
    float: left;
    margin: 8px 0px 0px 0px;"  class="img-fluid " width="100"></a> </span> </a> </div>
  <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
    <li>
      <button class="button-menu-mobile waves-effect waves-light"> <i class="fe-menu"></i> </button>
    </li>
  </ul>
</div>
