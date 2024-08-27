<?php 
include('../Assests/Connection/Connection.php');
// session_start();
include('Header.php');


$seluser=" select * from tbl_newuser where user_id='".$_SESSION['uid']."' ";
$row=$con->query($seluser);
$data=$row->fetch_assoc()

	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly:MY Profile</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .header td {
            text-align: center;
            border: none;
        }

        .header img {
            border-radius: 50%;
            border: 2px solid #4CAF50;
        }

        .edit-profile {
            text-align: center;
            padding-top: 20px;
        }

        .edit-profile a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .edit-profile a:hover {
            background-color: #45a049;
        }
    </style>


</head>

<body>
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr class="header">
                <td colspan="2">
                    <img src="../Assests/Files/UserDocs/<?php echo htmlspecialchars($data['user_photo']); ?>" width="100" height="100" alt="User Photo">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo htmlspecialchars($data['user_name']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo htmlspecialchars($data['user_email']); ?></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><?php echo htmlspecialchars($data['user_contact']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo htmlspecialchars($data['user_address']); ?></td>
            </tr>
            <tr class="edit-profile">
                <td colspan="2">
                    <a href="EditProfile.php">EDIT PROFILE</a>
                    <a href="ChangePassword.php">CHANGE PASSWORD</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include('Footer.php')
?>