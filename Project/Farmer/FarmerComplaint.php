<?php
include('../Assests/Connection/Connection.php');
include('Header.php');
// session_start();
if(isset($_POST["submit"]))
{
		$title=$_POST["title"];
		$content=$_POST["content"];
		
		
	$insQry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,farmer_id) values('$title','$content',curdate(),'".$_SESSION['fid']."')";
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
		header("location:FarmerComplaint.php");
	}
}
		?>

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::FarmerComplaint</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        a {
            color: #f44336;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
<form id="form1" name="form1" method="post" action="">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><input type="text" name="content" id="content" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Replay</th>
            <th>Action</th>
        </tr>
        <?php
        $selfcomplaint = "select * from tbl_complaint where farmer_id='" . $_SESSION['fid'] . "'";
        $result = $con->query($selfcomplaint);
        $i = 0;
        while ($data = $result->fetch_assoc()) {
            $i++;
        ?>
        <tr>
            <td><?php echo htmlspecialchars($data["complaint_title"]); ?></td>
            <td><?php echo htmlspecialchars($data["complaint_content"]); ?></td>
            <td><?php echo htmlspecialchars($data["complaint_date"]); ?></td>
            <td><?php echo htmlspecialchars($data["complaint_replay"]); ?></td>
            <td><a href="Complaint.php?delID=<?php echo htmlspecialchars($data["complaint_id"]); ?>">DELETE</a></td>
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
?>