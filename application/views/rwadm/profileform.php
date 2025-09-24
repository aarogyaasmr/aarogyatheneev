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
        <label class="control-label col-md-4  " for="page_title">Page Title</label>
        <div class="col-md-8  ">
          <textarea id="page_title" name="page_title" class="form-control "><?php echo $page_title; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="keyword">Meta Keywords </label>
        <div class="col-md-8  ">
          <textarea id="meta_keyword" name="meta_keyword" class="form-control "><?php echo $meta_keyword; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="description">Meta Description </label>
        <div class="col-md-8  ">
          <textarea id="meta_description" name="meta_description" class="form-control "><?php echo $meta_description; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="address">Store Owner Name </label>
        <div class="col-md-8">
          <textarea id="whatsappmsghome" name="whatsappmsghome" class="form-control "><?php echo $whatsappmsghome; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="address">Address </label>
        <div class="col-md-8  ">
          <textarea id="address" name="address" class="form-control "><?php echo $address; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="phone">Phone No. </label>
        <div class="col-md-8  ">
          <textarea id="phone" name="phone" class="form-control "><?php echo $phone; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="phone">Time </label>
        <div class="col-md-8  ">
          <textarea id="ctime" name="ctime" class="form-control "><?php echo $ctime; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="email">Emails </label>
        <div class="col-md-8  ">
          <textarea id="email" name="email" class="form-control "><?php echo $email; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="image">Company Logo </label>
        <div class="col-md-8">
          <input type='file' name='logo' id="logo" size='20' />
          <?php echo $logo; ?> </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="image">Favicon </label>
        <div class="col-md-8">
          <input type='file' name='icon' id="icon" size='20' />
          <?php echo $icon; ?> </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="image">Admin Logo </label>
        <div class="col-md-8">
          <input type='file' name='image' id="image" size='20' />
          <?php echo $image; ?> </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Google Map </label>
        <div class="col-md-8">
          <textarea id="googlemap" required="required" name="googlemap" class="form-control"><?php echo $googlemap; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Facebook </label>
        <div class="col-md-8">
          <input id="socialsites"  value="<?php echo $socialsites; ?>" name="socialsites" class="form-control  ckeditor"/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Instagram</label>
        <div class="col-md-8">
          <input id="social1"  value="<?php echo $social1; ?>" name="social1" class="form-control "/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Twitter </label>
        <div class="col-md-8">
          <input id="social2"  value="<?php echo $social2; ?>" name="social2" class="form-control "/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Linkdin </label>
        <div class="col-md-8">
          <input id="social3"  value="<?php echo $social3; ?>" name="social3" class="form-control "/>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea">Youtube </label>
        <div class="col-md-8">
          <input id="social4"  value="<?php echo $social4; ?>" name="social4" class="form-control "/>
        </div>
      </div>
      <div class="form-group row"  >
        <label class="col-md-4" for="textarea">Home Page Website </label>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <input id="com1" placeholder="Name 1"  value="<?php echo $com1; ?>" name="com1" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="comvalue1"  value="<?php echo $comvalue1; ?>" name="comvalue1" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="numbertitle1"  value="<?php echo $numbertitle1; ?>" name="numbertitle1" class="form-control  "/>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4" for="textarea"> </label>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4"  >
              <input id="com2" placeholder="Name 2"  value="<?php echo $com2; ?>" name="com2" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="comvalue2"  value="<?php echo $comvalue2; ?>" name="comvalue2" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="numbertitle2"  value="<?php echo $numbertitle2; ?>" name="numbertitle2" class="form-control  "/>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row" >
        <label class="col-md-4" for="textarea"> </label>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <input id="com3" placeholder="Name 3"  value="<?php echo $com3; ?>" name="com3" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="comvalue3"  value="<?php echo $comvalue3; ?>" name="comvalue3" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="numbertitle3"  value="<?php echo $numbertitle3; ?>" name="numbertitle3" class="form-control  "/>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row" >
        <label class="col-md-4" for="textarea"> </label>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <input id="com4"  value="<?php echo $com4; ?>" name="com4" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="comvalue4"  value="<?php echo $comvalue4; ?>" name="comvalue4" class="form-control  "/>
            </div>
            <div class="col-md-4">
              <input id="numbertitle4"  value="<?php echo $numbertitle4; ?>" name="numbertitle4" class="form-control  "/>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="fax">Home About Heading</label>
        <div class="col-md-8  ">
          <textarea id="feaheading" name="feaheading" class="form-control "><?php echo $feaheading; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="fax">Home About Text</label>
        <div class="col-md-8  ">
          <textarea id="fax" name="fax" class="form-control ckeditor"><?php echo $fax; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label class="control-label col-md-4" for="aboutimage">Home About Image </label>
        <div class="col-md-8">
          <input type='file' name='aboutimage' id="aboutimage" size='20' />
          <?php echo $aboutimage; ?> </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4  " for="fax">Footer About Text</label>
        <div class="col-md-8  ">
          <textarea id="pricingtext" name="pricingtext" class="form-control "><?php echo $pricingtext; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="address">Footer Newsletter Text </label>
        <div class="col-md-8">
          <textarea id="whatsappmsg" name="whatsappmsg" class="form-control "><?php echo $whatsappmsg; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-4" for="address">Copyright </label>
        <div class="col-md-8">
          <textarea id="copyright" name="copyright" class="form-control "><?php echo $copyright; ?></textarea>
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