<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>

<?php include('./constant/connect.php');

$sql="SELECT * from customers where id='".$_GET['id']."'";
$result=$connect->query($sql)->fetch_assoc();

?>

<div class="page-wrapper">
    
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Lead Management</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Lead</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
                <div class="card">
                    <div class="card-title">
                        
                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="row" method="POST"  id="submitBrandForm" action="php_action/editLead.php?id=<?php echo $_GET['id'];?>"enctype="multipart/form-data">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Lead Name</label>
                                    <input type="text"  class="form-control" id="leadName" readonly="" placeholder="Lead Name" name="lead" value="<?php echo $result['name'];  ?>" required="" pattern="^[a-z A-z]+$"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class=" control-label">Phone</label>
                                    <?php
                                        $phone = $result['phone']; // Assuming phone is a string
                                        $maskedPhone = str_repeat('*', strlen($phone) - 4) . substr($phone, -4);
                                    ?>
                                    <input type="text"  class="form-control"id="categoriesName" readonly="" placeholder="Phone" name="phone" value="<?php echo $maskedPhone;;  ?>" required="" pattern="^[0-9]+$"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Email</label>
                                    <?php
                                        $email = $result['email'];
                                        $parts = explode("@", $email);
                                        $maskedEmail = substr($parts[0], 0, 2) . str_repeat('*', strlen($parts[0]) - 2) . "@" . $parts[1];
                                    ?>
                                    <input type="text"  class="form-control"id="categoriesName" readonly="" value="<?php echo $maskedEmail; ?>"  placeholder="Email" name="email"  required="" />
                                </div>
                                 <div class="form-group col-md-6">
                                    <label class="control-label">City</label>
                                    <input type="text"  class="form-control"id="categoriesName" readonly="" value="<?php echo $result['city']; ?>" placeholder="City" name="city"  required="" />
                                </div>
                            </form>
                        </div>
                        
                        <?php if($_SESSION['userId']==2) { ?>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>                        
                                        <th>Orderid </th>
                                        <th>Amount</th>
                                        <th>Start From</th>
                                        <th>Expire</th>
                                        <th>Commission</th>
                                        <th>Total Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM customer_plan where customer='".$_GET['id']."'";
                                    $result1 = $connect->query($sql);
                                    $i=1;
                                    while($row = $result1->fetch_array()) {
                                        $commission = ($row['amount'] * 25) / 100; // Calculate 25% commission
                                        $total_commission += $commission; // Add to total commission
                                        $total_amount += $row['amount']; // Add to total collection
                                        $finalpayment += $row['amount']-$commission; // Add to total received
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>
                                        <td class="text-center"><?php echo $row['orderid'] ?></td>
                                        <td>Rs.<?php echo $row['amount'] ?>/-</td>
                                        <td><?php echo date('M j, Y', strtotime($row['active_from'])); ?></td>
                                        <td><?php echo date('M j, Y', strtotime($row['due_date'])); ?></td>
                                        <td>Rs.<?php echo $commission; ?>/-</td>
                                        <td>Rs.<?php echo $row['amount']-$commission; ?>/-</td>
                                    </tr>
                                    <?php $i++; }  ?>
                                    <b style="color:green">Total Received :</b> Rs. <?=$total_amount;?>/-<br>
                                    <b style="color:green">Total Commission :</b> Rs. <?=$total_commission;?>/- <br><hr>
                                    <b style="color:green">Final Payment :</b> Rs. <?=$finalpayment;?>/-
                                </tbody>
                            </table>
                        </div>
                        <?php } else { ?>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>                        
                                        <th>Orderid </th>
                                        <th>Amount</th>
                                        <th>Start From</th>
                                        <th>Expire</th>
                                        <th>Commission</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM customer_plan where customer='".$_GET['id']."'";
                                    $result1 = $connect->query($sql);
                                    $i=1;
                                    while($row = $result1->fetch_array()) {
                                        $commission = ($row['amount'] * 25) / 100; // Calculate 25% commission
                                        $total_commission += $commission; // Add to total commission
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>
                                        <td class="text-center"><?php echo $row['orderid'] ?></td>
                                        <td>Rs.<?php echo $row['amount'] ?>/-</td>
                                        <td><?php echo date('M j, Y', strtotime($row['active_from'])); ?></td>
                                        <td><?php echo date('M j, Y', strtotime($row['due_date'])); ?></td>
                                        <td>Rs.<?php echo $commission; ?>/-</td>
                                    </tr>
                                    <?php $i++; }  ?>
                                    <b style="color:green">Total :</b> Rs. <?=$total_commission;?>/-
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include('./constant/layout/footer.php');?>
