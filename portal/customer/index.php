<?php

session_start();
$connect = mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");

if(isset($_POST['save']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="select * from customers where email='".$email."' and phone='".$password."' ";  
  $ajay=mysqli_query($connect,$sql);
  $countlo=mysqli_num_rows($ajay);
  if($countlo==1)
  {
    $resultdata=mysqli_fetch_array($ajay);  
  	$_SESSION['user']=$email;
  	$_SESSION['userid']=$resultdata['id'];
  	echo "<script>location.href='dashboard.php'</script>";
  }
  else
  {
  	echo"<script>location.href='dashboard.php?msg=1'</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Body and font settings */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(45deg, #6e7c7c, #3a4c4c);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Login Page */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
        }
        
        /* Form elements */
        .login-container form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        /* Input fields */
        .login-container input {
            padding: 12px 15px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .login-container input:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        
        .login-container label {
            align-self: flex-start;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }
        
        /* Button styles */
        .login-container button {
            padding: 12px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .login-container button:hover {
            background-color: #45a049;
        }
        
        /* Extra styling for links and forgotten password (optional) */
        .forgot-password {
            margin-top: 10px;
            font-size: 14px;
        }
        
        .forgot-password a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Customer Login</h2>
        <form action="" method="POST">
            <label for="username">Email:</label>
            <input type="text" id="username" name="email" required placeholder="Enter your email (username)">
            
            <label for="password">Phone:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your phone (password)">
            
            <button type="submit" name="save">Login</button>
        </form>
        <!--<div class="forgot-password">-->
        <!--    <a href="#">Forgot your password?</a>-->
        <!--</div>-->
    </div>
</body>
</html>