<?php 
include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::ViewComplaint</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form id="form" name="form" method="post" action="">

<table width="449" height="91" border="1">
  <tr>
    <td>User Name</td>
    <td>Title</td>
    <td>Content</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
  <?php

$selcomplaint=" select * from tbl_complaint p inner join tbl_newuser u on p.user_id=u.user_id";
$row=$con->query($selcomplaint);
while($data=$row->fetch_assoc())
{
?>

  <tr>
     <td><?php echo $data["user_name"] ?></td>
     <td><?php echo $data["complaint_title"] ?></td>
     <td><?php echo $data["complaint_content"] ?></td>
     <td><?php echo $data["complaint_date"] ?></td>
     <td colspan="2" align="center">
      <?php
      if($data['complaint_status']==0)
      {
        ?>
        <a href="Replay.php">REPLAY</a>
        <?php
      }
      else{
        echo "Replyed";
      }
      ?></td>
  </tr>
    <?php
}
?>
  </table>

<br /><br />


<table width="472" height="71" border="1">
  <tr>
    <td>Farmer Name</td>
    <td>Title</td>
    <td>Content</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
  <?php
$selcomplaint=" select * from tbl_complaint p inner join tbl_farmers f on p.farmer_id=f.farmer_id";
$row=$con->query($selcomplaint);

while($data=$row->fetch_assoc())
{
?><strong></strong>
   <tr>
     <td><?php echo $data["farmer_name"] ?></td>
     <td><?php echo $data["complaint_title"] ?></td>
     <td><?php echo $data["complaint_content"] ?></td>
     <td><?php echo $data["complaint_date"] ?></td>
     <td colspan="2" align="center"><a href="Replay.php">REPLAY</a></td>
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
ob_flush();
?>
