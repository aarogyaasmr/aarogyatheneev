<?php 
session_start();
session_unset();
session_destroy();
if(@$_SESSION["user"])
{
    echo "<script>window.location.href='https://portal.aarogyatheneev.com/customer/'</script>";
}
else
{
    echo "<script>window.location.href='https://portal.aarogyatheneev.com/customer/'</script>";
}
?>