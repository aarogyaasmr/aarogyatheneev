<html>
<head>
    <title> Gateway Please Wait...</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='8C7906B04EBE930CD8E9B7CD5B4F041D';//Shared by CCAVENUES
	$access_code='AVOA71LC01BB62AOBB';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value) {
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>

<script language='javascript'>document.redirect.submit();</script>

</body>
</html>