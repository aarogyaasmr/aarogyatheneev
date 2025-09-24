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
      <div class="row  form-group">
        <label class="control-label col-md-4" for="name">Home </label>
        <div class="col-md-8">
          <select id="home" name="home" class="form-control">
            <?php
			if($home) {?>
            <option value="1" selected="selected">Yes</option>
            <option value="0">No</option>
            <?php } else { ?>
            <option value="1">Yes</option>
            <option value="0" selected="selected">No</option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="row  form-group">
        <label class="control-label col-md-4" for="name">Title <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="name" class="form-control" name="name" required="required" type="text" value="<?php echo $name; ?>">
        </div>
      </div>
      <div class="row  form-group" >
        <label class="control-label col-md-4" for="description">Image </label>
        <div class="col-md-8">
          <input type='file' name='image' id="image" size='20' />
          <?php echo $image; ?> </div>
      </div>
      
       <div class="row form-group" >
        <label class="col-md-4" for="textarea">Content </label>
        <div class="col-md-8">
          <textarea id="content" name="content" class="form-control  ckeditor"><?php echo $content; ?></textarea>
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
