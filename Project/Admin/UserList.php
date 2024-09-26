<?php

include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');

if(isset($_GET["delID"]))
{
	$user_id=$_GET["delID"];
	$delQry="delete from tbl_newuser where user_id=$user_id";
	if($con -> query($delQry))
	{
		echo"Deleted";		
		header("location:Newuser.php");
	}
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::UserList</title>
<style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
            display: inline-block;
        }

        a:hover {
            color: #0056b3;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #008000;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        td img {
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        td a {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        td a:hover {
            color: #c82333;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            th, td {
                font-size: 14px;
                padding: 10px;
            }

            td img {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 12px;
                padding: 8px;
            }

            td img {
                width: 35px;
                height: 35px;
            }

            a {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <a href="HomePage.php">Home</a>

    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <th>SINo</th>
                <th>PlaceName</th>
                <th>Pincode</th>
                <th>District</th>
                <th>Photo</th>
                <th>Proof</th>
                <th>UserName</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
            $selquery="select * from tbl_newuser u inner join tbl_place p on u.place_id=p.place_id inner join  tbl_district d on p.district_id=d.district_id";
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
                    <td><img src="../Assests/Files/UserDocs/<?php echo $data["user_photo"] ?>" width="50" height="50" /></td>
                    <td><img src="../Assests/Files/UserDocs/<?php echo $data["user_proof"] ?>" width="50" height="50" /></td>
                    <td><?php echo $data["user_name"] ?></td>
                    <td><?php echo $data["user_gender"] ?></td>
                    <td><?php echo $data["user_contact"] ?></td>
                    <td><?php echo $data["user_email"] ?></td>
                    <td><a href="Newuser.php?delID=<?php echo $data["user_id"]?>">DELETE</a></td>
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
