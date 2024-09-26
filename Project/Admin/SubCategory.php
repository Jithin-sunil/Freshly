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
</head>

<body>
<a href="HomePage.php">Home</a>
<form id="form1" name="form1" method="post" action="">
  <table width="295" height="73" border="1">
    <tr>
      <td width="90">Category</td>
      <td width="189"><label for="selcategory"></label>
        <select name="selcategory" id="selcategory">
       <option value="--select--">--select---</option>
                                
                                <?php
											$selquery="select * from tbl_category";
											$result=$con->query ($selquery);
											while($data=$result->fetch_assoc())
												{
								?>
                                <option value="<?php echo $data["category_id"]?>"><?php echo $data["category_name"] ?></option>
                        		<?php
												}
								?>
      </select></td>
    </tr>
    <tr>
      <td>SubCategory</td>
      <td><label for="txtsubcategory"></label>
      <input type="text" name="txtsubcategory" id="txtsubcategory" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="btnsave" id="btnsave" value="save" />
      <input type="submit" name="btncancel" id="btncancel" value="cancel" /></td>
    </tr>
  </table>
</form>
<table  width="300" height="164" border="1">
			<tr>
            		<td>SLNO</td>
					<td>SubCategory</td>
					<td>Category</td>
                    <td>Action</td>
			</tr>
<?php
$selquery="select * from tbl_subcategory s inner join tbl_category c on s.category_id=c.category_id";
$result=$con->query ($selquery);
$i=0;
while($data=$result->fetch_assoc())
{
	$i++;
?>
	<tr>
				<td><?php echo $i?></td>
				<td><?php echo $data["subcategory_name"] ?></td>
				<td><?php echo $data["category_name"] ?></td>
				
                <td><a href="SubCategory.php?delID=<?php echo $data["subcategory_id"]?>">DELETE</a></td>
	</tr>
<?php
}
?>

</body>
</html>



<?php
include('Footer.php');
ob_flush();
?>



