
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
<style>
        
        a {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #4caf50; /* Green for links */
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #4caf50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            text-align: left;
            color:black;
        }
        select, input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #4caf50;
            border-radius: 4px;
            margin-top: 5px;
        }
        select:focus, input[type="text"]:focus {
            outline: none;
            border-color: #45a049;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

<body>

<a href="HomePage.php">Home</a>

<div class="container">
    <form name="form1" method="post" action="">
        <table>
            <tr>
                <td>District</td>
                <td>
                    <select name="selDistrict">
                        <option value="--select--">--select---</option>
                        <?php
                            $selquery = "select * from tbl_district";
                            $result = $con->query($selquery);
                            while ($data = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['district_id']; ?>"><?php echo $data['district_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Place Name</td>
                <td><input type="text" name="txtplace" id="txtplace" /></td>
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="txtpincode" id="txtpincode" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnsubmit" id="btnsubmit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</div>

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
