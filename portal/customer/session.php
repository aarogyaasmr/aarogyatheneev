<?php

@session_start();

if (!isset($_SESSION['user']) || ($_SESSION['user'] == '')) 
{

{
	
$_SESSION['msg']="session expired";

echo "<script>location.href='https://portal.aarogyatheneev.com/customer/'</script>";

}

}
?>