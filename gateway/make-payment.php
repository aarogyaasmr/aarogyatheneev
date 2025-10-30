<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aarogya the Neev | Fitness Transformation</title>
    <link rel="icon" href="https://aarogyatheneev.com/uploads/admin/3309fav_aarogya.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #62d0ed, #bbdcbe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin: 0;
            padding: 40px 15px;
        }
        
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }
        
        .form-section, .summary-section {
            flex: 1;
            min-width: 300px;
        }
        
        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 14px;
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #00C9FF;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        
        .summary-section {
            background-color: #f5f5f5;
            padding: 25px;
            border-radius: 10px;
        }
        
        .summary-section h3 {
            margin-top: 0;
            color: #333;
        }
        
        .summary-item {
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .coupon-field {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .coupon-field input {
            flex: 1;
        }
        
        .price-tag {
            font-size: 20px;
            font-weight: 600;
            color: #007ACC;
        }
    </style>
    
    <?php
        // Plan logic
        $planText = "Fitness Transformation";
        $price = 2500.00;
        
        if (isset($_GET['plan'])) {
            switch ($_GET['plan']) {
                case 1: $planText = "YogASMR Online"; $price = 199.00; break;
                case 2: $planText = "YogASMR day Workshop"; $price = 3499.00; break;
                case 3: $planText = "YogASMR Stress Release"; $price = 4000.00; break;
                case 4: $planText = "YogASMR Emotional Healing"; $price = 4000.00; break;
                case 5: $planText = "Corporate Day Retreat"; $price = 4000.00; break;
            }
        }
    ?>

    <script>
        function validateForm() {
            const certNo = document.getElementById('certificate_no').value.trim();
            const courseTitle = document.getElementById('course_title').value.trim();
            const courseName = document.getElementById('course_name').value.trim();
            const studentName = document.getElementById('student_name').value.trim();
            const courseDuration = document.getElementById('course_duration').value.trim();
            const grade = document.getElementById('grade').value.trim();
            let errorMessage = "";
            
            if (certNo === "") errorMessage += "Name is required.\n";
            if (courseTitle === "") errorMessage += "Phone is required.\n";
            if (courseName === "") errorMessage += "Email is required.\n";
            if (studentName === "") errorMessage += "Age is required.\n";
            if (courseDuration === "") errorMessage += "Weight is required.\n";
            if (grade === "") errorMessage += "Purpose is required.\n";
            
            if (errorMessage !== "") {
                alert(errorMessage);
                return false;
            }
            return true;
        }
        
        let couponApplied = false;
        function applyCoupon() {
            if (couponApplied) {
                alert("Coupon has already been applied.");
                return;
            }
            const coupon = document.getElementById("coupon").value.trim().toUpperCase();
            const basePrice = parseFloat(document.getElementById("base_price").value);
            let finalPrice = basePrice;
            
            if (coupon === "ATN30") {
                finalPrice = basePrice - (basePrice * 0.30); // 30% off
            } else if (coupon === "ATN90") {
                finalPrice = basePrice - (basePrice * 0); // 30% off
            } else if (coupon === "") {
                alert("Enter a valid coupon.");
                return;
            } else {
                alert("Invalid coupon code.");
                return;
            }
            
            // Ensure price doesn't go below zero
            finalPrice = finalPrice < 0 ? 0 : finalPrice;
            
            // Update both fields
            document.getElementById('final_price').value = finalPrice;
            document.getElementById('base_price').value = finalPrice;
            
            // Store the applied coupon code
            document.getElementById('couponvl').value = coupon;
            
            document.getElementById("final_price").innerText = "₹ " + finalPrice.toFixed(2);
            
            // Mark coupon as applied
            couponApplied = true;
            // Disable coupon input and button
            couponInput.disabled = true;
            document.getElementById('applyCouponBtn').disabled = true;
        }
    </script>
</head>
<body>

<div class="container">
    <!-- Left: Form -->
    <div class="form-section">
        <h1>Enter Details & Book Your Slot</h1>
        <form action="payprocess.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="grade">Purpose</label>
                <select id="grade" name="purpose">
                    <option value="Health Issues">Health Issues</option>
                    <option value="Weight Loss">Weight Loss</option>
                    <option value="Mental Health">Mental Health</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="certificate_no">Name</label>
                <input type="text" id="certificate_no" name="name" placeholder="Enter Name.">
            </div>
            
            <div class="form-group">
                <label for="course_title">Phone No.</label>
                <input type="text" id="course_title" name="phone" placeholder="Enter Phone">
            </div>
            
            <div class="form-group">
                <label for="course_name">Email</label>
                <input type="text" id="course_name" name="email" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label for="student_name">Age</label>
                <input type="text" id="student_name" name="age" placeholder="Enter Age">
            </div>
            
            <div class="form-group">
                <label for="course_duration">Weight</label>
                <input type="text" id="course_duration" name="weight" placeholder="Enter Weight">
            </div>
            
            <input type="hidden" name="plan" value="<?= $planText ?>">
            <input type="hidden" name="price" id="base_price" value="<?= $price ?>">
            <input type="hidden" name="source" value="<?= $_GET['source'] ?? '' ?>">
            <input type="hidden" name="coupon" id="couponvl">
            <input type="hidden" id="coupon_applied" value="0">
            
            <button type="submit"  name="submit"  class="btn">Submit</button>
        </form>
    </div>

    <!-- Right: Plan Summary -->
    <div class="summary-section">
        <h3>Plan Summary</h3>
        <div class="summary-item"><strong>Plan Name:</strong> <?= $planText ?></div>
        <div class="summary-item"><strong>Original Price:</strong> <del style="color:red">₹4000/-</del></div>
        
        <div class="coupon-field">
            <input type="text" style="color: #000; padding: 15px 10px; border-radius: 5px; border: 1px solid #ccc;" readonly="" id="coupon" value="ATN90" placeholder="Enter Coupon Code">
            <button type="button" onclick="applyCoupon()" id="applyCouponBtn" style="border: none; cursor: pointer; font-weight: bold; padding: 0px 20px 0px 20px; background-color: aquamarine;">Apply</button>
        </div>
        
        <div class="summary-item" style="margin-top: 15px;">
            <strong>Final Price:</strong>
            <span class="price-tag" id="final_price">₹ <?= $price ?>.00</span>
        </div>
    </div>
</div>

</body>
</html>
