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
        <label class="control-label col-md-4" for="page_title">About Heading</label>
        <div class="col-md-8">
          <textarea id="aboutheading" name="aboutheading" class="form-control"><?php echo $aboutheading; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">About Us</label>
        <div class="col-md-8">
          <textarea id="abouttext" name="abouttext" class="form-control ckeditor"><?php echo $abouttext; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Image</label>
        <div class="col-md-8">
          <input type="file" name="image" class="form-control" id="image" />
          <?php echo $image; ?>
        </div>
      </div>
      <hr>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Page Title</label>
        <div class="col-md-8  ">
          <textarea id="page_title" name="page_title" class="form-control "><?php echo $page_title; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="keyword">Meta Keywords </label>
        <div class="col-md-8  ">
          <textarea id="meta_keyword" name="meta_keyword" class="form-control "><?php echo $meta_keyword; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="description">Meta Description </label>
        <div class="col-md-8  ">
          <textarea id="meta_description" name="meta_description" class="form-control "><?php echo $meta_description; ?></textarea>
        </div>
      </div>
      <hr>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Vision</label>
        <div class="col-md-8">
          <textarea id="aboutvision" name="aboutvision" class="form-control"><?php echo $aboutvision; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Mission</label>
        <div class="col-md-8">
          <textarea id="aboutmission" name="aboutmission" class="form-control"><?php echo $aboutmission; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="page_title">Brand Belief</label>
        <div class="col-md-8">
          <textarea id="brandbelief" name="brandbelief" class="form-control"><?php echo $brandbelief; ?></textarea>
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