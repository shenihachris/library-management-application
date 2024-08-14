<?php
$d1=$_POST["t1"];
$conn = mysqli_connect("localhost","root","","library");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "delete from book where bno=$d1";
if (mysqli_query($conn, $sql)) 
{
header("location:http://localhost:80/library/deletebook.php");
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>