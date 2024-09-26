
<?php


include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');



if(isset($_POST["btnregister"]))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$password=$_POST["txtpassword"];
	$insQry="insert into tbl_admin(admin_name,admin_email,admin_password) values('".$_POST["txtname"]."','$email','$password')";
	if($con -> query($insQry))
	{
		echo"inserted";
	}
}



if(isset($_GET["delID"]))
{
	$adminID=$_GET["delID"];
	$delQry="delete from tbl_admin where admin_id=$adminID";
	if($con -> query($delQry))
	{
		echo"Deleted";		header("location:AdminRegistration.php");
	}
}



?>>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::AdminRegistration</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form name="form1" method="post" action="">
  <table width="300" height="164" border="1">
    <tr>
      <td width="88">Name</td>
      <td width="196"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" required="required" placeholder="Enter Name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" placeholder="Enter Email" required="required" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpassword"></label>
      <input type="password" name="txtpassword" id="txtpassword"  required="required" placeholder="Enter Password"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="btnregister" id="btnregister" value="Register">
       <input type="reset" name="btncancel" id="btncancel" value="Cancel">
      
      </td>
    </tr>
  </table>
</form>
</body>
</html>



<table  width="300" height="164" border="1">
			<tr>
            		<td>SLNO</td>
					<td>Name</td>
					<td>Email</td>
					<td>Password</td>
                    <td>Action</td>
			</tr>
<?php
$selquery="select * from tbl_admin";
$result=$con->query ($selquery);
$i=0;
while($data=$result->fetch_assoc())
{
	$i++;
?>
	<tr>
				<td><?php echo $i?></td>
				<td><?php echo $data["admin_name"] ?></td>
				<td><?php echo $data["admin_email"] ?></td>
				<td><?php echo $data["admin_password"] ?></td>
                <td><a href="AdminRegistration.php?delID=<?php echo $data["admin_id"]?>">DELETE</a></td>
	</tr>
<?php
}
?>

<?php 
include('footer.php');
ob_flush();
?>