<?php 

require_once 'core.php';

if($_POST) {
	$valid['success'] = array('success' => false, 'messages' => array());
	$currentPassword = md5($_POST['password']);
	//echo $_POST['password'];
	$newPassword = md5($_POST['npassword']);
	//echo $_POST['cpassword'];
	$userId = $_POST['user_id'];
    // echo $userId."<br>";
	$sql ="SELECT * FROM user WHERE id = ".$userId;
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();
    //echo $sql;
    // echo $result['user_password']."<br>";
    // echo $currentPassword;
	if($currentPassword == $result['user_password']) {
		$updateSql = "UPDATE user SET user_password = '$newPassword' WHERE id = $userId";
		//echo $updateSql;exit;
		if($connect->query($updateSql) === TRUE) {
			$valid['success'] = true;
			$_SESSION['messages'] = "Successfully Updated";
			header('location:https://portal.aarogyatheneev.com/change-password.php');
		} else {
			$valid['success'] = false;
			$valid['messages'] = "Error while updating the password";	
		}
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Current password is incorrect";
	}
	$connect->close();
	echo json_encode($valid);
}

?>