<?php
/* Local Database*/

$servername = "localhost";
$username = "u397572463_lead";
$password = "xDCmnRAYs!3";
$dbname = "u397572463_crm";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 