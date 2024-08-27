<?php
$result="";
if(isset($_POST['btnPlus'])!=null)
{
	$number1=$_POST['txtnumber1'];
	$number2=$_POST['txtnumber2'];
	$sum=$number1+$number2;
	$result=$sum;
}
if(isset($_POST['btnminus'])!=null)
{
	$number1=$_POST['txtnumber1'];
	$number2=$_POST['txtnumber2'];
	$difference=$number1-$number2;
	$result=$difference;
}
if(isset($_POST['btnmultiplication'])!=null)
{
	$number1=$_POST['txtnumber1'];
	$number2=$_POST['txtnumber2'];
	$multiplication=$number1*$number2;
	$result=$multiplication;
}
if(isset($_POST['btndivide'])!=null)
{
	$number1=$_POST['txtnumber1'];
	$number2=$_POST['txtnumber2'];
	$division=$number1/$number2;
	$result=$division;
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
  <table width="356" height="214" border="1">
    <tr>
      <td width="78">Number-1</td>
      <td width="225"><label for="txtnumber1"></label>
      <input type="text" name="txtnumber1" id="txtnumber1" /></td>
    </tr>
    <tr>
      <td height="40">Number-2</td>
      <td><label for="txtnumber2"></label>
      <input type="text" name="txtnumber2" id="txtnumber2" />        <label for="txtNumber-2"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="btnPlus" id="btnPlus" value="+" />
      <input type="submit" name="btnminus" id="btnminus" value="-" />
      <input type="submit" name="btnmultiplication" id="btnmultiplication" value="*" />
      <input type="submit" name="btndivide" id="btndivide" value="/" /></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php echo $result ?></td>
    </tr>
  </table>
</form>
</body>
</html>