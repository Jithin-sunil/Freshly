<?php
include('../Assests/Connection/Connection.php');
include('Header.php');
if(isset($_POST["btnADD"]))
{
	$quantity=$_POST["txtquantity"];
	

		$update="update tbl_products set product_quantity='$quantity' where Product_id='".$_GET["UpdateID"]."'";
		
		$con->query($update)
		

?>
	<script>
		alert("update")
		window.location="Products.php";
		</script>				
  <?php
}
?>


<?php
if(isset($_POST["btnchange"]))
{
	$price=$_POST["txtprice"];
	

		$update="update tbl_products set product_price='$price' where product_id='".$_GET["UpdateID"]."'";
		
		$con->query($update)
		

?>
	<script>
		alert("update")
		window.location="Products.php";
		</script>				
  <?php
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::AddStock</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-size: 16px;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
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
            padding: 12px;
            text-align: left;
        }

        td {
            background-color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
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
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <a href="products.php">Products</a>
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="txtquantity" id="txtquantity" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btnADD" id="btnADD" value="ADD"/></td>
            </tr>
        </table>

        <table>
            <tr>
                <td>Price</td>
                <td><input type="text" name="txtprice" id="txtprice" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btnchange" id="btnchange" value="ADD"/></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include('Footer.php');
?>