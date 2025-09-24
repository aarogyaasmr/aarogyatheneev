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

    <div class="searcharea" style="display: none">

      <div class="row">

        <div class="col-md-3">

          <b>From Date</b>

          <input type="date" class="form-control date" id="fromdate" name="fromdate" placeholder="From Date">

        </div>

        <div class="col-md-3">

            <b>To Date</b>

          <input type="date" class="form-control date" id="todate" name="todate" placeholder="To Date">

        </div>

        <div class="col-md-3">

          <button style="margin: 20px 0px 0px 0px;" class="btn btn-primary" onclick="downloadfilter()"> Download Excel</button>

        </div>

      </div>

    </div>

    <br>

    <div class="button-list mb-2">  

        <a onclick=" $('#newsform').attr('action', '<?php echo $deleteaction; ?>'); $('#newsform').submit();  " class="btn btn-danger waves-effect waves-light text-white"> Delete</a> 

    </div>

    <form id="newsform" name="newsform" method="post">

        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">

          <thead>

            <tr>

              <th></th>

              <th></th>

              <th>Email</th>

            </tr>

          </thead>

          <tbody>

            <?php if($allheaderbanners) {

              $i=0;

              foreach ($allheaderbanners as $value) {

              $i++;

            ?>

            <tr>

              <td width="5%"><?php echo $i; ?></td>

              <th width="5%"><input type="checkbox" class="flat" name="table_records[]" id="imageid" value="<?php echo $value['id']; ?>"></th>

              <td width="50%"><?php echo $value['email']; ?></td>

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



<script>

    function downloadfilter() {

        

    url = '<?php echo base_url().adminpath; ?>/downloadexcel/downloadcontactform';



    url1 ="";



    var fromdate = $('input[name="fromdate"]').val();

    var todate = $('input[name="todate"]').val();



    if (fromdate) {

        url1 += '?fromdate=' + fromdate;

    }

    if (todate) {

        url1 += '&todate=' + todate;

    }



    location = url+url1;

  }

</script>

