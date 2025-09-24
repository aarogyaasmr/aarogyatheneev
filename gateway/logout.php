<?php 
session_start();
session_unset();
session_destroy();
if(@$_SESSION["user"])
{
    echo "<script>window.location.href='https://aarogyatheneev.com/gateway/dashboard.php'</script>";
}
else
{
    echo "<script>window.location.href='https://aarogyatheneev.com/gateway/dashboard.php'</script>";
}
?>