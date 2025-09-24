<?php
    $connnect=mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");
    if(isset($_POST['submit']))
    {
        $customer=$_POST['customer'];
        $sqlCheck = "SELECT * FROM customers WHERE id = '".$customer."'";
        $resultCheck = mysqli_query($connnect, $sqlCheck);
        $resultdata=mysqli_fetch_array($resultCheck);
        
        $name=$resultdata['name'];
        $email=$resultdata['email'];
        $phone=$resultdata['phone'];
        $plan=$resultdata['plan'];
        $payment=$_POST['price'];
        $orderid=rand();
        date_default_timezone_set('Asia/Calcutta');
        $date = date("Y-m-d");
        // echo
        $sql="insert into payment_enquiry set name='".$name."',email='".$email."',phone='".$phone."',pay_status='Pending',price='".$payment."',orderid='".$orderid."',payment_type='Direct Payment',plan='".$plan."',
        date='".$date."'";
        // exit;
        if(mysqli_query($connnect,$sql)) {
            // Check if the email or phone already exists in the customers table
            $sqlCheck = "SELECT COUNT(*) FROM customers WHERE email = '".$email."' OR phone = '".$phone."'";
            $resultCheck = mysqli_query($connnect, $sqlCheck);
            $row = mysqli_fetch_row($resultCheck);
            
            // If email or phone already exists, skip the insert
            if ($row[0] == 0) {
                $sqlcustomer="insert into customers set name='".$name."',email='".$email."',phone='".$phone."',orderid='".$orderid."',plan='".$plan."',date='".$date."'";
                $result = mysqli_query($connnect,$sqlcustomer);
            }
        }
    }
?>
<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
</head>
<body>
<form method="POST" name="customerData" action="https://aarogyatheneev.com/gateway/ccavRequestHandler.php">
    <input type="hidden" name="tid" id="tid" value="<?php echo rand(); ?>" readonly />
    <input type="hidden" name="merchant_id" value="3377348"/>
	<input type="hidden" name="order_id" value="<?php echo $orderid;?>"/>
	<input type="hidden" name="amount" value="<?php echo $payment;?>"/>
	<input type="hidden" name="currency" value="INR"/>
	<input type="hidden" name="redirect_url" value="https://aarogyatheneev.com/gateway/ccavResponseHandler.php"/>
	<input type="hidden" name="cancel_url" value="https://aarogyatheneev.com/gateway/ccavResponseHandler.php"/>
	<input type="hidden" name="language" value="EN"/>
	<input type="hidden" name="billing_name" value="<?php echo $name;?>"/>
	<input type="hidden" name="billing_address" value="<?php echo @$addrs;?>"/>
	<input type="hidden" name="billing_city" value="Delhi NCR"/>
	<input type="hidden" name="billing_state" value="<?php echo @$state;?>"/>
	<input type="hidden" name="billing_zip" value="<?php echo @$pincode;?>"/>
	<input type="hidden" name="billing_country" value="India"/>
	<input type="hidden" name="billing_tel" value="<?php echo $phone;?>"/>
	<input type="hidden" name="billing_email" value="<?php echo $email;?>"/>
	<input type="hidden" name="delivery_name" value="<?php echo $name;?>"/>
	<input type="hidden" name="delivery_address" value="<?php echo @$addrs; ?>"/>
	<input type="hidden" name="delivery_city" value=""/>
	<input type="hidden" name="delivery_state" value="<?php echo @$state;?>"/>
	<input type="hidden" name="delivery_zip" value="<?php echo @$pincode;?>"/>
	<input type="hidden" name="delivery_country" value="India"/>
	<input type="hidden" name="delivery_tel" value="<?php echo $phone;?>"/>
	<input type="hidden" name="merchant_param1" value="additional Info."/>
	<input type="hidden" name="merchant_param2" value="additional Info."/>
	<input type="hidden" name="merchant_param3" value="additional Info."/>
	<input type="hidden" name="merchant_param4" value="additional Info."/>
	<input type="hidden" name="merchant_param5" value="additional Info."/></td>
	<input type="hidden" name="promo_code" value=""/>
</form>
<script language='javascript'>document.customerData.submit();</script>

</body>
</html>