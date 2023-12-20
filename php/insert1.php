<?php
$servername="localhost";
$username="23mca016";
$password="2491";
$dbname="23mca016";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (ID, Name, Course,Age)
VALUES (3,'Anju','MCA',23)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>