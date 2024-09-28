
<?php


include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');



if(isset($_POST["btnregister"]))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$password=$_POST["txtpassword"];
	$insQry="insert into tbl_admin(admin_name,admin_email,admin_password) values('".$_POST["txtname"]."','$email','$password')";
	if($con -> query($insQry))
	{
		echo"inserted";
	}
}



if(isset($_GET["delID"]))
{
	$adminID=$_GET["delID"];
	$delQry="delete from tbl_admin where admin_id=$adminID";
	if($con -> query($delQry))
	{
		echo"Deleted";		header("location:AdminRegistration.php");
	}
}



?>>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::AdminRegistration</title>
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

        form {
            background-color: white; /* White background for the form */
            padding: 20px;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 300px; /* Fixed width for the form */
            margin: auto; /* Centering the form */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%; /* Full-width input fields */
            padding: 10px;
            border: 1px solid #4caf50; /* Green border */
            border-radius: 4px; /* Rounded corners for inputs */
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4caf50; /* Green background */
            color: white; /* White text */
            border: none; /* Remove border */
            padding: 10px 15px; /* Padding for buttons */
            border-radius: 4px; /* Rounded corners for buttons */
            cursor: pointer; /* Pointer cursor on hover */
            margin: 5px; /* Space between buttons */
            transition: background-color 0.3s; /* Smooth transition */
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #388e3c; /* Darker green on hover */
        }

        input::placeholder {
            color: #999; /* Placeholder color */
        }
       
        table {
            width: 100%; /* Full-width table */
            border-collapse: collapse; /* Collapse borders */
            margin-top: 20px; /* Space above the table */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        th, td {
            border: 1px solid #4caf50; /* Green border for table cells */
            padding: 12px; /* Padding inside cells */
            text-align: left; /* Left align text */
            color:black
        }

        th {
            background-color: #4caf50; /* Green header background */
            color: white; /* White text for header */
        }

        tr:nth-child(even) {
            background-color: #e8f5e9; /* Light green for even rows */
        }

        tr:hover {
            background-color: #c8e6c9; /* Slightly darker green on hover */
        }

        a {
            color: #d32f2f; /* Red color for delete links */
            text-decoration: none; /* No underline */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        h2 {
            text-align: center; /* Center align the heading */
            color: #1b5e20; /* Dark green for the heading */
        }
    </style>
</head>

<body>

<a href="HomePage.php">Home</a>
<form name="form1" method="post" action="">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="txtname" id="txtname" required placeholder="Enter Name" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="txtemail" id="txtemail" placeholder="Enter Email" required /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="txtpassword" id="txtpassword" required placeholder="Enter Password" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnregister" id="btnregister" value="Register">
                <input type="reset" name="btncancel" id="btncancel" value="Cancel">
            </td>
        </tr>
    </table>
</form>

</body>
</html>



<table width="300" height="164">
    <tr>
        <th>SLNO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php
    $selquery="select * from tbl_admin";
    $result=$con->query($selquery);
    $i=0;
    while($data=$result->fetch_assoc())
    {
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo htmlspecialchars($data["admin_name"]) ?></td>
        <td><?php echo htmlspecialchars($data["admin_email"]) ?></td>
        <td><?php echo htmlspecialchars($data["admin_password"]) ?></td>
        <td><a href="AdminRegistration.php?delID=<?php echo $data["admin_id"] ?>">DELETE</a></td>
    </tr>
    <?php
    }
    ?>
</table>

<?php 
include('footer.php');
ob_flush();
?>