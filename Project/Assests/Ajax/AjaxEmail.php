<?php
include("../Connection/Connection.php");
$email=$_GET['email'];
$selFQry="Select * from tbl_farmers where farmer_email='".$email."'";
$selAQry="Select * from tbl_admin where admin_email='".$email."'";
$selUQry="Select * from tbl_newuser where user_email='".$email."'";
$resultF=$con->query($selFQry);
$resultA=$con->query($selAQry);
$resultU=$con->query($selUQry);
if($resultF->num_rows>0)
{
	echo "EXIST";
}
else if($resultA->num_rows>0)
{
	echo "EXIST";
}
else if($resultU->num_rows>0)
{
	echo "EXIST";
}
else{
	echo "NOT EXIST";
}
?>