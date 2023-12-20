<?php
$servername ="localhost";
$username ="23mca016";
$password="2491";
$dbname="23mca016";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo "Not connected!"; 
}

$Name=$_POST["Name"];
$Course=$_POST["Course"];
$Mark=$_POST["Mark"];
$sql="INSERT INTO `Student`(`Name`, `Course`, `Mark`) VALUES ('$Name','$Course',$Mark);";
$res = mysqli_query($conn, $sql);
if($res)
{
	echo "Insert Successfully!";
}
else
{
	echo "Error- ".mysqli_error($conn);
}
?>