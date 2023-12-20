<?php
$servername = "localhost";
$username = "23mc016";
$password = "2491";
$dbname = "23mca016";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$ID=$_POST["ID"]
$Name=$_POST["Name"]
$Course=$_POST["Course"]
$Mark=$_POST["Mark"]
$sql = "INSERT INTO Student(ID,Name,Course,Mark) 
VALUES('$ID','$Name','$Course','$Mark')";
if($conn->query($sql) === TRUE)
{
echo "New record created successfully";
}
else
{
echo "Error:".$sql."<br>".$connect_error;
}
$conn->close();
?>
