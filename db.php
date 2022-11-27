<?php 

// Create connection
$conn = mysqli_connect("localhost","root","","email_send");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  //or


// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


?>
