<?php

include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');


if(isset($_GET["rejID"]))
{
	$farmer_id=$_GET["rejID"];
	$rejQry="update  tbl_farmers set farmer_status='2'  where farmer_id=$farmer_id";
	if($con -> query($rejQry))
	{
		echo"Rejected";		
		header("location:FarmerAcceptedList.php");
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
            color: #4caf50; /* Green */
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #4caf50; /* Green border */
        }
        th {
            background-color: #4caf50; /* Green header */
            color: white;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
            columns: black;
            color:black;
        }
        td img {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        td a {
            color: #e60000; /* Red color for reject action */
            font-weight: bold;
            text-decoration: none;
            columns: black;
        }
        td a:hover {
            text-decoration: underline;
        }
        .btn-submit {
            background-color: #4caf50; /* Green button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #45a049;
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
            $selquery = "select * from tbl_farmers u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where farmer_status='1'";
            $result = $con->query($selquery);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['place_name']; ?></td>
                <td><?php echo $data['place_pincode']; ?></td>
                <td><?php echo $data['district_name']; ?></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data['farmer_photo']; ?>" width="50" height="50" /></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data['farmer_proof']; ?>" width="50" height="50" /></td>
                <td><?php echo $data['farmer_name']; ?></td>
                <td><?php echo $data['farmer_address']; ?></td>
                <td><?php echo $data['farmer_contact']; ?></td>
                <td><?php echo $data['farmer_email']; ?></td>
                <td><a href="FarmerAcceptedList.php?rejID=<?php echo $data['farmer_id']; ?>">Reject</a></td>
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

