<?php
    session_start();
    $connnect=mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .thank-you-img {
            width: 150px;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .details {
            margin-top: 30px;
            text-align: left;
        }
        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            if ($_POST['order_status'] === "Success")
            {
                echo'<img STYLE="MARGIN: 100PX 0PX 0PX 50PX;" src="img/payment-successful.png">';
            }
            elseif ($_POST['order_status'] === "Aborted")
            {
                echo'<img STYLE="MARGIN: 100PX 0PX 0PX 50PX;" src="img/payment-cancle.jpg">';
            }
            elseif ($_POST['order_status'] === "Failure")
            {
                echo'<img STYLE="MARGIN: 100PX 0PX 0PX 50PX;" src="img/failed-payment.png">';
            }
            else
            {
                echo'<img STYLE="MARGIN: 100PX 0PX 0PX 50PX;" src="img/stop_sign.jpg">';
            }
        ?>
        <h1>Thank You for Your Payment!</h1>
        <div class="details">
            <?php
                if ($_POST['order_status'] === "Success")
                {
                    echo'<p style="color:#000;"><strong>Payment Successful! 🎉</strong><br>
                    Thank you for your payment. Your transaction has been successfully completed. We’ve sent a confirmation email with the details to your email.<br></p>';
                }
                elseif ($_POST['order_status'] === "Aborted") 
                {
                    echo'<p style="color:#000;"><strong>Payment Aborted</strong><br>
                    It seems like your payment was not completed. If this was unintentional, please try again.</p>';
                }
                elseif ($_POST['order_status'] === "Failure") 
                {
                    echo'<p style="color:#000;"><strong>Payment Failed ❌</strong><br>
                    We’re sorry, but your payment could not be processed. Please try again or use a different payment method.</p>';
                }
                else
                {
                    echo'<p style="color:#000;"><strong>Security Error. Illegal access detected.</p>';
                }
            ?>
            <br>
            <table class="table table-striped" style="width: 100%; padding: 10px 10px; border-radius: 10px; border: 1px solid #ccc;">
              <tbody>
                <tr>
                  <th scope="row">Name</th>
                  <td><?php echo $_POST['delivery_name']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Order Id</th>
                  <td><?php echo $_POST['order_id']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Paid To </th>
                  <td>Aarogya The Neev</td>
                </tr>
                <tr>
                  <th scope="row">Transaction Date</th>
                  <td><?php echo date("d-m-Y"); ?></td>
                </tr>
                <tr>
                  <th scope="row">Order Status</th>
                  <td>
                  <?php
                    if ($_POST['order_status'] === "Success")
                    {
                        date_default_timezone_set('Asia/Calcutta');
                        $date = date("Y-m-d");
                        $nextBillingDate = date('Y-m-d', strtotime($date . ' +30 days'));
                        
                        $sqlCheck = "SELECT * FROM payment_enquiry WHERE orderid='$_POST[order_id]'";
                        $resultCheck = mysqli_query($connnect, $sqlCheck);
                        $row = mysqli_fetch_array($resultCheck);
                        
                        $sqlCheckcus = "SELECT * FROM customers where phone='".$row['phone']."'";
                        $resCheckcus = mysqli_query($connnect, $sqlCheckcus);
                        $rowcustomer = mysqli_fetch_array($resCheckcus);
                        $customerid  = $rowcustomer['id'];
                        $source  = $rowcustomer['source'];
                        
                        // update customer
                        $updateorder=mysqli_query($connnect,"update customers set status='1' where id='".$customerid."' ");
                        
                        $addplan=mysqli_query($connnect,"insert into customer_plan set customer='".$customerid."',amount='$_POST[amount]',active_from='".$date."',due_date='".$nextBillingDate."',orderid='$_POST[order_id]',source='".$source."',date='".$date."' ");
                        
                        // update payment history
                        $updateorder=mysqli_query($connnect,"update payment_enquiry set pay_status='Successfull' where orderid='$_POST[order_id]' ");
                        
                        // echo "update customers set active_from='".$date."' where phone='".$row['phone']."' ";
                        $updatecustomer=mysqli_query($connnect,"update customers set active_from='".$date."' where phone='".$row['phone']."' ");
                        
                        echo '<h5 style="color:green; font-size: 20px; margin:0px 0px 0px 0px;">Payment Successfull</h5>';
                    }
                    elseif ($_POST['order_status'] === "Aborted")
                    {
                        $updateorder=mysqli_query($connnect,"update payment_enquiry set pay_status='Cancelled' where orderid='$_POST[order_id]' ");
                        echo '<h5 style="color:red; font-size: 20px; margin:0px 0px 0px 0px;">Payment Cancelled.</h5>';
                    }
                    else if ($_POST['order_status'] === "Failure")
                    {
                        $updateorder=mysqli_query($connnect,"update payment_enquiry set pay_status='Declined' where orderid='$_POST[order_id]' ");
                        echo '<h5 style="color:blue; font-size: 20px; margin:0px 0px 0px 0px;">Payment Declined</h5>';
                    }
                    else
                    {
                        echo '<h5 style="margin:0px 0px 0px 0px;">Illegal access detected</h5>';
                    }
                  ?>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Amount </th>
                  <td>Rs.<?php echo $_POST['amount'];?>/-</td>
                </tr>
              </tbody>
            </table>
        </div>
        
        <?php
            if ($_POST['order_status'] === "Success")
            { 
        ?>
        <!--<a href="https://portal.aarogyatheneev.com/customer/" style="float: left; text-align: center; width: 100%; margin: 20px 0px;">Go To Dashboard</a> <br>-->
        
        <br><br>
        <b>Join the YogASMR-Sleep & Healing Group on WhatsApp for Day Workshops & Retreat.</b><br>
        <a href="https://chat.whatsapp.com/GUnp9ioMgd9AibfcsU2SFK" style="float: left; text-align: center; width: 100%; margin: 20px 0px;"><img style="width: 40%;" src="img/WhatsAppButton_Bhu.png" /></a> <br>
        
        <br> Alternatively, you can redirect after 10 seconds.
        <?php } ?>
        
        <p>For any questions regarding your order, please contact support.</p>
    </div>
    
    <script type="text/javascript">   
        function Redirect() 
        {  
            window.location="https://portal.aarogyatheneev.com/customer/"; 
        }
        document.write("You will be redirected to a new page in 5 seconds"); 
        setTimeout('Redirect()', 80000);   
    </script>
    
</body>
</html>