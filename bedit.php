<?php
$d1=$_POST["t1"];
$d2=$_POST["t2"];
$d3=$_POST["t3"];
$d4=$_POST["t4"];
$d5=$_POST["t5"];
$d6=$_POST["t6"];
$d7=$_POST["t7"];
$d8=$_POST["t8"];
$d9=$_POST["t9"];
$d10=$_POST["t10"];

$conn = mysqli_connect("localhost","root","","library");
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "update book set bname='$d2',auth1='$d3',auth2='$d4',pubna='$d5',pucna='$d6',edit='$d7',edityr='$d8',price=$d9,nocs=$d10 where bno=$d1";
if (mysqli_query($conn, $sql)) 
{
header("location:http://localhost:80/library/home.php");
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>