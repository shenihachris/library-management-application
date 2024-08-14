<html>
<head>
<title>New Book Entry</title>
</head>
<body background="http://localhost:80/library/image/Back3.jpg">
<p align="center"><font size="6" color="#FFFFFF"><b>NEW BOOK ENTRY FORM</b></font></p>
<hr>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
<center>
<form method="POST" action="http://localhost:80/library/newbentry.php">
<table border="0" cellpadding="5" cellspacing="5" style="border-collapse: collapse" bordercolor="#111111" width="81%">
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Book Code</b></font></td>
      <td width="25%" align="center">
        <p>
        <input type="text" name="t1" size="25"></p>
     </td>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Book Name</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t2" size="25"></td>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Author Name - 1</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t3" size="25"></td>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Author Name - 2</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t4" size="25"></td>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Publisher Name</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t5" size="25"></td>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Publication Name</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t6" size="25"></td>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Edition&nbsp; </b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t7" size="25"></td>
      <td width="25%" bgcolor="#C0C0C0"><font face="Arial"><b>Year of Edition</b></font></td>
      <td width="25%" align="center">
        <input type="text" name="t8" size="25"></td>
    </tr>
    <tr>
      <td width="25%" bgcolor="#C0C0C0"><b><font face="Arial">Price </font></b></td>
      <td width="25%" align="center">
        <input type="text" name="t9" size="25"></td>
      <td width="25%" bgcolor="#C0C0C0"><b><font face="Arial">Number of Copies</font></b></td>
      <td width="25%" align="center">
        <input type="text" name="t10" size="25"></td>
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