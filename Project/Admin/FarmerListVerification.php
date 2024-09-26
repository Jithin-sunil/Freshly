<?php

include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');
if(isset($_GET["acID"]))
{
	$farmer_id=$_GET["acID"];
	$acQry="update tbl_farmers set farmer_status='1'  where farmer_id=$farmer_id";
	if($con -> query($acQry))
	{
		echo"Accepted";		
		header("location:FarmerListVerification.php");
	}
}


if(isset($_GET["rejID"]))
{
	$farmer_id=$_GET["rejID"];
	$rejQry="update  tbl_farmers set farmer_status='2'  where farmer_id=$farmer_id";
	if($con -> query($rejQry))
	{
		echo"Rejected";		
		header("location:FarmerListVerification.php");
	}
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::UserList</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<a href="HomePage.php">Home</a>
<form id="form1" name="form1" method="post" action="">
  <table width="952" height="115" border="1">
    <tr>
      <td width="130">SINo</td>
      <td width="130">PlaceName</td>
      <td width="97">Pincode</td>
      <td width="101">District</td>
      <td>Photo</td>
      <td>Proof</td>
      <td width="82">Name</td>
      <td width="74">Address</td>
      <td width="90">Contact</td>
      <td width="92">Email</td>
      <td width="98">Action</td>
    </tr>
   
    <?php
$selquery="select * from tbl_farmers u inner join tbl_place p on u.place_id=p.place_id inner join  tbl_district d on p.district_id=d.district_id where farmer_status='0'";
$result=$con->query ($selquery);
$i=0;
while($data=$result->fetch_assoc())
{
	$i++;
?>
	<tr>
				<td><?php echo $i?></td>
				<td><?php echo $data["place_name"] ?></td>
				<td><?php echo $data["place_pincode"] ?></td>
                <td><?php echo $data["district_name"] ?></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data["farmer_photo"] ?>" width="50" height="50" /></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data["farmer_proof"] ?>" width="50" height="50" /></td>
                <td><?php echo $data["farmer_name"] ?></td>
				<td><?php echo $data["farmer_address"] ?></td>
                <td><?php echo $data["farmer_contact"] ?></td>
                <td><?php echo $data["farmer_email"] ?></td>
                
                
                <td>
                		<a href="FarmerListVerification.php?acID=<?php echo $data["farmer_id"]?>">Accept</a>/
                        <a href="FarmerListVerification.php?rejID=<?php echo $data["farmer_id"]?>">Reject</a>
                
                </td>
	</tr>
<?php
}
?>
  </table>
</form>
</body>
</html>
<?php
include('Footer.php');
ob_flush();
?>
