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
$Name=$_POST["Name"];
$Course=$_POST["Course"];
$Age=$_POST["Age"];
$sql = "UPDATE student SET Name='$Name',Course='$Course',Age='$Age' WHERE ID=$ID";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>