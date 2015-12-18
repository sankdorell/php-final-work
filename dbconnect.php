<?php


// connection to database


$con=mysql_connect("localhost","root","");
mysql_select_db("recruitment_db",$con);

//get values from form 

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adress=$_POST['adress'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$education=$_POST['education'];
$pos=$_POST['pos'];
$position=$_POST['position'];


//insert mysql statements

$sql="insert into recruitment_tbl(id,fname,lname,adress,tel,email,education,pos,position) values('$id', '$fname','$lname','$adress','$tel','$email','$education','$pos','$position')";

$result=mysql_query($sql)
;

if($result)
{
echo"information added successfully";
}
else{
echo"you have an error try again please";
}

?>
