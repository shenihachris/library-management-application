<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
$sql="create database library";
if(mysqli_query($conn,$sql))
{
    echo"database created successfully";
}
else{
    echo"error creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>
