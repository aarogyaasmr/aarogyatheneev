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
          <form class="form-horizontal form-label-left needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="row form-group">
              <label class="control-label col-md-4" for="name">Plan Name</label>
              <div class="col-md-8">
                <input id="name" class="form-control" name="name" required="required" type="text" value="<?php echo $name; ?>">
              </div>
            </div>
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="name" >Best For </label>
              <div class="col-md-8">
                  <input id="best" class="form-control" name="best" required="required" type="text" value="<?php echo $best; ?>">
              </div>
            </div>
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="name" >Minimum Orders </label>
              <div class="col-md-8">
                  <input id="minimum" class="form-control" name="minimum" required="required" type="text" value="<?php echo $minimum; ?>">
              </div>
            </div>
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="name" >Pricing </label>
              <div class="col-md-8">
                  <input id="pricing" class="form-control" name="pricing" required="required" type="text" value="<?php echo $pricing; ?>">
              </div>
            </div>
            
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="name" >Class </label>
              <div class="col-md-8"> 
                  <select name="colorclass" class="form-control" id="colorclass" required="required">
                      <option value="">Select Color Class</option>
                      <option value="red" <?php if($colorclass=="red") { echo"selected"; } ?>> Red</option>
                      <option value="blue" <?php if($colorclass=="blue") { echo"selected"; } ?>> Blue</option>
                      <option value="green" <?php if($colorclass=="green") { echo"selected"; } ?>> Green</option>
                      <option value="yellow" <?php if($colorclass=="yellow") { echo"selected"; } ?>> Yellow</option>
                      <option value="black" <?php if($colorclass=="black") { echo"selected"; } ?>> Black</option>
                      <option value="white" <?php if($colorclass=="white") { echo"selected"; } ?>> White</option>
                  </select>
              </div>
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
    </div>
  </div>
</div>
</div>
<!-- /page content -->

</div>
</div>