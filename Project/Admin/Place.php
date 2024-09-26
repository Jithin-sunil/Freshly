
<?php

include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');

if(isset($_POST["btnsubmit"]))
{
	
	$insQry="insert into tbl_place(place_name,place_pincode,district_id) values('".$_POST["txtplace"]."','".$_POST["txtpincode"]."','".$_POST["selDistrict"]."')";
	if($con -> query($insQry))
	{
		echo"inserted";
	}
}



if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_place where place_id='".$_GET["delID"]."'";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:Place.php");
	}
}



?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly:Place</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form name="form1" method="post" action="">
  <table width="300" height="164" border="1">
  
  <tr>
  				<td>District</td>
                <td>
                		<select name="selDistrict">
                        		
                        		<option value="--select--">--select---</option>
                                
                                <?php
											$selquery="select * from tbl_district";
											$result=$con->query ($selquery);
											while($data=$result->fetch_assoc())
												{
								?>
                                <option value="<?php echo $data["district_id"]?>"><?php echo $data["district_name"] ?></option>
                        		<?php
												}
								?>
                        </select>
                
                </td>
  
  </tr>
  
    <tr>
      <td width="88">PlaceName</td>
      <td width="196"><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" /></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="txtpincode"></label>
      <input type="text" name="txtpincode" id="txtpincode" /></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Save"></td>
    </tr>
  </table>
</form>
</body>
</html>

<br><br>

<table  width="300" height="164" border="1">
			<tr>
            		<td>SLNO</td>
					<td>PlaceName</td>
					<td>Pincode</td>
                    <td>District</td>
				
                    <td>Action</td>
			</tr>
<?php
$selquery="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
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
				
                <td><a href="Place.php?delID=<?php echo $data["place_id"]?>">DELETE</a></td>
	</tr>
<?php
}
?>
<?php
include('Footer.php');
ob_flush();
?>
