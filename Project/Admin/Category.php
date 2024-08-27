<?php
include('../Assests/Connection/Connection.php');
include('Header.php');
if(isset($_POST["btnsave"]))
{
	$category=$_POST["txtcategory"];
	$insQry="insert into tbl_category(category_name) values('$category')";
	if($con -> query($insQry))
{
		echo"inserted successfully";
	}
}
if(isset($_GET["delID"]))
{
	$categoryId=$_GET["delID"];
	$delQry="delete from tbl_category where category_id=$categoryId";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:Category.php");
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::Category.php</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form id="form1" name="form1" method="post" action="">
  <table width="267" height="107" border="1">
    <tr>
      <td width="80">Category</td>
      <td width="172"><label for="txtcategory"></label>
      <input type="text" name="txtcategory" id="txtcategory" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsave" id="btnsave" value="save" />
      <input type="submit" name="btncancel" id="btncancel" value="cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$selquery="select * from tbl_category";
$result=$con->query ($selquery);
$i=0;
while($data=$result->fetch_assoc())
{
	$i++;
?>
<table width="267" height="107" border="1">
		<tr>
				<td><?php echo $i?></td>
				<td><?php echo $data["category_name"] ?></td>
                <td><a href="Category.php?delID=<?php echo $data["category_id"]?>">DELETE</a></td>
		</tr>
    </table>
<?php
}
?>