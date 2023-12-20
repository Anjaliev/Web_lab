<?php
$servername = "localhost";
$username = "23mca016";
$password = "2491";
$dbname = "23mca016";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM student WHERE ID=4";

if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>