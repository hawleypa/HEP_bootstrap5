<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Apprentice - HTML</title>
</head>
<body>
    <h1>
	<?php 
	// TODO Compare to project with back-end server and front-end shopping cart
	//https://www.hollisequestrianpark.com/index3.php
	//require './configure.php';
    // phpinfo();
    $servername = 'localhost';
    $username = 'phawley_pff2021';
    $password = 'admin';

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

	$sql = "SELECT * FROM tbl_pff_books";
    $result = $conn->query($sql);
	
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         echo $row . "<br>";
      }
    } else {
      echo "0 results";
    }	

// close connection
$conn = close();

	?>
	</h1>
</body>
</html>

