
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::HomePage</title>
</head>
<body>
<table width="239" height="251" border="1">
  <tr>
   <td>Welcome</td>
   <tr>
    <td><a href="Changepassword.php">Changepassword</a></td>
  </tr>
  <tr>
  <td><a href="EditProfile.php">EditProfile</a></td>
  </tr>
  <tr>
    <td><a href="MyProfile.php">MyProfile</a></td>
  </tr>
  <tr>
    <td><a href="ViewProduct.php">ViewProduct</a></td>
  </tr>
  <tr>
    <td><a href="MyBooking.php">MyBooking</a></td>
  </tr>
   <tr>
    <td><a href="Complaint.php">Complaint</a></td>
  </tr>
  <tr>
  <td><a href="MyCart.php">MyCart</a></td>
  </tr>
   <tr>
  <td><a href="Payment.php">Payment</a></td>
  </tr>
</table>
</body>
</html> -->

<?php
include('SessionValidation.php');
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Freshly Template">
    <meta name="keywords" content="Freshly, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freshly| Farmer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/Farmer/css/style.css" type="text/css">
</head>

<body>
   
    
    <!-- Header Section Begin -->
<!-- <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="HomePage.php"><img src="../Assests/Templates/Farmer/img/Freshly.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                    <ul>
                            <li class="active"><a href="HomePage.php">Home</a></li>
                            <li><a href="MyProfile.php">MyProfile</a></li>
                            <li><a href="ViewBooking.php">ViewBooking</a>
                              <!-- <ul class="header__menu__dropdown">
                                   <li><a href="AddStock.php">AddStock</a></li>
                                    <li><a href="ViewBooking.php">ViewBooking</a></li>  
                                     <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li> 
                                </ul> -->
                            </li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="FarmerComplaint.php">Complaint</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div> -->
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Header Section End -->
     
