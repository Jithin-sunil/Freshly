
<?php
$name="";
$gender="";
$department="";
$total="";
$percentage="";
$grade="";
    if(isset($_POST['submit'])!=null)
	{
		$fname=$_POST['txtfname'];
		$lname=$_POST['txtlname'];
		$fullName= $fname."".$lname;
		$gender=$_POST['gender'];
		if($gender=="Male")
		{
			$name="mr".$fullName;
		}
		else
		{
			$name="ms".$fullName;
		}
		$department=$_POST['seldept'];
		$mark1=$_POST['txtmark1'];
		$mark2=$_POST['txtmark2'];
		$mark3=$_POST['txtmark3'];
		$total=$mark1+$mark2+$mark3;
		$percentage=($total/300)*100;
		if($percentage>=90)
		{
			$grade="A+";
		}
		elseif($percentage>=80)
		{
			$grade="A";
		}
		elseif($percentage>=70)
		{
			$grade="B+";
		}
		elseif($percentage>=60)
		{
			$grade="B";
		}
		elseif($percentage>=50)
		{
			$grade="C+";
		}
		elseif($percentage>=40)
		{
			$grade="C";
		}
		elseif($percentage>=30)
		{
			$grade="D+";
		}
		elseif($percentage>=20)
		{
			$grade="D";
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
  <table width="312" height="298" border="1">
    <tr>
      <td>First Name</td>
      <td><label for="txtFname"></label>
      <input type="text" name="txtfname" id="txtfname" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label for="txtlname"></label>
      <input type="text" name="txtlname" id="txtlname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" id="gender" value="Male" />
        male 
          <input type="radio" name="gender" id="gender" value="Female" />
        <label for="gender2">female</label></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="seldept"></label>
        <select name="seldept" id="seldept">
        <option>--select--</option>
        <option value="ComputerScience">ComputerScience</option>
        <option value="Commerce">commerce</option>
        <option value="Language">Language</option>
      </select></td>
    </tr>
    <tr>
      <td>Mark1</td>
      <td><label for="txtmark1"></label>
      <input type="text" name="txtmark1" id="txtmark1" /></td>
    </tr>
    <tr>
      <td>Mark2</td>
      <td><label for="txtmark2"></label>
      <input type="text" name="txtmark2" id="txtmark2" /></td>
    </tr>
    <tr>
      <td>Mark3</td>
      <td><label for="txtmark3"></label>
      <input type="text" name="txtmark3" id="txtmark3" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="submit" name="cancel" id="cancel" value="cancel" /></td>
    </tr>
  </table>
  <table width="268" height="163" border="1">
    <tr>
      <td width="128">Name</td>
      <td width="128"> <?php echo $name ?> </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td> <?php echo $gender ?> </td>
    </tr>
    <tr>
      <td>Department</td>
      <td> <?php echo $department ?> </td>
    </tr>
    <tr>
      <td>Total</td>
      <td> <?php echo $total ?> </td>
    </tr>
    <tr>
      <td>Percentage</td>
      <td> <?php echo $percentage ?> </td>
    </tr>
    <tr>
      <td>Grade</td>
      <td> <?php echo $grade ?> </td>
    </tr>
  </table>
</form>
</body>
</html>