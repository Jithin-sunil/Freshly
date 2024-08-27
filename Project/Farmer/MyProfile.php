<?php 
include('../Assests/Connection/Connection.php');
include('Header.php');


$selfarmer = "SELECT * FROM tbl_farmers WHERE farmer_id='" . $_SESSION['fid'] . "'";
$row = $con->query($selfarmer);
$data = $row->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshly::MY Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Ensure Header is styled and fixed at the top */
        header {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Container for main content */
        .content {
            margin-top: 60px; /* Adjust based on header height */
            padding: 20px;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            max-width: 600px;
            width: 100%;
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
            border: 3px solid #4CAF50;
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
            transition: background-color 0.3s ease;
        }

        .edit-profile a:hover {
            background-color: #45a049;
        }

        footer {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
 

    <div class="content">
        <form id="form1" name="form1" method="post" action="">
            <table>
                <tr class="header">
                    <td colspan="2">
                        <img src="../Assests/Files/FarmerDocs/<?php echo htmlspecialchars($data['farmer_photo']); ?>" width="100" height="100" alt="Profile Photo">
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo htmlspecialchars($data['farmer_name']); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo htmlspecialchars($data['farmer_email']); ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?php echo htmlspecialchars($data['farmer_contact']); ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo htmlspecialchars($data['farmer_address']); ?></td>
                </tr>
                <tr class="edit-profile">
                    <td colspan="2">
                        <a href="EditProfile.php">EDIT PROFILE</a>
                        <a href="ChangePassword.php">CHANGE PASSWORD</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    
</body>
</html>

<?php
include('Footer.php'); // Ensure Footer.php is styled properly
?>
