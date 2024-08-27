<?php 
include('../Assests/Connection/Connection.php');
// session_start();
include('Header.php');


$selquery=" select * from tbl_newuser where user_id='".$_SESSION['uid']."' ";
$row=$con->query($selquery);
$data=$row->fetch_assoc();

if(isset($_POST["btnupdate"]))
{
	$name=$_POST["txtname"];
	$contact=$_POST["txtcontact"];
	$email=$_POST["txtemail"];
	$address=$_POST["txtaddress"];
	$update="update tbl_newuser set user_name='$name',user_email='$email',user_contact='$contact',user_address='$address' where user_id='".$_SESSION['uid']."'";

if($con->query($update))
{
?>
<script>
		alert("update")
		window.location="EditProfile.php";
		</script>
        <?php
}
}


 
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FReshly:Edit Profile</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 18px;
            margin-bottom: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Optional: Responsive design for smaller screens */
        @media (max-width: 600px) {
            table, td, input[type="text"], input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <!-- <a href="HomePage.php">Home</a> -->
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtname" id="txtname" value="<?php echo htmlspecialchars($data['user_name']); ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtemail" id="txtemail" value="<?php echo htmlspecialchars($data['user_email']); ?>" /></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="txtcontact" id="txtcontact" value="<?php echo htmlspecialchars($data['user_contact']); ?>" /></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="txtaddress" id="txtaddress" value="<?php echo htmlspecialchars($data['user_address']); ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btnupdate" id="btnupdate" value="Update" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include('Footer.php')
?>