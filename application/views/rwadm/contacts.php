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
    <div class="button-list mb-2"> 
        <a onclick=" $('#imageform').attr('action', '<?php echo $deleteaction; ?>'); $('#imageform').submit();  " class="btn btn-danger  waves-effect waves-light text-white"> Delete</a> 
    </div>
    <form id="imageform" name="imageform" method="post">
      <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php if($allcontactleads) {
          $i=0;
          foreach ($allcontactleads as $value) {
            $i++;
          ?>
          <tr>
            <td width="5%"><?php echo $i; ?></td>
            <th width="5%"><input type="checkbox" class="flat" name="table_records[]" id="imageid" value="<?php echo $value['id']; ?>"></th>
            <td width="10%"><?php echo $value['name']; ?></td>
            <td width="20%"><?php echo $value['email']; ?></td>
            <td width="20%"><?php echo $value['projectdetail']; ?></td>
            <td width="20%"><?php echo $value['date']; ?></td>
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