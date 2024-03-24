<?php 

require_once 'connect.php';

$selectCustomers =" SELECT * FROM customers";

$result = $connect->query($selectCustomers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slareg Gadgets</title>
</head>
<body>
    
</body>
</html>
   <h2>All Registered Users</h2>
<?php
if ($result->num_rows> 0) {

 while ($row = $result->fetch_assoc()) { 
    echo"<p>".$row["first_name"]."</p>";
   
}
  }

$connect->close();

?>
</body>
</html>