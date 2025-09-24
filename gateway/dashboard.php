<?php

session_start();
$connect = mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");

if(isset($_REQUEST['save']))
{
  $email=$_REQUEST['email'];
  $password=md5($_REQUEST['password']);
  $sql="select * from user where user_name='".$email."' and user_password='".$password."' ";  
  $ajay=mysqli_query($connect,$sql);
  $countlo=mysqli_num_rows($ajay);
  if($countlo==1)
  {
  	$_SESSION['user']=$email;
  	echo "<script>location.href='dashboard.php'</script>";
  }
  else
  {
  	echo"<script>location.href='dashboard.php?msg=1'</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Aarogya the Neev | Fitness Transformation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="icon" href="https://aarogyatheneev.com/uploads/admin/3309fav_aarogya.png" type="image/x-icon">
<link rel="stylesheet" href="https://www.viewholidaytrip.com/css/bootstrap.css">
<!-- Bootstrap Min JS -->
<script src="https://www.attitudetallyacademy.com/js/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function(){
    //$('#DataTable').DataTable();
    $('#DataTable').dataTable( {
    "pageLength": 50
    } );
});
</script>
<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<title>Courier Tracking System - List</title>
<style>
.ed
{
    width: 100%;
    float: left;
    text-align: center;
    color: #E91E63;
    margin: 20px 0px 20px 0px;
}

.lo
{
    width: 20%;
    float: right;
    text-align: left;
    font-size: 30px;
    font-weight: bold;
    margin: 20px 0px 30px 0px;
}
</style>
</head>
<body>
<?php 
if(@$_SESSION["user"]=="")
{
?>
<h1 class="ed">
	<?php
	$id=@$_GET['msg'];
	switch($id)
	{
	case 1:echo '<h1 class="ed" style="color:red;">Error : Please enter right details</h1>';
	break;
	case 2: echo '<h5 style="color:blue;">Congratulation : Your Selected Data Is Delete Sucessfully.</h5>';
	break;
	case 3: echo '<h5 style="color:green;">Congratulation : New password sent to your registered email.</h5>';
	break;
	default  :  echo   "First Verify its you!";
	}
    ?>
</h1>
<div class="container">
  <center>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
      </div>     <br><br>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div> <br><br>
      <button type="submit" name="save" class="btn btn-primary">Submit</button>
    </form>
    <!--<a href="changepass.php?rq=chng" style="float: left; color: #fff; background-color: #e30000; padding: 10px 10px 10px 10px; margin: 0px 0px 30px 0px;">Change Password</a>-->
  </center>
</div>
<?php
}
else
{
?>
<h1 class="ed">User Details 
<a class="lo" href="logout.php">Logout</a></h1>
<div class="container">
    <!--<a href="download.php" style="float: left; color: #fff; background-color: #e30000; padding: 10px 10px 10px 10px; margin: 0px 0px 30px 0px;">Download Excel</a>-->
    <form action="delete-landing-enquiry.php" method="post" name="ajay" onsubmit="return sharma()";>
    <table class="table table-striped" id="DataTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Plan</th>
          <th scope="col">Details</th>
          <th scope="col">Source</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if($_SESSION['user']=="anmol") {
    			$sql="select * from payment_enquiry where source='anmol' order by id desc";
            } else {
                $sql="select * from payment_enquiry order by id desc"; 
            }
			$count=1;
			$npq=mysqli_query($connect,$sql);
			if(mysqli_num_rows($npq)<1)
			{
				echo"";
			}
			else
			{
			while ($result=mysqli_fetch_array($npq))
			{
	    ?>
        <tr>
          <th scope="row"><?php echo $count++ ?></th>
          <td><?php echo $result['name']; ?></td>
          <td><?php echo $result['phone']; ?></td>
          <td><?php echo $result['plan']; ?> <br> Amount: Rs.<?php echo $result['price']; ?>/-</td>
          <td>Age: <?php echo $result['age']; ?> | Weight: <?php echo $result['weight']; ?> | Purpose: <?php echo $result['pupose']; ?></td>
          <td><?php echo $result['source']; ?></td>
          <td><?php echo $result['pay_status']; ?></td>
          <td><?php echo $result['date']; ?></td>
        </tr>
        <?php } } ?>
      </tbody>
    </table>
    <!--<input type="submit" name="deletemultiplerecords" value="Delete Multiple" class="btn btn-default" style="margin-bottom:10px; margin-top:10px;"  />-->
    </form>
</div>
<?php
}
?>  

<script>
$(document).ready(function() {
    $('#selecctallold').click(function(event) { //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"
            });
        }
        else {
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"
            });
        }
    });
});
</script>

</body>
</html>