<?php
include('../Assests/Connection/Connection.php');
session_start();
ob_start();
include('Header.php');
if(isset($_POST["submit"]))
{
		$replay=$_POST["replay"];

	$update="update tbl_complaint set complaint_replay='$replay' where complaint_id=complaint_id";
	
		$con->query($update)
?>
<?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="275" height="230" border="1">
    <tr>
      <td>Replay</td>
      <td><label for="replay"></label>
      <input type="text" name="replay" id="replay" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include('Footer.php');
ob_flush();
?>
