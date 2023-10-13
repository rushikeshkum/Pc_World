<?php
// connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "signup";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // insert data into table
    $full_name = $_POST["full_name"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $pay_mode = $_POST["pay_mode"];
    $tokenorder = generate_token(); // function to generate a unique token
    $current_date_time = date("Y-m-d H:i:s");
    $sql = "INSERT INTO order_manager (Full_Name, Phone_No, Address, Pay_Mode, token_order, date_time) VALUES ('$full_name', '$phone_no', '$address', '$pay_mode', '$tokenorder', '$current_date_time')";
    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// handle search query
if(isset($_GET['query']) && $_GET['query'] != '') 
    $query = $_GET['query'];
    $result = array();
    $sql = "SELECT * FROM order_manager WHERE Full_Name LIKE '%$query%' OR Phone_No LIKE '%$query%' OR Address LIKE '%$query%' OR Pay_Mode LIKE '%$query%' OR token_order LIKE '%$query%' OR date_time LIKE '%$query%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        // output data as table
        echo "<table><tr><th>Full Name</th><th>Phone No</th><th>Address</th><th>Pay Mode</th><th>Token Order</th><th>Date Time</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Full_Name"] . "</td><td>" . $row["Phone_No"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Pay_Mode"] . "</td><td>" . $row["token_order"] . "</td><td>" . $row["date_time"] . "</td></tr>";
        }
        echo "</table>";
        
        // download data as PDF file
        require_once('pdf/fpdf.php'); // include FPDF library
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(40,10,'Full Name',1);
        $pdf->Cell(40,10,'Phone No',1);
        $pdf->Cell(40,10,'Address',1);
        $pdf->Cell(40,10,'Pay Mode',1);
        $pdf->Cell(40,10,'Token Order',1);
        $pdf->Cell(40,10,'Date Time',1);
        $pdf->Ln();
        while($row = $result->fetch_assoc()) 
            $pdf->Cell(40,10,$row["Full_Name"],1);
            $pdf->Cell(40,10,$row["Phone_No"],1);
?>