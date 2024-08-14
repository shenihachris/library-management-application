<html>
<head>
<title>New Book Entry</title>
</head>
<body background="http://localhost:80/library/image/Back6.jpg">
<p align="center"><font size="6" color="#FFFFFF"><b>EDIT/UPDATE BOOK FORM</b></font></p>
<hr>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
<center>
<form method="POST" action="http://localhost:80/library/bedit.php">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse: collapse" bordercolor="#111111" width="81%">
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Book Code</b></font></td>
      <td width="25%" align="center">
        <p>
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
echo "0 results";
}
mysqli_close($conn);
?>
<?php
        echo "<input type=text name=t1 size=25 value=$d1></p>";
?>
     </td>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Book Name</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t2 size=25 value=$d2></td>";
?>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Author Name - 1</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t3 size=25 value=$d3></td>";
?>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Author Name - 2</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t4 size=25 value=$d4></td>";
?>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Publisher Name</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t5 size=25 value=$d5></td>";
?>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Publication Name</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t6 size=25 value=$d6></td>";
?>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Edition&nbsp; </b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t7 size=25 value=$d7></td>";
?>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Year of Edition</b></font></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t8 size=25 value=$d8></td>";
?>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><b><font face="Arial">Price </font></b></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t9 size=25 value=$d9></td>";
?>
      <td width="25%" bgcolor="#C0C0C0"><b><font face="Arial">Number of Copies</font></b></td>
      <td width="25%" align="center">
<?php
        echo "<input type=text name=t10 size=25 value=$d10></td>";
?>
    </tr>
    <tr>
      <td width="100%" colspan="4">
      <p align="center"><input type="submit" value="Submit" name="B1"><input type="reset" value="Reset" name="B2"></td>
    </tr>
  </table>
        </form>
  </center>
</div>
</body>
</html>