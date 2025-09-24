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
              <label class="control-label col-md-4" for="name">Select Type </label>
              <div class="col-md-8">
                <select id="type" name="type" class="form-control">
                  <?php
                  if($type) { ?>
                  <option value="1" <?php if($type==1) { echo"selected"; } ?>>stress care</option>
                  <option value="2" <?php if($type==2) { echo"selected"; } ?>>health and fitness</option>
                  <option value="3" <?php if($type==3) { echo"selected"; } ?>>special training</option>
                  <?php } else { ?>
                  <option value="1">stress care</option>
                  <option value="2">health and fitness</option>
                  <option value="3">special training</option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row  form-group">
              <label class="control-label col-md-4" for="name">Select Home </label>
              <div class="col-md-8">
                <select id="home" name="home" class="form-control">
                  <?php
                  if($home) { ?>
                  <option value="1" selected="selected">Yes</option>
                  <option value="0">No</option>
                  <?php } else { ?>
                  <option value="1">Yes</option>
                  <option value="0" selected="selected">No</option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-4" for="name">Service Name</label>
              <div class="col-md-8">
                <input id="name" class="form-control" name="name" required="required" type="text" value="<?php echo $name; ?>">
              </div>
            </div>
            <div class="row form-group" >
              <label class="col-md-4" for="textarea">URL</label>
              <div class="col-md-8">
                <input id="linkname" type="text"  name="linkname" value="<?php echo $linkname; ?>" class="form-control"/>
              </div>
            </div>
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="stext" >Short Description </label>
              <div class="col-md-8">
                <textarea id="stext" class="form-control ckeditor" name="stext"><?php echo $stext; ?></textarea>
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-4" for="image">Image </label>
              <div class="col-md-8">
                <input type='file' name='image' id="image" size='20' />
                <?php echo $image; ?> </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-4" for="image">Home Image </label>
              <div class="col-md-8">
                <input type='file' name='imagesec' id="imagesec" size='20' />
                <?php echo $imagesec; ?> </div>
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
            <div class="row form-group"  >
              <label class="control-label col-md-4" for="text" >Description </label>
              <div class="col-md-8">
                <textarea id="text" class="form-control ckeditor" name="text"><?php echo $text; ?></textarea>
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