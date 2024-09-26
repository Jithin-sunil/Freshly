<?php
include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');
if(isset($_POST["submit"]))
{
	$district=$_POST["txtdistrict"];
	$insQry="insert into tbl_district(district_name) values('$district')";
	if($con -> query($insQry))
{
		echo"inserted";
	}
}
if(isset($_GET["delID"]))
{
	$districtId=$_GET["delID"];
	$delQry="delete from tbl_district where district_id=$districtId";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:District.php");
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freashly::district.php</title>
<link rel="stylesheet" href="style.css">
</head>

<body>


<form id="form1" name="form1" method="post" action="">
  <table width="261" height="134" border="1">
    <tr>
      <td width="105">District</td>
      <td width="144"><label for="txtdistrict"></label>
      <input type="text" name="txtdistrict" id="txtdistrict" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<br><br><br>
<table width="261" height="134" border="1">
<tr>
            		<td>SLNO</td>
					<td>District Name</td>
                    <td>Action</td>
			</tr>
<?php
$selquery="select * from tbl_district";
$result=$con->query ($selquery);
$i=0;
while($data=$result->fetch_assoc())
{
	$i++;
?>
<tr>
				<td><?php echo $i?></td>
				<td><?php echo $data["district_name"] ?></td>
                <td><a href="District.php?delID=<?php echo $data["district_id"]?>">DELETE</a></td>
	</tr>
<?php
}
?>
</table>

</body>

</html>
<?php 
include('Footer.php');
ob_flush();
?>