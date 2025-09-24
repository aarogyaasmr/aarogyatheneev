<?php $this->load->view(adminpath.'/sidebar') ?>

<div class="content-page">
<div class="content">
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <?php 
                      if(isset($breadcrumbs)) {
                      foreach($breadcrumbs as $rw) {
                          echo "<li class='breadcrumb-item'><a href='".$rw['href']."'>".$rw['text']."</a></li>";
                        }
                      }

                      ?>
        </ol>
      </div>
      <h4 class="page-title"><?php echo $heading; ?></h4>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" novalidate>
      <div class="row form-group">
        <label class="control-label col-md-3 col-sm-3 " for="keyword">User Name </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="user_name" name="user_name" class=" form-control col-md-7 " value="<?php echo $user_name; ?>"/>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-3 col-sm-3 " for="fax"> Password </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="password" id="password" name="password" class="password form-control col-md-7 mb-2"/>
          <input type="checkbox" id="showHide" />
          <label for="showHide" id="showHideLabel">Show Password</label>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-3 col-sm-3 " for="fax">Confirm Password </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="password" id="user_password" name="user_password" class="password1 form-control col-md-7 mb-2"/>
          <input type="checkbox" id="showHide1" />
          <label for="showHide1" id="showHideLabel1">Show Password</label>
          &nbsp;&nbsp;&nbsp;<span id='message'></span> </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-12 text-center">
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>