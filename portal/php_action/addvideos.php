<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

	$videotitle = $_POST['videotitle'];
    $categories = $_POST['categories'];
    $videodetail = mysqli_real_escape_string($connect,$_POST['videodetail']);
    $vurl = $_POST['vurl'];
    date_default_timezone_set("Asia/Kolkata");
	$reg_date=date("Y-m-d");

	$sql = "INSERT INTO crm_videogallery (name, cate, videourl, video_desc, status, date_added) 
	VALUES ('$videotitle', '$categories', '$vurl', '$videodetail', 1, '$reg_date')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:../videos.php');
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST