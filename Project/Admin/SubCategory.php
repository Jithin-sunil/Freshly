<?php


include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');



if(isset($_POST["btnsave"]))
{
	$insQry="insert into tbl_subcategory(subcategory_name,category_id) values('".$_POST["txtsubcategory"]."','".$_POST["selcategory"]."')";
		if($con -> query($insQry))
	{
		echo"inserted";
	}
}



if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_subcategory where subcategory_id='".$_GET["delID"]."'";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:SubCategory.php");
	}
}



?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
            max-width: 400px; /* Set max width for better alignment */
            border-collapse: collapse;
            margin: 20px 0; /* Space between tables */
            background-color: white;
            border: 1px solid #4caf50; /* Green border */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #4caf50; /* Green borders */
        }

        th {
            background-color: #4caf50; /* Green for table headers */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e8f5e9; /* Light green for alternating rows */
        }

        tr:hover {
            background-color: #dcedc8; /* Light green on hover */
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 8px;
            border: 1px solid #4caf50;
            border-radius: 4px;
            margin: 10px 0;
        }

        input[type="submit"] {
            background-color: #4caf50; /* Green background */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        input[type="submit"]:hover {
            background-color: #388e3c; /* Darker green on hover */
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto; /* Center the form */
            padding: 20px;
            border-radius: 8px;
            background-color: #fff; /* White background for the form */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1b5e20;
        }
    </style>
<body>

<a href="HomePage.php">Home</a>
<h2>Subcategory Management</h2>

<div class="form-container">
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Category</td>
                <td>
                    <label for="selcategory"></label>
                    <select name="selcategory" id="selcategory">
                        <option value="--select--">--select--</option>
                        <?php
                        $selquery = "SELECT * FROM tbl_category";
                        $result = $con->query($selquery);
                        while ($data = $result->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $data["category_id"] ?>"><?php echo $data["category_name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>SubCategory</td>
                <td>
                    <label for="txtsubcategory"></label>
                    <input type="text" name="txtsubcategory" id="txtsubcategory" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnsave" id="btnsave" value="Save" />
                    <input type="submit" name="btncancel" id="btncancel" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>
</div>

<table>
    <tr>
        <th>SLNO</th>
        <th>SubCategory</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    <?php
    $selquery = "SELECT * FROM tbl_subcategory s INNER JOIN tbl_category c ON s.category_id = c.category_id";
    $result = $con->query($selquery);
    $i = 0;
    while ($data = $result->fetch_assoc()) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $data["subcategory_name"] ?></td>
            <td><?php echo $data["category_name"] ?></td>
            <td><a href="SubCategory.php?delID=<?php echo $data["subcategory_id"] ?>">DELETE</a></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>



<?php
include('Footer.php');
ob_flush();
?>



