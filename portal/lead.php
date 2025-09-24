<?php //require_once './php_action/core.php';
include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>
<?php include('./constant/layout/sidebar.php'); ?>   
<?php include('./constant/connect'); ?>
<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> View Leads</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Leads</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-0">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lead Name</th>
                                <th>Phone</th>                           
                                <th>Email </th>
                                <th>Plan</th>
                                <th>Amount</th>
                                <th>Source</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($_SESSION['userId']==2) {
                                $sql = "SELECT * FROM payment_enquiry order by id desc";
                            } else {
                                $sql = "SELECT * FROM payment_enquiry where source='".$_SESSION['user_name']."' order by id desc";
                            }
                            $result1 = $connect->query($sql);
                            $i=1;
                            while($row = $result1->fetch_array()) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i ?></td>
                                <td class="text-center"><?php echo $row['name'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['plan'] ?></td>
                                <td>Rs.<?php echo $row['price'] ?>/-</td>
                                <td><?php echo $row['source'] ?></td>
                                <td>
                                    <?php if($row['pay_status']=="Successfull")
                                    {
                                        $status = "<label class='label label-success' ><h4>Successfull</h4></label>";
                                        echo $status;
                                    } else if($row['pay_status'] == "Cancelled"){
                                        $status = "<label class='label label-danger'><h4> Cancelled</h4></label>";
                                        echo $status;
                                    } else if($row['pay_status'] == "Declined"){
                                        $status = "<label class='label label-primary'><h4> Declined</h4></label>";
                                        echo $status;
                                    } else {
                                        $status = "<label class='label label-primary'><h4> Pending</h4></label>";
                                        echo $status;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./constant/layout/footer.php');?>