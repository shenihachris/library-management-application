<?php
$bcd=$_POST["t1"];
$conn = mysqli_connect("localhost","root","","library");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "select *from book where bno=$bcd";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
	while($row = mysqli_fetch_assoc($result)) 
	{
	$d1=$row["bno"];
	$d2=$row["bname"];
	$d3=$row["auth1"];
	$d4=$row["auth2"];
	$d5=$row["pubna"];
	$d6=$row["pucna"];
	$d7=$row["edit"];
	$d8=$row["edityr"];
	$d9=$row["price"];
	$d10=$row["nocs"];
	}
}
else
{
header("location:http://localhost:80/library/home.php");
}
mysqli_close($conn);
?>
<html>
<head>
<title>Book View</title>
</head>
<body background="http://localhost:80/library/images/Back4.jpg">
<p align="center"><b><font size="6" color="#FFFFFF">BOOK RECORD VIEW</font></b></p>
<hr>
<div align="center">
<center>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse: collapse" bordercolor="#111111" width="45%">
<tr>
<td width="34%"><font face="Arial"><b>Book Code</b></font></td>
<td width="66%">
	<?php
	echo $d1;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Book Name</b></font></td>
<td width="66%">
	<?php
	echo $d2;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Author Name - 1</b></font></td>
<td width="66%">
	<?php
	echo $d3;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Author Name - 2</b></font></td>
<td width="66%">
	<?php
	echo $d4;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Publisher</b></font></td>
<td width="66%">
	<?php
	echo $d5;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Publication</b></font></td>
<td width="66%">
	<?php
	echo $d6;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Edition</b></font></td>
<td width="66%">
	<?php
	echo $d7;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Year of Edition</b></font></td>
<td width="66%">
	<?php
	echo $d8;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Price</b></font></td>
<td width="66%">
	<?php
	echo $d9;
	?>
</td>
</tr>
<tr>
<td width="34%"><font face="Arial"><b>Number of Copies</b></font></td>
<td width="66%">
	<?php
	echo $d10;
	?>
</td>
</tr>
</table>
</center>
</div>
<p align="center">
<a href="http://localhost:80/library/home.php">
<img border="0" src="http://localhost:80/library/image/button_back-to-home.png" width="175" height="40"></a></p>
</body>
</html>