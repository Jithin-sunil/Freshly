<?php
include('../Assests/Connection/Connection.php');
// session_start();
include('Header.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::MyBooking</title>
</head>

<body>
<a href="Homepage.php">Home</a>
<table width="666" height="161" border="1">
<tr>
		
        <td width="33">Product Name</td>
		<td width="55">Price</td>
        <td width="55">Quatity</td>
        <td width="44">Booking Date</td>
        <td width="44">Status</td>
        
        </tr>
        <tr>
		 <?php
		$selqurey="select * from tbl_cart r  inner join tbl_products c on r.product_id=c.product_id inner join tbl_booking o on r.booking_id=o.booking_id where user_id='".$_SESSION['uid']."' " ;
		 $result=$con->query($selqurey);
        $i=0;
        while($data=$result->fetch_assoc())
		{
            $i++;
            ?>
            <tr>
       
            <td><?php echo $data["product_name"]?></td>
            <td><?php echo $data["product_price"]?></td>
            <td><?php echo $data["cart_quantity"]?></td>
             <td><?php echo $data["booking_date"]?></td>
           
             <td><?php
			 if($data['booking_status']=='1')
			 {
				 echo 'Payment Pending';
				 
			 }
			  else if($data['booking_status']=='2')
			 {
				 echo 'Payed';
				 
			 }
			   else if($data['booking_status']=='3')
			 {
				 echo 'Packed';
			 }
			    else if($data['booking_status']=='4')
			 {
				 echo 'Shipped';
			 }
			   else if($data['booking_status']=='5')
			 {
				 echo 'Deilvered';
				 

			 }
			  else
			 {
				 echo 'Completed';
				 ?>
				 <a href="Rating.php?productid=<?php echo $data["product_id"]?>">RATE</a>
				 <?php
			 }
			 ?>
			</td>
            </tr>
            <?php
            } 
            ?> 
            
            
            </table>
		
</body>
</html>
<?php
include('Footer.php')
?>