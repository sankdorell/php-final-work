<?php


// connection to database


$con=mysql_connect("localhost","root","");
mysql_select_db("contact",$con);

//get values from form 

$id=$_POST['id'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$textf=$_POST['textf'];


//insert mysql statements

$sql="insert into contact_tbl(id,email,subject,textf) values('$id','$email','$subject','$textf')";

$result=mysql_query($sql)
;

if($result)
{
echo"Thanks for contacting us we will get back to u soon";
}
else{
echo"you have an error try again please";
}

?>
