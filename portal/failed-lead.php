
<?php
//require_once './php_action/core.php';
 include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');?>
<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Failed Lead</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Failed Lead</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
                
                 <div class="card">
                    <div class="card-body">
                      
                        <a href="add-lead.php"><button class="btn btn-primary">Add Lead</button></a>
                 
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lead Name</th>
                                        <th>Phone</th>                           
                                        <th>Email </th>
                                        <th>Plan</th>
                                        <th>Status</th>
                                        <th>Source</th>
                                        <th>Date</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //include('./constant/connect');
                                	date_default_timezone_set("Asia/Kolkata"); 
                                	$reg_date=date("Y-m-d");
                                	
                                	if($_SESSION['userId']==2) {
                                        $sql = "SELECT * FROM payment_enquiry where pay_status='Cancelled' order by id desc";
                                    } else {
                                        $sql = "SELECT * FROM payment_enquiry where source='".$_SESSION['user_name']."' and pay_status='Cancelled' order by id desc";
                                    }
                                    
                                    //echo $sql;exit;
                                    $result=$connect->query($sql);
                                    //print_r($result);exit;
                                    foreach ($result as $row) {
                                         
                                    $no+=1;
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <td class="text-center"><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['email'] ?></td> 
                                        <td><?php echo $row['plan'] ?></td> 
                                        <td><?php echo $row['pay_status'] ?></td>
                                        <td><?php if($row['source']!="") { echo $row['source']; } else { echo "Self"; } ?></td>
                                        <td><?php echo $row['date'] ?></td>
                                    </tr>
                                </tbody>
                                <?php    
                                }
                                ?>
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include('./constant/layout/footer.php');?>


