
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
$query = "SELECT * FROM user_orders";
$result = mysqli_query($con, $query);

// Check if query was successful
if ($result) {
  // Create report header
  echo "<h1>User Order Reports</h1>";
  echo "<table>
          <tr>
            <th>Order Id</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
           </tr>";

  // Loop through query results and create table rows
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['Order_Id']}</td>
            <td>{$row['Item_Name']}</td>
            <td>{$row['Price']}</td>
            <td>{$row['Quantity']}</td>
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