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
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 1 Heading</label>
        <div class="col-md-8">
          <input type="text" name="timelineh1" class="form-control" id="timelineh1" value="<?php echo $timelineh1; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 1 Detail</label>
        <div class="col-md-8">
          <input type="text" name="timelined1" class="form-control" id="timelined1" value="<?php echo $timelined1; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 2 Heading</label>
        <div class="col-md-8">
          <input type="text" name="timelineh2" class="form-control" id="timelineh2" value="<?php echo $timelineh2; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 2 Detail</label>
        <div class="col-md-8">
          <input type="text" name="timelined2" class="form-control" id="timelined2" value="<?php echo $timelined2; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 3 Heading</label>
        <div class="col-md-8">
          <input type="text" name="timelineh3" class="form-control" id="timelineh3" value="<?php echo $timelineh3; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 3 Detail</label>
        <div class="col-md-8">
          <input type="text" name="timelined3" class="form-control" id="timelined3" value="<?php echo $timelined3; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 4 Heading</label>
        <div class="col-md-8">
          <input type="text" name="timelineh4" class="form-control" id="timelineh4" value="<?php echo $timelineh4; ?>" />
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Timeline 4 Detail</label>
        <div class="col-md-8">
          <input type="text" name="timelined4" class="form-control" id="timelined4" value="<?php echo $timelined4; ?>" />
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group row">
        <div class="col-md-12 text-center">
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>