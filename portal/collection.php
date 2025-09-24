<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect'); ?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> Total Commision</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Total Commision</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!--<a href="add-category.php"><button class="btn btn-primary">Add Categories</button></a>-->
                <?php if($_SESSION['userId']==2) { ?>
                <div class="table-responsive m-t-40">
                <?php
                // Query to get monthly total amount, commission, and remaining payment
                $sql = "SELECT DATE_FORMAT(date, '%M %Y') AS month, 
                               SUM(amount) AS total_amount, 
                               SUM(amount * 0.25) AS total_commission, 
                               SUM(amount - (amount * 0.25)) AS remaining_payment
                        FROM customer_plan 
                        
                        GROUP BY month 
                        ORDER BY STR_TO_DATE(month, '%M %Y') ASC";
                $result = $connect->query($sql);
                $total_amount_sum = 0; // Initialize total amount sum
                $total_commission_sum = 0; // Initialize total commission sum
                $total_remaining_payment_sum = 0; // Initialize total remaining payment sum
                
                if ($result->num_rows > 0) {
                    echo "<table border='1' id='myTable' class='table table-bordered table-striped'>
                            <tr>
                                <th style='text-align: center; font-weight:bold;'>Month</th>
                                <th style='text-align: center; font-weight:bold;'>Total Amount (Rs.)</th>
                                <th style='text-align: center; font-weight:bold;'>Commission Given (Rs.)</th>
                                <th style='text-align: center; font-weight:bold;'>Remaining Payment (Rs.)</th>
                            </tr>";
                    
                    while ($row = $result->fetch_assoc()) {
                        $total_amount_sum += $row['total_amount']; // Add each month's total amount to the total sum
                        $total_commission_sum += $row['total_commission']; // Add each month's commission to the total sum
                        $total_remaining_payment_sum += $row['remaining_payment']; // Add each month's remaining payment to the total sum
                        
                        echo "<tr>
                                <td style='text-align: center;'>" . $row['month'] . "</td>
                                <td style='text-align: center;'>Rs. " . number_format($row['total_amount'], 2) . "</td>
                                <td style='text-align: center;'>Rs. " . number_format($row['total_commission'], 2) . "</td>
                                <td style='text-align: center;'>Rs. " . number_format($row['remaining_payment'], 2) . "</td>
                              </tr>";
                    }
                    
                    // Display the total sum row
                    echo "<tr>
                            <td style='text-align: center; font-weight:bold;'>Total</td>
                            <td style='text-align: center; font-weight:bold;'>Rs. " . number_format($total_amount_sum, 2) . "</td>
                            <td style='text-align: center; font-weight:bold;'>Rs. " . number_format($total_commission_sum, 2) . "</td>
                            <td style='text-align: center; font-weight:bold;'>Rs. " . number_format($total_remaining_payment_sum, 2) . "</td>
                          </tr>";
                    echo "</table>";
                }
                else {
                    echo "No data found";
                }
                ?>
            </div>
                <?php } else { ?>
                <div class="table-responsive m-t-40">
                    <?php
                    // Query to get monthly commission
                    $sql = "SELECT DATE_FORMAT(date, '%M %Y') AS month, SUM(amount * 0.25) AS total_commission 
                            FROM customer_plan 
                            WHERE source='".$_SESSION['user_name']."'
                            GROUP BY month 
                            ORDER BY STR_TO_DATE(month, '%M %Y') ASC";
                    $result = $connect->query($sql);
                    $total_sum = 0; // Initialize total commission sum
                    if ($result->num_rows > 0) {
                        echo "<table border='1' id='myTable' class='table table-bordered table-striped'>
                                <tr>
                                    <th style='text-align: center; font-weight:bold;'>Month</th>
                                    <th style='text-align: center; font-weight:bold;'>Total Commission (Rs.)</th>
                                </tr>";
                        while ($row = $result->fetch_assoc()) {
                            $total_sum += $row['total_commission']; // Add each month's commission to the total sum
                            echo "<tr>
                                    <td style='text-align: center;'>" . $row['month'] . "</td>
                                    <td style='text-align: center;'>Rs. " . number_format($row['total_commission'], 2) . "</td>
                                  </tr>";
                        }
                        // Display the total sum row
                        echo "<tr>
                                <td style='text-align: center; font-weight:bold;'>Total</td>
                                <td style='text-align: center; font-weight:bold;'>Rs. " . number_format($total_sum, 2) . "</td>
                              </tr>";
                        echo "</table>";
                    }
                    else {
                        echo "No data found";
                    }
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>
        
        <?php include('./constant/layout/footer.php');?>
        