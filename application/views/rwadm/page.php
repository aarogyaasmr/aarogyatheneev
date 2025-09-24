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
    <div class="button-list mb-2"> <a href="<?php echo base_url(adminpath.'/page/add'); ?>" class="btn btn-primary waves-effect waves-light"> Add </a> <a onclick=" $('#cmsform').attr('action', '<?php echo $deleteaction; ?>'); $('#cmsform').submit();  " class="btn btn-danger waves-effect waves-light text-white"> Delete</a> <a onclick=" $('#cmsform').attr('action', '<?php echo $activeaction; ?>'); $('#cmsform').submit();  " class="btn btn-warning waves-effect waves-light text-white"> Active</a> <a onclick=" $('#cmsform').attr('action', '<?php echo $inactiveaction; ?>'); $('#cmsform').submit();  " class="btn btn-info waves-effect waves-light text-white">Inactive</a> </div>
    <form id="cmsform" name="cmsform" method="post">
      <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
        <thead>
          <tr>
            <th>SR/NO.</th>
            <th>.</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if($allpages) {
                          $i=0;
                          foreach ($allpages as $value) {
                            $i++;
                          ?>
          <tr>
            <td width="5%"><?php echo $i; ?></td>
            <th width="5%"><input type="checkbox" class="flat hide<?php echo $i; ?>" name="table_records[]" id="cmsid" value="<?php echo $value['id']; ?>"></th>
            <td width="60%"><?php echo $value['name']; ?></td>
            <td width="20%"><?php if($value['status']){ ?>
              Publish
              <?php } else { ?>
              Unpublish
              <?php } ?></td>
            <td width="10%"><a href="<?php echo $value['href']; ?>"  class=" btn btn-info waves-effect waves-light text-white waves-effect waves-light "><i class="fa fa-edit"></i> Edit </a></td>
          </tr>
          <?php 
                          }

                        }
                        ?>
        </tbody>
      </table>
    </form>
  </div>
</div>
