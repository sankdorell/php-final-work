<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student</title>
</head>

<body bgcolor="#99CCFF">

<br />
<br />
<br />
<br />

<h1><center>Student Reg System</center></h1>
<br />
<br />
<br />
<br />

<form method="post" action="files/php/insertaxelstudent.php"/>
<table  align="center">
<tr>
<td>First Name:</td>
<td><input type="text" value="" name="fname"/></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" value="" name="lname"/></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" value="" name="dob"/></td>
</tr>
<tr>
<td>Place of Residence:</td>
<td><input type="text" value="" name="resid"/></td>
</tr>

<tr>
<td>Country of origin:</td>
<td><input type="text" value="" name="origin"/></td>
</tr>

<tr>
<td>Current program of study:</td>
<td><select name="prog">
<option>BACS</option>
<option>BAIT</option>
<option>BASCIS</option>
<option>Diploma</option>
</select></td>
</tr>

</table>
<br/>
<br/>

<center><input type="submit" value="send"/>  <input type="reset" value="reset" /></center>


</form>

<br />
<br />
<center><a href="index.php"><h3>click here to go back</h3></a></center>
</body>
</html>
