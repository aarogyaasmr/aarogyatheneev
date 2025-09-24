<?php
require_once 'core.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve input dates
    $startDate = $_POST['startDate'] ?? '';
    $endDate   = $_POST['endDate'] ?? '';

    // For example, if the inputs are in Y-m-d format (e.g., 2025-02-15)
    $startDateObj = DateTime::createFromFormat('Y-m-d', $startDate);
    $endDateObj   = DateTime::createFromFormat('Y-m-d', $endDate);

    if (!$startDateObj || !$endDateObj) {
        echo "Invalid date format provided.";
        exit;
    }

    $start_date_formatted = $startDateObj->format('Y-m-d');
    $end_date_formatted   = $endDateObj->format('Y-m-d');

    // SQL query with backticks around the reserved column name `date`
    $sql = "SELECT orderid, plan, name, email, price, `date`
            FROM payment_enquiry 
            WHERE `date` >= ? AND `date` <= ? AND pay_status = 'Successfull'";

    // Prepare the statement and output detailed error if it fails
    if (!$stmt = $connect->prepare($sql)) {
        echo "Error preparing SQL statement: " . $connect->error;
        exit;
    }

    // Bind the parameters
    $stmt->bind_param("ss", $start_date_formatted, $end_date_formatted);
    $stmt->execute();
    $result = $stmt->get_result();

    // Start building the HTML table
    $table = '<table border="1" cellspacing="0" cellpadding="5" style="width:80%;">
                <tr>
                    <th>OrderId</th>
                    <th>Services/Product Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Added Date</th>
                </tr>';

    $totalAmount = 0;

    // Loop through the result set
    while ($row = $result->fetch_assoc()) {
        $table .= '<tr>
                    <td align="center">' . htmlspecialchars($row['orderid']) . '</td>
                    <td align="center">' . htmlspecialchars($row['plan']) . '</td>
                    <td align="center">' . htmlspecialchars($row['name']) . '</td>
                    <td align="center">' . htmlspecialchars($row['email']) . '</td>
                    <td align="center">Rs. ' . htmlspecialchars($row['price']) . '</td>
                    <td align="center">' . htmlspecialchars($row['date']) . '</td>
                   </tr>';
        $totalAmount += $row['price'];
    }
    
    // Total Amount row (spanning 4 columns for the label and 2 columns for the amount)
    $table .= '<tr>
                    <td colspan="4" align="center"><strong>Total Amount</strong></td>
                    <td colspan="1" align="center"><strong>Rs. ' . $totalAmount . '/-</strong></td>
                    <td></td>
               </tr>
               </table>';

    echo $table;

    $stmt->close();
}
?>