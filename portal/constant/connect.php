<?php 
// DB credentials.
$localhost = "localhost";
$username = "u397572463_bhumika";
// $password = "xDCmnRAYs!3";
$password = "#KJfvUSZNV0j";
$dbname = "u397572463_aarogya";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
} else {
    // echo "Successfully connected";
}
?>