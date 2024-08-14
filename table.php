<?php
$conn = mysqli_connect("localhost","root","","library");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql="create table book(bno int,bname varchar(200),auth1 varchar(200),auth2 varchar(200),pubna varchar(200),pucna varchar(200),edit varchar(20),edityr varchar(10),price float,nocs int)";
// $sql="create table member(mno int,mname varchar(200),addr1 varchar(200),addr2 varchar(200),conno1 varchar(20),conno2 varchar(20),maid varchar(30),adrprf varchar(100), id varchar(100),nocds int)";
// $sql="create table issue(mno int,mname varchar(200),conno varchar(20),maid varchar(30),id varchar(100),bcode int,bname varchar(200),auth1 varchar(200),yredtn varchar(10),price float,state varchar(20))";
if (mysqli_query($conn, $sql)) 
{
echo "Table created successfully";
}
else
{
echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>