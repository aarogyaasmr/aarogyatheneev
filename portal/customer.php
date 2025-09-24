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
            <h3 class="text-primary"> View Customers</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Customers</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!--<a href="add-lead.php"><button class="btn btn-primary">Add Lead</button></a>-->
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lead Name</th>
                                <th>Phone</th>
                                <th>Email </th>
                                <th>Plan</th>
                                <th>Active From</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             if($_SESSION['userId']==2) {
                                $sql = "SELECT * FROM customers where status='1' order by id desc";
                            } else {
                                $sql = "SELECT * FROM customers where source='".$_SESSION['user_name']."' and status='1' order by id desc";
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
                                <td><?php echo $row['active_from'] ?></td>
                                <td><?php echo $row['source'] ?></td>
                                <td>
                                    <a href="editlead.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-eye"></i></button></a>
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
