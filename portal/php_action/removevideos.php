<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$userid =  $_GET['id'];

if($userid) { 

 $sql = "DELETE FROM crm_videogallery WHERE id = {$userid}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../videos.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the user";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST