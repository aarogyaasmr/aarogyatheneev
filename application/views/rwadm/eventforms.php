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
    <div class="button-list mb-2"> <a onclick=" $('#eventformsform').attr('action', '<?php echo $deleteaction; ?>'); $('#eventformsform').submit();  " class="btn btn-danger waves-effect waves-light text-white"> Delete</a> </div>
    <form id="eventformsform" name="eventformsform" method="post">
      <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Name</th>
            <th>Email</td>
            <th>Phone</td>
            <th>Event Name</td>
            <th>Rransaction Id</td>
            <th>Date</td>
          </tr>
        </thead>
        <tbody>
          <?php if($alleventformss) {
                          $i=0;
                          foreach ($alleventformss as $value) {
                            $i++;
                          ?>
          <tr>
            <td width="5%"><?php echo $i; ?></td>
            <th width="5%"><input type="checkbox" class="flat" name="table_records[]" id="eventformsid" value="<?php echo $value['id']; ?>"></th>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['phone']; ?></td>
            <td><?php echo $value['eventname']; ?></td>
            <td><?php echo $value['transactionid']; ?></td>
            <td><?php echo $value['date_added']; ?></td>
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
