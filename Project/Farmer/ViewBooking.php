
<?php
include('../Assests/Connection/Connection.php');
include('Header.php');
// session_start();
if(isset($_GET["id"]))
{
	$booking_id=$_GET["id"];
	$acQry="update tbl_booking set booking_status='3'  where booking_id=$booking_id";
	if($con -> query($acQry))
	{
		?>
        <script>
            alert('Packed');
            window.location="ViewBooking.php";
        </script>
        <?php
	}
}
if(isset($_GET["did"]))
{
	$booking_id=$_GET["did"];
	$acQry="update tbl_booking set booking_status='4'  where booking_id=$booking_id";
	if($con -> query($acQry))
	{
		?>
        <script>
            alert('shiped');
            window.location="ViewBooking.php";
        </script>
        <?php
	}
}
if(isset($_GET["eid"]))
{
	$booking_id=$_GET["eid"];
	$acQry="update tbl_booking set booking_status='5'  where booking_id=$booking_id";
	if($con -> query($acQry))
	{
		?>
        <script>
            alert('delivered');
            window.location="ViewBooking.php";
        </script>
        <?php
	}
}
if(isset($_GET["sid"]))
{
	$booking_id=$_GET["sid"];
	$acQry="update tbl_booking set booking_status='6'  where booking_id=$booking_id";
	if($con -> query($acQry))
	{
		?>
        <script>
            alert('Order Completed');
            window.location="ViewBooking.php";
        </script>
        <?php
	}
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::view booking.php</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        form {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Optional: Style for the header if needed */
        header {
            text-align: center;
            padding: 10px 0;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
<header>
    <h1>Order List</h1>
</header>

<form id="form1" name="form1" method="post" action="">
  <table>
    <thead>
      <tr>
        <th>User Name</th>
        <th>Contact</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $selqurey = "SELECT * FROM tbl_cart r
          INNER JOIN tbl_products c ON r.product_id = c.product_id
          INNER JOIN tbl_booking o ON r.booking_id = o.booking_id
          INNER JOIN tbl_newuser u ON o.user_id = u.user_id
          WHERE farmer_id = ".$_SESSION['fid'];
            $result=$con->query($selqurey);
          while ($data = $result->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $data["user_name"] ?></td>
                <td><?php echo$data["user_contact"] ?></td>
                <td><?php echo$data["product_name"] ?></td>
                <td><?php echo$data["cart_quantity"]?></td>
                <td> <?php
                if($data['booking_status']==1)
                {
                    echo "Not Payed";
                }
                else if($data['booking_status']==2)
                {
                    echo "Payment Completed";
                    ?>
                    <a href="ViewBooking.php?id=<?php echo $data['booking_id'] ?>">Packed</a>
                    <?php

                }
                else if($data['booking_status']==3)
                {
                    echo "Packed";
                    ?>
                    <a href="ViewBooking.php?did=<?php echo $data['booking_id'] ?>">Shiped</a>
                    <?php

                }
                else if($data['booking_status']==4)
                {
                    echo "Shiped";
                    ?>
                    <a href="ViewBooking.php?eid=<?php echo $data['booking_id'] ?>">delivered</a>
                    <?php

                }
                else if($data['booking_status']==5)
                {
                    echo "Delivered";
                    ?>
                    <a href="ViewBooking.php?sid=<?php echo $data['booking_id'] ?>">completed</a>
                    <?php

                }
                else
                {
                    echo "Order Completed";
                }

                ?></td>
              </tr>
              <?php
          }
     
      
      ?>
    </tbody>
  </table>
</form>
</body>
</html>
<?php
include('Footer.php');
?>
