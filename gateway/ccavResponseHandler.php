<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping View Cart</title>
    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <form method="post" name="thankyou" action="https://aarogyatheneev.com/gateway/thankyou.php">
        <?php include('Crypto.php') ?>
        <?php
        error_reporting(0);
        $workingKey = '8C7906B04EBE930CD8E9B7CD5B4F041D';  //Working Key should be provided here.
        $encResponse =htmlentities(strip_tags($_POST["encResp"]));   //This is the response sent by the CCAvenue Server
        $rcvdString = decrypt($encResponse, $workingKey);  //Crypto Decryption used as per the specified working key.
        $order_status = "";
        $decryptValues = explode('&', $rcvdString);
        $dataSize = sizeof($decryptValues);
        echo "<center>";
        
        for ($i = 0; $i < $dataSize; $i++) {
            $information = explode('=', $decryptValues[$i]);
            if ($i == 3)
                $order_status = $information[1];
        }
        
        /*if ($order_status === "Success") {
            echo "<br>Thank you for shopping with us.Your transaction is successful. We will be shipping your order to you soon.";
        } else if ($order_status === "Aborted") {
            echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
        } else if ($order_status === "Failure") {
            echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
        } else {
            echo "<br>Security Error. Illegal access detected";
        }*/
        
        echo "<br><br>";
        $ordid="";
        echo "<table cellspacing=4 cellpadding=4>";
        for ($i = 0; $i < $dataSize; $i++) {
            $information = explode('=', $decryptValues[$i]);
            echo "<input type=hidden name=$information[0] value=$information[1]>";
            //echo '<tr><td>' . $information[0] . '</td><td>' . urldecode($information[1]) . '</td></tr>';
            if ($i == 0)
                $ordid = $information[1];
        }
        echo "</table><br>";
        echo "</center>";
        ?>
    </form>
    <script language='javascript'>document.thankyou.submit();</script>
</body>
</html>