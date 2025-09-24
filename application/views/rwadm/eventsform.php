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
        <div class="col-md-8 ">
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
        <label class="control-label col-md-4" for="name">Paid </label>
        <div class="col-md-8 ">
          <select id="free" name="free" class="form-control">
            <?php
      if($free) {?>
            <option value="1" selected="selected">Yes</option>
            <option value="0">No</option>
            <?php } else { ?>
            <option value="1">Yes</option>
            <option value="0" selected="selected">No</option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="name">Title <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="name" class="form-control " name="name" required="required" type="text" value="<?php echo $name; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="name">Sub Title <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="subhead" class="form-control " name="subhead"  type="text" value="<?php echo $subhead; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="linkname">Linkname <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="linkname" class="form-control " name="linkname" required="required" type="text" value="<?php echo $linkname; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="orderno">Order No. <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="orderno" class="form-control " name="orderno" required="required" type="text" value="<?php echo $orderno; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="enddate">Start Date <span class="required">*</span> </label>
        <div class="col-md-8">
          <div class="input-group date form_date" data-date="" data-date-format="dd MM" data-link-field="dtp_input2" data-link-format="yyyy-mm">
            <input class="form-control dobdate" size="16" type="text" name="startdate" id="startdate" value="<?php echo $startdate; ?>" >
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="enddate">End Date <span class="required">*</span> </label>
        <div class="col-md-8">
          <div class="input-group date form_date dobdate" data-date="" data-date-format="dd MM" data-link-field="dtp_input2" data-link-format="yyyy-mm">
            <input class="form-control" size="16" type="text" name="enddate" id="enddate" value="<?php echo $enddate; ?>" >
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="page_title">Page Title</label>
        <div class="col-md-8">
          <textarea id="page_title" name="page_title" class="form-control "><?php echo $page_title; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="keyword">Meta Keywords </label>
        <div class="col-md-8">
          <textarea id="meta_keyword" name="meta_keyword" class="form-control "><?php echo $meta_keyword; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="description">Meta Description </label>
        <div class="col-md-8">
          <textarea id="meta_description" name="meta_description" class="form-control "><?php echo $meta_description; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="description">Image </label>
        <div class="col-md-8">
          <input type='file' name='image' id="image" size='20' />
          <?php echo $image; ?> </div>
      </div>
      <div class="row form-group">
        <label class="col-md-4" for="textarea">Short Description </label>
        <div class="col-md-8">
          <textarea id="shortdescription" required="required" name="shortdescription" class="form-control  ckeditor"><?php echo $shortdescription; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-4" for="textarea">Description </label>
        <div class="col-md-8">
          <textarea id="description" required="required" name="description" class="form-control  ckeditor"><?php echo $description; ?></textarea>
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
