<?php
$servername = "localhost";
$username = "23mca016";
$password = "2491";
$dbname = "23mca016";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ID=$_POST["ID"];
$sql = "DELETE FROM student WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
  echo " Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>