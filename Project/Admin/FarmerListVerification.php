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
<style>
       
        a {
            color: #1b5e20; /* Dark green for links */
            font-weight: bold;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0; /* Space between tables */
            background-color: white;
            border: 1px solid #4caf50; /* Green border */
        
        }

        th, td {
            
            padding: 10px;
            text-align: left;
            border: 1px solid #4caf50; /* Green borders */
            color:black;
        }
        table th {
    background-color: #4caf50;
}
        th {
            background-color: #4caf50; /* Green header */
            /* color: white; */
        }

        tr:nth-child(even) {
            background-color: #e8f5e9; /* Light green for alternating rows */
        }

        tr:hover {
            background-color: #dcedc8; /* Light green on hover */
        }

        img {
            border-radius: 4px; /* Rounded corners for images */
        }

        .header {
            font-size: 24px;
            color: #7FFFD4;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>


<body>

<a href="HomePage.php">Home</a>
<h2 class="header">Farmer Management List</h2>

<form id="form1" name="form1" method="post" action="">
    <table>
        <tr>
            <th>SINo</th>
            <th>Place Name</th>
            <th>Pincode</th>
            <th>District</th>
            <th>Photo</th>
            <th>Proof</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        $selquery = "SELECT * FROM tbl_farmers u 
                     INNER JOIN tbl_place p ON u.place_id = p.place_id 
                     INNER JOIN tbl_district d ON p.district_id = d.district_id 
                     WHERE farmer_status='1'";
        $result = $con->query($selquery);
        $i = 0;
        while ($data = $result->fetch_assoc()) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data["place_name"] ?></td>
                <td><?php echo $data["place_pincode"] ?></td>
                <td><?php echo $data["district_name"] ?></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data["farmer_photo"] ?>" width="50" height="50" alt="Farmer Photo" /></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data["farmer_proof"] ?>" width="50" height="50" alt="Farmer Proof" /></td>
                <td><?php echo $data["farmer_name"] ?></td>
                <td><?php echo $data["farmer_address"] ?></td>
                <td><?php echo $data["farmer_contact"] ?></td>
                <td><?php echo $data["farmer_email"] ?></td>
                <td>
                    <a href="FarmerAcceptedList.php?rejID=<?php echo $data["farmer_id"] ?>">Reject</a>
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
