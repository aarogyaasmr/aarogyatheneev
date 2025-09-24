<?php
    include_once("session.php");
    $connnect=mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");
    $sqlCheck = "SELECT * FROM customers WHERE email = '".$_SESSION['user']."' OR phone = '".$_SESSION['user']."'";
    $resultCheck = mysqli_query($connnect, $sqlCheck);
    $resultdata=mysqli_fetch_array($resultCheck);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - Aarogya The Neev</title>
    <link rel="icon" href="https://aarogyatheneev.com/uploads/admin/3309fav_aarogya.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Reset and Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        h1, h2, h3, h4 {
            color: #333;
        }
        
        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
            flex-wrap: wrap;
        }
        
        .sidebar {
            width: 250px;
            background-color: #3a4e3b;
            color: white;
            position: fixed;
            height: 100vh;
            top: 0;
            left: 0;
            padding: 20px;
            overflow-y: auto;
        }
        
        .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .sidebar-header h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            text-align: left;
            padding: 0px 0px 10px 0px;
            border-bottom: 2px solid;
        }
        
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        
        .sidebar ul li {
            margin: 20px 0;
        }
        
        .sidebar ul li a {
            color: white;
            font-size: 18px;
            display: block;
            padding: 10px 0px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .sidebar ul li a:hover {
            background-color: #4c694d;
        }
        
        ul li a:hover {
            color: #ffffff !important;
            padding: 10px 10px;
        }
        
        .main-content {
            flex-grow: 1;
            padding: 30px;
            margin-left: 250px;
        }

        header h1 {
            font-size: 28px;
            margin-bottom: 30px;
        }
        
        /* Card Styles */
        .card {
            background-color: #fff;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .card h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        /* Plan Renewal Form */
        .renewal-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .renewal-form select,.renewal-form input,
        .renewal-form button {
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        
        .renewal-form button {
            width: 20% !important;
            background-color: #198754;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .renewal-form button:hover {
            background-color: #45a049;
        }
        
        /* Payment History Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        table th {
            background-color: #203554;
            color: white;
        }
        
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        table tr:hover {
            background-color: #f1f1f1;
        }
        
        /* Video Section */
        .video-list {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .video-item {
            text-align: center;
            width: 30%;
            float: left;
        }
        
        .video-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .video-item a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .video-item a:hover {
            background-color: #45a049;
        }
        
        /* Live Classes Section */
        ul {
            list-style: none;
            padding-left: 20px;
        }
        
        ul li {
            margin: 10px 0;
        }
        
        ul li a {
            color: #4CAF50;
            font-size: 18px;
            transition: color 0.3s;
        }
        
        ul li a:hover {
            color: #45a049;
        }
        
        .ondes {
            display: none ;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .video-item {
                text-align: center;
                width: 100% !important;
            }

            .dashboard-container {
                flex-direction: column;
            }
            
            .onmob {
                display: none !important;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                padding: 15px;
            }
        
            .sidebar ul {
                display: flex;
                justify-content: space-around;
            }
        
            .sidebar ul li {
                margin: 0;
            }
        
            .main-content {
                padding: 20px 10px;
                margin-top: 150px;
                margin-left: 0px !important;
            }
        
            header h1 {
                font-size: 24px;
                text-align: center;
            }
        
            .card {
                padding: 20px;
            }
        
            .renewal-form button {
                width: 100%;
            }
        
            .video-list {
                grid-template-columns: 1fr;
            }
        }
        .video-container {
            position: relative;
            width: 100%;
            max-width: 960px;
            margin: auto;
            padding: 10px;
            border-radius: 5px;
            background: black;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="onmob">
                <li><a href="#profile">Profile</a></li>
                <li><a href="#plan">Plan Details</a></li>
                <li><a href="#payment-history">Payment History</a></li>
                <li><a href="#videos">Recorded Videos</a></li>
                <li><a href="#classes">Live Classes</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <ul class="ondes">
                <li><a href="#profile">Profile</a></li>
                <li><a href="#videos">Recorded Videos</a></li>
                <li><a href="#classes">Live Classes</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>Welcome, <?=$resultdata['name'];?></h1>
            </header>

            <section id="profile">
                <div class="card">
                    <h3>Profile</h3>
                    <p><strong>Name:</strong> <?=$resultdata['name'];?></p>
                    <p><strong>Email:</strong> <?=$resultdata['email'];?></p>
                    <p style="margin: 0px;"><strong>Phone:</strong> <?=$resultdata['phone'];?></p>
                </div>
            </section>

            <section id="plan">
                <div class="card">
                    <h3>Your Plan Details</h3>
                    <p><strong>Plan:</strong> <?=$resultdata['plan'];?></p>
                    <p><strong>Start Date:</strong> <?=$resultdata['active_from'];?></p>
                    <?php
                        $activeFrom = $resultdata['active_from'];
                        $nextBillingDate = date('Y-m-d', strtotime($activeFrom . ' +30 days'));
                        // Calculate the remaining days
                        $remainingDays = (strtotime($nextBillingDate) - strtotime(date('Y-m-d'))) / (60 * 60 * 24);
                    ?>
                    <p><strong>Next Billing Date:</strong> <?=$nextBillingDate;;?></p>
                    
                    <?php if ($remainingDays < 5): ?>
                    <div style="margin: 0px; padding: 10px;" class="alert alert-danger" role="alert">
                      Your plan will expire in <b><?=$remainingDays;?></b> days! Please renew to continue using our services.
                    </div>
                    <?php endif; ?>
                    
                    <br>
                    <!-- Plan Renewal Form -->
                    <h3>Renew Your Plan</h3>
                    <form class="renewal-form" action="renew.php" method="POST">
                        <label for="renewal-duration">Renewal Duration:</label>
                        <select style="width: 80%;" id="renewal-duration" name="renewal-duration" required>
                            <option value="1-month">1 Month</option>
                        </select>
                        <label for="payment-method">Payment:</label>
                        <?php 
                        if($resultdata['plan']=="Fitness Transformation") { $price = 10; }
                        elseif($resultdata['plan']=="Group Yoga Sessions") { $price = 10; }
                        elseif($resultdata['plan']=="Personalized Weight Loss Plans") { $price = 4000; }
                        elseif($resultdata['plan']=="Mental Wellness Coaching") { $price = 4000; }
                        else { $price = 4000; } ?>
                        <input type="text" style="width: 80%;" readonly="" name="price" value="<?php echo $price; ?>">
                        <input type="hidden" style="width: 80%;" name="customer" value="<?php echo $resultdata['id']; ?>">
                        <button style="width: 80%;" name="submit" type="submit">Renew Plan</button>
                    </form>
                </div>
            </section>

            <!-- Recorded Videos Section -->
            <section id="videos">
                <div class="card">
                    <h3>Recorded Videos</h3>
                    <?php if ($remainingDays == 0) { ?>
                    <div class="alert alert-danger" role="alert">
                      Your plan will expire in <?=$remainingDays;?> days! Please renew to continue using our services.
                    </div>
                    <?php } else { ?>
                    <div class="video-list">
                        <?php
                        $sqlcategory = "SELECT * FROM crmvideocategory";
                        $resultcateg = mysqli_query($connnect, $sqlcategory);
                        while($getcategor = mysqli_fetch_array($resultcateg)) {
                        ?>
                            <div class="video-item">
                                <h4><a target="_blank" href="videos.php?cateid=<?php echo $getcategor['id']; ?>"><?php echo $getcategor['category']; ?></a></h4>
                            </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <!-- Live Classes Section -->
            <section id="classes">
                <div class="card">
                    <h3>Live Classes</h3>
                    <?php if ($remainingDays == 0) { ?>
                    <div class="alert alert-danger" role="alert">
                      Your plan will expire in <?=$remainingDays;?> days! Please renew to continue using our services.
                    </div>
                    <?php } else { ?>
                    <ul style="padding: 0px;">
                        <li><a href="https://meet.google.com/wnh-thpj-cbu" target="_blank">Click Here to Join</a></li>
                    </ul>
                    <?php } ?>
                </div>
            </section>
            
            <section id="payment-history">
                <div class="card">
                    <h3>Payment History</h3>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Payment Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from payment_enquiry where email='".$_SESSION['user']."' OR phone='".$_SESSION['user']."' order by id desc";
                    			$count=1;
                    			$npq=mysqli_query($connnect,$sql);
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
                              <td><?php echo date('M j, Y', strtotime($result['date'])); ?></td>
                              <td>Rs.<?php echo $result['price']; ?>/-</td>
                              <td>CC Avenue</td>
                              <td><?php echo $result['pay_status']; ?></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </section>
            
        </div>
    </div>
    
</body>
</html>