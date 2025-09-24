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
        <label class="control-label   col-md-4" for="name">About Author </label>
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
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name"> Latest </label>
        <div class="col-md-8">
          <select id="latest" name="latest" class="form-control">
            <?php
			if($latest) {?>
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
        <label class="control-label   col-md-4" for="name"> Feature </label>
        <div class="col-md-8">
          <select id="feature" name="feature" class="form-control">
            <?php
			if($feature) {?>
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
        <label class="control-label   col-md-4" for="name">Title <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="name" class="form-control " name="name" required="required" type="text" value="<?php echo $name; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">Book Format <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="bookformat" class="form-control " name="bookformat" required="required" type="text" value="<?php echo $bookformat; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">Author <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="author" class="form-control " name="author" required="required" type="text" value="<?php echo $author; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">SKU <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="sku" class="form-control " name="sku" required="required" type="text" value="<?php echo $sku; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">Category <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="categorydata" class="form-control " name="categorydata" required="required" type="text" value="<?php echo $categorydata; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">Tags <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="tags" class="form-control " name="tags" required="required" type="text" value="<?php echo $tags; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="name">Year <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="year" class="form-control " name="year" required="required" type="text" value="<?php echo $year; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="page_title">Page Title</label>
        <div class="col-md-8">
          <textarea id="page_title" name="page_title" class="form-control"><?php echo $page_title; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="keyword">Meta Keywords </label>
        <div class="col-md-8">
          <textarea id="meta_keyword" name="meta_keyword" class="form-control"><?php echo $meta_keyword; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="description">Meta Description </label>
        <div class="col-md-8">
          <textarea id="meta_description" name="meta_description" class="form-control"><?php echo $meta_description; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="price">Price <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="price" class="form-control " name="price"  type="text" value="<?php echo $price; ?>">
        </div>
      </div>
      <div class="row form-group" >
        <label class="control-label   col-md-4" for="mrpprice">Mrpprice <span class="required">*</span> </label>
        <div class="col-md-8">
          <input id="mrpprice" class="form-control " name="mrpprice" type="text" value="<?php echo $mrpprice; ?>">
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="price">Select Category </label>
        <div class="col-md-8">
          <div style="height: 250px; overflow-y: scroll">
            <?php 
                            if($allpcategory) {
                              foreach ($allpcategory as $value) {
                                ?>
            <input type="checkbox" name="category[]" id="category" value="<?php echo $value['id']; ?>" data-parsley-mincheck="2" class="flat" <?php echo $value['catchecked']; ?>/>
            <?php echo $value['name']; ?> <br />
            <?php foreach ($value['child'] as $value) { ?>
            <input type="checkbox" name="category[]" id="category" value="<?php echo $value['id']; ?>" data-parsley-mincheck="2" class="flat" <?php echo $value['catchecked']; ?>/>
            <?php echo '->'.$value['name']; ?> <br />
            <?php foreach ($value['child'] as $value) { ?>
            <input type="checkbox" name="category[]" id="category" value="<?php echo $value['id']; ?>" data-parsley-mincheck="2" class="flat" <?php echo $value['catchecked']; ?>/>
            <?php echo '-->'.$value['name']; ?> <br />
            <?php }}}} ?>
          </div>
        </div>
      </div>
      <div class="row form-group" >
        <label class="col-md-4" for="textarea">URL</label>
        <div class="col-md-8">
          <input id="deturl" type="text"  name="deturl" value="<?php echo $deturl; ?>" class="form-control"/>
        </div>
      </div>
      <div class="row form-group" >
        <label class="control-label   col-md-4" for="description">Image </label>
        <div class="col-md-8">
          <input type='file' name='image' id="image" size='20' />
          <?php echo $image; ?> </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="shortdescription">Short Sescription </label>
        <div class="col-md-8">
          <textarea id="shortdescription" name="shortdescription" class="form-control ckeditor"><?php echo $shortdescription; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label   col-md-4" for="price">Order Number </label>
        <div class="col-md-8">
          <input id="ordernum" class="form-control " name="ordernum"  type="text" value="<?php echo $ordernum; ?>">
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
