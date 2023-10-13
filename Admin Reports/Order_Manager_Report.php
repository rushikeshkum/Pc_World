
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
</style><?php



// Check if search term was submitted
if (isset($_POST['search_term'])) {
  $search_term = $_POST['search_term'];

  $con = mysqli_connect("localhost", "root", "", "signup");

  if (mysqli_connect_error()) {
    echo "<script>
          alert('cannot connect to database');
          window.location.href='buildpc_mycart.php';
        </script>";
    exit();
  }

  // Fetch data from order_manager table
  $querys = "SELECT * FROM order_manager WHERE 
              Full_Name LIKE '%{$search_term}%' OR 
              Phone_No LIKE '%{$search_term}%' OR 
              Address LIKE '%{$search_term}%' OR 
              Pay_Mode LIKE '%{$search_term}%' OR 
              token_order LIKE '%{$search_term}%' OR 
              date_time LIKE '%{$search_term}%'";
  $results = mysqli_query($con, $querys);

  // Check if query was successful
  if ($results) {
    // Create report header
    echo "<h1>Order Manager Report</h1>";
    echo "<p>Showing results for search term: <strong>{$search_term}</strong></p>";
    echo "<table>
            <tr>
              <th>Order ID</th>
              <th>Full Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Payment Mode</th>
              <th>Token Order</th>
              <th>Date</th>
            </tr>";

    // Loop through query results and create table rows
    while ($row = mysqli_fetch_assoc($results)) {
      echo "<tr>
              <td>{$row['Order_Id']}</td>
              <td>{$row['Full_Name']}</td>
              <td>{$row['Phone_No']}</td>
              <td>{$row['Address']}</td>
              <td>{$row['Pay_Mode']}</td>
              <td>{$row['token_order']}</td>
              <td>{$row['date_time']}</td>
            </tr>";
    }

    // Close table
    echo "</table>";
  } else {
    // Handle query error
    echo "Error retrieving data from database: " . mysqli_error($con);
  }

  // Close database connection
  mysqli_close($con);

} else {
  // Display search form
  echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>
          <label for='search_term'>Search:</label>
          <input type='text' id='search_term' name='search_term' required>
          <button type='submit'>Submit</button>
        </form>";
}












// fhgfhgcfh

$con=mysqli_connect("localhost","root","","signup");

if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='buildpc_mycart.php';
  </script>";
  exit();
}



// Fetch data from order_manager table
$query = "SELECT * FROM order_manager";
$result = mysqli_query($con, $query);

// Check if query was successful
if ($result) {
  // Create report header
  echo "<h1>Order Manager Report</h1>";
  echo "<table>
          <tr text-align:centre>
            <th>Order ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Payment Mode</th>
            <th>Token Order</th>
            <th>Date</th>
          </tr>";

  // Loop through query results and create table rows
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['Order_Id']}</td>
            <td>{$row['Full_Name']}</td>
            <td>{$row['Phone_No']}</td>
            <td>{$row['Address']}</td>
            <td>{$row['Pay_Mode']}</td>
            <td>{$row['token_order']}</td>
            <td>{$row['date_time']}</td>
          </tr>";
  }

  // Close table
  echo "</table>";
} else {
  // Handle query error
  echo "Error retrieving data from database: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);

?>