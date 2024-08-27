<?php
include('../Assests/Connection/Connection.php');
// session_start();
include('Header.php');

if(isset($_POST["submit"]))
{
		$title=$_POST["txttitle"];
		$content=$_POST["txtcontent"];
		
		
	$insQry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,user_id) values('$title','$content',curdate(),'".$_SESSION['uid']."')";
	if($con -> query($insQry))
	{
		echo "inserted";
	}
}

if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_complaint where complaint_id='".$_GET["delID"]."'";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:Complaint.php");
	}
}
		?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::Complaint</title>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .table-container {
            width: 80%;
            margin: 0 auto;
            overflow-x: auto;
        }
        .delete-link {
            color: red;
            text-decoration: none;
        }
        .delete-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- <a href="HomePage.php">Home</a> -->
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="txttitle" id="txttitle" /></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><input type="text" name="txtcontent" id="txtcontent" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Reply</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selcomplaint = "SELECT * FROM tbl_complaint WHERE user_id = '".$_SESSION['uid']."'";
                $result = $con->query($selcomplaint);
                while($data = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($data["complaint_title"]); ?></td>
                    <td><?php echo htmlspecialchars($data["complaint_content"]); ?></td>
                    <td><?php echo htmlspecialchars($data["complaint_date"]); ?></td>
                    <td><?php echo htmlspecialchars($data["complaint_replay"]); ?></td>
                    <td><a class="delete-link" href="Complaint.php?delID=<?php echo $data["complaint_id"]; ?>">DELETE</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

</html>
<?php
include('Footer.php')
?>