<?php
include('../Assests/Connection/Connection.php');
include('Header.php');
// session_start();
if(isset($_POST["btnsave"]))
{
		$category=$_POST["selcategory"];
		$name=$_POST["txtname"];
		$price=$_POST["txtprice"];
		$details=$_POST["txtdetails"];
		$quantity=$_POST["txtquantity"];
		$farmer=$_SESSION["fid"];		
		$image = $_FILES["image"]["name"];
	$temp=$_FILES["image"]["tmp_name"];
	move_uploaded_file($temp,'../Assests/Files/ProductsDocs/'.$image);
	
	
	$insQry="insert into tbl_products(product_name,product_price,product_details,product_quantity,Product_photo,farmer_id,category_id) values('$name','$price','$details','$quantity','$image','$farmer','$category')";
	
			if($con -> query($insQry))
	{
		echo "inserted";
	}
}

if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_products where product_id='".$_GET["delID"]."'";
	if($con -> query($delQry))
	{
		echo"Deleted";
		header("location:Products.php");
	}
}
	
?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Freshly::Product</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        input[type="text"], select, input[type="file"] {
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
            margin: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        a {
            color: #f44336;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .stock-out {
            color: red;
        }

        .stock-left {
            color: #F96;
            font-size: 15px;
        }

        img {
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <form action="Products.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table>
            <tr>
                <td>Category</td>
                <td>
                    <select name="selcategory" id="selcategory">
                        <option value="--select--">--select--</option>
                        <?php
                        $selquery = "select * from tbl_category";
                        $result = $con->query($selquery);
                        while ($data = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo htmlspecialchars($data["category_id"]); ?>">
                            <?php echo htmlspecialchars($data["category_name"]); ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtname" id="txtname" /></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="txtprice" id="txtprice" /></td>
            </tr>
            <tr>
                <td>Details</td>
                <td><input type="text" name="txtdetails" id="txtdetails" /></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="txtquantity" id="txtquantity" /></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image" id="image" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnsave" id="btnsave" value="Save" />
                    <input type="submit" name="btncancel" id="btncancel" value="Cancel" />
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <th>Sl No</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price per kg</th>
                <th>Details</th>
                <th>Quantity kg</th>
                <th>Current Stock</th>
                <th>Image</th>
                <th colspan="2" align="center">Action</th>
            </tr>
            <?php
            $selquery = "select * from tbl_products u inner join tbl_category d on u.category_id=d.category_id";
            $result = $con->query($selquery);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
                $i++;
                $stockQuery = "select sum(product_quantity) as stock from tbl_products where product_id = '" . $data["product_id"] . "'";
                $result2 = $con->query($stockQuery);
                $row2 = $result2->fetch_assoc();

                $cartStockQuery = "select sum(cart_quantity) as stock from tbl_cart where product_id = '" . $data["product_id"] . "'";
                $result2a = $con->query($cartStockQuery);
                $row2a = $result2a->fetch_assoc();

                $stock = $row2["stock"] - $row2a["stock"];
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo htmlspecialchars($data["category_name"]); ?></td>
                <td><?php echo htmlspecialchars($data["product_name"]); ?></td>
                <td><?php echo htmlspecialchars($data["product_price"]); ?></td>
                <td><?php echo htmlspecialchars($data["product_details"]); ?></td>
                <td><?php echo htmlspecialchars($data["product_quantity"]); ?></td>
                <td>
                    <?php
                    if ($stock > 0) {
                    ?>
                    <p class="stock-left">Qty <?php echo $stock; ?>-Left</p>
                    <?php
                    } else {
                    ?>
                    <p class="stock-out">Out Of Stock</p>
                    <?php
                    }
                    ?>
                </td>
                <td><img src="../Assests/Files/ProductDocs/<?php echo htmlspecialchars($data["product_photo"]); ?>" width="50" height="50" /></td>
                <td><a href="Products.php?delID=<?php echo htmlspecialchars($data["product_id"]); ?>">DELETE</a></td>
                <td><a href="AddStock.php?UpdateID=<?php echo htmlspecialchars($data["product_id"]); ?>">AddStock</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>

</html>