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
<style>
        body {
            background-color: #f0f9f0; /* Light green background */
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 50px auto;
            width: 50%;
        }
        .form-table {
            background-color: white;
            border-radius: 10px;
            border: 1px solid #4caf50; /* Green border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .form-table td {
            padding: 10px;
        }
        .form-table input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #4caf50;
            border-radius: 5px;
        }
        .form-table input[type="submit"] {
            background-color: #4caf50; /* Green button */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-table input[type="submit"]:hover {
            background-color: #45a049;
        }
        .data-table {
            background-color: white;
            border-collapse: collapse;
            border-radius: 10px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .data-table, .data-table th, .data-table td {
            border: 1px solid #4caf50;
            padding: 10px;
            text-align: center;
        }
        .data-table th {
            background-color: #4caf50; /* Green header */
            color: white;
        }
        .data-table td a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
        }
        .data-table td a:hover {
            text-decoration: underline;
        }
    </style>

<body>

<div class="container">
    <form id="form1" name="form1" method="post" action="">
        <table class="form-table">
            <tr>
                <td>District</td>
                <td><input type="text" name="txtdistrict" id="txtdistrict" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>

    <br><br>

    <table class="data-table">
        <tr>
            <th>SLNO</th>
            <th>District Name</th>
            <th>Action</th>
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
</div>

</body>

</html>
<?php 
include('Footer.php');
ob_flush();
?>