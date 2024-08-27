<?php 
include('../Assests/Connection/Connection.php');
session_start();
include('Header.php');


echo $selproducts=" select * from tbl_products p inner join tbl_category c on p.category_id=c.category_id inner join tbl_farmers f on  p.farmer_id=f.farmer_id inner join tbl_place a on f.place_id=a.place_id inner join tbl_district d on a.district_id = d.district_id ";
$res=$con->query($selproducts);
while($data=$res->fetch_assoc())


{





?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Freshly::ViewProduct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .custom-alert-box {
        z-index: 1;
        width: 20%;
        height: 10%;
        position: fixed;
        bottom: 0;
        right: 0;
        left: auto;
    }

    .success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
        display: none;
    }

    .failure {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        display: none;
    }

    .warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
        display: none;
    }
</style>

<body>
    <div class="custom-alert-box">
        <div class="alert-box success">Successful Added to Cart !!!</div>
        <div class="alert-box failure">Failed to Add Cart !!!</div>
        <div class="alert-box warning">Already Added to Cart !!!</div>
    </div>
    <form id="form1" name="form1" method="post" action="">
        <table width="373" height="450" border="1">
            <tr>
                <td height="94" colspan="2" align="center"> <img src="../Assests/Files/ProductsDocs/<?php echo $data["
                        product_photo"]?> " width="100" height="40"</td>
            </tr>
            <tr>
                <td width="98">Product Name</td>
                <td>
                    <?php echo $data["product_name"] ?>
                </td>
            </tr>
            <tr>
                <td>Details</td>
                <td>
                    <?php echo $data["product_details"] ?>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <?php echo $data["product_price"] ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Farmer Name</td>
                <td>
                    <?php echo $data["farmer_name"] ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>District Name</td>
                <td>
                    <?php echo $data["district_name"] ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Place</td>
                <td>
                    <?php echo $data["place_name"] ?>
                </td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <?php echo $data["category_name"] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
										
											
											$average_rating = 0;
											$total_review = 0;
											$five_star_review = 0;
											$four_star_review = 0;
											$three_star_review = 0;
											$two_star_review = 0;
											$one_star_review = 0;
											$total_user_rating = 0;
											$review_content = array();
										
											$query = "SELECT * FROM tbl_rating where product_id = '".$data["product_id"]."' ORDER BY rating_id DESC";
										
											$result = $con->query($query);
										
											while($row = $result->fetch_assoc())
											{
												
										
												if($row["rating_value"] == '5')
												{
													$five_star_review++;
												}
										
												if($row["rating_value"] == '4')
												{
													$four_star_review++;
												}
										
												if($row["rating_value"] == '3')
												{
													$three_star_review++;
												}
										
												if($row["rating_value"] == '2')
												{
													$two_star_review++;
												}
										
												if($row["rating_value"] == '1')
												{
													$one_star_review++;
												}
										
												$total_review++;
										
												$total_user_rating = $total_user_rating + $row["rating_value"];
										
											}
											
											
											if($total_review==0 || $total_user_rating==0 )
											{
												$average_rating = 0 ; 			
											}
											else
											{
												$average_rating = $total_user_rating / $total_review;
											}
											
											?>
                    <p align="center" style="color:#F96;font-size:20px">
                        <?php
										   if($average_rating==5 || $average_rating==4.5)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <?php
										   }
										   if($average_rating==4 || $average_rating==3.5)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <?php
										   }
										   if($average_rating==3 || $average_rating==2.5)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <?php
										   }
										   if($average_rating==2 || $average_rating==1.5)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <?php
										   }
										   if($average_rating==1)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <?php
										   }
										   if($average_rating==0)
										   {
											   ?>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                        <?php
										   }
										   ?>

                    </p>
                    <?php
										
											$output = array(
												'average_rating'	=>	number_format($average_rating, 1),
												'total_review'		=>	$total_review,
												'five_star_review'	=>	$five_star_review,
												'four_star_review'	=>	$four_star_review,
												'three_star_review'	=>	$three_star_review,
												'two_star_review'	=>	$two_star_review,
												'one_star_review'	=>	$one_star_review,
												'review_data'		=>	$review_content
											);
										
										
											?>
                </td>
            </tr>

            <tr>
                <td><button type="button" onclick="addCart(<?php echo $data["product_id"]?>)">Add Cart</button></td>
            </tr>
            <?php
}
?>
        </table>
</body>
<script src="../Assests/JQ/jQuery.js"></script>

<script>
    function addCart(id) {
        $.ajax({
            url: "../Assests/Ajax/AjaxAddCart.php?id=" + id,
            success: function (response) {
                if (response.trim() === "Added to Cart") {
                    $("div.success").fadeIn(300).delay(1500).fadeOut(400);
                }
                else if (response.trim() === "Already Added to Cart") {
                    $("div.warning").fadeIn(300).delay(1500).fadeOut(400);
                }
                else {
                    $("div.failure").fadeIn(300).delay(1500).fadeOut(400);
                }
            }
        });
    }

</script>

</html>
<?php
include('Footer.php')
?>