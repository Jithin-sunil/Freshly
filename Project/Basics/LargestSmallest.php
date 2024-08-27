

<?php
$largest="";
$smallest="";
if(isset($_POST['find'])!=null)
{
	$number1=$_POST['txtnumber1'];
	$number2=$_POST['txtnumber2'];
	$number3=$_POST['txtnumber3'];
	if($number1>$number2)
	{
		$largest=$number1;
	}
	else
	{
		$largest=$number2;
	}
	if($largest>$number3)
	{
		$largest=$largest;
	}
	else
	{
		$largest=$number3;
	}
	if($number1<$number2)
	{
		$smallest=$number1;
	}
	else
	{
		$smallest=$number2;
	}
	if($smallest<$number3)
	{
		$smallest=$smallest;
	}
	else 
	{
		$smallest=$number3;
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
<form id="form1" name="form1" method="post" action="">
  <table width="372" height="244" border="1">
    <tr>
      <td width="122">Number1</td>
      <td width="162"><label for="txtnumber1"></label>
      <input type="text" name="txtnumber1" id="txtnumber1" /></td>
    </tr>
    <tr>
      <td>Number2</td>
      <td><label for="txtnumber2"></label>
      <input type="text" name="txtnumber2" id="txtnumber2" /></td>
    </tr>
    <tr>
      <td>Number3</td>
      <td><label for="txtnumber3"></label>
      <input type="text" name="txtnumber3" id="txtnumber3" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="find" id="find" value="find" /></td>
    </tr>
    <tr>
      <td>Largest</td>
      <td> <?php echo $largest ?> </td>
    </tr>
    <tr>
      <td height="26">Smallest</td>
      <td> <?php echo $smallest ?> </td>
    </tr>
  </table>
</form>
</body>
</html>