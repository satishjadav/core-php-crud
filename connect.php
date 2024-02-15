<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
 $conn = mysqli_connect("localhost","root","",'assi_feb');// new mysqli($servername, $username, $password);

// // Check connection   ->connect_error
if ($conn->errno) {
 
  die("Connection failed: ");
}
// echo "Connected successfully";
      


?>