
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


$con=mysqli_connect("localhost","root","","signup");

if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='buildpc_mycart.php';
  </script>";
  exit();
}

// Fetch data from order_manager table
$query = "SELECT * FROM registration";
$result = mysqli_query($con, $query);

// Check if query was successful
if ($result) {
  // Create report header
  echo "<h1>User Registration Report</h1>";
  echo "<table>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Token</th>
            <th>Confirm Password</th>
          </tr>";

  // Loop through query results and create table rows
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['full_name']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['password']}</td>
            <td>{$row['token']}</td>
            <td>{$row['Confirm_password']}</td>
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