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
		header("location:FarmerRejectedList.php");
	}
}







?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::UserList</title>
</head>
<style>
        

        a {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #1b5e20; /* Dark green for links */
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #66bb6a; /* Green border for the table */
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #4caf50;
            color:black;
        }

        th {
            background-color: #4caf50; /* Green header */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e8f5e9; /* Light green background for alternating rows */
        }

        td img {
            border-radius: 5px;
        }

        td a {
            color: #2e7d32; /* Dark green links */
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
        }
    </style>

<body>

<a href="HomePage.php">Home</a>

<div class="container">
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
            $selquery="select * from tbl_farmers u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where farmer_status='2'";
            $result=$con->query ($selquery);
            $i=0;
            while($data=$result->fetch_assoc())
            {
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
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
                    <a href="FarmerRejectedList.php?acID=<?php echo $data['farmer_id'] ?>">Accept</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>

</body>
</html>

<?php
include('Footer.php');
ob_flush();
?>
