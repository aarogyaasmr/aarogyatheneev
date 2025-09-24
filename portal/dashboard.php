<?php //error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php

if($_SESSION['userId']==2) {
    $lowStockSql = "SELECT * FROM payment_enquiry ";
} else {
    $lowStockSql = "SELECT * FROM payment_enquiry where source='".$_SESSION['user_name']."' ";
}
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;


$date=date('Y-m-d');
$lowStockSql3 = "SELECT * FROM payment_enquiry WHERE date='".$date."'";
    //echo "SELECT * FROM product WHERE  expdate<='".$date."' AND status = 1" ;exit;
$lowStockQuery3 = $connect->query($lowStockSql3);
$counttlead = $lowStockQuery3->num_rows;


if($_SESSION['userId']==2) {
$lowStockSql2 = "SELECT * FROM customers where status='1' ";
} else {
$lowStockSql2 = "SELECT * FROM customers where source='".$_SESSION['user_name']."' and status='1' ";
}
$lowStockQuery2= $connect->query($lowStockSql2);
$countLowStock2 = $lowStockQuery2->num_rows;


if($_SESSION['userId']==2) {
    $leadsql = "SELECT * FROM payment_enquiry where pay_status='Successfull' ";
} else {
    $leadsql = "SELECT * FROM payment_enquiry where source='".$_SESSION['user_name']."' and pay_status='Successfull' ";
}
$leadquery = $connect->query($leadsql);
$countlead = $leadquery->num_rows;


$newleadsql = "SELECT * FROM lead where lead_status=1 and status=1";
$leadnewquery = $connect->query($newleadsql);
$countnewlead = $leadnewquery->num_rows;

$workleadsql = "SELECT * FROM lead where lead_status=1 and status=2";
$leadworkquery = $connect->query($workleadsql);
$countworklead = $leadworkquery->num_rows;

$contactleadsql = "SELECT * FROM lead where lead_status=1 and status=3";
$leadcontactquery = $connect->query($contactleadsql);
$countcontactlead = $leadcontactquery->num_rows;

$qualifiedleadsql = "SELECT * FROM lead where lead_status=1 and status=4";
$leadqualifiedquery = $connect->query($qualifiedleadsql);
$countqualifiedlead = $leadqualifiedquery->num_rows;

$failedleadsql = "SELECT * FROM lead where lead_status=1 and status=5";
$leadfailedquery = $connect->query($failedleadsql);
$countfailedlead = $leadfailedquery->num_rows;

$closedleadsql = "SELECT * FROM lead where lead_status=1 and status=6";
$leadclosedquery = $connect->query($closedleadsql);
$countclosedlead = $leadclosedquery->num_rows;
//$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
        <div class="page-wrapper" style="background-color: rgb(40 49 121 / 8%);">
            
            <!--     <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <div class="float-right"><h3 style="color:black;"><p style="color:black;"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></h3>
                    </div>
                    </div>
            </div> -->
            
            
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-3 dashboard">
                       <div class="card" style="background: #fff">
                           <div class="media widget-ten align-items-center">
                               <div class="media-left meida media-middle">
                                   <span><i class="ti-agenda"></i></span>
                               </div>
                               <div class="media-body media-text-right">
                                   <h2 class=""><?php echo $countLowStock; ?></h2>
                                   <a href="product.php"><p class="m-b-0">Total Leads</p></a>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-receipt"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countlead; ?></h2>
                                    <a href="lead.php"><p class="m-b-0">Sussess Payments</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                      <div class="card" style="background-color: #fff">
                          <div class="media widget-ten align-items-center">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-vector"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white"><?php echo $countLowStock2; ?></h2>
                                  <a href="Order.php"><p class="m-b-0">Total Customers</p></a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-receipt"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $counttlead; ?></h2>
                                    <a href="lead.php"><p class="m-b-0">Today Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-new-window"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countnewlead; ?></h2>
                                    <a href="new-lead.php"><p class="m-b-0">Total New Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-mobile"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countcontactlead; ?></h2>
                                     <a href="contact-lead.php"><p class="m-b-0">Total Contacted Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countfailedlead; ?></h2>
                                     <a href="failed-lead.php"><p class="m-b-0">Total Failed Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                    <div class="col-md-3 dashboard">
                        <div class="card" style="background:#fff ">
                            <div class="media widget-ten align-items-center">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-close"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php echo $countclosedlead; ?></h2>
                                     <a href="closed-lead.php"><p class="m-b-0">Total Closed Leads</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php } ?>

                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
  
                    <?php } ?>
                  
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Today Leads</strong>
                                <div class="table-responsive m-t-40">
                                    <table id="myTablen" class="table table-bordered table-striped">
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
                                                $sql = "SELECT * FROM payment_enquiry where date='".$reg_date."' order by id desc limit 10";
                                            } else {
                                                $sql = "SELECT * FROM payment_enquiry where source='".$_SESSION['user_name']."' and date='".$reg_date."' and pay_status='Successfull'";
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
        
                <?php
                $username = $_SESSION['user_name']; // Replace with the actual username or source
                $sql = "SELECT DATE_FORMAT(date, '%d-%m-%Y') AS registration_day, COUNT(*) AS user_count
                FROM payment_enquiry
                WHERE source = ?
                GROUP BY registration_day
                ORDER BY registration_day;
                ";
                
                $stmt = $connect->prepare($sql);
                $stmt->bind_param('s', $username);
                $stmt->execute();
                $result = $stmt->get_result();
                
                $dates = [];
                $user_counts = [];
                
                // Fetch results and store in arrays
                while ($row = $result->fetch_assoc()) {
                    $dates[] = $row['registration_day'];
                    $user_counts[] = $row['user_count'];
                }
                // print_r($dates);
                ?>
                <div class="row">
                    <div class="col-md-5">
                        <canvas id="myChart" style="background-color: #fff; margin:15px 0px; padding: 20px; border-radius: 5px;" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Recent Tranactions</strong>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order</th>
                                                <th>Amount</th>
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
                                                $sql = "SELECT * FROM customer_plan order by id desc";
                                            } else {
                                                $sql = "SELECT * FROM customer_plan where source='".$_SESSION['user_name']."' order by id desc ";
                                            }
                                            //echo $sql;exit;
                                            $result=$connect->query($sql);
                                            //print_r($result);exit;
                                            foreach ($result as $row) {
                                            $no+=1;
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no ?></td>
                                                <td class="text-center"><?php echo $row['orderid'] ?></td>
                                                <td>₹<?php echo $row['amount'] ?></td>
                                                <td>Success</td>
                                                <td><?php if($row['source']!="") { echo $row['source']; } else { echo "Self"; } ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                            </tr>
                                            <?php    
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>

    <?php include ('./constant/layout/footer.php');?>
    
    <script>
    $(function(){
        $(".preloader").fadeOut();
    })
    </script>
    
    <script>
        // Data for the chart
        const dates = <?php echo json_encode($dates); ?>;
        const userCounts = <?php echo json_encode($user_counts); ?>;

        const ctx = document.getElementById('myChart').getContext('2d');
        const registrationChart = new Chart(ctx, {
            type: 'line', // Line chart to show registrations over time
            data: {
                labels: dates, // X-axis labels (dates)
                datasets: [{
                    label: 'User Registrations',
                    data: userCounts, // Y-axis data (user count)
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        type: 'category',
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Users'
                        }
                    }
                }
            }
        });
    </script>
    