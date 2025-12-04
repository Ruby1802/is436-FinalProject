<?php
$servername = "Group_A_project_db";
$username = "UMBCstudent";       
$password = "bongocat123";  
$dbname = "main_project_db";  

$conn = new mysqli($servername, $username, $password, $dbname, $3308);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  echo "Connected successfully!";
}
?>
